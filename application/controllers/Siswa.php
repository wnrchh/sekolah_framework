<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

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
		$this->load->model('siswa_m','siswa');
		$data['data_siswa'] = $this->siswa->data_all();
		$this->load->view('siswa', $data);
	}


  
	public function form_siswa()
	{

		$this->load->view('form_siswa');
	}

		public function edit($id)
	{
		$this->load->model('siswa_m','siswa');
		$data['data_siswa'] = $this->siswa->data_id($id);
		$this->load->view('edit_siswa', $data);
	}

	public function simpan_form_siswa()
	{

		$file_name						= 'siswa_'.date('YmdHis').'.jpg';
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
		$data['jenis_kelamin'] 		    = $this->input->post('jenis_kelamin');
		$data['vegetarian']	    		= $this->input->post('vegetarian');
		$data['nis'] 		   		    = $this->input->post('nis');
		$data['tempat_lahir'] 		    = $this->input->post('tempat_lahir');
		$data['tanggal_lahir'] 		    = $this->input->post('tanggal_lahir');
		$data['alamat'] 		    	= $this->input->post('alamat');
		$data['kelas'] 		   	 		= $this->input->post('kelas');
		$data['foto']		    		= $file_name;

		$this->db->insert('siswa',$data);

		redirect('siswa');
	}


	public function simpan_edit_siswa($id)
	{

		$file_name						= 'siswa_'.date('YmdHis').'.jpg';
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
		$data['jenis_kelamin'] 		    = $this->input->post('jenis_kelamin');
		$data['vegetarian']	    		= $this->input->post('vegetarian');
		$data['nis'] 		   		    = $this->input->post('nis');
		$data['tempat_lahir'] 		    = $this->input->post('tempat_lahir');
		$data['tanggal_lahir'] 		    = $this->input->post('tanggal_lahir');
		$data['alamat'] 		    	= $this->input->post('alamat');
		$data['kelas'] 		   	 		= $this->input->post('kelas');




		$this->db->where('id', $id);
		$this->db->update('siswa',$data);

		redirect('siswa');
	}

	public function hapus($id)

	{

		$this->db->where('id', $id);
		$this->db->delete('siswa');

		redirect('siswa');

	}
}
