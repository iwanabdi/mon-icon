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
		$query = $this->db->get();
		return $query;
	}

	function proses_add_data()
    {
    	$data = [
    		"nama_kendala" 		=> $this->input->post('nama'),
    		"tipe_kendala"		=> $this->input->post('type'),
    		"create_by"		=> 1,
			"create_on"   		=> date("d-m-Y")
    	];
    	$this->db->insert('kendala', $data);
    }


}
