<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Web_Model extends CI_Model
{
    public function create3($web_cal)
    {  
        
        $ins97 = $this->db->insert('web_calculate',$web_cal);
        if($ins97){
            return true;
        } else{
            return false;
        }
    }
    public function create_webcal($data)
    {  
        $this->db->insert('web_calculate', $data);
        return $this->db->insert_id();
    }

    public function web()
    {
        return $this->db->count_all('web_calculate');
    }
    
     public function Web_m()
    {
        $this->db->order_by("id", "DESC");
        $cdt = $this->db->get('web_calculate');
        if($cdt){
            return $cdt->result();
        } else{
            return false;
        }
    }
}