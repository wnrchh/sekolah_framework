<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}


	public function check_login()
	{
		//$this->load->view('login');

		$username 			= $this->input->post('username');
		$password 		    = $this->input->post('password');


		$this->load->model('login_m','login');

		$result = $this->login->check_login($username , $password);


		if($result == 1)
		{
			$this->session->set_userdata('user_login', $result);
			redirect(base_url().'data');
		}else{
			redirect(base_url().'login');
		}
	}


	public function log_out()

	{
		$this->session->unset_userdata('user_login');
		
		redirect('login');


	}
}
