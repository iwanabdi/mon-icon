<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_detail extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		cekblm_login();
		$this->load->model('M_project');
    }

    public function index()
    {
    	$id = $this->input->post('project_iddetail');
		if ($id == null) {
			redirect('Project_open','refresh');
		}
		else {
			$data['project'] 	= $this->M_project->get_project($id)->row();
        	$this->template->load('template', 'project/project_detail',$data);
		}
    }

}

/* End of file Project_detail.php */
