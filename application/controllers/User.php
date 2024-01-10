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

    public function index(){
      $this->load->view("user-site/home");
    }

    public function about(){
      $this->load->view('user-site/about');
    }

    public function services(){
      $this->load->view('user-site/services');
    }

    public function contact(){
      $this->load->view('user-site/contact');
    }

    public function test(){
      $this->load->view("user-site/test");
    }

    public function not_found_page(){
      $this->load->view('user-site/not_found_page');
    }
  }
?>