<?php

defined('BASEPATH') or exit('No direct script access allowed');
class BMDU extends CI_Controller
{
	public function index()
	{
		// $blog['show']=$this->blog_Model->blog_show();
		$blog['show'] = $this->blog_Model->getBlogs_limit();
		$this->load->view('includes/header');
		$this->load->view('index', $blog);
		$this->load->view('includes/footer');
	}

	public function web_design()
	{
		$this->load->view('includes/header');
		$this->load->view('web_design_services');
		$this->load->view('includes/footer');
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
		$this->load->view('web_calculate/template');
	}
	public function quo_otp()
	{
		$this->load->view('web_calculate/send_otp');
	}

	public function web_development()
	{
		$this->load->view('includes/header');
		$this->load->view('web_development_services');
		$this->load->view('includes/footer');
	}

	public function app_development()
	{
		$this->load->view('includes/header');
		$this->load->view('app_development_services');
		$this->load->view('includes/footer');
	}

	public function graphic_design()
	{
		$this->load->view('includes/header');
		$this->load->view('graphic_design_services');
		$this->load->view('includes/footer');
	}

	public function digital_marketing()
	{
		$this->load->view('includes/header');
		$this->load->view('digital_marketing_services');
		$this->load->view('includes/footer');
	}

	public function location_based1()
	{
		$this->load->view('includes/header');
		$this->load->view('location_based_india');
		$this->load->view('includes/footer');
	}

	public function location_based2()
	{
		$this->load->view('includes/header');
		$this->load->view('location_based_usa');
		$this->load->view('includes/footer');
	}

	public function hire_ui_team()
	{
		$this->load->view('includes/header');
		$this->load->view('hire_ui_team');
		$this->load->view('includes/footer');
	}

	public function website_maintenance_team()
	{
		$this->load->view('includes/header');
		$this->load->view('website_maintenance_team');
		$this->load->view('includes/footer');
	}

	public function digital_marketing_team()
	{
		$this->load->view('includes/header');
		$this->load->view('digital_marketing_team');
		$this->load->view('includes/footer');
	}

	public function social_media_management()
	{
		$this->load->view('includes/header');
		$this->load->view('social-media-management');
		$this->load->view('includes/footer');
	}

	public function app_maintenance_team()
	{
		$this->load->view('includes/header');
		$this->load->view('app_maintenance_team');
		$this->load->view('includes/footer');
	}

	public function pr_team()
	{
		$this->load->view('includes/header');
		$this->load->view('pr_team');
		$this->load->view('includes/footer');
	}

	public function accounting()
	{
		$this->load->view('includes/header');
		$this->load->view('accounting');
		$this->load->view('includes/footer');
	}

	public function biotech()
	{
		$this->load->view('includes/header');
		$this->load->view('biotech');
		$this->load->view('includes/footer');
	}

	public function healthcare()
	{
		$this->load->view('includes/header');
		$this->load->view('healthcare');
		$this->load->view('includes/footer');
	}

	public function financial()
	{
		$this->load->view('includes/header');
		$this->load->view('financial');
		$this->load->view('includes/footer');
	}

	public function engineering()
	{
		$this->load->view('includes/header');
		$this->load->view('engineering');
		$this->load->view('includes/footer');
	}

	public function hospitalities()
	{
		$this->load->view('includes/header');
		$this->load->view('hospitalities');
		$this->load->view('includes/footer');
	}

	public function retail()
	{
		$this->load->view('includes/header');
		$this->load->view('retail');
		$this->load->view('includes/footer');
	}

	public function about()
	{
		$this->load->view('includes/header');
		$this->load->view('about_us');
		$this->load->view('includes/footer');
	}

	public function contact()
	{
		$this->load->view('includes/header');
		$this->load->view('contact-us');
		$this->load->view('includes/footer');
	}
	// public function seoCalc()
	// {
	// 	$this->load->view('includes/header');
	// 	$this->load->view('seoCalc');
	// 	$this->load->view('includes/footer');

	// }

	public function request()
	{
		$this->load->view('includes/header');
		$this->load->view('request');
	}

	public function portfolio()
	{
		$this->load->view('includes/header');
		$this->load->view('portfolio');
		$this->load->view('includes/footer');
	}

	public function designing_a_strong_online_presence_the_best_biotech_website_designs()
	{
		$this->load->view('includes/header');
		$this->load->view('designing_a_strong_online_presence_the_best_biotech_website_designs');
		$this->load->view('includes/footer');
	}

