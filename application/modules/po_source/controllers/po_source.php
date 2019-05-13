<?php
defined('BASEPATH') or exit('No direct script access allowed');

class po_source extends MX_Controller
{

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
        $header['menu'] = $this->MGmenu->get_menu();
        $this->load->view('layout/header', $header);
        $this->load->view('main');
        $this->load->view('layout/footer', $script);
    }

    public function ajax_list()
    {
        $list = $this->mpolist->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $project) {
            $no++;
            $row = array();
            $row[] = $project->po_no;
            // $row[] = $project->po_desc;
            // $row[] = $project->milestone;
            $row[] = $project->material_no;
            $row[] = '<img src="'.base_url($project->logo).'" style="width: 16px" > '.$project->vendor_name;
            $row[] = $project->username;
            $row[] = '<span class="label label-success">ACTIVE</span>';            
            $row[] = '<div class="progress progress-xs" data-progressbar-value="'.$project->progress.'"><div class="progress-bar"></div></div>';

            

            //add html for action
            // $row[] = '<center><a  class="btn btn-danger btn-xs btn-block" rel="tooltip" data-placement="top" data-original-title="Detail PO" href="'.base_url('po_detail/index/'.$project->po_no).'"><i class="fa fa-list-ul"></i> Details</a></center>';
            $row[] = '<center><a href="'.base_url('po_detail/index/'.$project->po_no).'" target="_blank" rel="tooltip" title="" data-placement="top" data-original-title="Approve" style="color: white;"><span class="badge bg-color-greenLight"><i class="fa fa-eye"></i></span></a>';
            
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->mpolist->count_all(),
            "recordsFiltered" => $this->mpolist->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }
}
