<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mlogin extends CI_Model
{

    var $table = 'm_user';

    public function cek_user($username, $password)
    {
        $this->db->from($this->table);
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get();

        return $query;
    }

    function default_user_group($user_id)
    {
        // die($user_id);
        $query = $this->db->query("SELECT * FROM m_user u
       LEFT JOIN tb_level l on u.id_level=l.id_level
       WHERE u.id_user='$user_id'");
        return $query->result();
    }
}