	public function pros_and_cons_of_hiring_a_digital_marketing_company()
	{
		$this->load->view('includes/header');
		$this->load->view('pros_and_cons_of_hiring_a_digital_marketing_company');
		$this->load->view('includes/footer');
	}


	public function what_steps_is_the_internet_publishing_industry_taking_to_improve_digital_literacy_and_media_education()
	{
		$this->load->view('includes/header');
		$this->load->view('what_steps_is_the_internet_publishing_industry_taking_to_improve_digital_literacy_and_media_education');
		$this->load->view('includes/footer');
	}



	public function how_can_improve_website_traffic_through_seo()
	{
		$this->load->view('includes/header');
		$this->load->view('how_can_improve_website_traffic_through_seo');
		$this->load->view('includes/footer');
	}

	public function violation_of_google’s_webmaster_guidelines()
	{
		$this->load->view('includes/header');
		$this->load->view('violation_of_google’s_webmaster_guidelines');
		$this->load->view('includes/footer');
	}

	public function important_advice_for_improving_your_search_rankings()
	{
		$this->load->view('includes/header');
		$this->load->view('important_advice_for_improving_your_search_rankings');
		$this->load->view('includes/footer');
	}





	public function why_digital_should_be_your_first_choice_when_you_think_to_invest()
	{
		$this->load->view('includes/header');
		$this->load->view('why_digital_should_be_your_first_choice_when_you_think_to_invest');
		$this->load->view('includes/footer');
	}

	public function can_digital_marketing_be_replaced_by_AI()
	{
		$this->load->view('includes/header');
		$this->load->view('can_digital_marketing_be_replaced_by_AI.php');
		$this->load->view('includes/footer');
	}

	public function how_to_noindex_a_webPage_paragraph_and_PDF_on_google()
	{
		$this->load->view('includes/header');
		$this->load->view('how_to_noindex_a_webPage_paragraph_and_PDF_on_google');
		$this->load->view('includes/footer');
	}

	public function what_is_kpi_in_digital_marketing_and_why_is_it_important()
	{
		$this->load->view('includes/header');
		$this->load->view('what_is_kpi_in_digital_marketing_and_why_is_it_important');
		$this->load->view('includes/footer');
	}

	public function the_power_of_google_shopping_ads_driving_e_commerce_sales_to_new_heights()
	{
		$this->load->view('includes/header');
		$this->load->view('the_power_of_google_shopping_ads_driving_e_commerce_sales_to_new_heights');
		$this->load->view('includes/footer');
	}

	public function latest_google_adword_update_2023()
	{
		$this->load->view('includes/header');
		$this->load->view('latest_google_adword_update_2023');
		$this->load->view('includes/footer');
	}


	/* career page */
	public function career()
	{
		$job_post['show'] = $this->BMDU_modal->job_post();
		$this->load->view('includes/header');
		$this->load->view('career', $job_post);
		$this->load->view('includes/footer');
	}
	public function career_ap()
	{
		$this->load->view('includes/header');
		$this->load->view('career_apply');
		$this->load->view('includes/footer');
	}
	public function job_details($job_id)

	{
		$job['post'] = $this->BMDU_modal->find_record_by_id($job_id);
		$show['show'] = $this->BMDU_modal->job_show();
		$data_to_pass = array_merge($job, $show);
		$this->load->view('includes/header');
		$this->load->view('job_details', $data_to_pass);
		$this->load->view('includes/footer');
	}

	public function career_ap_form()
	{
		$config['allowed_types'] = 'pdf|doc|docx';
		$config['upload_path'] = 'uploads/';
		// $config['max_size'] = 1024;
		$config['encrypt'] = true;
		$this->load->library('upload', $config);

		if ($this->upload->do_upload('resume')) {
			$file_data = $this->upload->data();

			$career_form = [
				'name' => $this->input->post('fname'),
				'phone' => $this->input->post('phone'),
				'email' => $this->input->post('email'),
				'position' => $this->input->post('position'),
				'skills' => $this->input->post('skills'),
				'experience' => $this->input->post('experience'),
				'message' => $this->input->post('message'),
				'resume' => 'uploads/' . $file_data['file_name']
			];
			$job_apply = $this->BMDU_modal->create_2($career_form);
			if ($job_apply) {
				echo "<script>alert('We’ll notify you soon.')
						window.location.href='http://localhost/manish/'
				</script>";
			} else {
				echo "<script>alert('Hey! sorry something went wrong.')
						window.location.href='http://localhost/manish/' 
				</script>";
			}
		} else {
			echo "<script>alert('Hey! sorry something went wrong.')
						window.location.href='http://localhost/manish/' 
				</script>";
		}
	}


