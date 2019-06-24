<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mlogin extends CI_Model
{

    var $table = 'm_user';

    public function cek_user($username, $password)
    {
        $this->db->from($this->table);
        $this->db->where('email', $username);
        $this->db->where('password', $password);
        $query = $this->db->get();

        return $query;
    }

    function default_user_group($user_id)
    {   
        $this->db->from($this->table);
        $this->db->join('user_group ug','ug.user_id=m_user.user_id');
        $this->db->join('groups g','g.group_id=ug.group_id','left');
        $this->db->where('ug.user_id', $user_id);
        $query = $this->db->get();
        return $query->result();

    }
}
