<?php
defined('BASEPATH') or exit('No direct script access allowed');

class add_promo extends MX_Controller
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
        $this->load->model('Maddpromo');
    }

    public function index()
    {
        $script = array(
            'script' => TRUE,
            'script_url' => 'main_script'
        );
        // $header['menu'] = $this->MGmenu->get_menu();
        $this->load->view('layout/header');
        $this->load->view('main');
        $this->load->view('layout/footer', $script);
    }

    public function add()
    {
        $promo_name = $this->input->post('name');
        $highlight = $this->input->post('highlight');
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        $filename = $this->input->post('filename');

        // echo $promo_name."<br>".$highlight."<br>".$start_date."<br>".$end_date."<br>".$filename."<br>";

        if (($_FILES['my_file']['name'] != "")) {
            // Where the file is going to be stored
            $target_dir = "assets/promo/";
            $file = $_FILES['my_file']['name'];
            $path = pathinfo($file);
            $filename = $path['filename'].$promo_name;
            $ext = $path['extension'];
            $temp_name = $_FILES['my_file']['tmp_name'];
            $path_filename_ext = $target_dir ."Promo".date("YmdHis"). "." . $ext;

            // Check if file already exists
            if (file_exists($path_filename_ext)) {
                echo "Sorry, file already exists.";
            } else {
                move_uploaded_file($temp_name, $path_filename_ext);
                //  insert to db
                // $this->db->query("INSERT INTO promo (id,
                // promo_name,
                // highlight,
                // promo_start,
                // promo_date,
                // promo_code,
                // promo_image,
                // status,
                // setting_id,
                // )
                // VALUES ('',".$promo_name.",".$highlight.",".$start_date.",".$end_date.",'1','1')");
                $cek=$this->db->query("INSERT INTO promo (id,
                promo_name,
                highlight,
                promo_start,
                promo_date,
                promo_code,
                promo_image,
                status,
                setting_id
                )
                VALUES ('','".$promo_name."','".$highlight."','".$start_date."','".$end_date."','-','".$path_filename_ext."','1','1')");

                // die($cek);
                redirect(base_url('promo'));
            }
        }
    }
}