	public function logo_designs()
	{
		$this->load->view('includes/header');
		$this->load->view('logo_designs');
		$this->load->view('includes/footer');
	}

	public function responsive()
	{
		$this->load->view('includes/header');
		$this->load->view('responsive');
		$this->load->view('includes/footer');
	}

	public function graphics_design()
	{
		$this->load->view('includes/header');
		$this->load->view('graphics_design');
		$this->load->view('includes/footer');
	}

	public function dynamic_website()
	{
		$this->load->view('includes/header');
		$this->load->view('dynamic-website');
		$this->load->view('includes/footer');
	}

	public function parrelex_website()
	{
		$this->load->view('includes/header');
		$this->load->view('parrelex-website-design');
		$this->load->view('includes/footer');
	}

	public function b2bwebsite()
	{
		$this->load->view('includes/header');
		$this->load->view('b2bwebsite');
		$this->load->view('includes/footer');
	}

	public function static_website()
	{
		$this->load->view('includes/header');
		$this->load->view('static_website');
		$this->load->view('includes/footer');
	}

	public function business_website_design()
	{
		$this->load->view('includes/header');
		$this->load->view('business_website_design');
		$this->load->view('includes/footer');
	}

	public function alumni_website_design()
	{
		$this->load->view('includes/header');
		$this->load->view('alumni_website_design');
		$this->load->view('includes/footer');
	}

	public function custom_website_design()
	{
		$this->load->view('includes/header');
		$this->load->view('custom_website_design');
		$this->load->view('includes/footer');
	}

	public function ecommerce()
	{
		$this->load->view('includes/header');
		$this->load->view('ecommerce');
		$this->load->view('includes/footer');
	}

	public function phpwebsite()
	{
		$this->load->view('includes/header');
		$this->load->view('phpwebsite');
		$this->load->view('includes/footer');
	}

	public function node_js_website_development()
	{
		$this->load->view('includes/header');
		$this->load->view('node_js_website_development');
		$this->load->view('includes/footer');
	}

	public function core_PHP_website_development()
	{
		$this->load->view('includes/header');
		$this->load->view('core_PHP_website_development');
		$this->load->view('includes/footer');
	}

	public function website_development_with_angular_js()
	{
		$this->load->view('includes/header');
		$this->load->view('website_development_with_angular_js');
		$this->load->view('includes/footer');
	}

	public function website_development()
	{
		$this->load->view('includes/header');
		$this->load->view('website_development');
		$this->load->view('includes/footer');
	}

	public function alumni_website_development()
	{
		$this->load->view('includes/header');
		$this->load->view('alumni_website_development');
		$this->load->view('includes/footer');
	}

	public function android_app()
	{
		$this->load->view('includes/header');
		$this->load->view('android_app');
		$this->load->view('includes/footer');
	}

	public function ios_app()
	{
		$this->load->view('includes/header');
		$this->load->view('ios_app');
		$this->load->view('includes/footer');
	}

	public function react_app()
	{
		$this->load->view('includes/header');
		$this->load->view('react_app');
		$this->load->view('includes/footer');
	}

	public function flyers_and_banner_designing()
	{
		$this->load->view('includes/header');
		$this->load->view('flyers_and_banner_designing');
		$this->load->view('includes/footer');
	}

	public function brochure_designing()
	{
		$this->load->view('includes/header');
		$this->load->view('brochure_designing');
		$this->load->view('includes/footer');
	}

	public function leaflet_designing()
	{
		$this->load->view('includes/header');
		$this->load->view('leaflet_designing');
		$this->load->view('includes/footer');
	}

	public function visiting_card_designing()
	{
		$this->load->view('includes/header');
		$this->load->view('visiting_card_designing');
		$this->load->view('includes/footer');
	}

	public function packaging_designing()
	{
		$this->load->view('includes/header');
		$this->load->view('packaging_designing');
		$this->load->view('includes/footer');
	}

	public function motion_graphic_designing()
	{
		$this->load->view('includes/header');
		$this->load->view('motion_graphic_designing');
		$this->load->view('includes/footer');
	}

	public function video_creation()
	{
		$this->load->view('includes/header');
		$this->load->view('video_creation');
		$this->load->view('includes/footer');
	}

	public function search_engine_optimization()
	{
		$this->load->view('includes/header');
		$this->load->view('search_engine_optimization');
		$this->load->view('includes/footer');
	}

