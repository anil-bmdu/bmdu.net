<?php
defined('BASEPATH') or exit('No direct script access allowed');
class WebController extends CI_Controller
{

	public function __construct(){
		parent::__construct();
		// $this->load->library('m_pdf');
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

        // $this->load->view('includes/header');
        // $this->load->view('web_calculate/quotation');
		// $this->load->view('includes/footer');
		
	}
	public function quo_otp()
	{
		$this->load->view('web_calculate/send_otp');
	}
	public function template()
	{
		$this->load->view('web_calculate/template');

	}

    public function calculate_store() {
        $web_cal= array();
        $web_cal['name']= $this->input->post('name');
        $web_cal['phone']= $this->input->post('phone');
        $web_cal['email']= $this->input->post('email');
        $web_cal['city']= $this->input->post('city');

        $insert = $this->Web_Model->create3($web_cal);
        if($insert){
            
            // $_SESSION['web_cal'] = $web_cal;

			// $this->load->view('web_calculate/quotation');


			//   $this->load->library('pdf');
			// 	$data = array(); 
			// 	$html = $this->load->view('web_calculate/quotation', $data, true);
			// 	$dompdf = new PDF();
			// 	$dompdf->loadHtml($html);
			// 	$dompdf->setPaper('A4', 'portrait'); 
			// 	$dompdf->render();
			// 	$output = $dompdf->output();
				
			// 	header('Content-Type: application/pdf');
			// 	header('Content-Disposition: attachment; filename="quotation.pdf"');
			// 	header('Content-Length: ' . strlen($output));
			// 	header('Content-Transfer-Encoding: binary');
			// 	ob_clean();
			// 	flush(); 
			// 	 $output;
				 
			// 	exit;
            // echo "<script>alert('We’ll notify you soon.')
			// 			window.location.href='http://localhost/manish/quotation'
			// 	</script>";
			
			// $this->load->library('');
			// $showdata=[];
			// $html=$this->load->view('web_calculate/quotation', $showdata, true);

			// $pdfFilePath="quotation.pdf";
			// $this->m_pdf->pdf->WriteHTML($html);
			// $this->m_pdf->pdf->Output($pdfFilePath, "D");	
            
    //     } else{
    //         echo "<script>alert('Hey! sorry something went wrong.')
    //               window.location.href='http://localhost/manish/' 
    //             </script>";
    //     }
    // }
	// public function textpdf(){
	// 	$this->load->library('pdf');
	// 	$data = array(); 
	// 	$html = $this->load->view('web_calculate/quotation', $data, true);
	// 	$dompdf = new PDF();
	// 	$dompdf->loadHtml($html);
	// 	$dompdf->setPaper('A4', 'portrait'); 
	// 	$dompdf->render();
	// 	$output = $dompdf->output();
		
	// 	header('Content-Type: application/pdf');
	// 	header('Content-Disposition: attachment; filename="quotation.pdf"');
	// 	header('Content-Length: ' . strlen($output));
	// 	header('Content-Transfer-Encoding: binary');
	// 	ob_clean();
	// 	flush(); 

	// 	echo $output;
	// 	exit;
	// }
		
	
	


}
	}
}