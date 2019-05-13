<?php
defined('BASEPATH') or exit('No direct script access allowed');

class project_list extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        //  if($this->session->userdata('status') != "login"){
        //     redirect(base_url("/login/signOut"));
        // }
        //  $this->load->model('M_channel');
        $this->load->model('MGmenu');
        $this->load->model('mprojectlist');
    }

    public function index()
    {
        $script = array(
            'script' => TRUE,
            'script_url' => 'main_script'
        );
        $header['menu'] = $this->MGmenu->get_menu();
        $this->load->view('layout/header', $header);
        $this->load->view('main');
        $this->load->view('layout/footer', $script);
    }

    public function ajax_list()
    {
        $list = $this->mprojectlist->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $project) {
            $no++;
            $row = array();
            $row[] = $project->project_id;
            $row[] = $project->project_name;
            $row[] = $project->milestone;
            //add html for action
            $row[] = '<center><a class="btn btn-danger btn-sm btn-block" href="javascript:void(0);"><i class="fa fa-list-ul"></i> Details</a></center>';
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->mprojectlist->count_all(),
            "recordsFiltered" => $this->mprojectlist->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }
}