	public function social_media_optimization()
	{
		$this->load->view('includes/header');
		$this->load->view('social_media_optimization');
		$this->load->view('includes/footer');
	}

	public function paid_ads()
	{
		$this->load->view('includes/header');
		$this->load->view('paid_ads');
		$this->load->view('includes/footer');
	}

	public function gmb_expert()
	{
		$this->load->view('includes/header');
		$this->load->view('gmb_expert');
		$this->load->view('includes/footer');
	}

	public function app_store_optimization()
	{
		$this->load->view('includes/header');
		$this->load->view('app_store_optimization');
		$this->load->view('includes/footer');
	}

	public function online_reputation_management()
	{
		$this->load->view('includes/header');
		$this->load->view('online_reputation_management');
		$this->load->view('includes/footer');
	}

	public function lead_generation()
	{
		$this->load->view('includes/header');
		$this->load->view('lead_generation');
		$this->load->view('includes/footer');
	}

	public function seo_services_in_delhi()
	{
		$this->load->view('includes/header');
		$this->load->view('seo-services-in-delhi');
		$this->load->view('includes/footer');
	}

	public function orm_services_in_delhi()
	{
		$this->load->view('includes/header');
		$this->load->view('orm-services-in-delhi');
		$this->load->view('includes/footer');
	}


	public function smo_services_in_delhi()
	{
		$this->load->view('includes/header');
		$this->load->view('smo-services-in-delhi');
		$this->load->view('includes/footer');
	}


	public function website_design_company_in_delhi()
	{
		$this->load->view('includes/header');
		$this->load->view('website_design_company-in-delhi');
		$this->load->view('includes/footer');
	}

	public function local_seo_services_in_delhi()
	{
		$this->load->view('includes/header');
		$this->load->view('local-seo-services-in-delhi');
		$this->load->view('includes/footer');
	}

	public function ppc_services_in_delhi()
	{
		$this->load->view('includes/header');
		$this->load->view('ppc-services-in-delhi');
		$this->load->view('includes/footer');
	}

	public function seo_services_in_california()
	{
		$this->load->view('includes/header');
		$this->load->view('seo-services-in-california');
		$this->load->view('includes/footer');
	}

	public function orm_services_in_dallas()
	{
		$this->load->view('includes/header');
		$this->load->view('orm-services-in-dallas');
		$this->load->view('includes/footer');
	}

	public function smo_services_in_losangels()
	{
		$this->load->view('includes/header');
		$this->load->view('smo-services-in-losangels');
		$this->load->view('includes/footer');
	}

	public function seo_services_in_pa()
	{
		$this->load->view('includes/header');
		$this->load->view('seo-services-in-pa');
		$this->load->view('includes/footer');
	}

	public function local_seo_services_in_newyork()
	{
		$this->load->view('includes/header');
		$this->load->view('local-seo-services-in-newyork');
		$this->load->view('includes/footer');
	}

	public function ppc_services_in_diego()
	{
		$this->load->view('includes/header');
		$this->load->view('ppc-services-in-diego');
		$this->load->view('includes/footer');
	}

	public function website_design_company_in_gurgaon()
	{
		$this->load->view('includes/header');
		$this->load->view('website_design_company-in-gurgaon');
		$this->load->view('includes/footer');
	}

	public function how_to_design_a_website()
	{
		$this->load->view('includes/header');
		$this->load->view('how_to_design_a_website');
		$this->load->view('includes/footer');
	}

