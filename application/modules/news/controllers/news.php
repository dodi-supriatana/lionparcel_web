<?php
defined('BASEPATH') or exit('No direct script access allowed');

class news extends MX_Controller
{
    private $filename = "import_data";

    function __construct()
    {
        parent::__construct();
        //  if($this->session->userdata('status') != "login"){
        //     redirect(base_url("/login/signOut"));
        // }
        //  $this->load->model('M_channel');
        $this->load->model('MGmenu');
        $this->load->model('mpolist');
    }

    public function index()
    {
        $script = array(
            'script' => TRUE,
            'script_url' => 'main_script'
        );
        $datas['promo']=$this->db->query("SELECT * FROM news where `news_status` =1")->result();
        $this->load->view('layout/header');
        $this->load->view('main',$datas);
        $this->load->view('layout/footer', $script);
    }

}
