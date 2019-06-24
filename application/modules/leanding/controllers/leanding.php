<?php
defined('BASEPATH') or exit('No direct script access allowed');

class leanding extends MX_Controller
{

	public function __construct()
	{
		parent::__construct();
		// $this->load->model("Mlogin");
	}

	public function index()
	{
		$script = array(
			'script' => TRUE,
			'script_url' => 'main_script'
		);

		$this->load->view('layout/leanding_header');
		$this->load->view('main');
		$this->load->view('layout/leanding_footer', $script);
	}

	public function tracking()
	{ 
		$script = array(
			'script' => TRUE,
			'script_url' => 'main_script'
		);

		$this->load->view('layout/leanding_header');
		$this->load->view('tracking');
		$this->load->view('layout/leanding_footer', $script);
	}

	public function find()
	{ 
		$script = array(
			'script' => TRUE,
			'script_url' => 'main_script'
		);

		$this->load->view('layout/leanding_header');
		$this->load->view('find');
		$this->load->view('layout/leanding_footer', $script);
	}

	public function promo()
	{ 
		$script = array(
			'script' => TRUE,
			'script_url' => 'main_script'
		);

		$this->load->view('layout/leanding_header');
		$this->load->view('promo');
		$this->load->view('layout/leanding_footer', $script);
	}

	public function agen()
	{ 
		$script = array(
			'script' => TRUE,
			'script_url' => 'main_script'
		);

		$this->load->view('layout/leanding_header');
		$this->load->view('agen');
		$this->load->view('layout/leanding_footer', $script);
	}

	public function promodetail()
	{ 
		$script = array(
			'script' => TRUE,
			'script_url' => 'main_script'
		);

		$this->load->view('layout/leanding_header');
		$this->load->view('promodetail');
		$this->load->view('layout/leanding_footer', $script);
	}



}
