<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_stg extends CI_Model {

	function get_stg($id = null)
	{
		$this->db->select('*');
		$this->db->from('stg_view');
		if ($id != null) {
			$this->db->where('nomer_stg', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	function nomer_stg()
	{
		$query = $this->db->query("SELECT lpad(COUNT(nomer_stg)+1,3,0) as total FROM `hstg` WHERE MONTH(create_on) = MONTH(CURRENT_DATE()) AND YEAR(create_on) = YEAR(CURRENT_DATE()) AND DATE(create_on) = DATE(CURRENT_DATE())");
		$row = $query->row();
		$belakang = $row->total;
		$awal=date('md');
		$tahun=date('Y');
		$nostg = $awal.$belakang.'/STG/AKV/07/ICON+/'.$tahun;
		return $nostg;
	}

	function add_data()
    {
    	$data = [
    		"project_id" 	=> $this->input->post('project_id'),
    		"pelanggan"		=> $this->input->post('pelanggan'),
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


}
