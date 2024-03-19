<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Marvel">
<style>
   /********** scrolling text**************/
   .marquee_group h3 {
   font-size: 66px;
   text-transform: capitalize;
   -webkit-text-fill-color: #ffffff;
   text-shadow: -1px -1px 0 #045887, 1px -1px 0 #045887, -1px 1px 0 #045887, 1px 1px 0 #045887;
   }
   .marquee {
   --space: 2rem;
   display: grid;
   align-content: center;
   overflow: hidden;
   gap: var(--space);
   width: 100%;
   font-family: "Corben", system-ui, sans-serif;
   font-size: 1.5rem;
   line-height: 1.5;
   }
   .marquee {
   --duration: 55s;
   --gap: var(--space);
   display: flex;
   overflow: hidden;
   user-select: none;
   gap: 2.4rem;
   }
   .marquee_group {
   flex-shrink: 0;
   display: flex;
   align-items: center;
   justify-content: space-around;
   gap: var(--gap);
   min-width: 100%;
   animation: scroll var(--duration) linear infinite;
   }
   @keyframes scroll {
   0% {
   transform: translateX(0);
   }
   100% {
   transform: translateX(calc(-100% - var(--gap)));
   }
   }
   .card-para p {
   display: none;
   }
   .bmdu-quick button.btn.btn-md {
   background: #045887;
   border: 1px solid #045887;
   transform: rotate(90deg);
   right: -57px;
   position: fixed;
   top: 170px;
   } 
   .accordion {
   display: flex;
   margin-block: 50px;
   width: min(100%);
   /*width: min(100% - 175px, 950px);*/
   }
   .accordion__item {
   position: relative;
   isolation: isolate;
   cursor: pointer;
   flex: 1;
   transition: flex 250ms;
   overflow: hidden;
   }
   .accordion__item:first-child {
   border-radius: 20px 0 0 20px;
   }
   .accordion__item:last-child {
   border-radius: 0 20px 20px 0;
   }
   .accordion .accordion__item:hover {
   flex: 3;
   }
   .accordion__item:hover .accordion__overlay {
   opacity: 1;
   padding: 50px;
   }
   .accordion__image {
   display: block;
   position: relative;
   width: 100%;
   height: 300px;
   object-fit: cover;
   }
   .accordion__overlay {
   transition: opacity 250ms, padding 250ms;
   position: absolute;
   background: linear-gradient(
   0deg,
   rgba(0, 0, 0, 1) 0%,
   rgb(0 0 0 / 74%) 40%,
   rgb(17 97 141 / 67%) 100%
   );
   width: 100%;
   height: 100%;
   opacity: 0;
   z-index: 1;
   display: flex;
   flex-direction: column;
   justify-content: flex-end;
   align-items: center;
   padding: 0;
   }
   .accordion__overlay h2 {
   white-space: nowrap;
   font-size: 20px;
   color: white;
   }
   .accordion__overlay p {
   font-size: 15px;
   color: #fff;
   text-align: center;
   }
   @media (max-width: 768px) {
   .accordion {
   flex-direction: column;
   max-height: 500px;
   }
   .accordion__item:first-child {
   border-radius: 20px 20px 0 0;
   }
   .accordion__item:last-child {
   border-radius: 0 0 20px 20px;
   }
   .accordion__image {
   height: 100%;
   }
   .accordion__overlay {
   justify-content: center;
   }
   .accordion__overlay h2 {
   white-space: normal;
   text-wrap: balance;
   text-align: center;
   margin-block-end: 25px;
   }
   .accordion__item:hover .accordion__overlay {
   opacity: 1;
   padding: 25px;
   }
   }
   
   .nav-pills .nav-link.active, .nav-pills .show > .nav-link {
    color: #fff;
    background-color:#ff000000 !important; border-bottom: 1px solid #045887;     width: 300px;}
</style>
<!--page header section start-->
<section class="page-banner" style="background:#f1f1f18a;">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 col-md-12 mt-5">
            <h1 class="display-5 fw-bold mt-5 animate" style="font-size:30px;"> Parallax Masterpieces: Unveil Your Dynamic Web Presence</h1>
            <p class="lead"> Elevate Your Web Experience</p>
         </div>
         <div class="col-lg-6 col-md-12">
            <div class="best-degital-marketing-company">
               <img src="<?php echo base_url('assets/image/development.png'); ?>">
            </div>
         </div>
      </div>
   </div>
</section>
<!--page header section end-->
<!--style guide block start-->
<div class="style-guide">
   <!--integration details section start-->
   <section class="integration-details mt-5">
      <div class="container">
         <div class="row justify-content-between">
            <div class="col-lg-12 pe-5">
               <div class="integration-details-wrap">
                  <h3 class="text-center">Parallax Web Design Services</h3>
                  <p  class="text-center">Parallax web design is a common practice in <b>web development</b> that makes items seem to move at varying rates when the user scrolls the page, giving the impression of depth and motion. Using numerous layers of moving pictures or material at different speeds achieves this effect, drawing the viewer into the scene.<br> <br>
                     The objective is to make the site's navigation more interesting and engaging for the user while also improving its aesthetic appeal.<br> <br>
                     <b>BMDU</b> has been an established IT outsourcing partner for over several years, and the company's cutting-edge <a href="/">parallax website design</a> solutions are well suited to any business and service type. When it comes to building attractive designs that use effective technology and powerful marketing approaches to achieve goals, our team of developers, UI/UX designers, data engineers, SEO specialists, and other professionals are unrivalled.
                  </p>
                  <div class="integration-feature-info mt-5">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--integration details section end-->
   <section class="marquee-details">
      <div class="container-fluid">
         <div class="row">
            <div class="marquee">
               <div class="marquee_group">
                  <h3>Different type of parallax web design services</h3>
                  <h3 aria-hidden="true">Different type of parallax web design services</h3>
                  <h3 aria-hidden="true">Different type of parallax web design services</h3>
               </div>
               <div aria-hidden="true" class="marquee_group">
                  <h3>Different type of parallax web design services</h3>
                  <h3>Different type of parallax web design services</h3>
               </div>
            </div>
            <section class="accordion">
               <div class="accordion__item">
                  <div class="accordion__overlay">
                     <h2>Single Page Parallax Web Design Services</h2>
                     <p>In single-page parallax web design, all of a website's content is shown on a single page, and the user scrolls up and down the page to see more. Parallax effects increase interaction by giving the impression that objects are moving at varying speeds when the user scrolls. </p>
                  </div>
                  <img class="accordion__image" src="assets/image/single-page.webp" alt="Single Page Parallax Web Design Services">
               </div>
               <div class="accordion__item">
                  <div class="accordion__overlay">
                     <h2>Multi-Page Parallax Website Development</h2>
                     <p>In multi-page parallax web design, the parallax scrolling effect is combined with numerous linked pages. Backgrounds on each page continue to animate at varying rates to provide depth and encourage interaction. This kind of layout manages to keep the story flowing smoothly while allowing for more flexible content structure.</p>
                  </div>
                  <img >
                  <img class="accordion__image" src="assets/image/multi-page.jpg" alt="Multi-Page Parallax Website Development">
               </div>
               <div class="accordion__item">
                  <div class="accordion__overlay">
                     <h2>Parallax centric story board web design services</h2>
                     <p>Using a technique called "Parallax Centric Story Board," we design websites that are both interesting and exciting to explore. We create an interactive story with several layers by using smooth scrolling and moving images. </p>
                  </div>
                  <img class="accordion__image" src="assets/image/Parallax-centric%20-story-board-web%20-design-services.jpg" alt="Parallax centric story board web design services">
               </div>
               <div class="accordion__item">
                  <div class="accordion__overlay">
                     <h2>Responsive web-design solutions <br>using parallax description </h2>
                     <p>Build attention-grabbing websites with mobile-friendliness and parallax scrolling. Combine high-quality design and intuitive functionality without sacrificing either, and do it without a hitch on every platform. </p>
                  </div>
                  <img class="accordion__image" src="assets/image/Responsive-web-design-solutions-using-parallax-description.png" alt="Parallax centric story board web design services">
               </div>
               <div class="accordion__item">
                  <div class="accordion__overlay">
                     <h2>SEO services for parallel websites description </h2>
                     <p>Online Promotion for Parallax-Based Sites Increase your website's exposure with SEO services designed specifically for parallax designs. We optimise your one-of-a-kind scrolling layout for maximum usability and search engine visibility. We use meta optimisation, mobile friendly design, and targeted keywords to increase organic traffic and conversions. </p>
                  </div>
                  <img class="accordion__image" src="assets/image/seo-services.webp" alt="Parallax centric story board web design services">
               </div>
            </section>
         </div>
      </div>
</div>
</section>
<!--related integration end-->
<section class="bmdu-quick">
   <button type="button" class="btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="">Quick Inquiry</button>
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body job-overview-wrap bg-light rounded-custom  mt-lg-0">
               <form action="<?php echo base_url('quick'); ?>" method="post" id="quick_form">
                  <div class="row">
                     <div class="col-6">
                        <div class="form-group mb-3">
                           <input type="text" name="name" class="form-control" placeholder="Your name" aria-label="Your name"  autocomplete="off">
                        </div>
                     </div>
                     <div class="col-6">
                        <div class="form-group mb-3">
                           <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email" autocomplete="off">
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="form-group mb-3">
                           <input type="text" class="form-control" name="mobile" placeholder="Mobile Number" aria-label="company" autocomplete="off">
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="form-group mb-3">
                           <textarea class="form-control" name="message" placeholder="Message" style="height: 120px" autocomplete="off"></textarea>
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="form-group mb-3">
                           <input type="hidden" name="page" class="form-control" readonly placeholder="Type here page name" value="parrelex-website-design" autocomplete="off">
                        </div>
                     </div>
                     <div class="col-12 text-center">
                        <button class="btn btn-primary mt-2">Submit</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
<!--style guide block end-->
<section class="bmdu-quick" style=background-image:url("assets/img/best-website-design-company-bmdu.jpg");>
   <div class="container">
      <div class="row">
         <div class="col-md-12 mt-5">
            <h3 class="pb-3"> Experience in Parallax Web Design Across Various Sectors</h3>
         </div>
         <div class="col-md-8">
            <p> We have been producing parallax websites for over 3200 customers in 15 countries and across a wide range of industries long before they were "cool" in the market. Parallax web design is something we've done for : </p>
            <ul class="pb-5">
               <li><i class="fa-thin fa-arrow-right"></i> E-commerce </li>
               <li> <i class="fa-thin fa-arrow-right"></i> Management Of Educational Events  </li>
               <li> <i class="fa-thin fa-arrow-right"></i> Medical Websites </li>
               <li><i class="fa-thin fa-arrow-right"></i> Industry Groups </li>
               <li><i class="fa-thin fa-arrow-right"></i> Company Sector</li>
               <li><i class="fa-thin fa-arrow-right"></i> Fashion Industry</li>
               <li><i class="fa-thin fa-arrow-right"></i> It Sector</li>
            </ul>
         </div>
      </div>
   </div>
</section>
<section class="bmdu-content">
   <div class="container bmdu">
      <div class="row">
         <div class="col-md-12 mt-5 p-3 bg-body shadow rounded mb-5">
            <div class="large-box mx-auto text-center py-9 ">
               <h2 class="py-3 parralex">Our Parallax Web Design Process </h2>
               </div>                
   

    <div class="row">
        <div class="col-md-12">
            <div class="timeline-steps aos-init aos-animate" data-aos="fade-up">
                <div class="timeline-step">
                    <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2003">
                        <div class="inner-circle"><img src="assets/img/research.png"></div>
                        <p class="h6 mt-3 mb-1">Research</p>
                        
                    </div>
                </div>
                <div class="timeline-step">
                    <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2004">
                        <div class="inner-circle"><img src="assets/img/designdevelopment.png"></div>
                        <p class="h6 mt-3 mb-1">Design And Development </p>
                       
                    </div>
                </div>
                <div class="timeline-step">
                    <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2005">
                        <div class="inner-circle"><img src="assets/img/feedbackand approvals.png"> </div>
                        <p class="h6 mt-3 mb-1">Feedback and Approvals
</p>
                    </div>
                </div>
                <div class="timeline-step">
                    <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2010">
                        <div class="inner-circle"> <img src="assets/img/launch.png"></div>
                        <p class="h6 mt-3 mb-1">Launch and Testing </p>
                       
                    </div>
                </div>
                <div class="timeline-step mb-0">
                    <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2020">
                        <div class="inner-circle"><img src="assets/img/Maintenance.png"></div>
                        <p class="h6 mt-3 mb-1">Maintenance and Alterations</p>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>

            </div>
         </div>
         
         
         <!-- end process-->
         <div class="col-md-12 mt-2 mb-5"> 
         <div class="why-us">
            <h3 class="text-center"> Parallax Web Design Services: Why Choose BMDU?</h3> 
            <p class="text-center">When we see an opportunity to provide our customers with world-class parallax website design services, we always take full advantage of the situation. While providing exceptional service to our customers is always our first focus, here are a few of the other benefits they'll enjoy when they choose us as their parallax web design provider:
</p>
<div class="row">
<div class="col-md-4">
<div class="box design shadow-sm shadow-sm">
  <h4> Services at a Reasonable Price</h4>  
  <p> We are the go-to service provider for businesses of all sizes because we keep our prices low and allow each customer to tailor their service package to their specific requirements.</p>
</div>
</div>
<!--1st box-->
<div class="col-md-4">
<div class="box design shadow-sm">
  <h4>Selected Members Only</h4>  
  <p>Our large and talented team of developers, designers, data engineers, analysts, SEO professionals, DevOps managers, and other specialists are, without a doubt, some of the finest in the world.
</p>
</div>
</div>
<!--3nd box-->
<div class="col-md-4">
<div class="box design shadow-sm">
  <h4> Exceptional Quality of Service
</h4>  
  <p>Our dedication to providing excellent service over many years has earned us a solid reputation. The trust and loyalty of our customers is our greatest achievement, and we work hard on every project to keep it that way.

</p>
</div>
</div>

<!--4th box-->
<div class="col-md-4">
<div class="box design shadow-sm">
  <h4>Approved for use by ISO</h4>  
  <p>We are a trustworthy partner for all your web design requirements since we are ISO 9001:2015 certified and follow industry standards.
</p>
</div>
</div>
   
 
<!--5th box-->
<div class="col-md-4">
<div class="box design shadow-sm">
  <h4>SPOC</h4>  
  <p>Each project has a dedicated project manager who is in charge of keeping the lines of communication open with the client at all times and making sure that everything is clear and concise.

</p>
</div>
</div>  
   
  <!--5th box-->
<div class="col-md-4">
<div class="box design shadow-sm">
  <h4>Professional Grade Technology</h4>  
  <p>Our state-of-the-art office space and cutting-edge technical resources allow everyone of our workers to provide their absolute best every day.

</p>
</div>
</div>   
         </div>
         </div>
 </div>        
         
      </div>
   </div>
</section>





<script> var exampleModal = document.getElementById('exampleModal')
   exampleModal.addEventListener('show.bs.modal', function (event) {
     // Button that triggered the modal
     var button = event.relatedTarget
     // Extract info from data-bs-* attributes
     var recipient = button.getAttribute('data-bs-whatever')
     // If necessary, you could initiate an AJAX request here
     // and then do the updating in a callback.
     //
     // Update the modal's content.
     var modalTitle = exampleModal.querySelector('.modal-title')
     var modalBodyInput = exampleModal.querySelector('.modal-body input')
   
     modalTitle.textContent = 'New message to ' + recipient
     modalBodyInput.value = recipient
   })
</script>
</div>