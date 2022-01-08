<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Stg extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		cekblm_login();
		$this->load->model('M_project');
		$this->load->model('M_mitra');
		$this->load->model('M_user');
		$this->load->model('M_stg');
    }

	public function index()
    {
		$data['stg'] 	= $this->M_stg->get_stg();
        $this->template->load('template', 'stg/stg_list',$data);
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

}

/* End of file Project_open.php */
