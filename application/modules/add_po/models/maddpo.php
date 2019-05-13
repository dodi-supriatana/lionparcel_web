<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class maddpo extends CI_Model {

    function get_vendor()
    {
        $this->db->select('vendor_id,vendor_name');
        $this->db->from('m_vendor');
        $this->db->where('active','1');
        $query = $this->db->get();
        return $query->result();
    }

    function get_project(){
        $query=$this->db->query("SELECT * FROM m_project");
        return $query->result();
    }
    
    function get_cost_center(){
        $query=$this->db->query("SELECT * FROM m_cost_center");
        return $query->result();
    }

    function get_template(){
        $query=$this->db->query("SELECT * FROM m_template");
        return $query->result();
    }
}
