<?php
defined('BASEPATH') or exit('No direct script access allowed');
class BMDU_modal extends CI_Model
{
    public function create($hire)
    {
        // print_r($hire['mobile']);
        
        $ins = $this->db->insert('hire_us',$hire);
        if($ins){
            return true;
        } else{
            return false;
        }
    }
    public function create3($web_cal)
    {
        
        $ins97 = $this->db->insert('web_calculate',$web_cal);
        if($ins97){
            return true;
        } else{
            return false;
        }
    }

    public function create_2($career_data)
    {
        
        $ins99 = $this->db->insert('job_apply',$career_data);
        if($ins99){
            return true;
        } else{
            return false;
        }
    }
    
    public function request_data($req)
    {
        $ins1 = $this->db->insert('request',$req);
        if($ins1){
            return true;
        } else{
            return false;
        }
    }
    
    public function quick_data($quick)
    {
        $ins2 = $this->db->insert('quick_inquary',$quick);
        if($ins2){
            return true;
        } else{
            return false;
        }
    }
    
    public function contact_data($contact)
    {
        $ins3 = $this->db->insert('contact',$contact);
        if($ins3){
            return true;
        } else{
            return false;
        }
    }
    
    public function logg($u,$p)
    {
        $ins3 = $this->db->where(['username'=>$u, 'password'=>$p]);
        $query = $this->db->get('admin');
        if($query->num_rows() > 0){
            return $query->row();
        } else{
            return false;
        }
    }
    
    public function cm()
    {
        return $this->db->count_all('contact');
    }
    
    public function hm()
    {
        return $this->db->count_all('hire_us');
    }
    
    public function qm()
    {
        return $this->db->count_all('quick_inquary');
    }
    
    public function rm()
    {
        return $this->db->count_all('request');
    }
    public function career_ad1()
    {
        return $this->db->count_all('job_apply');
    }
    public function career_post()
    {
        return $this->db->count_all('job_post');
    }
    
    public function ctd_m()
    {
        $this->db->order_by("id", "DESC");
        $cdt = $this->db->get('contact');
        if($cdt){
            return $cdt->result();
        } else{
            return false;
        }
    }
    
    public function hitd_m()
    {
        $this->db->order_by("id", "DESC");
        $hdt = $this->db->get('hire_us');
        if($hdt){
            return $hdt->result();
        } else{
            return false;
        }
    }
    
        public function qud_m()
    {
        $this->db->order_by("id", "DESC");
        $qudt = $this->db->get('quick_inquary');
        if($qudt){
            return $qudt->result();
        } else{
            return false;
        }
    }
    
        public function reqd_m()
    {
        $this->db->order_by("id", "DESC");
        $reqdt = $this->db->get('request');
        if($reqdt){
            return $reqdt->result();
        } else{
            return false;
        }
    }
        public function careerd_m()
    {
        $this->db->order_by("id", "DESC");
        $careerdt = $this->db->get('job_apply');
        if($careerdt){
            return $careerdt->result();
        } else{
            return false;
        }
    }
    

    /*job create post andmin */
    public function insert_job($job_form)
    {
        $job1 = $this->db->insert('job_post',$job_form);
        if($job1){
            return true;
        } else{
            return false;
        }
    }
    //show
    public function job_post()
    {
        $this->db->order_by("job_id", "DESC");
        $job = $this->db->get('job_post');
        if($job){
            return $job->result();
        } else{
            return false;
        }
    }

    /* hr admin  */
    public function hr($ul,$pl)
    {
        $ins3 = $this->db->where(['username'=>$ul, 'password'=>$pl]);
        $query = $this->db->get('hr_admin');
        if($query->num_rows() > 0){
            return $query->row();
        } else{
            return false;
        }
    }

    public function job_d()
    {
        $this->db->order_by("job_id", "DESC");
        $jobdt = $this->db->get('job_post');
        if($jobdt){
            return $jobdt->result();
        } else{
            return false;
        }
    }
/* delete  */
public function career_delete($job_id)
    {
        $result = $this->db->delete('job_post', array('job_id' => $job_id));
        return $result;
    }


public function contact_de($id)
    {
        $result = $this->db->delete('contact', array('id' =>$id));
        return $result;
    }
public function hire_de($id)
    {
        $result = $this->db->delete('hire_us', array('id' =>$id));
        return $result;
    }
public function quick_de($id)
    {
        $result = $this->db->delete('quick_inquary', array('id' =>$id));
        return $result;
    }
public function request_de($id)
    {
        $result = $this->db->delete('request', array('id' =>$id));
        return $result;
    }
public function resume_delete($id)
{
 
    $file_info = $this->db->get_where('job_apply', array('id' => $id))->row();
    $file_name = $file_info->resume; 

    $result = $this->db->delete('job_apply', array('id' => $id));

    if ($result) {
        $file_path = '<?= base_url(uploads) ?>' . $file_name;
        if (file_exists($file_path)) {

            unlink($file_path);
        }
    }

    return $result;
}
/* update job post model */
public function find_record_by_id($job_id)
	{
		$result = $this->db->where('job_id',$job_id)->get('job_post');
        if($result->row()){
            return $result->row();
        } else{
            return false;
        }
	}

    public function post_update($job_id, $job_data)
    {
        $this->db->where('job_id', $job_id);
        $this->db->update('job_post', $job_data);

        return $this->db->affected_rows() > 0;
    }

    /* job-details */
    public function job_show()
    {
        $this->db->order_by("job_id", "DESC");
        $this->db->limit(3);
        $blog = $this->db->get('job_post');
        if($blog){
            return $blog->result();
        } else{
            return false;
        }
    }
}
?>