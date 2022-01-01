<?php 

	function ceksdh_login()
	{
		$CI =& get_instance();
		$user_session = $CI->session->userdata('user_id');
		$user = $CI->fungsi->user_login()->status;
		if ($user_session && $user != 0 || $user_session && $user != null) {
			$CI->session->set_flashdata('login', 'sudah login');
			redirect('','refresh');
		}
	}

	function cekblm_login()
	{
		$CI =& get_instance();
		$user_session = $CI->session->userdata('user_id');
		if ($CI->session->userdata('status')==1) {
			$user = $CI->fungsi->user_login()->status;
		}else{
			$user = $CI->fungsi->mitra_login()->status;
		}
		if (!$user_session) {
			$CI->session->set_flashdata('login', 'belum login');
			redirect('Auth','refresh');
		}else if($user == 0){
			$CI->session->set_flashdata('login', 'tidak aktif');
			redirect('Auth','refresh');
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
