<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
    }
    

    public function index()
    {
        // ceksdh_login();
        $this->load->view('login');
    }

	public function process_login()
	{
		$post = $this->input->POST(NULL, TRUE);
		if ($post['type'] == 1) {
			$query = $this->UserModel->login_pegawai($post);
			$status =  $query->row('status');
			if ($query->num_rows() > 0 && $status == 1) {
				$row = $query->row();
				$param = array(
					'user_id' 		=> $row->user_id,
					'nama'			=> $row->nama_user,
					'email'			=> $row->email_user,
					'jabatan'		=> $row->jabatan
				);
				$this->session->set_userdata($param);
				redirect('');
			}else if($query->num_rows() > 0 && $status == 0){
				$this->session->set_flashdata('pesan', 
					'<div class="alert alert-danger" role="alert">
						Login Gagal! Akun anda tidak aktif.
					</div>');
				redirect('Auth');
			}else{
				$this->session->set_flashdata('pesan', 
					'<div class="alert alert-danger" role="alert">
						Login Gagal! Email atau Password Anda Salah.
					</div>');
				redirect('Auth');
			}
		}
		else if ($post['type'] == 2) {
			$query = $this->UserModel->login_mitra($post);
			$status =  $query->row('status');
			if ($query->num_rows() > 0 && $status == 1) {
				$row = $query->row();
				$param = array(
					'mitra_id' 		=> $row->user_id,
					'nama_mitra'	=> $row->nama_user,
					'email'			=> $row->email_user
				);
				$this->session->set_userdata($param);
				redirect('');
			}else if($query->num_rows() > 0 && $status == 0){
				$this->session->set_flashdata('pesan', 
					'<div class="alert alert-danger" role="alert">
						Login Gagal! Akun anda tidak aktif.
					</div>');
				redirect('Auth');
			}else{
				$this->session->set_flashdata('pesan', 
					'<div class="alert alert-danger" role="alert">
						Login Gagal! Email atau Password Anda Salah.
					</div>');
				redirect('Auth');
			}
		}
	}



}

/* End of file Auth.php */
