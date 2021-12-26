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

}