	public function mail()
	{
		$this->load->view('includes/header');
		$this->load->view('mail');
		$this->load->view('includes/footer');
	}
	/////////////////////////////////////hire-us form
	public function new_hire()
	{
		$this->form_validation->set_rules('name', 'name', 'trim|min_length[3]|max_length[20]|website');

		// $this->form_validation->set_rules('contact','contact','numeric|website');
		$this->form_validation->set_rules('email', 'email', 'valid_email|website');
		$this->form_validation->set_rules('message', 'project details', 'trim|website');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		if ($this->form_validation->run() == FALSE) {
			echo "<script>alert('Hey! Some fields are blank or invalid details.Please re-submit your form.')
                       window.location.href='http://localhost/manish/' 
                </script>";
		} else {
			$hire = array();
			$hire['name'] = $this->input->post('name');
			$hire['mobile'] = $this->input->post('contact');
			$hire['email'] = $this->input->post('email');
			$hire['project_details'] = $this->input->post('message');

			$insert = $this->BMDU_modal->create($hire);
			if ($insert) {
				$name = $this->input->post('name');
				$contact = $this->input->post('contact');
				$email = $this->input->post('email');
				$msg = $this->input->post('message');

				$config['protocol'] = 'smtp';
				$config['smtp_host'] = 'mail.bmdu.net';
				$config['smtp_user'] = 'info@bmdu.net';
				$config['smtp_pass'] = 'Wkf9-rNG9Fz!';
				$config['smtp_port'] = '25';
				$config['smtp_crypto'] = 'tls';
				$config['mailtype'] = 'text or html';
				$config['mailpath'] = '/usr/sbin/sendmail';
				$config['charset'] = 'utf-8';
				$config['wordwrap'] = TRUE;
				$this->email->initialize($config);

				$body = "
                             Name :-    $name
                             
                             Mobile :-  $contact
                             
                             E-Mail :-  $email
                             
                             Message :- $msg";
				$from_email = "info@bmdu.net";
				$to_email = "info@digitalutilization.com";

				$this->email->from($from_email, 'BMDU.net');
				$this->email->to($to_email);
				$this->email->cc('info@bmdu.net');
				$this->email->bcc('info@bmdu.net');
				$this->email->subject('Hire Us');
				$this->email->message($body);

				$this->email->send();

				echo "<script>alert('We’ll notify you soon.')
                        window.location.href='http://localhost/manish/'
                    </script>";
			} else {
				echo "<script>alert('Hey! sorry something went wrong.')
                      window.location.href='http://localhost/manish/' 
                    </script>";
			}
		}
	}

	public function request_form()
	{
		$req = [
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'mobile' => $this->input->post('mobile'),
			'website_name' => $this->input->post('website_name'),
			'budget' => $this->input->post('budget'),
			'country' => $this->input->post('country'),
			'about_project' => $this->input->post('about_project'),
			'term' => $this->input->post('t_and_c'),
			'page' => $this->input->post('page')
		];
		$set = $this->BMDU_modal->request_data($req);
		if ($set) {
			echo "<script>alert('We’ll notify you soon.')
                        window.location.href='http://localhost/manish/'
                    </script>";
		} else {
			echo "<script>alert('Hey! sorry something went wrong.')
                       window.location.href='http://localhost/manish/' 
                    </script>";
		}
	}

	public function quick_form()
	{
		$quick = [
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'mobile' => $this->input->post('mobile'),
			'message' => $this->input->post('message'),
			'page' => $this->input->post('page')
		];
		$q = $this->BMDU_modal->quick_data($quick);
		if ($q) {
			echo "<script>alert('We’ll notify you soon.')
                            window.location.href='http://localhost/manish/'
                    </script>";
		} else {
			echo "<script>alert('Hey! sorry something went wrong.')
                            window.location.href='http://localhost/manish/' 
                    </script>";
		}
	}

	public function cn_form()
	{
		$contact = [
			'first_name' => $this->input->post('fname'),
			'last_name' => $this->input->post('lname'),
			'phone' => $this->input->post('phone'),
			'email' => $this->input->post('email'),
			'message' => $this->input->post('message'),
		];
		$cn = $this->BMDU_modal->contact_data($contact);
		if ($cn) {
			$this->load->library('email');
			$this->email->from('itasset@svamart.com');
			$this->email->to('ermanish1090@gmail.com');
			$this->email->subject('This is my subject');
			$this->email->message('This is my message');
			$this->email->send();
			
	// 		$name1 = $this->input->post('fname');
	// 		$name2 = $this->input->post('lname');
	// 		$mail = $this->input->post('phone');
	// 		$mob = $this->input->post('email');
	// 		$msg = $this->input->post('message');

	// 		$config['protocol'] = 'smtp';
	// 		$config['smtp_host'] = 'mail.bmdu.net';
	// 		$config['smtp_user'] = 'info@bmdu.net';
	// 		$config['smtp_pass'] = 'Wkf9-rNG9Fz!';
	// 		$config['smtp_port'] = '25';
	// 		$config['smtp_crypto'] = 'tls';
	// 		$config['mailtype'] = 'text or html';
	// 		$config['mailpath'] = '/usr/sbin/sendmail';
	// 		$config['charset'] = 'utf-8';
	// 		$config['wordwrap'] = TRUE;
	// 		$this->email->initialize($config);

	// 		$body = "
    //                          Name :-    $name1 $name2
                             
    //                          E-Mail :-  $mail
                             
    //                          Mobile :-  $mob
                             
    //                          Message :- $msg";
	// 		$from_email = "info@bmdu.net";
	// 		$to_email = "info@digitalutilization.com";

	// 		$this->email->from($from_email, 'BMDU.net');
	// 		$this->email->to($to_email);
	// 		$this->email->cc('info@bmdu.net');
	// 		$this->email->bcc('info@bmdu.net');
	// 		$this->email->subject('Contact Us');
	// 		$this->email->message($body);

	// 		//Send mail
	// 		$this->email->send();

	// 		echo "<script>alert('We’ll notify you soon.')
    //                         window.location.href='http://localhost/manish/'
    //                 </script>";
	// 	} else {
	// 		echo "<script>alert('Hey! sorry something went wrong.')
    //                         window.location.href='http://localhost/manish/' 
    //                 </script>";
		}
	}


