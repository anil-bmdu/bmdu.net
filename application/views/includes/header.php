<head>
   <!--required meta tags-->
   <meta charset="utf-8">
   <meta name="robots" content="FOLLOW,INDEX">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
   
   
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.css">
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!--<link rel="stylesheet" href="build/css/intlTelInput.css">-->
   <!--*************dnamics title code********************-->
 	<?php 
 
 	$pgi = basename(substr($_SERVER['PHP_SELF'],0, strrpos($_SERVER['PHP_SELF'], '.')));
 
 	$pg = basename($_SERVER['REQUEST_URI'], '.php');
   
	$curl="<link rel=\"canonical\" href=\"https://bmdu.net/$pg\">";
	if ($pgi == 'index') {
		$title = 'Best Digital Marketing Company In India - BMDU ';
		$containt = "As the best digital marketing company in India, We provide various types of services like web designing and dovelopment, SEO, graphic designing, SMO etc.";
		$author="Best Digital Marketing Company";
			echo"$curl";
	} 
	else{
	    $title = "";
	    $containt = "";
	}
	if ($pg == 'about-us') {
		echo"$curl";
		$title = 'Best Web Development Agency- BMDU';
		$containt = 'Develop user friendly web responsive design website from the best web development agency for better user experience.';
		$author="Best Digital Marketing Company";
	}
	
	elseif ($pg == 'web-design-services') {
		echo"$curl";
		$title = 'Best Web Design Services | #1 Web Designing Company';
		$containt = 'Nothing Beats The Excellence Of Our Web Design Services. We provide you with a customised website design that is perfect for your business & brand.';
			$author="Best Digital Marketing Company";
		
	} 

  elseif ($pg == 'location-based-india') {
		//echo"$curl";
		$title = 'All Digital Marketing Services, We Provides In India';
		$containt = 'We Provides All Digital Marketing Services like SEO Services In Delhi, SMO Services In Delhi, PPC Services In Delhi, ORM Services In Delhi and many more.';
	}
	 elseif ($pg == 'location-based-usa') {
		//echo"$curl";
		$title = 'All Digital Marketing Services, We Provides In USA';
		$containt = 'All Digital Marketing Services, We Provides In USA';
	}
	elseif ($pg == 'digital-marketing-services-usa') {
		//echo"$curl";
		$title = 'All Digital Marketing Services, We Provides In USA';
		$containt = 'All Digital Marketing Services, We Provides In USA';
	}
	

	
		elseif ($pg == 'app-maintenance-team') {
		//echo"$curl";
		$title = 'Hire The Best App Maintaince Team | BMDU';
		$containt = 'description" content="Hire the best app maintenance team at BMDU & get the top-notch application maintenance and support services at best prices';
	}
	
   elseif ($pg == 'digital-marketing-services-india') {
		//echo"$curl";
      
		$title = 'All Digital Marketing Services, We Provides In India';
		$containt = 'We Provides All Digital Marketing Services like SEO Services In Delhi, SMO Services In Delhi, PPC Services In Delhi, ORM Services In Delhi and many more.';
	}
   elseif ($pg == 'web-design-services') {
		//echo"$curl";
      
		$title = 'Get The Best Different Types Of Web Design Services';
		$containt = 'We Provides different types of web design services like Parallax Website Designing, Static Website Designing, Dynamic and Custom Website Designing etc.';
	}
   elseif ($pg == 'parrelex-website-design') {
		//echo"$curl";
      
		$title = 'Best Parallax Website Designing Company In India ';
		$containt = 'Parallax websites are one of the latest and biggest trends on the web for some time now. BMDU Provides best parallax web designing services at affordable cost.';
	}
   elseif ($pg == 'parallax-website-design') {
		//echo"$curl";
      
		$title = 'Best Parallax Website Designing Company In India ';
		$containt = 'Parallax websites are one of the latest and biggest trends on the web for some time now. BMDU Provides best parallax web designing services at affordable cost.';
	}
   elseif ($pg == 'static-website') {
		//echo"$curl";
      
		$title = 'Best Static Website Designing Company In India';
		$containt = 'BMDU is the top static website designing company provides seo friendly unique static website design services to small to big companies for high presence';
	}
	
	elseif ($pg == 'accounting') {
		//echo"$curl";
      
		$title = 'Creative Websites For Accounting/Finance Industry | BMDU';
		$containt = 'BMDU’s bunch of exceptional designers are experts in designing the websites for accounting or finance niche.';
	}
	
	elseif ($pg == 'biotech') {
		//echo"$curl";
      
		$title = 'biotech';
		$containt = 'biotech';
	}
	
		elseif ($pg == 'website-development-with-angular-js') {
		//echo"$curl";
      
		$title = 'website-development-with-angular-js';
		$containt = 'website-development-with-angular-js';
	}
	
		
		elseif ($pg == 'core-PHP-website-development') {
		//echo"$curl";
      
		$title = 'core-PHP-website-development';
		$containt = 'core-PHP-website-development';
	}
	
			elseif ($pg == 'can-digital-marketing-be-replaced-by-AI') {
		//echo"$curl";
      
		$title = 'Can digital marketing be replaced by AI';
		$containt = 'Explore the Future of Digital Marketing with AI Integration | Learn how artificial intelligence revolutionizes digital strategies, optimizing reach, engagement, and ROI. Discover the power of AI-driven marketing insights and strategies for a competitive edge.';
	}
	
		elseif ($pg == 'what-is-kpi-in-digital-marketing-and-why-is-it-important') {
		//echo"$curl";
      
		$title = 'Understanding Key Performance Indicators (KPIs) in Digital Marketing';
		$containt = 'Uncover the significance of KPIs in digital marketing. Learn how Key Performance Indicators guide strategies, measure success, and drive growth. Explore essential KPIs for effective online marketing campaigns.';
	}
	
	
		elseif ($pg == 'the-power-of-google-shopping-ads-driving-e-commerce-sales-to-new-heights') {
		//echo"$curl";
      
		$title = 'The Power of Google Shopping Ads: Elevate E-Commerce Sales to New Heights';
		$containt = 'Discover how Google Shopping Ads can revolutionize your e-commerce sales. Unleash the potential of targeted advertising and strategic optimization to boost your online retail business like never before.';
	}
		
		elseif ($pg == 'latest-google-adword-update-2023') {
		//echo"$curl";
      
		$title = '2023 Google Ads Update: Stay Ahead with the Latest Changes';
		$containt = 'Get insights into the most recent Google AdWords update for 2023. Stay informed about the latest features, improvements, and strategies to optimize your advertising campaigns and drive better results in the dynamic world of online advertising.';
	}
	
	
	elseif ($pg == 'how-to-noindex-a-webPage-paragraph-and-PDF-on-Google') {
		//echo"$curl";
      
		$title = 'No-Indexing Guide for Web Pages, Paragraphs, and PDFs on Google';
		$containt = 'Learn how to effectively implement no-indexing for web pages, specific paragraphs, and PDFs on Google. Optimize search engine visibility and control indexing with expert insights and step-by-step instructions.';
	}
	
		
		elseif ($pg == 'gmb-expert') {
		//echo"$curl";
      
		$title = 'gmb-expert';
		$containt = 'gmb-expert';
	}
	
