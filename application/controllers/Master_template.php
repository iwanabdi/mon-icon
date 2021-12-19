<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Master_template extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    

    public function index()
    {
        $this->template->load('template', 'master/template/list_template');
    }

}

/* End of file Master_template.php */
