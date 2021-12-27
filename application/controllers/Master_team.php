<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Master_team extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
		cekblm_login();
		$this->load->model('M_mitra');
    }

    public function index()
    {
		$data['user'] 	= $this->M_mitra->get_mitra();
		$this->template->load('template', 'master/team/list_team',$data);
    }

	public function add()
	{
		$this->template->load('template', 'master/team/add_team');
	}

	function proses_add_data()
	{
		$t_email = $this->input->post('email');
		$count = $this->M_mitra->cek_email($t_email);
		if ($count > 0) {
			$this->session->set_flashdata('msg_email', 
			'<div class="alert alert-warning" role="alert">
				Gagal Tambah Data - Email Sudah Digunakan!
			</div>');
			redirect('Master_team/add');
			
		}else{
			$this->M_mitra->proses_add_data();
			$this->session->set_flashdata('pesan', 
			'<div class="alert alert-success" role="alert">
				Data Berhasil Ditambah!
			</div>');
			redirect('Master_team','refresh');
		}
	}

	function hapus_data()
	{
		$this->M_mitra->hapus_data();
		$this->session->set_flashdata('pesan', 
			'<div class="alert alert-success" role="alert">
				Data Berhasil Dinonaktifkan!
			</div>');
		redirect('Master_team','refresh');
	}

	function aktif_data()
	{
		$this->M_mitra->aktif_data();
		$this->session->set_flashdata('pesan', 
			'<div class="alert alert-success" role="alert">
				Data Berhasil Diaktifkan!
			</div>');
		redirect('Master_team','refresh');
	}

	public function edit($id)
	{
		$data['user'] = $this->M_mitra->get_mitra($id)->row();
		$this->template->load('template', 'master/team/edit_team', $data);
	}

	function proses_edit_data()
	{
		$t_email = $this->input->post('email');
		$count = $this->M_mitra->cek_email($t_email);
		if ($count > 1) {
			$this->session->set_flashdata('msg_email', 
			'<div class="alert alert-warning" role="alert">
				Gagal Edit Data - Email Sudah Digunakan!
			</div>');
			redirect('Master_team/add');
			
		}else{
			$this->M_mitra->edit_data();
			$this->session->set_flashdata('pesan', 
			'<div class="alert alert-success" role="alert">
				Data Berhasil Diedit!
			</div>');
			redirect('Master_team','refresh');
		}
	}

	public function detail($id)
	{
		$data['user'] = $this->M_mitra->get_mitra($id)->row();
		$data['teamlap'] = $this->M_mitra->get_teamlap($id);
		$this->template->load('template', 'master/team/detail_team', $data);
	}


}

/* End of file Master_team.php */
