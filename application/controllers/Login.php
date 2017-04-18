<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Login extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
  
 }
 
 function index()
 {
    if($this->session->userdata('logged_in'))
   {
    
     //If no session, redirect to login page
     redirect('admin', 'refresh');
   }
   $this->load->helper(array('form'));
   $this->load->view('login');
 }
 function logout()
{
    $this->session->sess_destroy();
    redirect('login');
}
}
 
?>