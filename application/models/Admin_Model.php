<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_model {

	public function fetch_foundItems(){
		$query = $this->db->get('found_items');
		return $query;
	}

	public function fetch_lostItems(){
		$query = $this->db->get('lost_items');
		return $query;
	}
}