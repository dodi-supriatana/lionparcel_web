<?php
defined('BASEPATH') or exit('No direct script access allowed');

class perview extends MX_Controller
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
        $data['perview'] = $this->db->query('SELECT * FROM Perview ')->result();
        $this->load->view('layout/header');
        $this->load->view('main', $data);
        $this->load->view('layout/footer', $script);
    }

}
