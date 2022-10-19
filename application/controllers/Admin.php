<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->library('session');
        $this->load->model('Login_Model');  
        $this->load->model('Admin_Model');
        
	}

	
	public function home(){	
		$user_name = $this->session->userdata('username');	
		if($user_name == NULL){
			$this->session->set_flashdata('error', 'You are not currently logged in. Please log in to continue.');
			redirect(base_url());
		}else{
			$this->load->view('adminDashboard');
		}
	}

	public function buttons(){
		$this->load->view('basis');
	}

	public function tables(){
		$this->load->view('tables');
	}

	public function forms(){
		$this->load->view('forms');
	}

	public function found_form(){
		$user_name = $this->session->userdata('username');
		if($user_name == NULL){
			$this->session->set_flashdata('error', 'You are not currently logged in. Please log in to continue.');
			redirect(base_url());
		}else{
			$this->load->view('found_form');
		}
	}

	public function loss_form(){
		$user_name = $this->session->userdata('username');
		if($user_name == NULL){
			$this->session->set_flashdata('error', 'You are not currently logged in. Please log in to continue.');
			redirect(base_url());
		}else{
			$this->load->view('loss_form');
		}
	}

	public function foundItems(){
		$user_name = $this->session->userdata('username');
		if($user_name == NULL){
			$this->session->set_flashdata('error', 'You are not currently logged in. Please log in to continue.');
			redirect(base_url());
		}else{
			$fitem_data["fetch_foundItems"] = $this->Admin_Model->fetch_foundItems();
			$this->load->view('foundItemRecords', $fitem_data);
		}
	}

	public function lostItems(){
		$user_name = $this->session->userdata('username');
		if($user_name == NULL){
			$this->session->set_flashdata('error', 'You are not currently logged in. Please log in to continue.');
			redirect(base_url());
		}else{
			$litem_data["fetch_lostItems"] = $this->Admin_Model->fetch_lostItems();
			$this->load->view('lostItemRecords', $litem_data);
		}
	}

	public function loadAccounts(){
		$this->load->view('accounts');
	}

	public function createAccount(){
		$this->load->view('createAccounts');
	}

	public function retrievedItems(){
		$this->load->view('retrievedRecords');
	}

	public function submitRetrieval(){
		$item = $this->input->post('item');
		$return_date = $this->input->post('return_date');
		$name = $this->input->post('finder_name');
		$item_owner = $this->input->post('item_owner');
		$cyear = $this->input->post('courseandyear');
		$found_location = $this->input->post('location');
		$issue_date = date("Y-m-d");

		/*var_dump($item);
		var_dump($return_date);
		var_dump($name);
		var_dump($item_owner);
		var_dump($cyear);
		var_dump($found_location);
		var_dump($issue_date);*/

		$insert_data = array(
			'finder_name' => $name,
			'course_year_dep' => $cyear,
			'item' => $item,
			'original_owner' => $item_owner,
			'location' => $found_location,
			'date_found' => $return_date,
			'date_issued' => $issue_date
		);

		$this->db->insert('found_items', $insert_data);
		$this->session->set_flashdata('success', 'You have inserted a new record!');
		redirect('adminFoundItems');
	}

	public function submitLoss(){
		$date_reported = $this->input->post('date_reported');
		$owner_lfi = $this->input->post('ownerLFI');
		$phone_number = $this->input->post('phone_number');
		$course_year = $this->input->post('course_year');
		$reported = $this->input->post('reported');
		$lost_time = $this->input->post('lost_time');
		$lost_location = $this->input->post('lost_location');
		$osa_personnel = $this->input->post('osa_personnel');
		$issue_date = date("Y-m-d");

		/*var_dump($date_reported);
		var_dump($owner_lfi);
		var_dump($phone_number);
		
		var_dump($course_year);
		var_dump($reported);
		var_dump($lost_location);
		var_dump($lost_time);
		var_dump($issue_date);*/

		$insert_data = array(
			'reported_name' => $owner_lfi,
			'cellphone_number' => $phone_number,
			'type' => $reported,
			'course_year_dept' => $course_year,
			'loss_location' => $lost_location,
			'loss_time' => $lost_time,
			'date_lost' => $date_reported,
			'date_issued' => $issue_date,
			'attending_personnel' => $osa_personnel
		);

		$this->db->insert('lost_items', $insert_data);
		$this->session->set_flashdata('success', 'You have inserted a new record');
		redirect('adminLostItems');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