	public function admin()
	{
		$this->load->view('admin/includes/header');
		$this->load->view('admin/index');
		$this->load->view('admin/includes/footer');
	}

	public function ad_login()
	{
		$this->form_validation->set_rules('user', 'user', 'trim|min_length[3]|max_length[20]|required');
		$this->form_validation->set_rules('pass', 'pass', 'trim|min_length[3]|max_length[20]|required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		if ($this->form_validation->run() == FALSE) {
			echo "<script>alert('Hey! your details are incorrect please fill correct details.')
                       window.location.href='http://localhost/manish/admin' 
                </script>";
		} else {
			$u = $this->input->post('user');
			$p = $this->input->post('pass');
			$log = $this->BMDU_modal->logg($u, $p);
			if ($log) {
				$session_data = [
					'id' => $log->id,
					'name' => $log->username
				];
				$this->session->set_userdata('login_data', $session_data);
				$var = $this->session->userdata('login_data');
				$this->session->set_flashdata('login_success', 'Welcome! ' . $var['name']);
				// echo "<script>alert('Welcome to Admin Panel.')
                //         window.location.href='http://localhost/manish/dashboard'
                //     </script>";
				redirect('/dashboard');
			} else {
				$this->session->set_flashdata('login_failed', 'Username or password is incorrect.');
				echo "<script>
                       window.location.href='http://localhost/manish/admin' 
                    </script>";
			}
		}
	}

	public function ad_log_out()
	{
		$this->session->unset_userdata('login_data');
		// echo "<script>
        //                window.location.href='http://localhost/manish/admin' 
        //     </script>";
		redirect('/admin');
	}


	public function ad_dashboard()
	{
		$this->load->view('admin/includes/header_dash');
		$this->load->view('admin/d_board');
		$this->load->view('admin/includes/footer');
	}

	public function cn()
	{
		$ctd['ct_d'] = $this->BMDU_modal->ctd_m();
		$this->load->view('admin/includes/header_dash');
		$this->load->view('admin/contact_data', $ctd);
		$this->load->view('admin/includes/footer');
	}

	public function hi()
	{
		$hid['hi_d'] = $this->BMDU_modal->hitd_m();
		$this->load->view('admin/includes/header_dash');
		$this->load->view('admin/hire_us_data', $hid);
		$this->load->view('admin/includes/footer');
	}

	public function qu()
	{
		$qud['qu_d'] = $this->BMDU_modal->qud_m();
		$this->load->view('admin/includes/header_dash');
		$this->load->view('admin/quick_inquary_data', $qud);
		$this->load->view('admin/includes/footer');
	}

	public function req()
	{
		$reqd['req_d'] = $this->BMDU_modal->reqd_m();
		$this->load->view('admin/includes/header_dash');
		$this->load->view('admin/request_data.php', $reqd);
		$this->load->view('admin/includes/footer');
	}
	public function career_admin()
	{
		$careerd['career_d'] = $this->BMDU_modal->careerd_m();
		$this->load->view('hr_admin/includes/header_dash');
		$this->load->view('hr_admin/career_data', $careerd);
		$this->load->view('hr_admin/includes/footer');
	}
	public function cn_delete($id)
	{
		echo $id;
		echo "hello";
		exit;
		$remove = $this->BMDU_modal->delete_contact($id);
		if ($remove) {
			echo "<script>
                    alert('Data has been deleted successfully.');
                    window.location.href='http://localhost/manish/contacts-details' 
            </script>";
		} else {
			echo "<script>
                    alert('Data has not been deleted.')    
                    window.location.href='http://localhost/manish/contacts-details' 
            </script>";
		}
	}

