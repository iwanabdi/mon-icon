<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mitra extends CI_Model {

    function get_mitra($id = null)
	{
		$this->db->select('*');
		$this->db->from('mitra');
		if ($id != null) {
			$this->db->where('mitra_id', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	function get_teamlap($id = null)
	{
		$this->db->select('*');
		$this->db->from('teamlapangan');
		if ($id != null) {
			$this->db->where('mitra_id', $id);
		}
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query;
	}

	function cek_email($id){
		$this->db->select('*');
        $this->db->from('mitra');
		$this->db->where('email', $id);
		$cek_email = $this->db->get()->result_array();
		$count = count($cek_email);
		return $count;
	}

	function proses_add_data()
    {
    	$data = [
    		"nama_mitra" 		=> $this->input->post('nama'),
    		"email"				=> $this->input->post('email'),
    		"Alamat"			=> $this->input->post('alamat'),
    		"no_telp"			=> $this->input->post('no-telp'),
			"password"			=> MD5($this->input->post('password')),
			"status"			=> 1,
			"create_by"   		=> $this->session->userdata('user_id'),
			"create_on"   		=> date("Y-m-d")
    	];
    	$this->db->insert('mitra', $data);
    }

	function hapus_data()
    {
		$data = [
    		"delete_by"		=> $this->session->userdata('user_id'),
    		"update_on"		=> date('Y-m-d'),
    		"status"		=> 0
    	];
    	$id = $this->input->post('id', true);
    	$this->db->where('mitra_id', $id);
    	$this->db->update('mitra', $data);
    }

	function aktif_data()
    {
		$data = [
    		"update_by"		=> $this->session->userdata('user_id'),
    		"update_on"		=> date('Y-m-d'),
    		"status"		=> 1
    	];
    	$id = $this->input->post('id', true);
    	$this->db->where('mitra_id', $id);
    	$this->db->update('mitra', $data);
    }

	function edit_data()
    {
		if ($this->input->post('password') != null) {
		$data = [
    		"nama_mitra" 		=> $this->input->post('nama'),
    		"email"				=> $this->input->post('email'),
    		"Alamat"			=> $this->input->post('alamat'),
			"no_telp"			=> $this->input->post('no-telp'),
			"password"			=> MD5($this->input->post('password')),
			"update_by"   		=> $this->session->userdata('user_id'),
			"update_on"   		=> date("Y-m-d")
    	];
		}else{
		$data = [
			"nama_mitra" 		=> $this->input->post('nama'),
    		"email"				=> $this->input->post('email'),
    		"no_telp"			=> $this->input->post('no-telp'),
			"Alamat"			=> $this->input->post('alamat'),
			"update_by"   		=> $this->session->userdata('user_id'),
			"update_on"   		=> date("Y-m-d")
		];
		}
    	$id = $this->input->post('id', true);
    	$this->db->where('mitra_id', $id);
    	$this->db->update('mitra', $data);
    }


}

