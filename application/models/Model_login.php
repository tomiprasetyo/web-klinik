<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_login extends CI_Model
{
    public function cek_login($where)
    {
        return $this->db->get_where("user", $where);
    }
}