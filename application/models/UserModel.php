<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

    function get_user($id = null){
        
    }

	public function login($post)
	{
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('nama_user', $post['nama_user']);
        $this->db->where('password', MD5($post['password']));
		$result = $this->db->get();
		return $result;
    }

}

/* End of file UserModel.php */
