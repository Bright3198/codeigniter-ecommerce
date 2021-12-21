<?php

class user_Model extends CI_Model
{

    public function save_user_info($data)
    {
        return $this->db->insert('tbl_user', $data);
    }

    public function getall_user_info()
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->join('user_role','user_role.role_id = user_role');
        $info = $this->db->get();
        return $info->result();
    }

    public function edit_user_info($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('user_id', $id);
        $info = $this->db->get();
        return $info->row();
    }

    public function delete_user_info($id)
    {
        $this->db->where('user_id', $id);
        return $this->db->delete('tbl_user');
    }

    public function update_user_info($data, $id)
    {
        $this->db->where('user_id', $id);
        return $this->db->update('tbl_user', $data);
    }



}
