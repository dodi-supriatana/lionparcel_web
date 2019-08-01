<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mpolist extends CI_Model
{

    var $table = 't_po_header';
    var $column_order = array('po_no' ); //set column field database for datatable orderable
    var $column_search = array('po_no'); //set column field database for datatable searchable just firstname , lastname , address are searchable
    var $order = array('ctrl' => 'desc'); // default order 

    function __construct()
    {
        parent::__construct();
        // $this->load->model('M_master_menu');
    }


    private function _get_datatables_query()
    {


        $this->db->from($this->table);
        $this->db->join('m_vendor', 't_po_header.vendor_id=m_vendor.vendor_id', 'left');
        $this->db->join('groups', 'groups.group_id=t_po_header.po_position', 'left');
        // $this->db->join('user_group','user_group.id=t_po_header.po_position','left');
        // $this->db->join('m_user','m_user.user_id=user_group.user_id','left');
        // $this->db->join('groups','groups.group_id=user_group.group_id','left');



        $i = 0;

        foreach ($this->column_search as $item) // loop column 
            {
                if ($_POST['search']['value']) // if datatable send POST for search
                    {

                        if ($i === 0) // first loop
                            {
                                $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                                $this->db->like($item, $_POST['search']['value']);
                            } else {
                                $this->db->or_like($item, $_POST['search']['value']);
                            }

                        if (count($this->column_search) - 1 == $i) //last loop
                            $this->db->group_end(); //close bracket
                    }
                $i++;
            }

        if (isset($_POST['order'])) // here order processing
            {
                $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
            } else if (isset($this->order)) {
                $order = $this->order;
                $this->db->order_by(key($order), $order[key($order)]);
            }
    }

    function get_datatables()
    {
        $this->_get_datatables_query();
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function get_by_id($id)
    {
        $this->db->from($this->table);
        $this->db->where('id', $id);
        $query = $this->db->get();

        return $query->row();
    }

    public function save($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function delete_by_id($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }

    public function importData($data) {
        
        $res = $this->db->insert_batch('t_po_header',$data);
        if($res){
            return TRUE;
        }else{
            return FALSE;
        }
 
    }

    public function cek_po_ganda($po_no){
        $query=$this->db->query("SELECT * from t_po_header where po_no='".$po_no."'");
        
        return $query->num_rows();
    }
}
