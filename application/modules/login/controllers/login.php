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
		echo $username;
		echo $password;
		// die();
		$count_user = $this->Mlogin->cek_user($username, $password);

		if ($count_user->num_rows() > 0) {

			// $count_user = $this->Mlogin->cek_user($username, $password);
			// foreach ($count_user->result() as $data) {
			// 	$user_id	= $data->user_id;
			// }

			// $user_group = $this->Mlogin->default_user_group($user_id);

			if (!empty($count_user->result())) {
				$sess_data = array();
				foreach ($user_group as $data) {
					$sess_data['id_user']		= $data->id_user;
					$sess_data['username']		= $data->username;
					$sess_data['password']	= $data->password;
					// $sess_data['picture']	= $data->picture;
					// $sess_data['group_id']	= $data->group_id;
					// $sess_data['group_name']	= $data->group_name;
					// $sess_data['phone']	= $data->phone;
					// $sess_data['fcm_registered_id']	= $data->fcm_registered_id;
					$sess_data['user_status']	=  $data->id_level;
					$this->session->set_userdata($sess_data);
				}
			} else {
				redirect(base_url('login'));
			}

			redirect(base_url(dashboard));
		} else {
			redirect(base_url('login'));
		}
	}
}
