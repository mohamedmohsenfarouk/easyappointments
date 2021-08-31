<?php

defined('BASEPATH') OR exit('No direct script access allowed');

session_start();

class Register extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  $this->session->keep_flashdata('message');
  if($this->session->userdata('id'))
  {
   redirect('private_area');
  }
  $this->load->library('form_validation');
  $this->load->model('register_model');
 }

 function index()
 {
  $this->load->view('customer/register');
 }

 function validation()
 {
  $this->form_validation->set_rules('user_name', 'Name', 'required|trim');
  $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email|is_unique[ea_codeigniter_register.email]');
  $this->form_validation->set_rules('user_password', 'Password', 'required');
  if($this->form_validation->run())
  {
   $verification_key = md5(rand());
   $encrypted_password = password_hash($this->input->post('user_password'), PASSWORD_BCRYPT);
   $data = array(
    'name'  => $this->input->post('user_name'),
    'email'  => $this->input->post('user_email'),
    'password' => $encrypted_password,
    'verification_key' => $verification_key
   );

   $id = $this->register_model->insert($data);
   if($id > 0)
   {
    $this->session->set_flashdata('message', 'Registeration completed, you can login now');
    redirect('register');
   }
  }
  else
  {
   $this->index();
  }
 }
}

?>