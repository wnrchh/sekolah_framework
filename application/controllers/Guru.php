<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

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
		$this->load->model('guru_m','guru');
		$data['data_guru'] = $this->guru->data_all();
		$this->load->view('guru', $data);
	}


  
	public function form_guru()
	{

		$this->load->view('form_guru');
	}

	public function edit($id)
	{
		$this->load->model('guru_m','guru');
		$data['data_guru'] = $this->guru->data_id($id);
		$this->load->view('edit_guru', $data);
	}

	public function simpan_form_guru()
	{




		$file_name						= 'guru_'.date('YmdHis').'.jpg';
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
		$data['mata_pelajaran']			= $this->input->post('mata_pelajaran');
		$data['foto']		    		= $file_name;

		$this->db->insert('guru',$data);

		redirect('guru');
	}

	public function simpan_edit_guru($id)
	{

		$file_name						= 'guru_'.date('YmdHis').'.jpg';
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
		$data['mata_pelajaran']			= $this->input->post('mata_pelajaran');
		




		$this->db->where('id', $id);
		$this->db->update('guru',$data);

		redirect('guru');
	}


	public function hapus($id)

	{

		$this->db->where('id', $id);
		$this->db->delete('guru');

		redirect('guru');

	}
}





