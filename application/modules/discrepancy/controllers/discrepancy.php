<?php
defined('BASEPATH') or exit('No direct script access allowed');

class discrepancy extends MX_Controller
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

    public function detail($file_name=null)
    {
        $script = array(
            'script' => TRUE,
            'script_url' => 'main_script'
        );
        $data['perview'] = $this->db->query('SELECT * FROM Perview ')->result();
        $data['data'] = $this->db->query("SELECT * FROM rate_tabel_history rth WHERE rth.file_name='".$file_name."'")->result();
        $data['counting']=$this->db->query("SELECT 
        COUNT(CASE WHEN status = 'add' then 1 ELSE NULL END) as 'add',
        COUNT(CASE WHEN status = 'Update' then 1 ELSE NULL END) as 'update'
    from rate_tabel_history WHERE file_name='".$file_name."'")->row();
        $this->load->view('layout/header');
        $this->load->view('main', $data);
        $this->load->view('layout/footer', $script);
    }

}
