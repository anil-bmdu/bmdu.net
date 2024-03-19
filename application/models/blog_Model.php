<?php
defined('BASEPATH') or exit('No direct script access allowed');
class blog_Model extends CI_Model
{
    public function blog_create($data)
    {
        
        $blog9 = $this->db->insert('blog',$data);
        if($blog9){
            return true;
        } else{
            return false;
        }
    }
    /* COUNT DATA */
    public function bm()
    {
        return $this->db->count_all('blog');
    }
    public function bd()
    {
        return $this->db->count_all('blog_category');
    }
     /* COUNT END */
    public function blog_show()
    {
        $this->db->order_by("id", "DESC");
        $this->db->limit(3);
        // print_r($m);
        // die();
        $blog = $this->db->get('blog');
        if($blog){
            return $blog->result();
        } else{
            return false;
        }
    }
    public function blog_show_all()
    {
        $this->db->order_by("id", "DESC");
        $blog = $this->db->get('blog');
        if($blog){
            return $blog->result();
        } else{
            return false;
        }
        // $result = $this->db->get('blog')->result();
		// return $result;
    }
    public function blog_de($id)
{
 
    $file_info = $this->db->get_where('blog', array('id' => $id))->row();
    $file_name = $file_info->resume; 

    $result = $this->db->delete('blog', array('id' => $id));

    if ($result) {
        $file_path = '<?= base_url(uploads/blog/) ?>' . $file_name;
        if (file_exists($file_path)) {

            unlink($file_path);
        }
    }

    return $result;
}
public function find_record_by_id($id)
	{
		$result = $this->db->where('id',$id)->get('blog_category');
        if($result->row()){
            return $result->row();
        } else{
            return false;
        }
	}

public function post_update($data,$id)
{
    
    $this->db->where('id', $id);       
     $this->db->update('blog', $data);
     return $this->db->affected_rows() > 0;
}

/* admin blog */

public function blog_admin($ul,$pl)
{
    $ins3 = $this->db->where(['username'=>$ul, 'password'=>$pl]);
    $query = $this->db->get('blog_admin');
    if($query->num_rows() > 0){
        return $query->row();
    } else{
        return false;
    }
}

/* category blog category */
    public function insert_category_blog($blog_form){
        $blog98 = $this->db->insert('blog_category',$blog_form);
        if($blog98){
            return true;
        } else{
            return false;
        }
    }

    public function get_category_by_name($category_name) {
        $this->db->where('blog_category', $category_name);
        $query = $this->db->get('blog_category');
        return $query->row();
    }

    public function category_show_all(){
        $this->db->order_by("cat_id", "DESC");
        $blog = $this->db->get('blog_category');
        if($blog){
            return $blog->result();
        } else{
            return false;
        }
    }

    public function getBlogs() {
        $this->db->select('*');
        $this->db->order_by("id", "DESC");
        $this->db->from('blog');
        $this->db->join('blog_category', 'blog.category_id = blog_category.cat_id ');
        $query = $this->db->get();
        // foreach($query->result() as $row)

        if ($query) {
            return $query->result();
        }else {
            return array();
        }
    }
    public function getBlogs_limit() {
        $this->db->select('*');
        $this->db->order_by("id", "DESC");
        $this->db->from('blog');
        $this->db->join('blog_category', 'blog.category_id = blog_category.cat_id ');
        $this->db->limit(3);
        $query = $this->db->get();
        // foreach($query->result() as $row)

        if ($query) {
            return $query->result();
        }else {
            return array();
        }
    }

    public function getBlogById($id) {
    $this->db->select('*');
    $this->db->from('blog');
    $this->db->join('blog_category', 'blog.category_id = blog_category.cat_id');
    $this->db->where('blog.id', $id);
    $query = $this->db->get();

    if ($query->num_rows() == 1) {
        return $query->row(); // Return single row
    } else {
        return null; // Return null if no matching record found
    }
}

}