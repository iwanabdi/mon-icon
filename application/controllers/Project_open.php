<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Project_open extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		cekblm_login();
		$this->load->model('M_project');
		$this->load->model('M_project');

    }

	public function index()
    {
		$data['project'] 	= $this->M_project->get_project();
        $this->template->load('template', 'project/project_open',$data);
    }

	public function Add()
    {
		$data['project'] 	= $this->M_project->get_project();
        $this->template->load('template', 'project/project_add',$data);
    }

	public function detail($id =null)
    {
		$data['project'] 	= $this->M_project->get_project();
		if ($id != null) {
			$this->template->load('template', 'project/project_detail',$data);
		}else {
        	redirect('Project_open','refresh');
		}
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