elseif ($pg == 'website-design-company-in-gurgaon') {
		//echo"$curl";
      
		$title = 'website-design-company-in-gurgaon';
		$containt = 'website-design-company-in-gurgaon';
	}
	
		
		elseif ($pg == 'B2B B2C Website Design') {
		//echo"$curl";
      
		$title = 'B2B B2C Website Design';
		$containt = 'We are consider Best Digital Marketing Company Globally. Get you all online marketing and digital marketing project done &amp; get huge returns.';
	}



	elseif ($pg == 'healthcare') {
		//echo"$curl";
      
		$title = 'Healthcare';
		$containt = 'Healthcare';
	}	
		
		
	elseif ($pg == 'engineering') {
		//echo"$curl";
      
		$title = 'Engineering';
		$containt = 'Engineering';
	}	
		
			
	elseif ($pg == 'retail') {
		//echo"$curl";
      
		$title = 'Retail';
		$containt = 'Retail';
	}

	elseif ($pg == 'hospitalities') {
		//echo"$curl";
      
		$title = 'Hospitalities';
		$containt = 'Hospitalities';
	}
	

		
			
	elseif ($pg == 'contact-us') {
		//echo"$curl";
      
		$title = 'Contactus';
		$containt = 'Contactus';
	}

	elseif ($pg == 'location-based-india') {
		//echo"$curl";
      
		$title = 'Location-Based-India';
		$containt = 'Location-Based-India';
	}


	elseif ($pg == 'orm-services-in-delhi') {
		//echo"$curl";
      
		$title = 'ORM Services in Delhi';
		$containt = 'ORM Services in Delhi';
	}

	elseif ($pg == 'logo-designs') {
		//echo"$curl";
      
		$title = 'Logo Design';
		$containt = 'Logo Design';
	}

	elseif ($pg == 'responsive') {
		//echo"$curl";
      
		$title = 'Responsive';
		$containt = 'Responsive';
	}

	elseif ($pg == 'web-design-services') {
		//echo"$curl";
      
		$title = 'web-design-services';
		$containt = 'web-design-services';
	}

		elseif ($pg == 'web-design-services') {
		//echo"$curl";
      
		$title = 'web-design-services';
		$containt = 'web-design-services';
	}
	
			elseif ($pg == 'web-development-services') {
		//echo"$curl";
      
		$title = 'web-development-services';
		$containt = 'web-development-services';
	}
	
		
			elseif ($pg == 'app-development-services') {
		//echo"$curl";
      	$title = 'Best App Development Company In India - BMDU';
		$containt = 'Best mobile app development services provided by bmdu with 100+ mobile projects. Get mobile application development services for iOS, Android at affordable price.';
	}
	
				elseif ($pg == 'graphic-design-services') {
		//echo"$curl";
      	$title = 'Best Graphic Design Services In India - BMDU';
		$containt = 'Looking for the best graphic designing services in India? BMDU provides complete design solutions to enterprises including logo, website design, brochure, and Ads design.';
	
	}
	
		
				elseif ($pg == 'digital-marketing-services') {
		//echo"$curl";
      
		$title = 'digital-marketing-services';
		$containt = 'digital-marketing-services';
	}
	
	

	
   elseif ($pg == 'dynamic-website') {
		//echo"$curl";
      
		$title = 'Best Dynamic Website Designing Company In India';
		$containt = 'BMDU offers innovative dynamic website designing services to clients globally. Our Experienced team develops the most engaging website.';
	}
   elseif ($pg == 'dynamic-website-design') {
		//echo"$curl";
      
		$title = 'Best Dynamic Website Designing Company In India';
		$containt = 'BMDU offers innovative dynamic website designing services to clients globally. Our Experienced team develops the most engaging website.';
	}
   elseif ($pg == 'alumni-website-design') {
		//echo"$curl";
      
		$title = 'Best Alumni Website Designing Company In India';
		$containt = 'BMDU provides an excellent alumni website designing services at affordable prices. Our professional web developers helps you to grow business globally with engaging website.';
	}
   elseif ($pg == 'custom-website-design') {
		//echo"$curl";
      
		$title = 'Best Custom Website Designing Company In India ';
		$containt = 'BMDU offers best custom website designing services at affordable prices. Our Experienced team develops the most creative and engaging websites.';
	}
   elseif ($pg == 'custom-website-design') {
		//echo"$curl";
      
		$title = 'web-development-services';
		$containt = 'We provide Website development services that involve everything related to building a web-based solution. PROXSOFT Design, Develop& Promote.';
	}
   elseif ($pg == 'custom-website-design') {
		//echo"$curl";
      
		$title = 'BMDU Provides best Web Dovelopment Services In India';
		$containt = 'We provide Website development services that involve everything related to building a web-based solution. PROXSOFT Design, Develop& Promote.';
	}
   elseif ($pg == 'ecommerce') {
		//echo"$curl";
      
		$title = 'Best E-Commerce Web Dovelopment Services In India';
		$containt = 'Get the best e-commerce web dovelopment experience by our leading company that ensure customised websites, logo, banners, etc.';
	}
   elseif ($pg == 'ecommerce-dovelopment') {
		//echo"$curl";
      
		$title = 'Best E-Commerce Web Dovelopment Services In India';
		$containt = 'Get the best e-commerce web dovelopment experience by our leading company that ensure customised websites, logo, banners, etc.';
	}
   elseif ($pg == 'alumni-website-development') {
		//echo"$curl";
      
		$title = 'Best Alumni Website Dovelopment Services In India';
		$containt = 'Get the best alumni website dovelopment experience by our leading company that ensure customised engaging website ';
	}
 

   elseif ($pg == 'android-app') {
		//echo"$curl";
      
		$title = 'Best Android App Development Company In India - BMDU';
		$containt = 'BMDU offers custom android application development services created by highly skilled android app developers to help your business grow at affordable prices';
	}
   elseif ($pg == 'ios-app') {
		//echo"$curl";
      
		$title = 'Best IOS App Development Company In India - BMDU';
		$containt = 'BMDU offers the best IOS application development services created by highly skilled IOS app developers to help your business grow at affordable prices';
	}
   elseif ($pg == 'react-app') {
		//echo"$curl";
      
		$title = 'Best React App Development Company In India - BMDU';
		$containt = 'BMDU offers the best React App development services created by highly skilled React app developers to help your business grow at affordable prices';
	}
  
       elseif ($pg == 'flyers-and-banner-designing') {
		//echo"$curl";
      
		$title = 'flyers-and-banner-designing';
		$containt = 'flyers-and-banner-designing';
	}
   
	      elseif ($pg == 'seo-services-in-delhi') {
		//echo"$curl";
      
		$title = 'seo-services-in-delhi';
		$containt = 'seo-services-in-delhi';
	}

	      elseif ($pg == 'smo-services-in-delhi') {
		//echo"$curl";
      
		$title = 'smo-services-in-delhi';
		$containt = 'smo-services-in-delhi';
	}

	      elseif ($pg == 'career') {
		//echo"$curl";
      
		$title = 'career';
		$containt = 'career';
	}



	      elseif ($pg == 'dynamic-website') {
		//echo"$curl";
      
		$title = 'dynamic-website';
		$containt = 'dynamic-website';
	}

	      elseif ($pg == 'blog') {
		//echo"$curl";
      
		$title = 'Our Blog: Explore In-Depth Insights and Latest Updates';
		$containt = 'Discover a wealth of knowledge and stay updated with our blog. Explore insightful articles, updates, and thought leadership on various topics. Delve into a world of valuable information right here on our blog page.';
	}

	      elseif ($pg == 'designing-a-strong-online-presence-the-best-biotech-website-designs') {
		//echo"$curl";
      
		$title = 'Designing a Strong Online Presence: The Best Biotech Website Designs';
		$containt = 'Designing a Strong Online Presence: The Best Biotech Website Designs';
	}

	      elseif ($pg == 'website-design-company-in-delhi') {
		//echo"$curl";
      
		$title = 'website-design-company-in-delhi';
		$containt = 'website-design-company-in-delhi';
	}
	
	
	      elseif ($pg == 'pros-and-cons-of-hiring-a-digital-marketing-company') {
		//echo"$curl";
      
		$title = 'Pros and Cons of Hiring a Digital Marketing Company';
		$containt = 'Pros and Cons of Hiring a Digital Marketing Company';
	}

	      elseif ($pg == 'why-digital-should-be-your-first-choice-when-you-think-to-invest') {
		//echo"$curl";
      
		$title = 'Why Digital Should Be Your First Choice, When You Think To Invest';
		$containt = 'Why Digital Should Be Your First Choice, When You Think To Invest';
	}
	      elseif ($pg == 'request') {
		//echo"$curl";
      
		$title = 'request';
		$containt = 'request';
	}

	      elseif ($pg == 'local-seo-services-in-delhi') {
		//echo"$curl";
      
		$title = 'Local SEO Services in Delhi';
		$containt = 'Local SEO Services in Delhi';
	}

	      elseif ($pg == 'ppc-services-in-delhi') {
		//echo"$curl";
      
		$title = 'PPC Services In Delhi';
		$containt = 'PPC Services In Delhi';
	}
	
		      elseif ($pg == 'ppc-services-in-delhi') {
		//echo"$curl";
      
		$title = 'PPC Services In Delhi';
		$containt = 'PPC Services In Delhi';
	}
	
		
		      elseif ($pg == 'ppc-services-in-delhi') {
		//echo"$curl";
      
		$title = 'PPC Services In Delhi';
		$containt = 'PPC Services In Delhi';
	}
	
		
		
		      elseif ($pg == 'seo-services-in-california') {
		//echo"$curl";
      
		$title = 'Seo Services In California';
		$containt = 'Seo Services In California';
	}
	
		
			
		      elseif ($pg == 'financial') {
		//echo"$curl";
      
		$title = 'financial';
		$containt = 'financial';
	}
		
					
		      elseif ($pg == 'digital-marketing-team') {
		//echo"$curl";
      
		$title = 'digital-marketing-team';
		$containt = 'digital-marketing-team';
	}
	
						
		      elseif ($pg == '	hire-ui-team') {
		//echo"$curl";
      
		$title = 'hire-ui-team';
		$containt = 'hire-ui-team';
	}
	
					
		      elseif ($pg == 'social-media-management') {
		//echo"$curl";
      
		$title = 'social-media-management';
		$containt = 'social-media-management';
	}

		
		
		      elseif ($pg == 'orm-services-in-dallas') {
		//echo"$curl";
      
		$title = 'ORM Services In Dallas';
		$containt = 'ORM Services In Dallas';
	}
	
			
		
		      elseif ($pg == 'smo-services-in-losangels') {
		//echo"$curl";
      
		$title = 'SMO Services In Los Angeles';
		$containt = 'SMO Services In Los Angeles';
	}	
	
				
		
		      elseif ($pg == '	seo-services-in-pa') {
		//echo"$curl";
      
		$title = 'SEO Services In PA';
		$containt = 'SEO Services In PA';
	}
	
				
		
		      elseif ($pg == 'local-seo-services-in-newyork') {
		//echo"$curl";
      
		$title = 'Local SEO Services In New York';
		$containt = 'Local SEO Services In New York';
	}	
	
				
		
		      elseif ($pg == 'ppc-services-in-diego') {
		//echo"$curl";
      
		$title = 'PPC Services In Diego';
		$containt = 'PPC Services In Diego';
	}
					
		
		      elseif ($pg == 'hire-ui-team') {
		//echo"$curl";
      
		$title = 'Hire UI Designer';
		$containt = 'Hire UI Designer';
	}
	
	
			
		      elseif ($pg == 'important-advice-for-improving-your-search-rankings') {
		//echo"$curl";
      
		$title = 'Important advice for improving your search rankings ';
		$containt = 'Important advice for improving your search rankings ';
	}
	
	
			      elseif ($pg == 'how-can-improve-website-traffic-through-seo') {
		//echo"$curl";
      
		$title = 'How can you improve website traffic through seo';
		$containt = 'How can you improve website traffic through seo';
	}
	
	
	
		
		      elseif ($pg == 'what-steps-is-the-internet-publishing-industry-taking-to-improve-digital-literacy-and-media-education') {
		//echo"$curl";
      
		$title = 'What steps is the Internet Publishing Industry taking to improve digital literacy and media education?';
		$containt = ' The internet publishing industry is the economic sector that creates and distributes material via the internet. It comprises a diverse spectrum of firms, from huge media conglomerates to individual bloggers.';
	}
	
	
	?>
	<title><?php echo $title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="facebook-domain-verification" content="nvb6jw874volqmc8146bg2j30v74py" />
	<meta name="title" content="<?php echo $title; ?>"/> 
	<meta name="description" content="<?php echo $containt;?>"/> 
   <meta name="author" content=""/>

