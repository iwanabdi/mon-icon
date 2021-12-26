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

}

/* End of file Master_team.php */
