<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends MX_Controller {

	function __construct() {
        parent::__construct();
        //  if($this->session->userdata('status') != "login"){
        //     redirect(base_url("/login/signOut"));
        // }
        //  $this->load->model('M_channel');
        $this->load->model('MGmenu');
    }

	public function index()	{
		$script = array(
            'script'=>TRUE,
            'script_url'=>'main_script'
         );
        $header['menu']=$this->MGmenu->get_menu();
        // $header['sub_menu']=$this->db->query("SELECT * FROM m_menu WHERE grp!=0")->result();
        $this->load->view('layout/header',$header); 
        $this->load->view('main');
        $this->load->view('layout/footer', $script);
	}

     public function ajax_list() {
        $list = $this->M_master_menu->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $menu) {
            $no++;
            $row = array();
            $row[] = $menu->menu;
            $row[] = $menu->ctrl;
            $row[] = $menu->is_web;
            $row[] = '<i class="'.$menu->icon.'"></i>';

 
            //add html for action
            // $row[] = '';
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->M_master_menu->count_all(),
                        "recordsFiltered" => $this->M_master_menu->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }

}
