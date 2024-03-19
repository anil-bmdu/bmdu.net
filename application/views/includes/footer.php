<style>
    .toggle-icon i::before {
        content: "+";
    }

    .toggle-icon.active i::before {
        content: "-";
    }
</style>


<!--footer section start-->
<footer class="footer-section">
   <!--footer top start-->
   <!--for light footer add .footer-light class and for dark footer add .bg-dark .text-white class-->
   <div class="footer-top bg-gradient text-white  ptb-120" style="background: url(<?php echo base_url('assets/img/page-header-bg.svg'); ?>)no-repeat bottom right;padding-bottom:11px !important;">
      <div class="container">
         <div class="row justify-content-between desktop">
            <div class="col-md-12 col-lg-8 mt-4 mt-md-0">
               <div class="row">
                  <div class="col-md-3 col-lg-3 mt-4 mt-md-0 ">
                     <div class="footer-single-col">
                        <h3>Quick Links</h3>
                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                           <li><a href="<?php echo base_url('about-us'); ?>" class="text-decoration-none">About US</a></li>
                           <li><a href="<?php echo base_url('career'); ?>" class="text-decoration-none">Career</a></li>
                           <li><a href="<?php echo base_url('contact-us'); ?>" class="text-decoration-none">Contact</a></li>
                           <li><a href="<?php echo base_url('blog'); ?>" class="text-decoration-none">Blog</a></li>
                           <li><a href="<?php echo base_url('privacy.php'); ?>" class="text-decoration-none">Privacy Policy</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-4 col-lg-4 mt-4 mt-md-0 ">
                     <div class="footer-single-col">
                        <h3>Branding Services</h3>
                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                           <li><a href="<?php echo base_url('logo-designs'); ?>" class="text-decoration-none">Logo Design</a></li>
                           <li><a href="<?php echo base_url('#'); ?>" class="text-decoration-none">Influencer Marketing</a></li>
                           <li><a href="<?php echo base_url('#'); ?>" class="text-decoration-none">Social Media Marketing</a></li>
                           <li><a href="<?php echo base_url('#'); ?>" class="text-decoration-none">Meme Marketing</a></li>
                           <li><a href="<?php echo base_url('#'); ?>" class="text-decoration-none">ORM</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-5 col-lg-5 mt-4 mt-md-0 ">
                     <div class="footer-single-col">
                        <h3>Our Services</h3>
                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                           <li><a href="<?php echo base_url('web-design-services'); ?>" class="text-decoration-none">Web Design Services</a></li>
                           <li><a href="<?php echo base_url('app-development-services'); ?>" class="text-decoration-none">App Development Services</a></li>
                           <li><a href="<?php echo base_url('dynamic-website'); ?>" class="text-decoration-none">Dynamic website Design Services</a></li>
                           <li><a href="<?php echo base_url('web-development-services'); ?>" class="text-decoration-none">Web Development Services</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-8 col-lg-4 mb-md-4 mb-lg-0">
               <div class="footer-single-col">
                  <!--************crausal rating************-->
                  <h5>Contact Us</h5>
                  <ul>
                     <li> <i class="fa-sharp fa-regular fa-phone"></i> : <a href="tel:+91-7599490885"> +91 75994 90885 (IN)</a>,<a href="tel:+91-9667371301"> +91 96673 71301 (IN)</a> </li>
                     <li><i class="fa-sharp fa-regular fa-phone"></i> : <a href="tel:+1 (368)9999940">+1 (368) 999 9940 (CA)</a> </li>
                     <li><i class="fa-light fa-envelope"></i> : <a href="mailto:info@digitalutilization.com">info@digitalutilization.com</a></li>
                     <li><img src="<?php echo base_url('assets/img/india.webp'); ?>" style="width: 24px;"> :  <a href="https://goo.gl/maps/PGMB7TW7Hp3zE9Tx9">B-41, B-Block, Sector-63, Noida, Uttar Pradesh 201301 (INDIA)</a></li>
                     <li><img src="<?php echo base_url('assets/img/canda.png'); ?>" style="width: 24px;"> :  <a href="https://goo.gl/maps/n5xTPHHv3ncMF8v46">135 13th Ave SW Calgary, AB (CANADA)</a></li>
                  </ul>
                  <!--********************** end crausal rating ********************-->
               </div>
            </div>
         </div>
         <!--mobile footer start-->
         <div class="row justify-content-between mobile">
            <div class="col-md-12 col-lg-8 mt-4 mt-md-0">
               <div class="row">
                  <div class="col-md-3 col-lg-3 mt-4 mt-md-0">
                     <div class="footer-single-col">
                        <h3>
                           Quick Links
                           <span class="toggle-icon" onclick="toggleSection('quickLinks')">
                           <i></i>
                           </span>
                        </h3>
                        <ul id="quickLinks" class="list-unstyled footer-nav-list mb-lg-0 collapse">
                           <li><a href="<?php echo base_url('about-us'); ?>" class="text-decoration-none">About US</a></li>
                           <li><a href="<?php echo base_url('career'); ?>" class="text-decoration-none">Career</a></li>
                           <li><a href="<?php echo base_url('contact-us'); ?>" class="text-decoration-none">Contact</a></li>
                           <li><a href="<?php echo base_url('blog'); ?>" class="text-decoration-none">Blog</a></li>
                           <li><a href="<?php echo base_url('privacy.php'); ?>" class="text-decoration-none">Privacy Policy</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-4 col-lg-4 mt-md-0">
                     <div class="footer-single-col">
                        <h3>
                           Branding Services
                           <span class="toggle-icon" onclick="toggleSection('brandingServices')">
                           <i></i>
                           </span>
                        </h3>
                        <ul id="brandingServices" class="list-unstyled footer-nav-list mb-lg-0 collapse">
                           <li><a href="<?php echo base_url('logo-designs'); ?>" class="text-decoration-none">Logo Design</a></li>
                           <li><a href="<?php echo base_url('#'); ?>" class="text-decoration-none">Influencer Marketing</a></li>
                           <li><a href="<?php echo base_url('#'); ?>" class="text-decoration-none">Social Media Marketing</a></li>
                           <li><a href="<?php echo base_url('#'); ?>" class="text-decoration-none">Meme Marketing</a></li>
                           <li><a href="<?php echo base_url('#'); ?>" class="text-decoration-none">ORM</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-5 col-lg-5 mt-md-0">
                     <div class="footer-single-col">
                        <h3>
                           Our Services
                           <span class="toggle-icon" onclick="toggleSection('ourServices')">
                           <i></i>
                           </span>
                        </h3>
                        <ul id="ourServices" class="list-unstyled footer-nav-list mb-lg-0 collapse">
                           <li><a href="<?php echo base_url('web-design-services'); ?>" class="text-decoration-none">Web Design Services</a></li>
                           <li><a href="<?php echo base_url('app-development-services'); ?>" class="text-decoration-none">App Development Services</a></li>
                           <li><a href="<?php echo base_url('dynamic-website'); ?>" class="text-decoration-none">Dynamic website Design Services</a></li>
                           <li><a href="<?php echo base_url('web-development-services'); ?>" class="text-decoration-none">Web Development Services</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-8 col-lg-4 mb-md-4 mb-lg-0">
               <div class="footer-single-col">
                  <!--************crausal rating************-->
                  <h3>
                     Contact Us
                     <span class="toggle-icon" onclick="toggleSection('contactus')">
                     <i></i>
                     </span>
                  </h3>
                  <ul id="contactus" class="list-unstyled footer-nav-list mb-lg-0 collapse">
                     <li> <i class="fa-sharp fa-regular fa-phone"></i> : <a href="tel:+91-7599490885"> +91 75994 90885 (IN)</a>,<a href="tel:+91-9667371301"> +91 96673 71301 (IN)</a> </li>
                     <li><i class="fa-sharp fa-regular fa-phone"></i> : <a href="tel:+1 (368)9999940">+1 (368) 999 9940 (CA)</a> </li>
                     <li><i class="fa-light fa-envelope"></i> : <a href="mailto:info@digitalutilization.com">info@digitalutilization.com</a></li>
                     <li><img src="assets/img/india.webp" style="width: 24px;"> : <a href="https://goo.gl/maps/PGMB7TW7Hp3zE9Tx9">B-41, B-Block, Sector-63, Noida, Uttar Pradesh 201301 (INDIA)</a></li>
                     <li><img src="assets/img/canda.png" style="width: 24px;"> : <a href="https://goo.gl/maps/n5xTPHHv3ncMF8v46">135 13th Ave SW Calgary, AB (CANADA)</a></li>
                  </ul>
                  <!--********************** end crausal rating ********************-->
               </div>
            </div>
         </div>
         <!--mobile footer end-->
      </div>
   </div>
   <!--footer top end-->
   <!--footer bottom start-->
   <div class="footer-bottom bg-gradient text-white  py-2">
      <div class="container">
         <div class="row justify-content-between align-items-center">
            <div class="col-md-7 col-lg-7">
               <div class="copyright-text">
                  <p class="mb-lg-0 mb-md-0">© 2018-2024 B M Digital Utilization Rights Reserved. </p>
               </div>
            </div>
            <div class="col-md-4 col-lg-4">
               <div class="footer-single-col text-start text-lg-end text-md-end">
                  <ul class="list-unstyled list-inline footer-social-list mb-0">
                     <li class="list-inline-item"><a href="https://www.facebook.com/bmdigitalutilization/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                     <li class="list-inline-item"><a href="https://www.instagram.com/bmdigitalutilization/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                     <li class="list-inline-item"><a href="https://www.linkedin.com/uas/login-submit" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                     <li class="list-inline-item"><a href="https://twitter.com/bmdigitalu" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                     <li class="list-inline-item"><a href="https://www.behance.net/digitalutilization" target="_blank"><i class="fa-brands fa-behance"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--footer bottom end-->
