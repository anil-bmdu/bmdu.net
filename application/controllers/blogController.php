<?php
defined('BASEPATH') or exit('No direct script access allowed');
class blogController extends CI_Controller
{
    public function blog()
    {
        $post['show'] = $this->blog_Model->getBlogs();
        $this->load->view('includes/header');
        $this->load->view('blog', $post);
        $this->load->view('includes/footer');
    }

    public function create_blog()
    {
        // $blog['show']=$this->blog_Model->blog_show_all();
        $blog_category['blog_category'] = $this->blog_Model->category_show_all();
        $this->load->view('blog_admin/includes/header_dash');
        $this->load->view('blog_admin/create_blog', $blog_category);
        $this->load->view('blog_admin/includes/footer');
    }
    public function blog_details()
    {
        $post['show'] = $this->blog_Model->getBlogs();
        $this->load->view('blog_admin/includes/header_dash');
        $this->load->view('blog_admin/blog_data', $post);
        $this->load->view('blog_admin/includes/footer');
    }

    public function blog_update($id)
    {
        // $blog_limit['blog_limit']=$this->blog_Model->getBlogs_limit();
        $post['post'] = $this->blog_Model->getBlogById($id);

        // $data_to_pass = array_merge($post, $blog_limit);

        $this->load->view('blog_admin/includes/header_dash');
        $this->load->view('blog_admin/blog_update', $post);
        $this->load->view('blog_admin/includes/footer');
    }

    public function blog_details_show($id)
    {
        // $blog['blog'] = $this->blog_Model->find_record_by_id($id);
        $show['show'] = $this->blog_Model->getBlogs_limit();
        $post['post'] = $this->blog_Model->getBlogById($id);
        $data_to_pass = array_merge($post, $show);

        $this->load->view('includes/header');
        $this->load->view('blog_details_show', $data_to_pass);
        $this->load->view('includes/footer');
    }

    public function blog_de($id)
    {
        $item = $this->blog_Model->blog_de($id);
        if ($item) {
            echo "<script>alert('Deleted Successfully!')
                        window.location.href='http://localhost/manish/blog-details'
                </script>";
        } else {
            echo "<script>alert('Hey! sorry something went wrong.')
                        window.location.href='http://localhost/manish/blog-details' 
                </script>";
        }
    }
    public function blog_create_code()
    {

        $data['meta_title'] = $this->input->post('meta_title');
        $data['meta_desc'] = $this->input->post('meta_desc');
        $data['meta_keywords'] = $this->input->post('meta_keywords');
        $data['category_id'] = $this->input->post('category_id');
        $data['heading'] = $this->input->post('heading');
        $data['paragraph'] = $this->input->post('paragraph');
        $data['blog_editor'] = $this->input->post('blog_editor');

        $config['upload_path'] = 'uploads/blog/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|jpe|pdf|doc|docx|rtf|text|txt';
        $config['encrypt'] = true;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data['image'] = $this->upload->data('file_name');
        }
        $blog_sub = $this->blog_Model->blog_create($data);

