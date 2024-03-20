<?php
defined('BASEPATH') or exit('No direct script access allowed');

class seoController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }
    public function seoCalc()
    {
        $this->load->view('includes/header');
        $this->load->view('seoCalc');
        $this->load->view('includes/footer');
    }
    public function formSubmit()
	{
        $this->load->library('form_validation');
		$this->load->database();
	    $data = $this->input->post();
	//   echo "<pre>";
	//   print_r($data);exit;
	  if (!empty($_POST)) {
		$this->form_validation->set_rules('name', "Name", 'trim|required');
		$this->form_validation->set_rules('email', "Email", 'trim|required|valid_email|is_unique[calc.email]');
		$this->form_validation->set_rules('number', "Phone Number", 'trim|required');
		$this->form_validation->set_rules('url', "Website Links", 'trim|required');
        $this->form_validation->set_rules('industryName', "Name", 'trim|required');
		$this->form_validation->set_rules('numberOfKeywords', "Email", 'trim|required');
		$this->form_validation->set_rules('numberOfBacklinks', "Phone Number", 'trim|required');
		$this->form_validation->set_rules('levelOfOnPage', "Website Links", 'trim|required');
        $this->form_validation->set_rules('total', "Total Price", 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			// echo "Validation Not work";
			
            $this->session->set_flashdata('success_message', 'Please Enter Correct Entry!');
			// $this->load->view('welcome_message', $data);
			echo "<script>alert('Please Enter Correct Entry!');</script>";
			redirect("/", 'refresh');
		  	return;
		} else {
			$this->load->model('seo_Model');
			// print_r($this->input->post('email'));exit;
			$this->seo_Model->create_calc($this->input->post());

			// $this->load->library('email');
			// $to = $this->input->post("email");
			// $name = $this->input->post("name");
			// $email = $this->input->post("email");
			// $number = $this->input->post("number");
			// $subject = $this->input->post("url");

			// $message = 'Calculation added successfully';
			// $sendMessage = 'Here is Query <br> Name :-' . $name . ' <br> Email:- ' . $email . ' <br> Phone:- ' . $number . ' <br> Subject:- ' . $subject . ' <br> Message:- ' . $message;
			// $message = 'Thanks for query on ' . $cName . ', we will connncet you soon. for any query you can email us. ' . $infoemail;
			// $this->sendEmail($to, 'Query from website', $sendMessage);
			// $this->sendEmail($email, 'Thanks for Query on ' . $cName . '', $message);
			// redirect('/');
			echo "<script>alert('Calculation added successfully');</script>";
			$this->session->set_flashdata('success_message', 'Data added Successfully!');
			redirect("/", 'refresh');
			
		}
  
  
	  } else {
		$this->load-view('/', $data);
	  }
  
	}

    public function showcalcData(){
        $this->load->model('seo_Model');
        $data['calcData'] = $this->seo_Model->getcalc();
        // echo "<pre>";
        // print_r($data['calcData']);exit;
        $post['show'] = $this->seo_Model->getcalc();
        $this->load->view('admin/includes/header_dash');
        $this->load->view('admin/seo_data', $post);
        $this->load->view('admin/includes/footer');

    }
    
    public function seo_de($item_id) {
        // Call the delete_item method from the model
        $this->load->model('seo_Model');
        $deleted = $this->seo_Model->delete_item($item_id);

        if ($deleted) {
            // Deletion successful
            echo "<script>alert('Deletion successful!');</script>";
            redirect('showCalc','refresh'); // Redirect to a suitable location
        } else {
            // Deletion failed
            echo "Failed to delete item.";
        }
    }
}