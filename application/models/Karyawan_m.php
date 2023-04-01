<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan_m extends CI_Model {


    public function data_all(){

	
		$query = $this->db->query("SELECT * FROM karyawan")->result();
		
		return $query;

	}

	 public function data_id($id){

	
		$query = $this->db->query("SELECT * FROM karyawan WHERE id = '$id'")->row();
		
		return $query;

	}
}