<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

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

	    public function __construct()
    {
    	parent::__construct();
    	$this->session->userdata('user_login') == null ? redirect('login') : '';
    }
	public function index()
	{
		$this->load->model('karyawan_m','karyawan');
		$data['data_karyawan'] = $this->karyawan->data_all();
		$this->load->view('karyawan', $data);
	}
	public function form_karyawan()
	{

		$this->load->view('form_karyawan');
	}

	public function edit($id)
	{
		$this->load->model('karyawan_m','karyawan');
		$data['data_karyawan'] = $this->karyawan->data_id($id);
		$this->load->view('edit_karyawan', $data);
	}

	public function simpan_form_karyawan()
	{




		$file_name						= 'karyawan_'.date('YmdHis').'.jpg';
		$config['upload_path']          = FCPATH.'/assets/images/';
		$config['allowed_types']        = 'gif|jpg|jpeg|png';
		$config['file_name']            = $file_name;
		$config['overwrite']            = true;
		$config['max_size']             = 5024; // 1MB
		$config['max_width']            = 5080;
		$config['max_height']           = 5080;

		$this->load->library('upload', $config);


		if($this->upload->do_upload('foto'))
		{
				echo "sukses";
		}
		else
		{
				echo $this->upload->display_errors();
	}

		$data['nama'] 		    		= $this->input->post('nama');
		$data['no_hp'] 		    		= $this->input->post('no_hp');
		$data['alamat']	    			= $this->input->post('alamat');
		$data['pekerjaan']				= $this->input->post('pekerjaan');
		$data['foto']		    		= $file_name;

		$this->db->insert('karyawan',$data);

		redirect('karyawan');
	}

	public function simpan_edit_karyawan($id)
	{

		$file_name						= 'karyawan_'.date('YmdHis').'.jpg';
		$config['upload_path']          = FCPATH.'/assets/images/';
		$config['allowed_types']        = 'gif|jpg|jpeg|png';
		$config['file_name']            = $file_name;
		$config['overwrite']            = true;
		$config['max_size']             = 5024; // 1MB
		$config['max_width']            = 5080;
		$config['max_height']           = 5080;

		$this->load->library('upload', $config);


		if($this->upload->do_upload('foto'))
		{
				
				$data['foto']		    		= $file_name;
		}
		else
		{
				$this->upload->display_errors();
		
		}

		$data['nama'] 		    		= $this->input->post('nama');
		$data['no_hp'] 		    		= $this->input->post('no_hp');
		$data['alamat']	    			= $this->input->post('alamat');
		$data['pekerjaan']				= $this->input->post('pekerjaan');
		




		$this->db->where('id', $id);
		$this->db->update('karyawan',$data);

		redirect('karyawan');
	}


	public function hapus($id)

	{

		$this->db->where('id', $id);
		$this->db->delete('karyawan');

		redirect('karyawan');

	}
}