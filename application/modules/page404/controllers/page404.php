<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class page404 extends MX_Controller {

	function __construct() {
        parent::__construct();
        //  if($this->session->userdata('status') != "login"){
        //     redirect(base_url("/login/signOut"));
        // }
        //  $this->load->model('M_channel');
        $this->load->model('MGmenu');
	}
	
	public function index()
	{
		$script = array(
		 	'script'=>TRUE,
		 	'script_url'=>'main_script'
		 );

		 $header['menu']=$this->MGmenu->get_menu();
		// $header['menu']=$this->db->query("SELECT * FROM m_menu WHERE grp=0")->result();
		// $header['sub_menu']=$this->db->query("SELECT * FROM m_menu WHERE grp!=0")->result();

		$this->load->view('layout/header',$header);	
		$this->load->view('main');
		$this->load->view('layout/footer', $script);
		
	}
}
