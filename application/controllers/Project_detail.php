<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_detail extends CI_Controller {

    public function index()
    {
        $this->template->load('template', 'project/project_detail');
    }

}

/* End of file Project_detail.php */
