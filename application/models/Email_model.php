<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email_model extends CI_Model {
  function __construct(){
    parent::__construct();
    $this->load->database();
    $this->load->helper('url');
    $this->load->library('email');
  }

  public function send_email_link($email, $link){
    $config = array(
      'protocol' => 'smtp', 
      'smtp_host' => 'ssl://smtp.gmail.com',
      'smtp_timeout' => 30,
      'smtp_port' => 465,
      'smtp_user' => 'therealbharat85@gmail.com',
      'smtp_pass' => 'vevobaoiryoqxgty', 
      'mailtype' => 'html', 
      'charset' => 'utf-8',
      'newline'   => "\r\n"
    );

    $this->email->initialize($config);
    $this->email->set_newline("\r\n");
    $this->email->set_crlf("\r\n");
    
    $this->email->from("therealbharat85@gmail.com");
    $this->email->to($email);
    $this->email->subject("ABout thesdfjsdkfbksjfhj  sex info");
    $this->email->message($link);
    if($this->email->send()){
      return true;
    }else{
      return false;
    }
  }
}