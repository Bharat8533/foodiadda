<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->database();
    $this->load->model('Admin_model');
    $this->load->helper('url');
    $this->load->library('email');
    $this->load->library('encryption');
    $this->load->library('session');
    $this->load->library('upload');
  }

  public function check_login(){
    if(!$this->session->userdata('logged_in')) {
      redirect('User/sign_up');
    }
  }

  public function sign_up(){
    $this->load->view("Admin/sign_up");
  }

  public function registerUser(){
    $data = $this->Admin_model->registerUser();
    echo json_encode($data);
  }

  public function login(){
    $this->load->view("Admin/login");
  }
  
  public function get_user_login(){
    $data = $this->Admin_model->get_user_login();
    echo json_encode($data);
  }

  public function send_reset_pass_link(){
    $data = $this->Admin_model->send_reset_pass_link();
    echo json_encode($data);
  }

  public function gmail_auth(){
    $this->load->view("Admin/gmail_auth");
  }

  public function forget_pass(){
    $this->load->view("Admin/forget_pass");
  }

  public function sidebar(){
    $this->load->view("Admin/common/sidebar");
  }

  public function navbar(){
    $this->load->view("Admin/common/navbar");
  }

  public function home(){
    $data["all_info"] = $this->Admin_model->get_dashboard_data();
    $this->load->view("Admin/home", $data);
  }

  public function profile(){
    $profile_info['profile_info'] = $this->Admin_model->get_profile_data();
    // print_r($profile_info);
    $this->load->view("Admin/profile", $profile_info);
  }

  public function food_menu(){
    $data["food_menu_table_data"] = $this->Admin_model->get_food_menu_info();
    $data['all_cat'] = $this->Admin_model->get_all_categories();
    // echo "<pre>";
    // print_r($data);
    $this->load->view("Admin/food_menu",$data);
  }

  public function set_category(){
    $data = $this->Admin_model->set_category();
    echo json_encode($data);
  }

  public function set_item(){
    $data = $this->Admin_model->set_item();
    echo json_encode($data);
  }

  public function get_view_item_detail(){
    $data = $this->Admin_model->get_view_item_detail();
    echo json_encode($data);
  }

  public function get_edit_item_detail(){
    $data = $this->Admin_model->get_edit_item_detail();
    echo json_encode($data);
  }
  
  public function update_item(){
    $res = $this->Admin_model->update_item();
    echo json_encode($res);
  }

  public function delete_item(){
    $data = $this->Admin_model->delete_item();
    echo json_encode($data);
  }


  public function testing(){
    $this->load->view('Admin/testing');
  }
}
?>