	/*admin page work */
	public function dash_job()
	{
		$this->load->view('hr_admin/includes/header_dash');
		$this->load->view('hr_admin/job');
		$this->load->view('hr_admin/includes/footer');
	}
	public function dash_job_apply()
	{

		$job_form = [
			'requirement' => $this->input->post('requirement'),
			'positions' => $this->input->post('positions'),
			'job_type' => $this->input->post('job_type'),
			'experience' => $this->input->post('experience'),
			'job_desc' => $this->input->post('job_desc'),
			'opening' => $this->input->post('opening'),
			'salary' => $this->input->post('salary')
		];

		$job_apply = $this->BMDU_modal->insert_job($job_form);
		if ($job_apply) {
			echo "<script>alert('Job Create Successfully!')
						window.location.href='http://localhost/manish/job'
				</script>";
		} else {
			echo "<script>alert('Hey! sorry something went wrong.')
						window.location.href='http://localhost/manish/job' 
				</script>";
		}
	}
	//show 
	// public function job_post_show()
	// {
	//     $job_post['show']=$this->BMDU_modal->job_post();
	//     $this->load->view('admin/includes/header_dash');
	//     $this->load->view('admin/career_data', $job_post);
	//     $this->load->view('admin/includes/footer');
	// }


	/* HR ADMIN */

	public function admin_hr()
	{
		$this->load->view('hr_admin/includes/header');
		$this->load->view('hr_admin/index');
		$this->load->view('hr_admin/includes/footer');
	}

	public function hr_login()
	{
		$this->form_validation->set_rules('user', 'user', 'trim|min_length[3]|max_length[20]|required');
		$this->form_validation->set_rules('pass', 'pass', 'trim|min_length[3]|max_length[20]|required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		if ($this->form_validation->run() == FALSE) {
			echo "<script>alert('Hey! your details are incorrect please fill correct details.')
                       window.location.href='http://localhost/manish/hr' 
                </script>";
		} else {
			$ul = $this->input->post('user');
			$pl = $this->input->post('pass');
			$hr1 = $this->BMDU_modal->hr($ul, $pl);
			if ($hr1) {
				$session_hr = [
					'id' => $hr1->id,
					'name' => $hr1->username
				];
				$this->session->set_userdata('login_hr', $session_hr);
				$var = $this->session->userdata('login_hr');
				$this->session->set_flashdata('login_success', 'Welcome! ' . $var['name']);
				echo "<script>alert('Welcome to Hr Panel.')
                        window.location.href='http://localhost/manish/hr_dash'
                    </script>";
			} else {
				$this->session->set_flashdata('login_failed', 'Username or password is incorrect.');
				echo "<script>
                       window.location.href='http://localhost/manish/hr' 
                    </script>";
			}
		}
	}
	public function hr_dash()
	{
		$this->load->view('hr_admin/includes/header_dash');
		$this->load->view('hr_admin/dash');
		$this->load->view('hr_admin/includes/footer');
	}
	public function post_hr()
	{
		$job_post['job_post'] = $this->BMDU_modal->job_d();
		$this->load->view('hr_admin/includes/header_dash');
		$this->load->view('hr_admin/post_data', $job_post);
		$this->load->view('hr_admin/includes/footer');
	}
	public function hrad_log_out()
	{
		$this->session->unset_userdata('login_hr');
		echo "<script>
                       window.location.href='http://localhost/manish/hr' 
            </script>";
	}

	public function job_post_delete($job_id)
	{
		$item = $this->BMDU_modal->career_delete($job_id);
		if ($item) {
			echo "<script>alert('Deleted Successfully!')
					window.location.href='http://localhost/manish/post-details'
			</script>";
		} else {
			echo "<script>alert('Hey! sorry something went wrong.')
					window.location.href='http://localhost/manish/post-details' 
			</script>";
		}
	}
	public function resume_delete($id)
	{
		$item = $this->BMDU_modal->resume_delete($id);
		if ($item) {
			echo "<script>alert('Deleted Successfully!')
					window.location.href='http://localhost/manish/career-details'
			</script>";
		} else {
			echo "<script>alert('Hey! sorry something went wrong.')
					window.location.href='http://localhost/manish/career-details' 
			</script>";
		}
	}

	public function contact_de($id)
	{
		$item = $this->BMDU_modal->contact_de($id);
		if ($item) {
			echo "<script>alert('Deleted Successfully!')
					window.location.href='http://localhost/manish/contacts-details'
			</script>";
		} else {
			echo "<script>alert('Hey! sorry something went wrong.')
					window.location.href='http://localhost/manish/contacts-details' 
			</script>";
		}
	}

