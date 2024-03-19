<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/



$route['default_controller'] = 'BMDU';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['home'] = 'BMDU/index';
$route['web-design-services'] = 'BMDU/web_design';
$route['web-development-services'] = 'BMDU/web_development';
$route['app-development-services'] = 'BMDU/app_development';
$route['graphic-design-services'] = 'BMDU/graphic_design';
$route['digital-marketing-services'] = 'BMDU/digital_marketing';
$route['location-based-india'] = 'BMDU/location_based1';
$route['location-based-usa'] = 'BMDU/location_based2';
$route['hire-ui-team'] = 'BMDU/hire_ui_team';
$route['website-maintenance-team'] = 'BMDU/website_maintenance_team';
$route['digital-marketing-team'] = 'BMDU/digital_marketing_team';
$route['social-media-management'] = 'BMDU/social_media_management';
$route['app-maintenance-team'] = 'BMDU/app_maintenance_team';
$route['pr-team'] = 'BMDU/pr_team';
$route['accounting'] = 'BMDU/accounting';
$route['biotech'] = 'BMDU/biotech';
$route['healthcare'] = 'BMDU/healthcare';
$route['financial'] = 'BMDU/financial';
$route['engineering'] = 'BMDU/engineering';
$route['hospitalities'] = 'BMDU/hospitalities';
$route['retail'] = 'BMDU/retail';
$route['about-us'] = 'BMDU/about';
$route['seoCalc'] = 'seoController/seoCalc';
$route['showCalc'] = 'seoController/showcalcData';
$route['contact-us'] = 'BMDU/contact';
$route['request'] = 'BMDU/request';
$route['portfolio'] = 'BMDU/portfolio';
$route['designing-a-strong-online-presence-the-best-biotech-website-designs'] = 'BMDU/designing_a_strong_online_presence_the_best_biotech_website_designs';
$route['pros-and-cons-of-hiring-a-digital-marketing-company'] = 'BMDU/pros_and_cons_of_hiring_a_digital_marketing_company';
$route['can-digital-marketing-be-replaced-by-AI'] = 'BMDU/can_digital_marketing_be_replaced_by_AI';
$route['how-to-noindex-a-webPage-paragraph-and-PDF-on-Google'] = 'BMDU/how_to_noindex_a_webPage_paragraph_and_PDF_on_google';
$route['what-is-kpi-in-digital-marketing-and-why-is-it-important'] = 'BMDU/what_is_kpi_in_digital_marketing_and_why_is_it_important';
$route['the-power-of-google-shopping-ads-driving-e-commerce-sales-to-new-heights'] = 'BMDU/the_power_of_google_shopping_ads_driving_e_commerce_sales_to_new_heights';
$route['latest-google-adword-update-2023'] = 'BMDU/latest_google_adword_update_2023';
$route['logo-designs'] = 'BMDU/logo_designs';
$route['responsive'] = 'BMDU/responsive';
$route['graphics-design'] = 'BMDU/graphics_design';
$route['dynamic-website'] = 'BMDU/dynamic_website';
$route['parrelex-website-design'] = 'BMDU/parrelex_website';
$route['B2B-website-design'] = 'BMDU/B2B_website_design';
$route['static-website'] = 'BMDU/static_website';
$route['business-website-design'] = 'BMDU/business_website_design';
$route['alumni-website-design'] = 'BMDU/alumni_website_design';
$route['custom-website-design'] = 'BMDU/custom_website_design';
$route['ecommerce'] = 'BMDU/ecommerce';
$route['phpwebsite'] = 'BMDU/phpwebsite';
$route['node_js_website_development'] = 'BMDU/node_js_website_development';
$route['website-development-with-angular-js'] = 'BMDU/website_development_with_angular_js';
$route['website_development'] = 'BMDU/website_development';
$route['alumni-website-development'] = 'BMDU/alumni_website_development';
$route['android-app'] = 'BMDU/android_app';
$route['ios-app'] = 'BMDU/ios_app';
$route['react-app'] = 'BMDU/react_app';
$route['flyers-and-banner-designing'] = 'BMDU/flyers_and_banner_designing';
$route['brochure-designing'] = 'BMDU/brochure_designing';
$route['leaflet-designing'] = 'BMDU/leaflet_designing';
$route['visiting-card-designing'] = 'BMDU/visiting_card_designing';
$route['packaging-designing'] = 'BMDU/packaging_designing';
$route['motion-graphic-designing'] = 'BMDU/motion_graphic_designing';
$route['video-creation'] = 'BMDU/video_creation';
$route['search-engine-optimization'] = 'BMDU/search_engine_optimization';
$route['social-media-optimization'] = 'BMDU/social_media_optimization';
$route['core-PHP-website-development'] = 'BMDU/core_PHP_website_development';
$route['how-can-improve-website-traffic-through-seo'] = 'BMDU/how_can_improve_website_traffic_through_seo';
$route['important-advice-for-improving-your-search-rankings'] = 'BMDU/important_advice_for_improving_your_search_rankings';
$route['violation-of-google’s-webmaster-guidelines'] = 'BMDU/violation_of_google’s_webmaster_guidelines';
$route['why-digital-should-be-your-first-choice-when-you-think-to-invest'] = 'BMDU/why_digital_should_be_your_first_choice_when_you_think_to_invest';
$route['what-steps-is-the-internet-publishing-industry-taking-to-improve-digital-literacy-and-media-education'] = 'BMDU/what_steps_is_the_internet_publishing_industry_taking_to_improve_digital_literacy_and_media_education';
$route['paid-ads'] = 'BMDU/paid_ads';
$route['gmb-expert'] = 'BMDU/gmb_expert';
$route['app-store-optimization'] = 'BMDU/app_store_optimization';
$route['online-reputation-management'] = 'BMDU/online_reputation_management';
$route['lead-generation'] = 'BMDU/lead_generation';
$route['seo-services-in-delhi'] = 'BMDU/seo_services_in_delhi';
$route['orm-services-in-delhi'] = 'BMDU/orm_services_in_delhi';
$route['smo-services-in-delhi'] = 'BMDU/smo_services_in_delhi';
$route['website-design-company-in-delhi'] = 'BMDU/website_design_company_in_delhi';
$route['local-seo-services-in-delhi'] = 'BMDU/local_seo_services_in_delhi';
$route['ppc-services-in-delhi'] = 'BMDU/ppc_services_in_delhi';
$route['seo-services-in-california'] = 'BMDU/seo_services_in_california';
$route['orm-services-in-dallas'] = 'BMDU/orm_services_in_dallas';
$route['smo-services-in-losangels'] = 'BMDU/smo_services_in_losangels';
$route['seo-services-in-pa'] = 'BMDU/seo_services_in_pa';
$route['local-seo-services-in-newyork'] = 'BMDU/local_seo_services_in_newyork';
$route['ppc-services-in-diego'] = 'BMDU/ppc_services_in_diego';
$route['website-design-company-in-gurgaon'] = 'BMDU/website_design_company_in_gurgaon';
$route['how-to-design-a-website'] = 'BMDU/how_to_design_a_website';
$route['mail'] = 'BMDU/mail';
$route['client'] = 'BMDU/new_hire';
$route['rq_form'] = 'BMDU/request_form';
$route['quick'] = 'BMDU/quick_form';
$route['contact'] = 'BMDU/cn_form';
$route['admin'] = 'BMDU/admin';
$route['adminLogin'] = 'BMDU/ad_login';
$route['adminLogout'] = 'BMDU/ad_log_out';
$route['contacts-details'] = 'BMDU/cn';
$route['Hire-details'] = 'BMDU/hi';
$route['Quick-details'] = 'BMDU/qu';
$route['Request-details'] = 'BMDU/req';
$route['career-details'] = 'BMDU/career_admin';
$route['contact-delete'] = 'BMDU/cn_delete';
$route['dashboard'] = 'BMDU/ad_dashboard';
/* cereer dynamic admin  job post */
$route['job'] = 'BMDU/dash_job';
$route['job_apply'] = 'BMDU/dash_job_apply';
$route['job_post_delete/(:any)']= 'BMDU/job_post_delete/$1';
$route['hr'] = 'BMDU/admin_hr';
$route['hrLogin'] = 'BMDU/hr_login';
$route['hr_dash'] = 'BMDU/hr_dash';
$route['post-details'] = 'BMDU/post_hr';
$route['hrLogout'] = 'BMDU/hrad_log_out';
$route['post-details'] = 'BMDU/post_hr';
//career
$route['career_delete/(:any)']= 'BMDU/resume_delete/$1';
$route['contact_de/(:any)']= 'BMDU/contact_de/$1';
$route['hire_de/(:any)']= 'BMDU/hire_de/$1';
$route['quick_de/(:any)']= 'BMDU/quick_de/$1';
$route['request_de/(:any)']= 'BMDU/request_de/$1';

