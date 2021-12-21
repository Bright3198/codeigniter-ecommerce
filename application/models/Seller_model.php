<?php

class Seller_model extends CI_Model
{
    public function seller_login_check($data)
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where($data);
        $info          = $this->db->get();
        return $result = $info->row();
    }
}
