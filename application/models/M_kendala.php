<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kendala extends CI_Model {

	function get_kendala($id = null)
	{
		$this->db->select('*');
		$this->db->from('kendala');
		if ($id != null) {
			$this->db->where('kendala_id', $id);
		}
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query;
	}

	function proses_add_data()
    {
    	$data = [
    		"nama_kendala" 		=> $this->input->post('nama'),
    		"tipe_kendala"		=> $this->input->post('type'),
    		"create_by"		=> 1,
			"status"		=> 1,
			"create_on"   		=> date("Y-m-d")
    	];
    	$this->db->insert('kendala', $data);
    }

	function edit_data()
    {
		$data = [
    		"update_by"		=> 1,
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
    		"delete_by"		=> 1,
    		"update_on"		=> date('Y-m-d'),
    		"status"		=> 0
    	];
    	$id = $this->input->post('id', true);
    	$this->db->where('kendala_id', $id);
    	$this->db->update('kendala', $data);
    }


}
