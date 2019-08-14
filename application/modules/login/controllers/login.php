<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login extends MX_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Mlogin");
	}

	public function index()
	{
		$script = array(
			'script' => TRUE,
			'script_url' => 'main_script'
		);

		$this->load->view('main');
		// $this->load->view('layout/footer', $script);
	}

	public function login_validation()
	{

	
		$username = $this->input->post('username');
		$password = $this->input->post('password');	
		// die();
		$count_user = $this->Mlogin->cek_user($username, $password);
		// print_r($count_user->result());
		// die();
		if ($count_user->num_rows() > 0) {
		
			$count_user = $this->Mlogin->cek_user($username, $password);
			foreach ($count_user->result() as $data) {
				$user_id= $data->id_user;
			}

			$user_group = $this->Mlogin->default_user_group($user_id);
			// print_r($user_group);
			// die();
			if (!empty($count_user->result())) {
				$sess_data = array();
				foreach ($user_group as $data) {
					$sess_data['id_user']		= $data->id_user;
					$sess_data['email']		= $data->username;
					$sess_data['username']		= $data->nama;
					$sess_data['password']	= $data->password;
					$sess_data['id_level']	=  $data->id_level;
					$sess_data['level']	=  $data->nama_level;
					$sess_data['foto']	=  $data->images;


					print_r($sess_data);
					$this->session->set_userdata($sess_data);
				}
				// die();
			} else {
				redirect(base_url('login'));
			}
			
			redirect(base_url(dashboard));
		} else {
			redirect(base_url('login'));
		}
	}
}
