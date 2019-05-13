<?php
defined('BASEPATH') or exit('No direct script access allowed');

class add_po extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        //  if($this->session->userdata('status') != "login"){
        //     redirect(base_url("/login/signOut"));
        // }
        //  $this->load->model('M_channel');
        $this->load->model('MGmenu');
        $this->load->model('maddpo');
    }

    public function index()
    {
        $script = array(
            'script' => TRUE,
            'script_url' => 'main_script'
        );
        $submit['project']= $this->maddpo->get_project();
        $submit['template']= $this->maddpo->get_template();
        $submit['cost_center']= $this->maddpo->get_cost_center();
        $submit['vendor'] = $this->maddpo->get_vendor();
        $header['menu'] = $this->MGmenu->get_menu();
        $this->load->view('layout/header', $header);
        $this->load->view('main',$submit);
        $this->load->view('layout/footer', $script);
    }

    public function get_vendor(){
        $data = $this->maddpo->get_vendor();
        echo json_encode($data,JSON_PRETTY_PRINT);
    }


    public function create_po(){
        echo $this->input->post('po_no')."<br>";
        echo $this->input->post('po_creator')."<br>";
        echo $this->input->post('po_date')."<br>";
        echo $this->input->post('project_id')."<br>";
        echo $this->input->post('po_type')."<br>";
        echo $this->input->post('cost_center')."<br>";
        echo $this->input->post('bpid')."<br>";
        echo $this->input->post('vendor')."<br>";

        
        


    }
}
