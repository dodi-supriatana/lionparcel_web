<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MX_Controller {

	public function index()
	{
		$script = array(
		 	'script'=>TRUE,
		 	'script_url'=>'main_script'
		 );


		$header['menu']=$this->db->query("SELECT * FROM m_menu WHERE grp=0")->result();
		$header['sub_menu']=$this->db->query("SELECT * FROM m_menu WHERE grp!=0")->result();

		$this->load->view('layout/header',$header);	
		$this->load->view('welcome_message');
		$this->load->view('layout/footer', $script);
		
	}
}
