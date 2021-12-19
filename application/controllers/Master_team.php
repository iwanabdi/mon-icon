<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Master_team extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    

    public function index()
    {
        $this->template->load('template', 'master/team/list_team');
    }

}

/* End of file Master_team.php */