</footer>
<!--footer section end-->
</div>
<!--build:js-->
<script src="<?php echo base_url('assets/js/vendors/jquery-3.6.0.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/vendors/jquery.validate.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/vendors/additional-methods.min.js'); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="<?php echo base_url('assets/js/vendors/swiper-bundle.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/vendors/jquery.magnific-popup.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/vendors/parallax.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/vendors/aos.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/app.js'); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
   $('.main-content .owl-carousel').owlCarousel({
      stagePadding: 50,
      loop: true,
      margin: 10,
      autoplay: true,
      nav: false,
      navText: [
         '<i class="fa fa-angle-left" aria-hidden="true"></i>',
         '<i class="fa fa-angle-right" aria-hidden="true"></i>'
      ],
      navContainer: '.main-content .custom-nav',
      responsive: {
         0: {
            items: 2
         },
         600: {
            items: 4
         },
         1000: {
            items: 7
         }
      }
   });

   $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: false,
      autoplay: true,
      responsive: {
         0: {
            items: 1
         },
         600: {
            items: 2
         },
         1000: {
            items: 3
         }
      }
   });
   
   $(function(){
       $('#inquiryform').validate({
           rules:{
               name:{
                   required:true,
                   minlength:3
               },
               contact:{
                   required:true,
                   digits:true,
                   minlength:10,
                   maxlength:13
               },
               email:{
                   required:true,
                   email:true
               },
               message:{
                   required:true
               }
           },
           highlight:function(element){
               $(element).addClass("c1");
               $(element).removeClass("c2");
           },
           unhighlight:function(element){
               $(element).addClass("c2");
           },
           messages:{
               name:{
                   required:"Name is required.",
                   minlength:"Name must be minimum 3 characters."
               },
               contact:{
                   required:"Mobile Number is required.",
                   digits:"Please enter a valid mobile number.",
                   minlength:"Please enter minimum 10 digit mobile no.",
                   maxlength:"Please enter maximum 13 digit mobile no. with country code."
               },
               resume: {
                    required: "Upload Resume is required.",
                    extension: "Invalid file format. Please upload a PDF, DOCX, or DOC file."
                },
               email:{
                   required:"Email is required.",
                   email:"Please enter valid email."
               },
               message:"Details is required."
           }
       });
   });
   
   $(function(){
           $('#quick_form').validate({
               rules:{
                   name:{
                       required:true,
                       minlength:3
                   },
                   email:{
                       required:true,
                       email:true
                   },
                   mobile:{
                       required:true,
                       digits:true,
                       minlength:10,
                       maxlength:13
                   },
                   message:{
                       required:true,
                   }
               },
               highlight:function(element){
                    $(element).addClass("c1");
                    $(element).removeClass("c2");
                },
                unhighlight:function(element){
                    $(element).addClass("c2");
                }
           });
       });
   $(function(){
           $('#myQua_form').validate({
               rules:{
                   name:{
                       required:true,
                       minlength:3
                   },
                   email:{
                       required:true,
                       email:true
                   },
                   phone:{
                       required:true,
                       digits:true,
                       minlength:10,
                       maxlength:13
                   },
                   city:{
                       required:true,
                   }
               },
               highlight:function(element){
                    $(element).addClass("c1");
                    $(element).removeClass("c2");
                },
                unhighlight:function(element){
                    $(element).addClass("c2");
                }
           });
       });
       
       $(function(){
           $('#contact_form').validate({
               rules:{
                   fname:{
                       required:true,
                       minlength:3
                   },
                   lname:{
                       required:true,
                       minlength:3
                   },
                   phone:{
                       required:true,
                       digits:true,
                       minlength:10,
                       maxlength:13
                   },
                   email:{
                       required:true,
                       email:true
                   },
                   message:{
                       required:true
                   }
               },
               highlight:function(element){
                    $(element).addClass("c1");
                    $(element).removeClass("c2");
                },
                unhighlight:function(element){
                    $(element).addClass("c2");
                }
           });
       });

       $(function(){
           $('#careerForm2').validate({
               rules:{
                   fname:{
                       required:true,
                       minlength:3
                   },
                   skills:{
                       required:true,
                       minlength:3
                   },
                   position:{
                       required:true,
                       minlength:3
                   },
                   experience:{
                       required:true,
                       minlength:3
                   },
                   phone:{
                       required:true,
                       digits:true,
                       minlength:10,
                       maxlength:13
                   },
                   email:{
                       required:true,
                       email:true
                   },
                   message:{
                       required:true
                   },
                   resume: {
                    required: false,
                  //   extension: "pdf|docx|doc" // Specify allowed file extensions
                }
               },
               highlight:function(element){
                    $(element).addClass("c1");
                    $(element).removeClass("c2");
                },
                unhighlight:function(element){
                    $(element).addClass("c2");
                }
           });
       });
