<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends MX_Controller
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
		$this->load->view('layout/header');
		// echo "dashboard";
		// die();
		// $this->load->view('main');
		$this->load->view('layout/footer', $script);
	}


}
