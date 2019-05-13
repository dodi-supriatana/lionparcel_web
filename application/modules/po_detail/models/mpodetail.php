<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mpodetail extends CI_Model
{

    var $table = 't_po_header';

    function __construct()
    {
        parent::__construct();
        // $this->load->model('M_master_menu');
    }

    public function get_current_doc($po_no)
    {
        $this->db->from('t_po_detail');
        $this->db->join('m_doc', 'm_doc.doc_id=t_po_detail.doc_id', 'left');
        $this->db->join('t_po_header', 't_po_detail.po_no=t_po_header.po_no', 'left');
        $this->db->join('m_event', 't_po_detail.status=m_event.event_id', 'left');
        $this->db->where('t_po_detail.po_no', $po_no);
        $this->db->where('t_po_header.po_position', $_SESSION['group_id']);
        $this->db->where('t_po_detail.approved_by', $_SESSION['group_id']);
        $this->db->where('m_doc.doc_id !=', 'D001');
        $this->db->where('m_doc.doc_id !=', 'D002');
        $this->db->where('m_doc.doc_id !=', 'D003');
        return $this->db->get();
    }

    
    public function get_current_bast($po_no)
    {
        $query = $this->db->query("SELECT
        * 
    FROM
        `t_po_detail`
        LEFT JOIN `m_doc` ON `m_doc`.`doc_id` = `t_po_detail`.`doc_id`
        LEFT JOIN `t_po_header` ON `t_po_detail`.`po_no` = `t_po_header`.`po_no`
        LEFT JOIN `m_event` ON `t_po_detail`.`status` = `m_event`.`event_id` 
    WHERE
        t_po_detail.approved_by=t_po_header.po_position and `t_po_detail`.`po_no` = '".$po_no."' and (m_doc.doc_id ='D002') ");


return $query;
    }

    
    public function get_current_invoice($po_no)
    {
        $this->db->from('t_po_detail');
        $this->db->join('m_doc', 'm_doc.doc_id=t_po_detail.doc_id', 'left');
        $this->db->join('t_po_header', 't_po_detail.po_no=t_po_header.po_no', 'left');
        $this->db->join('m_event', 't_po_detail.status=m_event.event_id', 'left');
        $this->db->where('t_po_detail.po_no', $po_no);
        $this->db->where('t_po_header.po_position', $_SESSION['group_id']);
        $this->db->where('t_po_detail.approved_by', $_SESSION['group_id']);
        $this->db->where('m_doc.doc_id !=', 'D001');
        // $this->db->where('m_doc.doc_id !=', 'D002');
        // $this->db->where('m_doc.doc_id !=', 'D003');
        return $this->db->get();
    }

    public function get_current_doc_vendor($po_no)
    {
        $query = $this->db->query("SELECT
                                        * 
                                    FROM
                                        `t_po_detail`
                                        LEFT JOIN `m_doc` ON `m_doc`.`doc_id` = `t_po_detail`.`doc_id`
                                        LEFT JOIN `t_po_header` ON `t_po_detail`.`po_no` = `t_po_header`.`po_no`
                                        LEFT JOIN `m_event` ON `t_po_detail`.`status` = `m_event`.`event_id` 
                                    WHERE
                                        t_po_detail.approved_by=t_po_header.po_position and `t_po_detail`.`po_no` = '".$po_no."' and (m_doc.doc_id !='D001' and m_doc.doc_id !='D002' and m_doc.doc_id !='D003' ) ");


        return $query;
    }
    
    public function get_current_bast_vendor($po_no)
    {
        $query = $this->db->query("SELECT
                                        * 
                                    FROM
                                        `t_po_detail`
                                        LEFT JOIN `m_doc` ON `m_doc`.`doc_id` = `t_po_detail`.`doc_id`
                                        LEFT JOIN `t_po_header` ON `t_po_detail`.`po_no` = `t_po_header`.`po_no`
                                        LEFT JOIN `m_event` ON `t_po_detail`.`status` = `m_event`.`event_id` 
                                    WHERE
                                        t_po_detail.approved_by=t_po_header.po_position and `t_po_detail`.`po_no` = '".$po_no."' and (m_doc.doc_id ='D002') ");


        return $query;
    }
    public function get_current_invoice_vendor($po_no)
    {
        $query = $this->db->query("SELECT
                                        * 
                                    FROM
                                        `t_po_detail`
                                        LEFT JOIN `m_doc` ON `m_doc`.`doc_id` = `t_po_detail`.`doc_id`
                                        LEFT JOIN `t_po_header` ON `t_po_detail`.`po_no` = `t_po_header`.`po_no`
                                        LEFT JOIN `m_event` ON `t_po_detail`.`status` = `m_event`.`event_id` 
                                    WHERE
                                        t_po_detail.approved_by=t_po_header.po_position and `t_po_detail`.`po_no` = '".$po_no."' and (m_doc.doc_id ='D003') ");


        return $query;
    }
    public function get_vendor($po_no)
    {
        $this->db->from($this->table);
        $this->db->join('m_vendor', 'm_vendor.vendor_id =t_po_header.vendor_id', 'left');
        return $this->db->get();
    }

    public function get_history_doc($po_no)
    { 
        $this->db->select('t_po_history.create_on,t_po_history.event_before,m_event.history_icon,t_po_history.create_by,m_event.event_name,t_po_history.comment,t_po_history.path');
        $this->db->from('t_po_history');
        $this->db->join('m_doc', 'm_doc.doc_id=t_po_history.doc_id', 'left');
        // $this->db->join('user_group', 'user_group.id=t_po_history.create_by', 'left');
        // $this->db->join('m_user', 'm_user.user_id=user_group.user_id', 'left');
        $this->db->join('m_event', 't_po_history.type=m_event.event_id', 'left');
        $this->db->where('t_po_history.po_no', $po_no);
        $this->db->order_by('t_po_history.create_on','desc');
        return $this->db->get();  
    }

    public function get_po_detail($po_no){
        $query=$this->db->query('SELECT * from t_po_header 
                                 LEFT JOIN m_vendor v on v.vendor_id=t_po_header.vendor_id
                                 where po_no="'.$po_no.'"');
        return $query;
    }
}
