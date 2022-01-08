<?php
    class Message_Model extends CI_Model {

        public function save_message($data){
            return $this->db->insert('tbl_messages', $data);
        }

        public function get_messages($sender, $receiver){
            $sql_statement = "SELECT * FROM tbl_messages WHERE (
                (tbl_messages.sender = " . $sender . " AND tbl_messages.receiver = " . $receiver . ") 
                OR " . 
                "(tbl_messages.sender = " . $receiver . " AND tbl_messages.receiver = " . $sender . "))";

            // printf($sql_statement);
                
            $query = $this->db->query($sql_statement);

            return $query->result_array();
        }
    }
?>