<!--*********------------end dynamics title------------**************-->
   
  <meta property="og:image" content="https://bmdu.net/assets/image/logo.png" /> 
   
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
   <!--favicon icon-->
   <link rel="icon" href="<?php echo base_url('assets/img/favicon.png'); ?>" type="image/png" sizes="16x16">
   <!--title-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
   <!--google fonts-->
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
 
   <!--build:css-->
  
   <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>">
   <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
   
   <!-- endbuild -->
   <!--custom css start-->
   <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css'); ?>">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<meta name="google-site-verification" content="1abgER-3utwuuVOFi6F9ItkBUqng2GxNSio3xTi1V4U" />   
<meta name="msvalidate.01" content="08DFFE19911B14D928BA7FBABB0793A5" />   
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VSZSZXHPF3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-VSZSZXHPF3');
</script>
   <!--custom css end-->
   <style>
   
   
   
   .iti__country-list {
    white-space: normal !important;   
   }
   .error{
       color:red;
   }
   .c1{
       border:2px red ridge;
       background-color:#f2a9bc;
   }
   .c2{
       border:2px green ridge;
       background-color:#caf2c9;
   }
   </style>
   

</head>

<!-- preloader start-->
<!--<div id="preloader">-->
<!--   <div class="preloader-wrap">-->
<!--      <img src="<?php echo base_url('assets/image/logo.png'); ?>" alt="logo" class="img-fluid preloader-icon" />-->
<!--      <div class="loading-bar"></div>-->
<!--   </div>-->
<!--</div>-->
<!--preloader end-->
<!--main content wrapper start-->
<div class="main-wrapper">
   <!--************top nav start************** -->
   <section class="bmdutpnv">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-9">
               <div class="leftclmn desktop">
                  <ul>
                     <li><a href="mailto:info@digitalutilization.com">info@digitalutilization.com</a></li>
                     <li><img src="<?php echo base_url('assets/img/india.webp'); ?>" style="width: 30px; padding: 0px 2px;"><a href="tel:+91-7599490885">+91 75994 90885</a> <a href="tel:+91-9667371301">, +91 96673 71301</a></li>
                    <li style="color: #fff;"><img src="<?php echo base_url('assets/img/usa.png'); ?>" style="width: 30px; padding: 0px 2px;"><a href="tel:+1 (368)9999940">+1 (368) 999 9940</a>(USA/CANADA)</li>
                     <li style="border: none;">
                        <button type="button" id="blink" class="btn btn-white" data-bs-toggle="modal" data-bs-target="#myModal">
                           Hire Us ! </button>
						   

                        <!-- model -->
                        <!-- The Modal -->
                        <div class="modal" id="myModal">
                           <div class="modal-dialog">
                              <div class="container">
                                 <div class="row">
                                    <div class="col-lg-3">
                                       <div class="img-popup">
                                          <img src="<?php echo base_url('assets/image/popup.png'); ?>">
                                       </div>
                                    </div>
                                    <div class="col-lg-9">
                                       <div class="modal-content modal-lg">
                                          <!-- Modal Header -->
                                          <div class="modal-header">
                                             <button type="button" class="btn-n" data-bs-dismiss="modal">
                                                <i class="fa-solid fa-xmark"></i>
                                             </button>
                                          </div>
                                          <!-- Modal body -->
                                          <div class="modal-body">
                                             <h4 class="modal-title">We Create Growth</h4>
                                             <h5>Get unstuck and send your details</h5>
                                             <form action="<?php echo base_url('client') ?>" method="POST" id="inquiryform">
                                                <div class="form-group">
                                                   <label for="usr">Name:</label>
                                                   <input type="text" class="form-control" placeholder="Enter Name*" name="name" id="usr" autocomplete="off">
                                                </div>
                                                <div class="form-group">
                                                   <span id="output" class="text-danger"></span>
                                                   <label for="contact">Phone <span class="text-danger">*</span>:</label>
                                                   <input type="tel" class="form-control" placeholder="" name="" id="contact" autocomplete="off" required>
                                                </div>
                                                
                                                <div class="form-group">
                                                   <input type="hidden" class="form-control" id="hiddencontact" placeholder="" name="contact" autocomplete="off" required>
                                                </div>
                                                
                                                
                                                <div class="form-group">
                                                   <label for="email">Email<span class="text-danger">*</span>:</label>
                                                   <input type="email" class="form-control" id="email" placeholder="Enter email*" name="email" autocomplete="off">
                                                </div>
                                                <div class="form-group">
                                                   <label for="comment">Project Details:</label>
                                                   <textarea class="form-control" rows="10" rows="5" id="comment" placeholder="Project Details" name="message" style="height: 120px" autocomplete="off"></textarea>
                                                </div>
                                                <div class="submit-inq">
                                                   <button type="submit" form="inquiryform" class="sub-n" value="Submit" name="submit">Submit</button>
                                                </div>
                                             </form>
                                             <p class="safe"><i class="fa-solid fa-shield-keyhole"></i> Your details are safe with us </p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- ******************end model ****************-->
                     </li>
					
                  </ul>
               </div>
               <div class="leftclmn mobile">
                <marquee>  <ul>
                     <li><a href="mailto:info@digitalutilization.com">info@digitalutilization.com</a></li>
                     <li><a href="tel:+91-7599490885"> +91-759-949-0885</a></li>
                     <li><a href="tel:+91-9667371301">+91-966-737-1301</a></li>
                     <li style="border: none;">
                        <button type="button" id="blink" class="btn btn-white" data-bs-toggle="modal" data-bs-target="#myModal">
                           Hire Us ! </button>
                        <!-- model -->
                        <!-- The Modal -->
                        <div class="modal" id="myModal">
                           <div class="modal-dialog">
                              <div class="container">
                                 <div class="row">
                                    <div class="col-lg-3">
                                       <div class="img-popup">
                                          <img src="<?php echo base_url('assets/image/popup.png'); ?>">
                                       </div>
                                    </div>
                                    <div class="col-lg-9">
                                       <div class="modal-content modal-lg">
                                          <!-- Modal Header -->
                                          <div class="modal-header">
                                             <button type="button" class="btn-n" data-bs-dismiss="modal">
                                                <i class="fa-solid fa-xmark"></i>
                                             </button>
                                          </div>
                                          <!-- Modal body -->
                                          <div class="modal-body">
                                             <h4 class="modal-title">We Create Growth</h4>
                                             <h5>Get unstuck and send your details</h5>
                                             <form action="<?php echo base_url('client') ?>" method="POST" id="inquiryform">
                                                <div class="form-group">
                                                   <label for="usr">Name:</label>
                                                   <input type="text" class="form-control" placeholder="Enter Name*" name="name" id="usr" autocomplete="off">
                                                </div>
                                                <div class="form-group">
                                                   <label for="contact">Contact:</label>
                                                   <input type="tel" class="form-control" placeholder="Enter Contact*" name="contact" id="contact" autocomplete="off">
                                                </div>
                                                <div class="form-group">
                                                   <label for="email">Email:</label>
                                                   <input type="email" class="form-control" id="email" placeholder="Enter email*" name="email" autocomplete="off">
                                                </div>
                                                <div class="form-group">
                                                   <label for="comment">Project Details:</label>
                                                   <textarea class="form-control" rows="10" rows="5" id="comment" placeholder="Project Details" name="message" style="height: 120px" autocomplete="off"></textarea>
                                                </div>
                                                <div class="submit-inq">
                                                   <button type="submit" form="inquiryform" class="sub-n" value="Submit" name="submit">Submit</button>
                                                </div>
                                             </form>
                                             <p class="safe"><i class="fa-solid fa-shield-keyhole"></i> Your details are safe with us </p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- ******************end model ****************-->
                     </li>
                  </ul></marquee>
               </div>
            </div>
            <div class="col-md-3">
               <div class="rightclmn">
                  <ul>
                   <li class="animate__animated animate__bounce animate__delay-2s"><a href="https://www.facebook.com/bmdigitalutilization/" target="_blank"><i class="fa-brands fa-facebook-square"></i></a></li>
                     <li><a href="https://twitter.com/bmdigitalu" target="_blank"><i class="fa-brands fa-square-x-twitter"></i></a></li>
                     <li><a href="https://www.linkedin.com/uas/login-submit" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                     <li><a href="https://www.instagram.com/bmdigitalutilization/" target="_blank"><i class="fa-brands fa-instagram-square"></i></a></li>
                     <li><a href="https://www.behance.net/digitalutilization" target="_blank"><i class="fa-brands fa-behance-square"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--************top nav end************** -->
 
   <!--****************icon section start************** -->
   <section id="menubox">
      <div class="container">
         <div class="row">
             <div class="col-md-2"> <a class="navbar-brand" href="<?php echo base_url(''); ?>"> <img src="<?php echo base_url('assets/image/logo.png'); ?>" alt="logo" class="logo-img img-fluid" /></a> </div>
            <div class="col-md-9">
               <div class="design">
                  <ul>
                     <li>
                        <div data-aos="fade-down" class="img_box ">
                           <img src="<?php echo base_url('assets/image/brand icon.svg'); ?>">
                           <p> Brands</p>
                        </div>
                     </li>
                     <!-- 1st end -->
                     <li>
                        <div data-aos="fade-down" class="img_box">
                           <img src="<?php echo base_url('assets/image/Logo icon.svg'); ?>">
                           <p>logo</p>
                        </div>
                     </li>
                     <!-- end -->
                     <li>
                        <div data-aos="fade-down" class="img_box">
                           <img src="<?php echo base_url('assets/image/Branding.svg'); ?>">
                           <p> Branding</p>
                        </div>
                     </li>
                     <!-- end -->
                     <li>
                        <div data-aos="fade-down" class="img_box">
                           <img src="<?php echo base_url('assets/image/portfolio.gif'); ?>">
                           <p>portfolio</p>
                        </div>
                     </li>
                     <!-- end -->
                     <li>
                        <div data-aos="fade-down" class="img_box">
                           <img src="<?php echo base_url('assets/image/Seo.svg'); ?>">
                           <p>Seo & Digital</p>
                        </div>
                     </li>
                     <!-- end -->
                     <li>
                        <div data-aos="fade-down" class="img_box">
                           <img src="<?php echo base_url('assets/image/media.svg'); ?>">
                           <p>Media</p>
                        </div>
                     </li>
                     <!-- end -->
                     <li>
                        <div data-aos="fade-down" class="img_box">
                           <img src="<?php echo base_url('assets/image/industry.svg'); ?>">
                           <p>Industry </p>
                        </div>
                     </li>
                     <!-- end -->
                     <li>
                        <div data-aos="fade-down" class="img_box ico">
                          <a class="text-dark" href="<?php echo base_url('contact-us'); ?>"> <img src="<?php echo base_url('assets/image/chai-coffee.gif'); ?>">
                           <p>Tea/Coffee</p></a>
                        </div>
                     </li>
                     <!-- <li>
                        <div data-aos="fade-down" class="img_box ico">
                          <a class="text-dark" href="<?php echo base_url('web_calculate'); ?>"> <img src="<?php echo base_url('assets/image/Seo.svg'); ?>">
                           <p>Website Calculate</p></a>
                        </div>
                     </li> -->
                     <!-- end -->
               </div>
            </div>
            <div class="col-md-1">
                <div class="row">
                    <div class="col-md-12">
                <div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
   <ul class="sidenavbar-nav me-auto mb-2 mb-lg-0">
                  <li class="sidenav-item">
                     <a class="sidenav-link active" aria-current="page" href="<?php echo base_url(''); ?>">Home</a>
                  </li>
                  <li class="sidenav-item dropdown">
                     <a class="sidenav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="<?php echo base_url('#'); ?>">Our Services</a>
                     <ul class="dropdown-menu shadow">
                        <li> <a class="dropdown-item" href="<?php echo base_url('web-design-services'); ?>">Web Design</a></li>
                        <li> <a class="dropdown-item" href="<?php echo base_url('web-development-services'); ?>">Web Development</a></li>
                        <li> <a class="dropdown-item" href="<?php echo base_url('app-development-services'); ?>">App Development</a></li>
                        <li> <a class="dropdown-item" href="<?php echo base_url('graphic-design-services'); ?>">Graphics Design</a></li>
                        <li> <a class="dropdown-item" href="<?php echo base_url('digital-marketing-services'); ?>">Digital Marketing</a></li>
                     </ul>
                  </li>
                  <li class="sidenav-item dropdown">
                     <a class="sidenav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="<?php echo base_url('#') ?>">Location Based Services</a>
                     <ul class="dropdown-menu shadow">
                        <li> <a class="dropdown-item" href="location-based-india">Location Based Services (IN)</a></li>
                        <li> <a class="dropdown-item" href="location-based-usa">Location Based Services (USA)</a></li>
                     </ul>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="<?php echo base_url('#') ?>">Hire Team</a>
                     <ul class="dropdown-menu shadow">
                        <li> <a class="dropdown-item" href="<?php echo base_url('hire-ui-team'); ?>">Hire UI Designer</a></li>
                        <li> <a class="dropdown-item" href="<?php echo base_url('website-maintenance-team'); ?> ">Website Maintenance Team</a></li>
                        <li> <a class="dropdown-item" href="<?php echo base_url('digital-marketing-team'); ?> ">Digital Marketing Team</a></li>
                        <li> <a class="dropdown-item" href="<?php echo base_url('social-media-management'); ?> ">Social Media Management</a></li>
                        <li> <a class="dropdown-item" href="<?php echo base_url('app-maintenance-team'); ?>">App Maintenance Team</a></li>
                        <li> <a class="dropdown-item" href="<?php echo base_url('pr-team'); ?>">PR Team</a></li>
                     </ul>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="<?php echo base_url('#'); ?>">Industries</a>
                     <ul class="dropdown-menu shadow">
                        <li> <a class="dropdown-item" href="<?php echo base_url('accounting'); ?> ">Accounting</a></li>
                        <li> <a class="dropdown-item" href="<?php echo base_url('biotech'); ?> ">Biotech</a></li>
                        <li> <a class="dropdown-item" href="<?php echo base_url('healthcare'); ?> ">Healthcare</a></li>
                        <li> <a class="dropdown-item" href="<?php echo base_url('financial'); ?> ">Financial</a></li>
                        <li> <a class="dropdown-item" href="<?php echo base_url('engineering'); ?>">Engineering</a></li>
                        <li> <a class="dropdown-item" href="<?php echo base_url('hospitalities'); ?>">Hospitalities</a></li>
                        <li> <a class="dropdown-item" href="<?php echo base_url('retail'); ?>">Retail</a></li>
                     </ul>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="<?php echo base_url('about-us'); ?>">About Us</a> </li>
                  <li class="nav-item"><a class="nav-link" href="<?php echo base_url('contact-us'); ?>">Contact Us</a></li>
                	<li class="nav-item"><a class="nav-link" href="assets/image/our-portfolio.pdf">Our Portfolio</a></li>
					<li class="nav-item"><a class="nav-link" href="<?php echo base_url('seoCalc'); ?>">Seo Calculator</a></li>
               </ul>
