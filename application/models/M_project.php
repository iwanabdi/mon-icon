<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_project extends CI_Model {

	function get_project($id = null)
	{
		$this->db->select('*');
		$this->db->from('project_view');
		if ($id != null) {
			$this->db->where('project_id', $id);
		}
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query;
	}

	function get_project_user($id = null)
	{
		$this->db->select('*');
		$this->db->from('project_view');
		if ($id != null) {
			if ($this->session->userdata('status') ==1) {
				if($this->session->userdata('jabatan') ==2){
					$this->db->where('user_id', $id);
				}
			}else {
				$this->db->where('mitra_id', $id);	
			}
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
		$this->db->insert('project', $data);
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

	function dispos_mitra()
    {
		$data = [
    		"update_by"			=> $this->session->userdata('user_id'),
			"status_project"	=> 2,
			"mitra_id"			=> $this->input->post('mitra_id'),
    		"update_on"			=> date('Y-m-d')
    	];
    	$id = $this->input->post('project_id', true);
    	$this->db->where('project_id', $id);
    	$this->db->update('project', $data);

		$data = [
    		"project_id" 		=> $this->input->post('project_id'),
    		"teamlap_id"		=> $this->input->post('teamlap_id'),
    		"create_by"			=> $this->session->userdata('user_id'),
			"create_on"   		=> date("Y-m-d")
    	];
		$this->db->insert('dstg', $data);
    }

	function dispos_pm()
    {
		$data = [
    		"update_by"		=> $this->session->userdata('user_id'),
    		"update_on"		=> date('Y-m-d'),
    		"user_id"		=> $this->input->post('user_id')
    	];
    	$id = $this->input->post('project_id', true);
    	$this->db->where('project_id', $id);
    	$this->db->update('project', $data);
    }


}