</script>





<script>
const input1 = document.querySelector("#phone1");
const hiddencontact1 = document.querySelector("#hiddencontact1");

const output1 = document.querySelector("#output1");

const iti1 = window.intlTelInput(input1, {
  nationalMode: true,
  geoIpLookup:"auto",
  utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js" // just for formatting/placeholders etc
});

const handleChanges = () => {
  let text1;
  if (input1.value) {
    if(iti1.isValidNumber()){
      hiddencontact1.value=iti1.getNumber();
    text1="";    
    }else{
      text1= "Invalid number - please try again";}
  } else {
    text1 = "Please enter a valid number below";
  }
  const textNode = document.createTextNode(text1);
  output1.innerHTML = "";
  output1.appendChild(textNode);
};

// listen to "keyup", but also "change" to update when the user selects a country
input1.addEventListener('change', handleChanges);
input1.addEventListener('keyup', handleChanges);

//   const input = document.querySelector("#contact");
//   window.intlTelInput(input, {
//     utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js",
//     allowDropdown:true,

//   });
</script>
  
  

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<script>
  AOS.init();
</script>

<script>
    function toggleSection(sectionId) {
        var section = document.getElementById(sectionId);
        var icon = document.querySelector('[onclick="toggleSection(\'' + sectionId + '\')"] i');

        if (section.classList.contains('show')) {
            section.classList.remove('show');
            icon.classList.remove('active');
        } else {
            section.classList.add('show');
            icon.classList.add('active');
        }
    }
</script>


 <script>
// Prevent specific information being copied from my website
// $('body').bind('copy paste cut drag drop', function (e) {
//   e.preventDefault();
// });
</script>   