/* post edit */
$route['post-edit/(:any)']= 'BMDU/post_edit/$1';
$route['post-update/(:any)']= 'BMDU/post_update/$1';

/*career  page details */
$route['career'] = 'BMDU/career';
$route['job-details/(:any)'] = 'BMDU/jobs_details/$1';

$route['career_ap'] = 'BMDU/career_ap';
$route['career-ap-form'] = 'BMDU/career_ap_form';

/* Blog works use of blogController and blog model */
$route['blog'] = 'blogController/blog';
$route['blog-details-show/(:any)'] = 'blogController/blog_details_show/$1';
$route['create_blog'] = 'blogController/create_blog';
$route['blog_create_code'] = 'blogController/blog_create_code';
$route['blog-details'] = 'blogController/blog_details';
$route['blog_de/(:any)']= 'blogController/blog_de/$1';
$route['seo_de/(:any)']= 'seoController/seo_de/$1';
$route['blog_update/(:any)']= 'blogController/blog_update/$1';
$route['blog-update-code/(:any)']= 'blogController/blog_update_code/$1';

/* BLOG ADMIN */
$route['blog-Admin'] = 'blogController/blog_admin';
$route['blogLogin'] = 'blogController/blog_login';
$route['blog-dash'] = 'blogController/blog_dash';
$route['blogLogout'] = 'blogController/blog_log_out';
/* create blog category route */
$route['create-blog-category'] = 'blogController/create_blog_category';
$route['blog-category-code'] = 'blogController/blog_category_code';
$route['blog-category-details'] = 'blogController/blog_category_details';
/* Website Calculate */
$route['web_calculate'] = 'WebController/web_calculate';
$route['looking'] = 'WebController/looking';
$route['special_requirements'] = 'WebController/special_requirements';
$route['domain_type'] = 'WebController/domain_type';
$route['email_count'] = 'WebController/email_count';
$route['email'] = 'WebController/email';
$route['hosting_type'] = 'WebController/hosting_type';
$route['page_count'] = 'WebController/page_count';
$route['page_type'] = 'WebController/page_type';
$route['web_calculate_store'] = 'WebController/calculate_store';
/*download quotations */
$route['quotation'] = 'WebController/quotation';
$route['template'] = 'WebController/template';
$route['textpdf'] = 'WebController/textpdf';
$route['quo-otp'] = 'WebController/quo_otp';
$route['otp-verify'] = 'WebController/otp_verify';
?>