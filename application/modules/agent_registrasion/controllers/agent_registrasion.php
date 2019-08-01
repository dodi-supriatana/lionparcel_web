<?php
defined('BASEPATH') or exit('No direct script access allowed');
 
class agent_registrasion extends MX_Controller
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
        $data['list_user'] = $this->db->query('SELECT
        u.nama,u.username,u.no_hp,l.nama_level,u.is_active,u.images
    FROM
        m_user u
    LEFT JOIN tb_level l on l.id_level=u.id_level
    where u.id_level="2"')->result();
        $this->load->view('layout/header');
        $this->load->view('main',$data);
        $this->load->view('layout/footer', $script);
    }

    public function ajax_list()
    {
        $list = $this->mpolist->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $project) {
            //    echo $project->active;
            if ($project->po_active == '0') {
                $status = '<span class="label label-danger">UNRELEASED</span>';
            } elseif ($project->po_active == '1') {
                $status = '<span class="label label-primary">RELEASED</span>';
            } elseif ($project->po_active == '2') {
                $status = '<span class="label label-warning">IN PROGRESS</span>';
            } elseif ($project->po_active == '3') {
                $status = '<span class="label label-default">READY FOR BAST</span>';
            } elseif ($project->po_active == '4') {
                $status = '<span class="label label-success">READY TO SUBMIT INVOICE</span>';
            } else {
                $status = '';
            }

            $no++;
            $row = array();
            $row[] = $project->po_no;
            // $row[] = $project->po_desc;
            // $row[] = $project->milestone;
            $row[] = date_format(new DateTime($project->po_date), 'd M Y');
            $row[] = $project->po_desc;
            $row[] = '<img src="' . base_url($project->logo) . '" style="width: 16px" > ' . $project->vendor_name;
            // $row[] = $project->group_name;
            $row[]='<center><span class="label label-primary" data-toggle="modal" data-target="#doc_pos">view Document List</span></center>';
            $row[] = $status;
            $row[] = '<div class="progress progress-xs" data-progressbar-value="' . $project->progress . '"><div class="progress-bar"></div></div>';
            //add html for action
            // $row[] = '<center><a  class="btn btn-danger btn-xs btn-block" rel="tooltip" data-placement="top" data-original-title="Detail PO" href="'.base_url('po_detail/index/'.$project->po_no).'"><i class="fa fa-list-ul"></i> Details</a></center>';
            if ($project->po_active == '3') {
                // $row[] = '<center><a href="' . base_url('po_detail/index/' . $project->po_no) . '" target="_blank" rel="tooltip" title="Details" data-placement="top" data-original-title="Approve" style="color: white;"><span class="badge bg-color-greenLight"><i class="fa fa-eye"></i></span></a><a href="' . base_url('assets/doc/BAST_PO2019005.doc'). '" target="_blank" rel="tooltip" title="Generate BAST" data-placement="top" data-original-title="Approve" style="color: white;"><span class="badge bg-color-orange"><i class="fa fa-print"></i></span></a>';
                $row[] = '<center><a href="' . base_url('po_detail/index/' . $project->po_no) . '" target="_blank" rel="tooltip" title="Details" data-placement="top" data-original-title="Approve" style="color: white;"><span class="badge bg-color-greenLight"><i class="fa fa-eye"></i></span></a>';

            } elseif ($project->po_active == '4') {
                // $row[] = '<center><a href="' . base_url('po_detail/index/' . $project->po_no) . '" target="_blank" rel="tooltip" title="Details" data-placement="top" data-original-title="Approve" style="color: white;"><span class="badge bg-color-greenLight"><i class="fa fa-eye"></i></span></a><a href="' . base_url('po_detail/index/' . $project->po_no) . '" target="_blank" rel="tooltip" title="SUBMIT INVOICE" data-placement="top" data-original-title="Approve" style="color: white;"><span class="badge bg-color-darken"><i class="fa fa-send-o"></i></span></a>';
                $row[] = '<center><a href="' . base_url('po_detail/index/' . $project->po_no) . '" target="_blank" rel="tooltip" title="Details" data-placement="top" data-original-title="Approve" style="color: white;"><span class="badge bg-color-greenLight"><i class="fa fa-eye"></i></span></a>';
            
            } else {
                $row[] = '<center><a href="' . base_url('po_detail/index/' . $project->po_no) . '" target="_blank" rel="tooltip" title="Details" data-placement="top" data-original-title="Approve" style="color: white;"><span class="badge bg-color-greenLight"><i class="fa fa-eye"></i></span></a>';
            }

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

    public function uploadData()
    {

        if ($this->input->post('submit')) {

            $path = 'assets/document/';
            require_once APPPATH . "/third_party/PHPExcel/PHPExcel.php";

            $config['upload_path'] = $path;
            $config['allowed_types'] = 'csv|xlsx|xls';
            $config['remove_spaces'] = TRUE;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('uploadFile')) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                $data = array('upload_data' => $this->upload->data());
            }
            if (empty($error)) {
                if (!empty($data['upload_data']['file_name'])) {
                    $import_xls_file = $data['upload_data']['file_name'];
                } else {
                    $import_xls_file = 0;
                }
                $inputFileName = $path . $import_xls_file;

                try {
                    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                    $objPHPExcel = $objReader->load($inputFileName);
                    $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
                    $flag = true;
                    $i = 0;
                    $count_add = 0;
                    $count_exists = 0;
                    foreach ($allDataInSheet as $value) {
                        if ($flag) {
                            $flag = false;
                            continue;
                        }

                        $data = $this->mpolist->cek_po_ganda($value['B']);

                        if ($data == 0) {
                            $inserdata[$i]['project_id'] = $value['A'];
                            $inserdata[$i]['po_no'] = $value['B'];
                            $inserdata[$i]['milestone'] = $value['C'];
                            $inserdata[$i]['po_desc'] = $value['D'];
                            $inserdata[$i]['vendor_id'] = $value['E'];
                            $inserdata[$i]['material_no'] = $value['F'];
                            $inserdata[$i]['po_creator'] = $value['G'];
                            $inserdata[$i]['po_date'] = $value['H'];
                            $inserdata[$i]['po_type'] = $value['I'];
                            $inserdata[$i]['cost_center'] = $value['J'];
                            $inserdata[$i]['bpid'] = $value['K'];
                            $inserdata[$i]['project_type'] = $value['L'];
                            $inserdata[$i]['po_position'] = '1';
                            $inserdata[$i]['po_active'] = '0';
                            $inserdata[$i]['progress'] = '0';
                            $count_add++;
                        } else {
                            $count_exists++;
                        }



                        $i++;

                        // print_r($inserdata);
                    }
                    // die();
                    $result = $this->mpolist->importData($inserdata);
                    if ($result) {
                        echo "Imported successfully";
                        echo $count_add . " PO added into list";
                        echo $count_exists . " PO already exists";
                    } else {
                        echo "ERROR !";
                    }
                } catch (Exception $e) {
                    die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
                        . '": ' . $e->getMessage());
                }
            } else {
                echo $error['error'];
            }
        }
        redirect(base_url('po_list'));
    }

    // public function generate_bast($po_no)
    // {
    //     $this->load->view('print');
    // }
}
