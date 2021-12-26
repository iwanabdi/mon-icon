<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_user extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
		$this->load->model('M_user');
    }

    public function index()
    {
		$data['user'] 	= $this->M_user->get_user();
        $this->template->load('template', 'master/user/list_user',$data);
    }

	public function add()
	{
		$this->template->load('template', 'master/user/add_user');
	}

	public function edit($id)
	{
		$data['user'] = $this->M_user->get_user($id)->row();
		$this->template->load('template', 'master/user/edit_user', $data);
	}

	function proses_add_data()
	{
		$t_email = $this->input->post('email');
		$count = $this->M_user->cek_email($t_email);
		if ($count > 0) {
			$this->session->set_flashdata('msg_email', 
			'<div class="alert alert-warning" role="alert">
				Gagal Tambah Data - Email Sudah Digunakan!
			</div>');
			redirect('Master_user/add');
			
		}else{
			$this->M_user->proses_add_data();
			$this->session->set_flashdata('pesan', 
			'<div class="alert alert-success" role="alert">
				Data Berhasil Ditambah!
			</div>');
			redirect('Master_user','refresh');
		}
	}

	function proses_edit_data()
	{
		$t_email = $this->input->post('email');
		$count = $this->M_user->cek_email($t_email);
		if ($count > 1) {
			$this->session->set_flashdata('msg_email', 
			'<div class="alert alert-warning" role="alert">
				Gagal Edit Data - Email Sudah Digunakan!
			</div>');
			redirect('Master_user/add');
			
		}else{
			$this->M_user->edit_data();
			$this->session->set_flashdata('pesan', 
			'<div class="alert alert-success" role="alert">
				Data Berhasil Ditambah!
			</div>');
			redirect('Master_user','refresh');
		}
	}

	function hapus_data()
	{
		$this->M_user->hapus_data();
		redirect('Master_user','refresh');
	}

	function aktif_data()
	{
		$this->M_user->aktif_data();
		redirect('Master_user','refresh');
	}

}

/* End of file Master_user.php */
