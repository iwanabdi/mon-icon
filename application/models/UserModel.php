<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

	public function login_pegawai($post)
	{
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email_user', $post['username']);
        $this->db->where('password', MD5($post['password']));
		$result = $this->db->get();
		return $result;
    }

	public function login_mitra($post)
	{
        $this->db->select('*');
        $this->db->from('mitra');
        $this->db->where('email', $post['username']);
        $this->db->where('password', MD5($post['password']));
		$result = $this->db->get();
		return $result;
    }

	public function get_user($id = null)
    {
        $this->db->select('*');
        $this->db->from('user');
        if ($id != null) {
            $this->db->where('user_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

}

/* End of file UserModel.php */
