<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Checker extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->library('session');
        $this->load->model('Login_Model');  
	}


	
	public function check()
	{
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$hashed_pass = md5($password);
		$this->Login_Model->validate($username, $password);


		//$this->load->view('login');
	}

	public function logout(){
        //$this->session->set_userdata('username', FALSE);
        //$this->session->sess_destroy();
        redirect(base_url());
	}
}
