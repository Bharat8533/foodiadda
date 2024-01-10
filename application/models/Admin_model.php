<?php
  
  class Admin_model extends CI_Model
  {

    public function registerUser(){
      $inputs = $this->input->post();
      [
        "first_name" => $first_name,
        "last_name"  => $last_name,
        "email_id"   => $email_id,
        "mobile"     => $mobile,
        "password"   => $password
      ] = $inputs;

      $email_from_db = $this->db->query("SELECT email_id FROM allusers WHERE email_id = '$email_id'")->row_array();

      if(!empty($email_from_db)){
        return [
          "status" => false,
          "message" => "This email already exist"
        ];
      }else{
        $data = [
          "first_name" => $first_name,
          "last_name"  => $last_name,
          "email_id"   => $email_id,
          "mobile"     => $mobile,
          "password"   => $password,
          "type"       => 'USER',
          "status"     => 'ACTIVE'
        ];

        $this->db->insert("allusers", $data);

        $id = $this->db->insert_id();

        if($id > 0){
          return [
            "status" => true,
            "message"=> "Registration Successfully Done!"
            ];
        }else{
          return [
            "status" => false,
            "message"=> "Something went wrong while registration."
          ];
        }
      }
    }

    public function send_reset_pass_link(){
      $inputs = $this->input->post();

      [
        'email_id' => $email
      ] = $inputs;

      $email_from_db = $this->db->query("SELECT user_id, email_id FROM allusers WHERE email_id = '$email'")->row_array();

      if(!empty($email_from_db)){
        $user_id = $email_from_db["user_id"];
        $expires = time() + 3600;
        $this->encryption->initialize(array('cipher' => 'aes-128','mode' => 'ctr','key' => '12345'));
        $link = base_url("user/forget_pass") . "?token=" . $this->encryption->encrypt("$user_id:$expires");
        // echo $link;
        $this->load->model('Email_model');
        $status = $this->Email_model->send_email_link($email, $link);

        if($status){
          return [
            "status" => true,
            "message"=> "Reset Password Link Sent to your Email Id. Please check and follow the instructions in that email."
          ];
        }else{
          return [
            "status" => false, 
            "error"  => "Error Occured While Sending Email! Please Try Again Later."
          ];
        }
      }else{
        return [
          "status" => false,
          "message" => "This email not exist"
        ];
      }
    }

    public function get_user_login(){
      $inputs = $this->input->post();

      [
        'email_id' => $email,
        'password' => $password
      ] = $inputs;

      $email_from_db = $this->db->query("SELECT email_id FROM allusers WHERE ((email_id = '$email') AND (password = '$password'))")->row_array();

      if(empty($email_from_db)){
        $userdata = [
          'user_id'    => $user_from_db['user_id'],
          'email_id'   => $user_from_db['email_id'],
          'logged_in'  => TRUE
        ];

        $this->session->set_userdata($userdata);
        
        return [
          "status"  => false,
          "message" => "Account not available, Sign up first"
        ];
      }else{
        return [
          "status"  => true,
          "message" => "welcome to Foodibar"
        ];
      }
    }

    public function get_profile_data(){
      $user_id = $this->session->userdata('user_id');
      $user_info = $this->db->query("SELECT * FROM allusers WHERE id = $user_id")->result_array()[0];

      return $user_info;
    }

    public function get_dashboard_data(){
      $items = $this->db->query("SELECT COUNT(item_name) as total_items FROM food_menu")->row_array();
      $categories = $this->db->query("SELECT COUNT(cat_name) as total_cat FROM categories")->row_array();

      $all_data = array(
        "items" => $items,
        "categories" => $categories
      );

      return $all_data;
    }

    public function get_food_menu_info(){
      $result = $this->db->where('status', 'ACTIVE')->get('food_menu')->result_array();
      foreach ($result as &$value) {
        $category_info = $this->db->where('id', $value['category'])->get('categories')->row('cat_name');
        $value['category'] = $category_info;
        };
      return $result;
    }
    
    public function set_category(){
      $inputs = $this->input->post();
      [
      'cat_name' => $category,
      ] = $inputs;

      $image = $_FILES['cat_img']['name'];
      
      $all_categories = $this->db->select("cat_name")->from('categories')->where('cat_name',$category)->get()->row_array();
      if(empty($all_categories)){
        $config = array(
          'file_name' => $image,
          'max_width' => '1920',
          'min_width' => '50',
          'max_size' => '5120',
          'allowed_types' => "png|jpeg|jpg",
          'upload_path' => 'assets/images/category'
        );
  
        $this->upload->initialize($config);
        
        if($this->upload->do_upload('cat_img')){
  
        }else{
          $error = $this->upload->display_errors();
          return [
              'status' => false,
              'error' => $error,
              'message' => 'Failed to add category. ' . $error
          ];
        }
  
        $image = $this->upload->data('file_name');
  
        $data = array(
          'cat_name' => $category,
          'image'    => $image,
          'status'   => 'ACTIVE'
        );
        
        $this->db->insert("categories", $data);
  
        $inserted_id = $this->db->insert_id();
  
        if($inserted_id > 0){
          return [
            "status"  => true,
            "message" => "Category added successfully." 
          ];
        }else{
          return [
            "status"  => false,
            "message" => "Failed to add category. Please try again later."
          ];
        }
      }else{
        return [
          "status" => false,
          "message" => "Sorry, This category already exist. Add new category."
        ];
      }
    }

    public function get_all_categories(){
      $category = $this->db->query("SELECT * FROM categories")->result_array();

      return $category;
    }

    public function set_item(){
      $inputs = $this->input->post();
      $item_image = $_FILES['item_image']['name'];
      
      [
        "cat_id" => $cat_id,
        "item_name" => $item_name,
        "item_details" => $item_details,
        "item_price" => $price,
        "available" => $item_available
      ] = $inputs;

      $all_items = $this->db->select("item_name")->from('food_menu')->where('item_name',$item_name)->get()->row_array();
      if(empty($all_items)){
        $config = array(
          'file_name' => $item_image,
          'max_width' => '1920',
          "min_width" => '50',
          "max_size"  => '5120',
          "allowed_types" => "png|jpg|jpeg",
          "upload_path" => 'assets/images/items'
        );
        
        $this->upload->initialize($config);
        
        if($this->upload->do_upload('item_image')){
  
        }else{
          $error = $this->upload->display_errors();
          return [
              'status'  => false,
              'error'   => $error,
              'message' => 'Failed to add category. ' . $error
          ];
        } 
  
        $image = $this->upload->data('file_name');
  
        $data = array(
          "item_name"     => $item_name,
          "item_details"  => $item_details,
          "category"      => $cat_id,
          "price"         => $price,
          "food_status"   => $item_available,
          "image"         => $image
        );
  
        $this->db->insert("food_menu", $data);
  
        $inserted_id = $this->db->insert_id();
  
        if($inserted_id > 0){
          return [
            'status'  => true,
            'message' => 'Item has been added.'
          ];
        }else{
          return [
            'status'  => false,
            'message' => 'An error occured while adding the item. Please try again later.'
          ];
        }
      }else{
        return [
          "status" => false,
          "message" => "Sorry, This item already exist. Add new item."
        ];
      }
      
    }

    public function get_view_item_detail(){
      $inputs = $this->input->post();
      // $id = $this->session->userdata('user_id');
      [
        'item_id' => $item_id
      ] = $inputs;

      $item_detail = $this->db->query("SELECT * FROM food_menu WHERE id = '$item_id'")->result_array();

      foreach($item_detail as $items){

        $category_info = $this->db->where('id', $items['category'])->get('categories')->row('cat_name');

        $items['category'] = $category_info;
        return $items;
      };
     
    }

    public function get_edit_item_detail(){
      $inputs = $this->input->post();

      [
        'item_id' => $item_id
      ] = $inputs;

      $item_detail = $this->db->query("SELECT * FROM food_menu WHERE id = '$item_id'")->result_array();
      return $item_detail;
    }
    
    public function update_item(){
      $inputs = $this->input->post();

      [
        'item_id' => $item_id,
        "cat_id" => $cat_id,
        "item_name" => $item_name,
        "item_details" => $item_details,
        "item_price" => $price,
        "available" => $available,
      ] = $inputs;

      // print_r($inputs);
      $images = $_FILES['item_image']['name'];

      $config = array(
        'file_name' => $images,
        'max_width' => '1920',
        "min_width" => '50',
        "max_size"  => '5120',
        "allowed_types" => "png|jpg|jpeg",
        "upload_path" => 'assets/images/items'
      );

      $this->upload->initialize($config);

      if($this->upload->do_upload('item_image')){
  
      }
      $image = $this->upload->data('file_name');
      $data = array(
        "item_name"     => $item_name,
        "item_details"  => $item_details,
        "category"      => $cat_id,
        "price"         => $price,
        "food_status"   => $available,
        "image"         => $image
      );

      $this->db->where('id', $item_id);
      $this->db->update("food_menu", $data);
  
      $affected_id = $this->db->affected_rows();

      if($affected_id > 0){
          return [
            'status'  => true,
            'message' => 'Item has been updated.'
          ];
        }else{
        return [
          'status'  => false,
          'message' => 'An error occured while updating the item. Please try again later.'
        ];
      }

      // print_r($inputs);
    }

    public function delete_item(){
      $inputs = $this->input->post();

      [
        'id' => $item_id
      ] = $inputs;

      $this->db->set('status', 'DEACTIVE')->where('status', 'ACTIVE')->where('id', $item_id)->update('food_menu');

      $affected_id = $this->db->affected_rows();

      if($affected_id > 0){
          return [
            'status'  => true,
            'message' => 'Item has been deleted.'
          ];
        }else{
        return [
          'status'  => false,
          'message' => 'An error occured while deleting the item. Please try again later.'
        ];
      }
    }
  }
?>