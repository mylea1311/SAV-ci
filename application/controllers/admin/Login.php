<?php

class Login extends CI_Controller
{

   public function __construct()
   {

      parent::__construct();
      $this->load->helper('url');
      $this->load->library('session');
      //   if ($this->session->userdata('admin'))
      //    redirect('admin/dashboard');
   }


   function index()
   {
      $this->load->helper('url');
      $this->load->view('admin/login');
   }

   function verify()
   {

      //username: admin password : 123456
      $this->load->model('admin');
      $check = $this->admin->validate();
      if ($check) {

         $this->session->set_userdata('admin', '1');
         redirect('admin/dashboard');
      } else {
         redirect('admin');
      }
   }
}