	public function hire_de($id)
	{
		$item = $this->BMDU_modal->hire_de($id);
		if ($item) {
			echo "<script>alert('Deleted Successfully!')
					window.location.href='http://localhost/manish/Hire-details'
			</script>";
		} else {
			echo "<script>alert('Hey! sorry something went wrong.')
					window.location.href='http://localhost/manish/Hire-details' 
			</script>";
		}
	}

	public function quick_de($id)
	{
		$item = $this->BMDU_modal->quick_de($id);
		if ($item) {
			echo "<script>alert('Deleted Successfully!')
					window.location.href='http://localhost/manish/Quick-details'
			</script>";
		} else {
			echo "<script>alert('Hey! sorry something went wrong.')
					window.location.href='http://localhost/manish/Quick-details' 
			</script>";
		}
	}
	public function request_de($id)
	{
		$item = $this->BMDU_modal->request_de($id);
		if ($item) {
			echo "<script>alert('Deleted Successfully!')
					window.location.href='http://localhost/manish/Request-details'
			</script>";
		} else {
			echo "<script>alert('Hey! sorry something went wrong.')
					window.location.href='http://localhost/manish/Request-details' 
			</script>";
		}
	}

	public function calculate_store()
	{
		$web_cal = array();
		$web_cal['name'] = $this->input->post('name');
		$web_cal['phone'] = $this->input->post('phone');
		$web_cal['email'] = $this->input->post('email');
		$web_cal['city'] = $this->input->post('city');

		$insert = $this->BMDU_modal->create3($web_cal);
		if ($insert) {
			$name = $this->input->post('name');
			$phone = $this->input->post('phone');
			$email = $this->input->post('email');
			$city = $this->input->post('city');

			$config['protocol'] = 'smtp';
			$config['smtp_host'] = 'mail.bmdu.net';
			$config['smtp_user'] = 'info@bmdu.net';
			$config['smtp_pass'] = 'Wkf9-rNG9Fz!';
			$config['smtp_port'] = '25';
			$config['smtp_crypto'] = 'tls';
			$config['mailtype'] = 'text or html';
			$config['mailpath'] = '/usr/sbin/sendmail';
			$config['charset'] = 'utf-8';
			$config['wordwrap'] = TRUE;
			$this->email->initialize($config);

			$body = "
                             Name :-    $name
                             
                             Mobile :-  $phone
                             
                             E-Mail :-  $email
                             
                             City :- $city";
			$from_email = "info@bmdu.net";
			$to_email = "info@digitalutilization.com,$email";

			$this->email->from($from_email, 'BMDU.net');
			$this->email->to($to_email);
			$this->email->cc('info@bmdu.net');
			$this->email->bcc('info@bmdu.net');
			$this->email->subject('Hire Us');
			$this->email->message($body);

			$this->email->send();

			echo "<script>alert('We’ll notify you soon.')
                        window.location.href='http://localhost/manish/'
                    </script>";
		} else {
			echo "<script>alert('Hey! sorry something went wrong.')
                      window.location.href='http://localhost/manish/' 
                    </script>";
		}
	}

	public function post_edit($job_id)
	{
		$job_post['cc'] = $this->BMDU_modal->find_record_by_id($job_id);
		$this->load->view('hr_admin/includes/header_dash');
		$this->load->view('hr_admin/post_edit', $job_post);
		$this->load->view('hr_admin/includes/footer');
	}

	public function post_update($job_id)
	{
		//   $job_id = $this->input->post('job_id');
		$job_data = [
			'requirement' => $this->input->post('requirement'),
			'positions' => $this->input->post('positions'),
			'job_type' => $this->input->post('job_type'),
			'experience' => $this->input->post('experience'),
			'job_desc' => $this->input->post('job_desc'),
			'opening' => $this->input->post('opening'),
			'salary' => $this->input->post('salary'),
			// 'job_id'=>$this->input->post('job_id')
		];
		// $job_id = $this->input->post('job_id');

		$job_apply = $this->BMDU_modal->post_update($job_id, $job_data);
		if ($job_apply) {
			echo "<script>alert('Job Update Successfully!')
						window.location.href='http://localhost/manish/post-details'
				</script>";
		} else {
			echo "<script>alert('Hey! sorry something went wrong.')
						window.location.href='http://localhost/manish/post-details' 
				</script>";
		}
	}
}