        if ($blog_sub) {
            echo "<script>alert('Create Blog successfully.')
                            window.location.href='http://localhost/manish/blog-dash'
                    </script>";
        } else {
            echo "<script>alert('Hey! sorry something went wrong.')
                            window.location.href='http://localhost/manish/create_blog' 
                    </script>";
        }
    }

    public function blog_update_code($id)
    {

        // $id = $this->input->post("id");
        $meta_title = $this->input->post('meta_title');
        $meta_desc = $this->input->post('meta_desc');
        $meta_keywords = $this->input->post('meta_keywords');
        $blog_title = $this->input->post('blog_title');
        $heading = $this->input->post('heading');
        $paragraph = $this->input->post('paragraph');
        $blog_editor = $this->input->post('blog_editor');


        // Check if a new image is uploaded
        if ($_FILES['image']['name'] != "") {
            $config['upload_path'] = 'uploads/blog/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|jpe|pdf|doc|docx|rtf|text|txt';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                $upload_data = $this->upload->data();
                $image_name = $upload_data['file_name'];
                $old_image = $this->input->post('image');
                if ($old_image && file_exists('uploads/blog/' . $old_image)) {
                    unlink('uploads/blog/' . $old_image);
                }
            }
        } else {
            $image_name = $this->input->post('image');
        }

        if ($image_name != '') {
            $data = [
                'meta_title' => $meta_title,
                'meta_desc' => $meta_desc,
                'meta_keywords' => $meta_keywords,
                'blog_title' => $blog_title,
                'heading' => $heading,
                'paragraph' => $paragraph,
                'blog_editor' => $blog_editor,
                'image' => $image_name
            ];
        } else {
            $data = [
                'meta_title' => $meta_title,
                'meta_desc' => $meta_desc,
                'meta_keywords' => $meta_keywords,
                'blog_title' => $blog_title,
                'heading' => $heading,
                'paragraph' => $paragraph,
                'blog_editor' => $blog_editor
            ];
        }

        $check = $this->blog_Model->post_update($data, $id);

        if ($check) {
            echo "<script>alert('Update Blog successfully.')
                    window.location.href='http://localhost/manish/blog-details'
            </script>";
        } else {
            echo "<script>alert('Hey! sorry something went wrong.')
                    window.location.href='http://localhost/manish/blog-details'
            </script>";
        }
    }




    /* blog_admin blog*/
    public function blog_admin()
    {
        $this->load->view('blog_admin/includes/header');
        $this->load->view('blog_admin/index');
        $this->load->view('blog_admin/includes/footer');
    }
    public function blog_dash()
    {
        $this->load->view('blog_admin/includes/header_dash');
        $this->load->view('blog_admin/blog_dash');
        $this->load->view('blog_admin/includes/footer');
    }

    public function blog_login()
    {
        // echo "blog  login";
        $this->form_validation->set_rules('user', 'user', 'trim|min_length[3]|max_length[20]|required');
        $this->form_validation->set_rules('pass', 'pass', 'trim|min_length[3]|max_length[20]|required');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        if ($this->form_validation->run() == FALSE) {
            echo "<script>alert('Hey! your details are incorrect please fill correct details.')
                       window.location.href='http://localhost/manish/blog-Admin' 
                </script>";
        } else {
            $ul = $this->input->post('user');
            $pl = $this->input->post('pass');
            $blog = $this->blog_Model->blog_admin($ul, $pl);
            if ($blog) {
                $session_blog = [
                    'id' => $blog->id,
                    'name' => $blog->username
                ];
                $this->session->set_userdata('login_blog', $session_blog);
                $var = $this->session->userdata('login_blog');
                $this->session->set_flashdata('login_success', 'Welcome! ' . $var['name']);
                echo "<script>alert('Welcome to Blog Panel.')
                        window.location.href='http://localhost/manish/blog-dash'
                    </script>";
            } else {
                $this->session->set_flashdata('login_failed', 'Username or password is incorrect.');
                echo "<script>
                       window.location.href='http://localhost/manish/blog-Admin' 
                    </script>";
            }
        }
    }
    public function blog_log_out()
    {
        $this->session->unset_userdata('login_blog');
        echo "<script>
                       window.location.href='http://localhost/manish/blog-Admin' 
            </script>";
    }

    /*  create blog category*/

    public function create_blog_category()
    {
        $this->load->view('blog_admin/includes/header_dash');
        $this->load->view('blog_admin/create_category');
        $this->load->view('blog_admin/includes/footer');
    }

    public function blog_category_code()
    {
        $blog_category = $this->input->post('blog_category');
        $existing_category = $this->blog_Model->get_category_by_name($blog_category);
        if ($existing_category) {
            echo "<script>alert('Hey! Sorry, the category already exists.')
                  window.location.href='http://localhost/manish/blog-dash'
                  </script>";
            return;
        }

        $blog_form = ['blog_category' => $blog_category];
        $result = $this->blog_Model->insert_category_blog($blog_form);

        if ($result) {
            echo "<script>alert('Blog Category Created Successfully!')
                  window.location.href='http://localhost/manish/blog-dash'
                  </script>";
        } else {
            echo "<script>alert('Hey! Sorry, something went wrong while creating the category.')
                  window.location.href='http://localhost/manish/blog-dash'
                  </script>";
        }
    }

    public function blog_category_details()
    {
        $blog_category['blog_category'] = $this->blog_Model->category_show_all();

        $this->load->view('blog_admin/includes/header_dash');
        $this->load->view('blog_admin/blog_category_data', $blog_category);
        $this->load->view('blog_admin/includes/footer');
    }
}
