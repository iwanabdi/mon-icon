<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Project_open extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		cekblm_login();
		$this->load->model('M_project');
		$this->load->model('M_mitra');
		$this->load->model('M_user');
    }

	public function index()
    {
		$data['project'] 	= $this->M_project->get_project_user($this->session->userdata('user_id'));
		$data['mitra'] 	= $this->M_mitra->get_teamlap();
		$data['user'] 	= $this->M_user->get_ptl();
        $this->template->load('template', 'project/project_open',$data);
    }

	public function Add()
    {
		$data['project'] 	= $this->M_project->get_project();
        $this->template->load('template', 'project/project_add',$data);
    }

	function proses_add_data()
	{
		$this->M_project->add_data();
		$this->session->set_flashdata('pesan', 
			'<div class="alert alert-success" role="alert">
				Data Berhasil Ditambah!
			</div>');
		redirect('Project_open','refresh');
	}

	function hapus_data()
	{
		$this->M_project->hapus_data();
		$this->session->set_flashdata('pesan', 
			'<div class="alert alert-success" role="alert">
				Data Berhasil Dihapus!
			</div>');
		redirect('Project_open','refresh');
	}

	function dispos_mitra(){
		$this->M_project->dispos_mitra();
		$this->session->set_flashdata('pesan', 
			'<div class="alert alert-success" role="alert">
				Berhasil Didispose Mitra!
			</div>');
		redirect('Project_open','refresh');
	}

	function dispos_pm(){
		$this->M_project->dispos_pm();
		$this->session->set_flashdata('pesan', 
			'<div class="alert alert-success" role="alert">
				Berhasil Didispose PM!
			</div>');
		redirect('Project_open','refresh');
	}

}

/* End of file Project_open.php */
