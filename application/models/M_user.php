<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

    function get_user($id = null)
	{
		$this->db->select('*');
		$this->db->from('user');
		if ($id != null) {
			$this->db->where('user_id', $id);
		}
		// $this->db->where('status', 1);
		$query = $this->db->get();
		return $query;
	}

	function cek_email($id){
		$this->db->select('*');
        $this->db->from('user');
		$this->db->where('email_user', $id);
		$cek_email = $this->db->get()->result_array();
		$count = count($cek_email);
		return $count;
	}

	function proses_add_data()
    {
    	$data = [
    		"nama_user" 		=> $this->input->post('nama'),
    		"email_user"		=> $this->input->post('email'),
    		"no_telp"			=> $this->input->post('no-telp'),
			"password"			=> MD5($this->input->post('password')),
			"jabatan"			=> $this->input->post('jabatan'),
			"status"			=> 1,
			"create_by"   		=> $this->session->userdata('user_id'),
			"create_on"   		=> date("Y-m-d")
    	];
    	$this->db->insert('user', $data);
    }

	function edit_data()
    {
		if ($this->input->post('password') != null) {
		$data = [
    		"nama_user" 		=> $this->input->post('nama'),
    		"email_user"		=> $this->input->post('email'),
    		"no_telp"			=> $this->input->post('no-telp'),
			"password"			=> MD5($this->input->post('password')),
			"jabatan"			=> $this->input->post('jabatan'),
			"update_by"   		=> $this->session->userdata('user_id'),
			"update_on"   		=> date("Y-m-d")
    	];
		}else{
		$data = [
			"nama_user" 		=> $this->input->post('nama'),
    		"email_user"		=> $this->input->post('email'),
    		"no_telp"			=> $this->input->post('no-telp'),
			"jabatan"			=> $this->input->post('jabatan'),
			"update_by"   		=> $this->session->userdata('user_id'),
			"update_on"   		=> date("Y-m-d")
		];
		}
    	$id = $this->input->post('id', true);
    	$this->db->where('user_id', $id);
    	$this->db->update('user', $data);
    }

	function hapus_data()
    {
		$data = [
    		"delete_by"		=> 1,
    		"update_on"		=> date('Y-m-d'),
    		"status"		=> 0
    	];
    	$id = $this->input->post('id', true);
    	$this->db->where('user_id', $id);
    	$this->db->update('user', $data);
    }

	function aktif_data()
    {
		$data = [
    		"update_by"		=> 1,
    		"update_on"		=> date('Y-m-d'),
    		"status"		=> 1
    	];
    	$id = $this->input->post('id', true);
    	$this->db->where('user_id', $id);
    	$this->db->update('user', $data);
    }
}

/* End of file M_user.php */
