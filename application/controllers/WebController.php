<?php
defined('BASEPATH') or exit('No direct script access allowed');
class WebController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}
	public function web_calculate()
	{
		$this->load->view('includes/header');
		$this->load->view('web_calculate/polo');
		$this->load->view('includes/footer');
	}
	public function looking()
	{
		$this->load->view('web_calculate/looking');
	}
	public function special_requirements()
	{
		$this->load->view('web_calculate/special_requirements');
	}
	public function domain_type()
	{
		$this->load->view('web_calculate/domain_type');
	}
	public function email_count()
	{
		$this->load->view('web_calculate/email_count');
	}
	public function email()
	{
		$this->load->view('web_calculate/email');
	}
	public function hosting_type()
	{
		$this->load->view('web_calculate/hosting_type');
	}
	public function page_count()
	{
		$this->load->view('web_calculate/page_count');
	}
	public function page_type()
	{
		$this->load->view('web_calculate/page_type');
	}
	public function quotation()
	{
		$this->load->view('web_calculate/quotation');
	}

	public function template()
	{
		$this->load->view('web_calculate/template');
	}

	public function calculate_store()
	{
		$otp = mt_rand(100000, 999999);
		$_SESSION['otp'] = $otp;
		$_SESSION['otp_time'] = time();
		$web_cal = array();
		$web_cal['name'] = $this->input->post('name');
		$web_cal['phone'] = $this->input->post('phone');
		$web_cal['email'] = $this->input->post('email');
		$web_cal['city'] = $this->input->post('city');
		$insert = $this->Web_Model->create3($web_cal);
		if ($insert) {
			$_SESSION['web_cal'] = $web_cal;
			// echo $web_cal['email'];
			// exit();
			$name = $this->input->post('name');
			$contact = $this->input->post('contact');
			$email = $this->input->post('email');
			$city = $this->input->post('city');

			$config['protocol'] = 'smtp';
			$config['smtp_host'] = 'mail.digitalutilization.com';
			$config['smtp_user'] = 'contact@digitalutilization.com';
			$config['smtp_pass'] = 'Jfj#0tn5';
			$config['smtp_port'] = '2525';
			$config['smtp_crypto'] = 'tls';
			$config['mailtype'] = 'text or html';
			$config['mailpath'] = '/usr/sbin/sendmail';
			$config['charset'] = 'utf-8';
			$config['wordwrap'] = TRUE;
			$this->email->initialize($config);
			$from_email = "contact@digitalutilization.com";
			$to_email = "$email";
			$this->email->from($from_email, 'BMDU.net');
			$this->email->to($to_email);
			$this->email->subject('Your OTP is Valid for 5 Minutes');
			$this->email->message('Your OTP is: ' . $otp);

			if ($this->email->send()) {
				echo "<script>alert('OTP sent to your email',)
                        window.location.href='http://localhost/manish/quo-otp'
                         </script>";
						 redirect('quo-otp');
			} else {
				echo "<script>alert('Failed to send OTP. Please try again later.')
                         window.location.href='http://localhost/manish/' 
                     </script>";
			}
		}
	}
	public function quo_otp()
	{
		$this->load->view('web_calculate/send_otp');
	}
	public function otp_verify()
	{
		$entered_otp = $this->input->post('otp');
		if (isset($_SESSION['otp']) && isset($_SESSION['otp_time'])) {
            $otp = $_SESSION['otp'];
            $otp_time = $_SESSION['otp_time'];
            $entered_otp = $this->input->post('otp'); // Assuming the OTP is submitted via POST

            if ($entered_otp == $otp && (time() - $otp_time) <= (5 * 60)) {
                // OTP verified, generate and save quotation
                $quotation_content = $this->load->view('web_calculate/quotation', '', TRUE); // Load the view containing your quotation content
                $file_name = 'quotation_' . date('YmdHis') . '.pdf'; // Generate a unique file name
                $file_path = FCPATH . 'uploads/' . $file_name; // File path where the quotation will be saved
                file_put_contents($file_path, $quotation_content);
				$config['protocol'] = 'smtp';
				$config['smtp_host'] = 'mail.digitalutilization.com';
				$config['smtp_user'] = 'contact@digitalutilization.com';
				$config['smtp_pass'] = 'Jfj#0tn5';
				$config['smtp_port'] = '2525';
				$config['smtp_crypto'] = 'tls';
				$config['mailtype'] = 'text or html';
				$config['mailpath'] = '/usr/sbin/sendmail';
				$config['charset'] = 'utf-8';
				$config['wordwrap'] = TRUE;
				$this->email->initialize($config);
				$from_email = "contact@digitalutilization.com";
				$to_email = "$email";
				$this->email->from($from_email, 'BMDU.net');
				$this->email->to($to_email);
				$html_content = $file_path;
				$this->email->subject('Your Quotation generated and saved');
				$this->email->message('Your Quotation '.$html_content);

                echo "<script>alert('OTP Verified. Quotation generated and saved.');
                      window.location.href='" . base_url('uploads/' . $file_name) . "'; // Redirect to the saved quotation file
                      </script>";
            } elseif ($entered_otp != $otp) {
                echo "<script>alert('Invalid OTP. Please try again');
                      window.location.href='" . site_url('quo-otp') . "'; // Redirect to the OTP page
                      </script>";
            } else {
                echo "<script>alert('Session expired. Please try again');
                      window.location.href='" . site_url('web_calculate') . "'; // Redirect to the calculation page
                      </script>";
            }
        } else {
            // Session data not set
            echo "<script>alert('Session data not set.');
                  window.location.href='" . site_url('web_calculate') . "'; // Redirect to the calculation page
                  </script>";
        }
	}
}
