<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_m extends CI_Model {


    public function check_login($username , $password){

	
		$checking = $this->db->query("SELECT * FROM users WHERE username = '$username' AND password = '$password'");

		if($checking->num_rows() > 0)
		{
			$result = 1;
		}else{
			$result = 0;
		}
		
		return $result;

	}
}