<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model extends CI_model {

	public function validate($username, $password){
		$hashed_pass = md5($password);
		$this->db->where('user_name', $username);
		$this->db->where('password', $hashed_pass);

		$query = $this->db->get('accounts');
		if ($query->num_rows() > 0){
			foreach ($query->result() as $row){

				
				$sess = array(
					'username' => $row->user_name,
					'password' => $row->password,
					'first_name' => $row->first_name,
					'last_name' => $row->last_name,
					'type' => $row->type,
					'activation' => $row->activation
				);
				
			}
			$this->session->set_userdata($sess);
			if($row->type == 'Admin' && $row->activation == '1'){
				redirect('admin/home');
			}else{
				$this->session->set_flashdata('error', 'This account is inactive!');
				redirect(base_url());
			}
		}else{
			$this->session->set_flashdata('error', 'Invalid username or password!');
			redirect(base_url());
		}

	}
}