<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Master_kendala extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    

    public function index()
    {
        $this->template->load('template', 'master/kendala/list_kendala');
    }

}

/* End of file Master_kendala.php */
