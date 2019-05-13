<?php
defined('BASEPATH') or exit('No direct script access allowed');

class po_detail extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        //  if($this->session->userdata('status') != "login"){
        //     redirect(base_url("/login/signOut"));
        // }
        //  $this->load->model('M_channel');

        $this->load->model('MGmenu');
        $this->load->model('mpodetail');
        $this->load->model('MGupdateheader');
        $this->load->model('MGloghistory');
        $this->load->model('MGupdatedetail');
    }

    public function index($data = null)
    {
        $script = array(
            'script' => TRUE,
            'script_url' => 'main_script'
        );

        $header['menu'] = $this->MGmenu->get_menu();
        $submit['get_vendor'] = $this->mpodetail->get_vendor($data)->row();
        $submit['get_current_doc'] = $this->mpodetail->get_current_doc($data)->result();
        $submit['get_current_bast'] = $this->mpodetail->get_current_bast($data)->result();
        $submit['get_current_invoice'] = $this->mpodetail->get_current_invoice($data)->result();



        $submit['get_current_doc_vendor'] = $this->mpodetail->get_current_doc_vendor($data)->result();
        $submit['get_current_bast_vendor'] = $this->mpodetail->get_current_bast_vendor($data)->result();
        $submit['get_current_invoice_vendor'] = $this->mpodetail->get_current_invoice_vendor($data)->result();



        $submit['po_detail'] = $this->mpodetail->get_po_detail($data)->row();
        // print_r($this->mpodetail->get_po_detail($data)->row());
        // die();
        $submit['get_history_doc'] = $this->mpodetail->get_history_doc($data)->result();
        // print_r($this->mpodetail->get_history_doc($data)->result());
        // die();
        $this->load->view('layout/header', $header);
        $this->load->view('main', $submit);
        $this->load->view('layout/footer', $script);
    }

    public function aksi_upload($po_no)
    {


        $config['upload_path']          = 'assets/doc/';
        // print_r($_FILES);


        // kurang cek versi
        $new_name = "PO_attachment_" . $po_no;
        $config['file_name'] = $new_name;

        $config['allowed_types']        = 'pdf';
        $file = $new_name . "." . $config['allowed_types'];
        // $config['max_size']             = 100;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('berkas')) {
            $error = array('error' => $this->upload->display_errors());
            redirect('po_list', 'refresh');
        } else {
            $data = array('upload_data' => $this->upload->data());


            // generate t_po_detail
            $cek_po_detail = $this->db->query("SELECT * FROM t_po_header where po_no='" . $po_no . "'")->row();

            $cek_po_template = $this->db->query("SELECT * FROM m_template WHERE template_name ='" . $cek_po_detail->po_desc . "'")->row();
            $approval = explode(",", $cek_po_template->approval_setting);
            $document_required = explode(",", $cek_po_template->document_req);

            foreach ($approval as $approval_set) {
                foreach ($document_required as $document) {
                    // echo $document . " akan di approve oleh " . $approval_set . "<br>";
                    $query = $this->db->query("INSERT INTO t_po_detail (po_no, doc_id,file_name,path,status,approved_by,signature_path,sign_date,order_level,hard_copy_image)
                VALUES ('" . $po_no . "', '" . $document . "','','','2','" . $approval_set . "','','','','')");
                }
            }

            // update header
            foreach ($approval as $approval_set) {
                $po_position = $approval_set;
                break;
            }
            $updateheader = $this->MGupdateheader->Update_header_upload_po_attach($po_no, $file, $po_position);
            // insert log
            if ($updateheader) {
                $data = array(
                    'po_no' => $po_no,
                    'doc_id' => '',
                    'path' => $file,
                    'type' => '1',
                    'version' => '1',
                    'create_by' => $_SESSION['username'],
                    'create_on' => date("Y-m-d H:i:s"),
                    'event_before' => date("Y-m-d H:i:s"),
                    'comment' => ''
                );
                $log = $this->MGloghistory->insert_history($data);
            }


            redirect('po_list', 'refresh');
        }
    }

    public function upload_required($po_no)
    {
        // cek detail po
        $cek_po_detail = $this->db->query("SELECT * FROM t_po_header where po_no='" . $po_no . "'")->row();
        $po_work = $cek_po_detail->po_position;
        $cek_po_template = $this->db->query("select * from t_po_detail where po_no='" . $po_no . "' and approved_by=$po_work and (doc_id !='D001')  ")->result();

        foreach ($cek_po_template as $looping) {

            if (!empty($_FILES[$looping->doc_id . "_" . $po_no])) {
                // kurang cek versi
                $new_name = "doc_req_" . $po_no . "_" . $looping->doc_id;
                $config['file_name'] = $new_name;

                $config['upload_path']          = 'assets/doc/';
                $config['allowed_types']        = 'pdf';

                $file = $new_name . "." . $config['allowed_types'];


                $this->load->library('upload', $config);
                $filenya = $looping->doc_id . "_" . $po_no;
                // echo $filenya;
                // kurang
                if (!$this->upload->do_upload($filenya)) {
                    $error = array('error' => $this->upload->display_errors());
                    // $this->load->view('v_upload', $error);
                    // print_r($error);
                    // redirect('po_list', 'refresh');
                } else {
                    $data = array('upload_data' => $this->upload->data());

                    // update t_po_detail
                    $updateheader = $this->MGupdatedetail->Update_detail_upload($po_no, $file, $looping->doc_id, $po_work);
                    // print_r($data);
                    // insert log
                    // redirect('po_list', 'refresh');
                }
            }
        }
        if ($updateheader) {
            $data = array(
                'po_no' => $po_no,
                'doc_id' => '',
                'path' => $file,
                'type' => '3',
                'version' => '1',
                'create_by' => $_SESSION['username'],
                'create_on' => date("Y-m-d H:i:s"),
                'event_before' => date("Y-m-d H:i:s"),
                'comment' => ''
            );
            $log = $this->MGloghistory->insert_history($data);
        }
        redirect('po_list', 'refresh');
    }

    public function update_status_detail($po_no)
    {
        $cek_po_detail = $this->db->query("SELECT * FROM t_po_header where po_no='" . $po_no . "'")->row();
        $po_work = $cek_po_detail->po_position;
        $cek_po_template = $this->db->query("select * from t_po_detail where po_no='" . $po_no . "' and approved_by=$po_work and (doc_id !='D001')  ")->result();
        foreach ($cek_po_template as $looping) {
            if (!empty($_POST[$looping->doc_id . "_" . $po_no])) {
                $status = $_POST[$looping->doc_id . "_" . $po_no];

                // update detail
                $detail = $this->MGupdatedetail->Update_detail_status($po_no, $status, $looping->doc_id, $po_work);
                // log
                // redirect('po_list', 'refresh');
                
                if ($detail) {
                    $data = array(
                        'po_no' => $po_no,
                        'doc_id' => '',
                        'path' => '',
                        'type' => $status,
                        'version' => '1',
                        'create_by' => $_SESSION['username'],
                        'create_on' => date("Y-m-d H:i:s"),
                        'event_before' => date("Y-m-d H:i:s"),
                        'comment' => ''
                    );
                    $log = $this->MGloghistory->insert_history($data);

                    if ($log) {
                        // echo "log berhasil";
                    } else {
                        // echo "log gagal";
                    }
                } else {
                    // echo "update detail gaggal";
                }
                // cek header

                $cek_header = $this->MGupdateheader->cek_approval($po_no, $cek_po_detail->po_position);
                // echo $cek_header;
                if ($cek_header == '0') {
                    // cek Template
                    $this->mGupdateheader->ceK_template($cek_po_detail->po_desc);
                }

                redirect('po_list', 'refresh');
            }
        }
    }
}
