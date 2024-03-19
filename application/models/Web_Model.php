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
}