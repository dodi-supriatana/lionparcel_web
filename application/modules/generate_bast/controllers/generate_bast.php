<?php
defined('BASEPATH') or exit('No direct script access allowed');

class generate_bast extends MX_Controller
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
        // $this->load->model('mpolist');
    }

    public function index($po_no)
    {
        echo 'ahahah';
    }
}
