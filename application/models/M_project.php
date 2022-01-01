<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_project extends CI_Model {

	function get_project($id = null)
	{
		$this->db->select('*');
		$this->db->from('project_view');
		if ($id != null) {
			$this->db->where('projec_id', $id);
		}
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query;
	}

	function add_data()
    {
    	$data = [
    		"project_id" 	=> $this->input->post('project_id'),
    		"pelanggan"		=> $this->input->post('pelanggan'),
    		"sid"			=> $this->input->post('sid'),
    		"io"			=> $this->input->post('io'),
    		"layanan"		=> $this->input->post('layanan'),
    		"bandwith"		=> $this->input->post('bandwith'),
    		"alamat"		=> $this->input->post('alamat'),
    		"keterangan"		=> $this->input->post('keterangan'),
    		"create_by"		=> $this->session->userdata('user_id'),
    		"user_id"		=> $this->session->userdata('user_id'),
			"status"		=> 1,
			"status_project"		=> 1,
			"create_on"   		=> date("Y-m-d")
    	];
		return $this->db->insert('project', $data);
    }

	function edit_data()
    {
		$data = [
    		"update_by"		=> $this->session->userdata('user_id'),
			"nama_kendala" 		=> $this->input->post('nama'),
    		"tipe_kendala"		=> $this->input->post('type'),
    		"update_on"		=> date('Y-m-d')
    	];
    	$id = $this->input->post('id', true);
    	$this->db->where('kendala_id', $id);
    	$this->db->update('kendala', $data);
    }

	function hapus_data()
    {
		$data = [
    		"delete_by"		=> $this->session->userdata('user_id'),
    		"update_on"		=> date('Y-m-d'),
    		"status"		=> 0
    	];
    	$id = $this->input->post('project_id', true);
    	$this->db->where('project_id', $id);
    	$this->db->update('project', $data);
    }


}
