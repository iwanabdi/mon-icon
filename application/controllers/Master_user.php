<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_user extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function index()
    {
        $this->template->load('template', 'master/user/list_user');
    }

}

/* End of file Master_user.php */
