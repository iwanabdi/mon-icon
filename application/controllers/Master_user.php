<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_user extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
		$this->load->model('M_user');
    }

    public function index()
    {
		$data['user'] 	= $this->M_user->get_user();
        $this->template->load('template', 'master/user/list_user',$data);
    }

	public function add()
	{
		$this->template->load('template', 'master/user/add_user');
	}

	public function edit($id)
	{
		$data['kendala'] = $this->M_user->get_user($id)->result();
		$this->template->load('template', 'master/kendala/edit_user', $data);
	}

	function proses_add_data()
	{
		$this->M_user->proses_add_data();
		$this->session->set_flashdata('pesan', 
			'<div class="alert alert-success" role="alert">
				Data Berhasil Ditambah!
			</div>');
		redirect('Master_user','refresh');
	}

	function proses_edit_data()
	{
		$this->M_user->edit_data();
		redirect('Master_user','refresh');
	}

	function hapus_data()
	{
		$this->M_user->hapus_data();
		redirect('Master_user','refresh');
	}

}

/* End of file Master_user.php */
