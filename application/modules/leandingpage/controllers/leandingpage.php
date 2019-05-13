<?php
defined('BASEPATH') or exit('No direct script access allowed');

class leandingpage extends MX_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Mlogin");
	}

	public function index()
	{
		// echo "fu";
		// $script = array(
		// 	'script' => TRUE,
		// 	'script_url' => 'main_script'
		// );
		// $this->load->view('layout/header');
		// echo "dashboard";
		// die();
		$this->load->view('index');
		// $this->load->view('layout/footer', $script);
	}


}
