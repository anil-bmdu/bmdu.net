<?php
defined('BASEPATH') or exit('No direct script access allowed');

class seo_Model extends CI_Model{
    public function create_calc($data)
    {
        return $this->db->insert('calc', $data);
    }
    public function getcalc()
    {
        $q=$this->db->select()
                    ->from('calc')
                    ->get();
                return $q->result();
              
    }
    public function seocount()
    {
        return $this->db->count_all('calc');
    }
    public function delete_item($item_id) {
        // Assuming 'items' is the name of your table
        $this->db->where('id', $item_id);
        $this->db->delete('calc');
        
        // Check if the deletion was successful
        return $this->db->affected_rows() > 0;
    }
}