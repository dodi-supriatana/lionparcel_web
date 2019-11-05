<?php
defined('BASEPATH') or exit('No direct script access allowed');
 
class agen_profile extends MX_Controller
{
    private $filename = "import_data";

    function __construct()
    {
        parent::__construct();
        //  if($this->session->userdata('status') != "login"){
        //     redirect(base_url("/login/signOut"));
        // }
        //  $this->load->model('M_channel');
        // $this->load->model('MGmenu');
        // $this->load->model('mpolist');
    }

    public function index()
    {
        $script = array(
            'script' => TRUE,
            'script_url' => 'main_script'
        );
        $data['list_user'] = $this->db->query('SELECT
        u.nama,u.username,u.no_hp,l.nama_level,u.is_active,u.images
    FROM
        m_user u
    LEFT JOIN tb_level l on l.id_level=u.id_level
    where u.id_level="1"')->result();
        $this->load->view('layout/header');
        $this->load->view('main',$data);
        $this->load->view('layout/footer', $script);
    }
}
