<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Guru_m extends CI_Model {


    public function data_all(){

	
		$query = $this->db->query("SELECT * FROM guru")->result();
		
		return $query;

	}

	public function data_id($id){

	
		$query = $this->db->query("SELECT * FROM guru WHERE id = '$id'")->row();
		
		return $query;

	}
}
