<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class dashboardagen extends MX_Controller
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
		$data['news']=$this->db->query("SELECT news.*,SUBSTRING(`news_description`, 1, 50) as more FROM news WHERE news_status=1")->result();
		$this->load->view('layout/header');
		$this->load->view('main',$data);
		$this->load->view('layout/footer', $script);
	}


}
