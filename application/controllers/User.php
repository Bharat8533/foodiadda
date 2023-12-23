<?php 
  defined('BASEPATH') OR exit('No direct script access allowed');

  class User extends CI_Controller {
    function __construct(){
      parent::__construct();
      $this->load->database();
      $this->load->model('User_model');
      $this->load->helper('url');
      $this->load->library('email');
      $this->load->library('encryption');
      $this->load->library('session');
      // $this->load->library('helper');
    }

    public function header(){
      $this->load->view("user-site/common/header");
    }

    public function footer(){
      $this->load->view("user-site/common/footer");
    }

    public function home(){
      $this->load->view("user-site/home");
    }
  }
?>