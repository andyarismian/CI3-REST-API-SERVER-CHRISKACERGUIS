<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_history extends CI_Model
{
    public function get_data($id = null)
    {
        if ($id == null) {
            $this->db->select('*');
            $query = $this->db->get('history');
            return $query->result_array();
        } else {
            $this->db->select('*');
            $this->db->where('id', $id);
            $query = $this->db->get('history');
            return $query->row_array();
        }
    }
}
                        
/* End of file M_history.php */
