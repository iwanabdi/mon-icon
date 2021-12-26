<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Master_kendala extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
		cekblm_login();
		$this->load->model('M_kendala');
    }

    public function index()
    {
		$data['kendala'] 	= $this->M_kendala->get_kendala();
        $this->template->load('template', 'master/kendala/list_kendala',$data);
    }

	public function add()
	{
		$this->template->load('template', 'master/kendala/add_kendala');
	}

	public function edit($id)
	{
		$data['kendala'] = $this->M_kendala->get_kendala($id)->row();
		$this->template->load('template', 'master/kendala/edit_kendala', $data);
	}

	function proses_add_data()
	{
		$this->M_kendala->proses_add_data();
		$this->session->set_flashdata('pesan', 
			'<div class="alert alert-success" role="alert">
				Data Berhasil Ditambah!
			</div>');
		redirect('Master_kendala','refresh');
	}

	function proses_edit_data()
	{
		$this->M_kendala->edit_data();
		$this->session->set_flashdata('pesan', 
			'<div class="alert alert-success" role="alert">
				Data Berhasil Diedit!
			</div>');
		redirect('Master_kendala','refresh');
	}

	function hapus_data()
	{
		$this->M_kendala->hapus_data();
		$this->session->set_flashdata('pesan', 
			'<div class="alert alert-success" role="alert">
				Data Berhasil Dihapus!
			</div>');
		redirect('Master_kendala','refresh');
	}

}

/* End of file Master_kendala.php */
