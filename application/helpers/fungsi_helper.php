<?php 

	function ceksdh_login()
	{
		$CI =& get_instance();
		$user_session = $CI->session->userdata('user_id');
		// $email = $CI->session->userdata('email');
		$user = $CI->fungsi->user_login()->status;
		if ($user_session && $user != 0 || $user_session && $user != null) {
			$CI->session->set_flashdata('login', 'sudah login');
			// echo "<script>alert('Sudah Login, Logout Dulu Bosss')</script>";
			redirect('','refresh');
		}
	}

	function cekblm_login()
	{
		$CI =& get_instance();
		$user_session = $CI->session->userdata('user_id');
		$user = $CI->fungsi->user_login()->status;
		if (!$user_session) {
			$CI->session->set_flashdata('login', 'belum login');
			redirect('Auth','refresh');
		}else if($user == 0){
			$CI->session->set_flashdata('login', 'tidak aktif');
			// echo "<script>alert('Akun Anda Tidak Aktif')</script>";
			redirect('Auth','refresh');
		}
	}

	function ceksdh_login_pegawai()
	{
		$CI =& get_instance();
		$user_session = $CI->session->userdata('user_id');
		// $email = $CI->session->userdata('email');
		$user = $CI->fungsi->user_login()->status;
		if ($user_session && $user != 0) {
			$CI->session->set_flashdata('login', 'sudah login');
			// echo "<script>alert('Sudah Login, Logout Dulu Bosss')</script>";
			redirect('Home','refresh');
		}
	}

	function cekblm_login_pegawai()
	{
		$CI =& get_instance();
		$user_session = $CI->session->userdata('user_id');
		$user = $CI->fungsi->user_login()->status;
		if (!$user_session) {
			$CI->session->set_flashdata('login', 'belum login');
			redirect('Auth','refresh');
		}else if($user == 0){
			$CI->session->set_flashdata('login', 'tidak aktif');
			redirect('Auth','refresh');
		}
	}

	function ceksdh_login_mitra()
	{
		$CI =& get_instance();
		$user_session = $CI->session->userdata('mitra_id');
		if ($user_session) {
			echo "<script>alert('Sudah Login, Logout Dulu Bosss')</script>";
			redirect('mitra','refresh');
		}
	}

	function cekblm_login_mitra()
	{
		$CI =& get_instance();
		$user_session = $CI->session->userdata('mitra_id');
		if (!$user_session) {
			echo "<script>alert('Login Dulu Bosss')</script>";
			redirect('auth/login_mitra','refresh');
		}
	}

	function cek_akses_owner()
	{
		$CI =& get_instance();
		$CI->load->library('fungsi');
		if ($CI->fungsi->user_login()->user_role > 1) {
			$CI->session->set_flashdata('login', 'akses terlarang');
			redirect('home','refresh');
		}
	}
	
	function cek_akses()
	{
		$CI =& get_instance();
		$CI->load->library('fungsi');
		if ($CI->fungsi->user_login()->user_role >= 4) {
			$CI->session->set_flashdata('login', 'akses terlarang');
			redirect('home','refresh');
		}
	}
	
	function cek_akses_gudang()
	{
		$CI =& get_instance();
		$CI->load->library('fungsi');
		if ($CI->fungsi->user_login()->jabatan > 3) {
			echo "<script>alert('Anda itu siapa? mau lihat-lihat material')</script>";
			redirect('pegawai','refresh');
		}
	}
	
	function Update_api()
	{
		$CI =& get_instance();
		$CI->load->model('M_player');
		$player = $CI->M_player->get_player()->result();
		foreach ($player as $row) {
			$curl = curl_init();
			$param = $row->player_eth;

			curl_setopt_array($curl, [
				CURLOPT_URL => "https://axie-infinity.p.rapidapi.com/get-update/".$param."?id=".$param."",
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_ENCODING => "",
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 30,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => "GET",
				CURLOPT_HTTPHEADER => [
					"x-rapidapi-host: axie-infinity.p.rapidapi.com",
					"x-rapidapi-key: 0111fab8b3mshe3ffbf3c902ed40p19a0dfjsn5cc212fc9f06",
					"Accept: application/json"

				],
			]);

			$response = curl_exec($curl);
			$err = curl_error($curl);

			curl_close($curl);

			if ($err) {
				echo "cURL Error #:" . $err;
			} else {
				// echo "<pre>";
				$data =  json_decode($response);
				
				
				foreach ($data['slp'] as $key => $value) {
					$slp[$key] = $value;
				}
				foreach ($data['leaderboard'] as $key => $value) {
					$leaderboard[$key] = $value;
				}
				if ($slp['total'] == $row->total_slp || $slp['total'] == null) {
					$dataPlayer = [
						'player_name'       => $leaderboard['name'],
						'elo'               => $leaderboard['elo'],
						'rank'              => $leaderboard['rank']
					];
				}elseif ($slp['total'] < $row->total_slp){
					$dataPlayer = [
						'player_name'       => $leaderboard['name'],
						'total_slp'         => $slp['total'],
						'today_slp'         => $row->today_slp,
						'elo'               => $leaderboard['elo'],
						'rank'              => $leaderboard['rank']
					];
				}else{
					$dataPlayer = [
						'player_name'       => $leaderboard['name'],
						'total_slp'         => $slp['total'],
						'today_slp'         => $row->today_slp + ($slp['total'] - $row->total_slp),
						'elo'               => $leaderboard['elo'],
						'rank'              => $leaderboard['rank']
					];
				}
				$CI->db->where('player_eth', $param);
				$CI->db->update('tb_player', $dataPlayer);

			}
		}
		// exit;
	}

 ?>