</div>
          <div id="main">
            <button class="openbtn sidenavbar" onclick="openNav()"><i class="fa-solid fa-bars-staggered"></i></button> </div>
</div>
</div>
</div>
   </section>
   
   <!--<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>-->
   
  
  
  <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js"></script>
  
<script>
const input = document.querySelector("#contact");
const hiddencontact = document.querySelector("#hiddencontact");

const output = document.querySelector("#output");

const iti = window.intlTelInput(input, {
  nationalMode: true,
  geoIpLookup:"auto",
  utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js" // just for formatting/placeholders etc
});

const handleChange = () => {
  let text;
  if (input.value) {
    if(iti.isValidNumber()){
      hiddencontact.value=iti.getNumber();
    text="";    
    }else{
      text= "Invalid number - please try again";}
  } else {
    text = "Please enter a valid number below";
  }
  const textNode = document.createTextNode(text);
  output.innerHTML = "";
  output.appendChild(textNode);
};

// listen to "keyup", but also "change" to update when the user selects a country
input.addEventListener('change', handleChange);
input.addEventListener('keyup', handleChange);

//   const input = document.querySelector("#contact");
//   window.intlTelInput(input, {
//     utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js",
//     allowDropdown:true,

//   });
</script>
  
  
  
  
  
<!--   <script>-->
       
  <!--var number= document.getElementById('contact').value; -->


<!--var number=919625222640;-->

<!--$.ajax({-->
<!--    method: 'GET',-->
<!--    url: 'https://api.api-ninjas.com/v1/validatephone?number=' + number,-->
<!--    headers: { 'X-Api-Key': 'j7x2wGP69csEagPf3WdEKg==0y2wqgOfdkaHd3ke'},-->
<!--    contentType: 'application/json',-->
<!--    success: function(result) {-->
<!--        console.log(result);-->
<!--    },-->
<!--    error: function ajaxError(jqXHR) {-->
<!--        console.error('Error: ', jqXHR.responseText);-->
<!--    }-->
<!--});-->
       
       
       
<!--   </script>-->
   <!--****************icon section end************** -->
   
   <script type="text/javascript">
      var blink =
         document.getElementById('blink');

      setInterval(function() {
         blink.style.opacity =
            (blink.style.opacity == 0 ? 1 : 0);
      }, 1000);
   </script>
   
   

       <script>
function openNav() {
  document.getElementById("mySidebar").style.width = "315px";
  document.getElementById("main").style.marginLeft = "0px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
       