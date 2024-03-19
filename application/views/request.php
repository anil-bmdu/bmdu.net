<!DOCTYPE html>
<html lang="en">

<head>
   <!--required meta tags-->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
   <!--twitter og-->
   <meta name="twitter:site" content="">
   <meta name="twitter:creator" content="">
   <meta name="twitter:card" content="">
   <meta name="twitter:title" content="">
   <meta name="twitter:description" content="">
   <meta name="twitter:image" content="#">
   <!--facebook og-->
   <meta property="og:url" content="#">
   <meta name="twitter:title" content="">
   <meta property="og:description" content="">
   <meta property="og:image" content="#">
   <meta property="og:image:secure_url" content="#">
   <meta property="og:image:type" content="image/png">
   <meta property="og:image:width" content="1200">
   <meta property="og:image:height" content="600">
   <!--meta-->
   <meta name="description" content="">
   <meta name="author" content="">
   <!--favicon icon-->
   <link rel="icon" href="<?php echo base_url('assets/img/favicon.png'); ?>" type="image/png" sizes="16x16">
   <!--title-->
   <title>Quick Inquiry</title>
   <!--google fonts-->
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&amp;family=Open+Sans:wght@400;600&amp;display=swap" rel="stylesheet">
   <!--build:css-->
   <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>">
   <!-- endbuild -->
   <!--custom css start-->
   <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css'); ?>">
   <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
   
   <style>
       
[data-tip] {
	position:relative;

}
[data-tip]:before {
	content:'';
	/* hides the tooltip when not hovered */
	display:none;
	content:'';
	border-left: 5px solid transparent;
	border-right: 5px solid transparent;
	border-bottom: 5px solid #1a1a1a;	
	position:absolute;
	top:60px;
	left:35px;
	z-index:8;
	font-size:0;
	line-height:0;
	width:0;
	height:0;
}
[data-tip]:after {
	display:none;
	content:attr(data-tip);
	position:absolute;
	top:65px;
	left:0px;
	padding:5px 8px;
	background:#1a1a1a;
	color:#fff;
	z-index:9;
	font-size: 0.75em;
	height:25px;
	line-height:18px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	white-space:nowrap;
	word-wrap:normal;
}
[data-tip]:hover:before,
[data-tip]:hover:after {
	display:block;
}
   </style>
   
   
   
   
   <!--custom css end-->
</head>

<body>
   <!--main content wrapper start-->
   <div class="main-wrapper">
      <!--register section start-->
      <section class="sign-up-in-section" style="background: url(<?php echo base_url('assets/img/page-header-bg.svg'); ?>)no-repeat bottom right">
         <div class="container">
            <div class="row align-items-center justify-content-between">
               <div class="col-xl-5 col-lg-5 col-md-12 order-1 order-lg-0">
                  <div class="testimonial-tab-slider-wrap mt-5">
                     <h1 class="fw-bold text-gradient display-5">Start Your Project with Us</h1>
                     <p>Whatever your goal or project size we will handel it utilize standards compliant. We hope you
                        will be 100% satisfied.
                     </p>
                     <hr>
                     <div class="tab-content testimonial-tab-content text-white-80" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="testimonial-tab-1" role="tabpanel">
                           <blockquote class="blockquote">
                              <em>"Globally actualize economically sound alignments before tactical systems.
                                 Rapidiously actualize processes technically sound infomediaries. Holisticly
                                 pursue team building catalysts for change before team driven products. "</em>
                           </blockquote>
                           <div class="author-info mt-3">
                              <span class="h6">Veronica P. Byrd</span>
                              <span class="d-block small">Veterinary technician</span>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="testimonial-tab-2" role="tabpanel">
                           <blockquote class="blockquote">
                              <em>"Synergistically evisculate market positioning technology vis-a-vis team driven
                                 innovation. Phosfluorescently morph tactical communities for superior
                                 applications. Distinctively pontificate resource-leveling infomediaries and
                                 parallel models. "</em>
                           </blockquote>
                           <div class="author-info mt-3">
                              <span class="h6">Raymond H. Gilbert</span>
                              <span class="d-block small">Forest fire inspector</span>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="testimonial-tab-3" role="tabpanel">
                           <blockquote class="blockquote">
                              <em>"Professionally myocardinate corporate e-commerce through alternative
                                 functionalities. Compellingly matrix distributed convergence with goal-oriented
                                 synergy. Professionally embrace interactive opportunities through parallel
                                 innovation. "</em>
                           </blockquote>
                           <div class="author-info mt-3">
                              <span class="h6">Donna R. Book</span>
                              <span class="d-block small">Extractive engineer</span>
                           </div>
                        </div>
                     </div>
                     <ul class="nav nav-pills mb-0 testimonial-tab-indicator mt-5" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                           <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#testimonial-tab-1" type="button" role="tab" aria-selected="true">
                              <img src="<?php echo base_url('assets/img/testimonial/1.jpg'); ?>" alt="testimonial" width="55" class="img-fluid rounded-circle">
                           </button>
                        </li>
                        <li class="nav-item" role="presentation">
                           <button class="nav-link" data-bs-toggle="pill" data-bs-target="#testimonial-tab-2" type="button" role="tab" aria-selected="false">
                              <img src="<?php echo base_url('assets/img/testimonial/4.jpg'); ?>" alt="testimonial" width="55" class="img-fluid rounded-circle">
                           </button>
                        </li>
                        <li class="nav-item" role="presentation">
                           <button class="nav-link" data-bs-toggle="pill" data-bs-target="#testimonial-tab-3" type="button" role="tab" aria-selected="false">
                              <img src="<?php echo base_url('assets/img/testimonial/6.jpg'); ?>" alt="testimonial" width="55" class="img-fluid rounded-circle">
                           </button>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-xl-5 col-lg-7 col-md-12 order-0 order-lg-1">
                  <div class="register-wrap p-5 bg-white shadow rounded-custom mt-5 mt-lg-0 mt-xl-0">
                     <h3 class="fw-medium h4">Fill out the form and we'll be in touch as soon as possible.</h3>
                     <form action="<?php echo base_url('rq_form'); ?>" method="POST" class="mt-4 register-form" id="projectRequest">
                        <div class="row">
                           <div class="col-sm-6">
                              <div class="form-group mb-3">
                                 <input type="text" name="name" id="name" class="form-control" placeholder="Name*" aria-label="name" autocomplete="off">
                              </div>
                           </div>
                           <div class="col-sm-6 ">
                              <div class="form-group mb-3">
                                 <input type="email" name="email" class="form-control" placeholder="Email*" aria-label="email" autocomplete="off">
                              </div>
                           </div>
                           <div class="col-sm-6 ">
                              <div class="form-group mb-3">
                              <input type="tel" class="form-control"  id="phone1"  placeholder="" aria-label="company" autocomplete="off" required>
                              <span class="text-danger" id="output1" ></span>
                           </div>
                           
                           <input type="hidden" name="mobile" id="hiddencontact1" required>
                           </div>
                           <div class="col-sm-6">
                              <div class="form-group mb-3">
                                 <input type="url" name="website_name" class="form-control" placeholder="Company website*"
                                 pattern="http(s?)(:\/\/)((www.)?)(([^.]+)\.)?([a-zA-z0-9\-_]+)(.com|.net|.gov|.org|.in)(\/[^\s]*)?"
                                 oninvalid="this.setCustomValidity('Please match the requested format')"
                                 aria-label="company-website" autocomplete="off">
                              </div>
                           </div>

                           <div class="col-sm-6">
                              <div class="form-group mb-3" id="tooltip" data-tip="Please Select Country">
                                 <select class="form-control form-select" name="budget" id="budget" data-msg="Please select your budget.*" disabled>
                                    <option value="" selected="" disabled="">Budget</option>
                                    <option value="None, just getting started">None, just getting started</option>
                                    <option value="Less than $20,000">Less than $20,000</option>
                                    <option value="$20,000 to $50,000">$20,000 to $50,000</option>
                                    <option value="$50,000 to $100,000">$50,000 to $100,000</option>
                                    <option value="$100,000 to $500,000">$100,000 to $500,000</option>
                                    <option value="More than $500,000">More than $500,000</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="form-group mb-3">
                                 <select class="form-control form-select" name="country" id="country" onchange="budgetbmdu(this)" data-msg="Please select your country.*">
                                    <option value="" selected="" disabled="">Country</option>
                                    <option value="AF">Afghanistan</option>
                                    <option value="AX">Åland Islands</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antarctica</option>
                                    <option value="AG">Antigua and Barbuda</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaijan</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrain</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BY">Belarus</option>
                                    <option value="BE">Belgium</option>
                                    <option value="BZ">Belize</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermuda</option>
                                    <option value="BT">Bhutan</option>
                                    <option value="BO">Bolivia, Plurinational State of</option>
                                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                    <option value="BA">Bosnia and Herzegovina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BV">Bouvet Island</option>
                                    <option value="BR">Brazil</option>
                                    <option value="IO">British Indian Ocean Territory</option>
                                    <option value="BN">Brunei Darussalam</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="KH">Cambodia</option>
                                    <option value="CM">Cameroon</option>
                                    <option value="CA">Canada</option>
                                    <option value="CV">Cape Verde</option>
                                    <option value="KY">Cayman Islands</option>
                                    <option value="CF">Central African Republic</option>
                                    <option value="TD">Chad</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CX">Christmas Island</option>
                                    <option value="CC">Cocos (Keeling) Islands</option>
                                    <option value="CO">Colombia</option>
                                    <option value="KM">Comoros</option>
                                    <option value="CG">Congo</option>
                                    <option value="CD">Congo, the Democratic Republic of the</option>
                                    <option value="CK">Cook Islands</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="CI">Côte d'Ivoire</option>
                                    <option value="HR">Croatia</option>
                                    <option value="CU">Cuba</option>
                                    <option value="CW">Curaçao</option>
                                    <option value="CY">Cyprus</option>
                                    <option value="CZ">Czech Republic</option>
                                    <option value="DK">Denmark</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominica</option>
                                    <option value="DO">Dominican Republic</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egypt</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="GQ">Equatorial Guinea</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="EE">Estonia</option>
                                    <option value="ET">Ethiopia</option>
                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                    <option value="FO">Faroe Islands</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FI">Finland</option>
                                    <option value="FR">France</option>
                                    <option value="GF">French Guiana</option>
                                    <option value="PF">French Polynesia</option>
                                    <option value="TF">French Southern Territories</option>
                                    <option value="GA">Gabon</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="DE">Germany</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GR">Greece</option>
                                    <option value="GL">Greenland</option>
                                    <option value="GD">Grenada</option>
                                    <option value="GP">Guadeloupe</option>
                                    <option value="GU">Guam</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GG">Guernsey</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="GY">Guyana</option>
                                    <option value="HT">Haiti</option>
                                    <option value="HM">Heard Island and McDonald Islands</option>
                                    <option value="VA">Holy See (Vatican City State)</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IR">Iran, Islamic Republic of</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IE">Ireland</option>
                                    <option value="IM">Isle of Man</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italy</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japan</option>
                                    <option value="JE">Jersey</option>
                                    <option value="JO">Jordan</option>
                                    <option value="KZ">Kazakhstan</option>
                                    <option value="KE">Kenya</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="KP">Korea, Democratic People's Republic of</option>
                                    <option value="KR">Korea, Republic of</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="KG">Kyrgyzstan</option>
                                    <option value="LA">Lao People's Democratic Republic</option>
                                    <option value="LV">Latvia</option>
                                    <option value="LB">Lebanon</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LY">Libya</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lithuania</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="MO">Macao</option>
                                    <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="MV">Maldives</option>
                                    <option value="ML">Mali</option>
                                    <option value="MT">Malta</option>
                                    <option value="MH">Marshall Islands</option>
                                    <option value="MQ">Martinique</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="MU">Mauritius</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="MX">Mexico</option>
                                    <option value="FM">Micronesia, Federated States of</option>
                                    <option value="MD">Moldova, Republic of</option>
                                    <option value="MC">Monaco</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="ME">Montenegro</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MA">Morocco</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="MM">Myanmar</option>
                                    <option value="NA">Namibia</option>
                                    <option value="NR">Nauru</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NL">Netherlands</option>
                                    <option value="NC">New Caledonia</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="NE">Niger</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NU">Niue</option>
                                    <option value="NF">Norfolk Island</option>
                                    <option value="MP">Northern Mariana Islands</option>
                                    <option value="NO">Norway</option>
                                    <option value="OM">Oman</option>
                                    <option value="PK">Pakistan</option>
                                    <option value="PW">Palau</option>
                                    <option value="PS">Palestinian Territory, Occupied</option>
                                    <option value="PA">Panama</option>
                                    <option value="PG">Papua New Guinea</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Peru</option>
                                    <option value="PH">Philippines</option>
                                    <option value="PN">Pitcairn</option>
                                    <option value="PL">Poland</option>
                                    <option value="PT">Portugal</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="QA">Qatar</option>
                                    <option value="RE">Réunion</option>
                                    <option value="RO">Romania</option>
                                    <option value="RU">Russian Federation</option>
                                    <option value="RW">Rwanda</option>
                                    <option value="BL">Saint Barthélemy</option>
                                    <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                    <option value="KN">Saint Kitts and Nevis</option>
                                    <option value="LC">Saint Lucia</option>
                                    <option value="MF">Saint Martin (French part)</option>
                                    <option value="PM">Saint Pierre and Miquelon</option>
                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                    <option value="WS">Samoa</option>
                                    <option value="SM">San Marino</option>
                                    <option value="ST">Sao Tome and Principe</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="SN">Senegal</option>
                                    <option value="RS">Serbia</option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SL">Sierra Leone</option>
                                    <option value="SG">Singapore</option>
                                    <option value="SX">Sint Maarten (Dutch part)</option>
                                    <option value="SK">Slovakia</option>
                                    <option value="SI">Slovenia</option>
                                    <option value="SB">Solomon Islands</option>
                                    <option value="SO">Somalia</option>
                                    <option value="ZA">South Africa</option>
                                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                                    <option value="SS">South Sudan</option>
                                    <option value="ES">Spain</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="SD">Sudan</option>
                                    <option value="SR">Suriname</option>
                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                    <option value="SZ">Swaziland</option>
                                    <option value="SE">Sweden</option>
                                    <option value="CH">Switzerland</option>
                                    <option value="SY">Syrian Arab Republic</option>
                                    <option value="TW">Taiwan, Province of China</option>
                                    <option value="TJ">Tajikistan</option>
                                    <option value="TZ">Tanzania, United Republic of</option>
                                    <option value="TH">Thailand</option>
                                    <option value="TL">Timor-Leste</option>
                                    <option value="TG">Togo</option>
                                    <option value="TK">Tokelau</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TT">Trinidad and Tobago</option>
                                    <option value="TN">Tunisia</option>
                                    <option value="TR">Turkey</option>
                                    <option value="TM">Turkmenistan</option>
                                    <option value="TC">Turks and Caicos Islands</option>
                                    <option value="TV">Tuvalu</option>
                                    <option value="UG">Uganda</option>
                                    <option value="UA">Ukraine</option>
                                    <option value="AE">United Arab Emirates</option>
                                    <option value="GB">United Kingdom</option>
                                    <option value="US">United States</option>
                                    <option value="UM">United States Minor Outlying Islands</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistan</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VE">Venezuela, Bolivarian Republic of</option>
                                    <option value="VN">Viet Nam</option>
                                    <option value="VG">Virgin Islands, British</option>
                                    <option value="VI">Virgin Islands, U.S.</option>
                                    <option value="WF">Wallis and Futuna</option>
                                    <option value="EH">Western Sahara</option>
                                    <option value="YE">Yemen</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-12">
                              <div class="form-group mb-3">
                                 <textarea class="form-control" name="about_project" placeholder="Tell us more about your project, needs and budget*" style="height: 120px"></textarea>
                              </div>
                           </div>
                           <div class="col-12">
                              <div class="form-group mb-3">
                                 <input type="hidden" name="page" class="form-control" readonly placeholder="Type here page name" value="request">
                              </div>
                           </div>
                           <div class="col-12">
                              <div class="form-check">
                                 <input name="t_and_c" class="form-check-input" type="checkbox" value="acceped" id="flexCheckChecked">
                                 <label class="form-check-label small" for="flexCheckChecked">
                                    Yes, I'd like to receive occasional marketing emails from us. I have the
                                    right to opt out at any time.
                                    
                                 </label>
                              </div>
                           </div>
                           <div class="col-12">
                              <button type="submit" class="btn btn-primary mt-4 d-block w-100">Get Started
                              </button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--register section end-->
      <!--footer section start-->
      <!--footer section start-->
      <footer class="footer-section">
         <!--footer bottom start-->
         <div class="footer-bottom build text-white py-4">
            <div class="container">
               <div class="row justify-content-between align-items-center">
                  <div class="col-md-7 col-lg-7">
                     <div class="copyright-text">
                        <p class="mb-lg-0 mb-md-0">&copy; 2018-24 B M Digital Utilization Rights Reserved.</p>
                     </div>
                  </div>
                  <div class="col-md-4 col-lg-4">
                     <div class="footer-single-col text-start text-lg-end text-md-end">
                        <ul class="list-unstyled list-inline footer-social-list mb-0">
                           <li class="list-inline-item"><a href="<?php echo base_url('#'); ?>"><i class="fab fa-facebook-f"></i></a></li>
                           <li class="list-inline-item"><a href="<?php echo base_url('#'); ?>"><i class="fab fa-instagram"></i></a></li>
                           <li class="list-inline-item"><a href="<?php echo base_url('#'); ?>"><i class="fa-brands fa-linkedin-in"></i></a></li>
                           <li class="list-inline-item"><a href="<?php echo base_url('#'); ?>"><i class="fa-brands fa-twitter"></i></a></li>
                           <li class="list-inline-item"><a href="<?php echo base_url('#'); ?>"><i class="fa-brands fa-behance"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--footer bottom end-->
      </footer>
      <!--footer section end-->
      <!--footer section end-->
   </div>
   <!--build:js-->
   <script src="<?php echo base_url('assets/js/vendors/jquery-3.6.0.min.js'); ?>"></script>
   <script src="<?php echo base_url('assets/js/vendors/jquery.validate.min.js'); ?>"></script>
   <script src="<?php echo base_url('assets/js/vendors/additional-methods.min.js'); ?>"></script>
   <script src="<?php echo base_url('assets/js/vendors/bootstrap.bundle.min.js'); ?>"></script>
   <script src="<?php echo base_url('assets/js/vendors/swiper-bundle.min.js'); ?>"></script>
   <script src="<?php echo base_url('assets/js/vendors/jquery.magnific-popup.min.js'); ?>"></script>
   <script src="<?php echo base_url('assets/js/vendors/parallax.min.js'); ?>"></script>
   <script src="<?php echo base_url('assets/js/vendors/aos.js'); ?>"></script>
   <script src="<?php echo base_url('assets/js/app.js'); ?>"></script>
   <script>
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
               email:{
                   required:"Email is required.",
                   email:"Please enter valid email."
               },
               message:"Details is required."
           }
       });
   });
   
   
       $(function(){
           $('#projectRequest').validate({
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
                   website_name:{
                       required:true,
                   },
                   budget:{
                       required:true
                   },
                   country:{
                       required:true
                   },
                   about_project:{
                       required:true
                   },
                   t_and_c:{
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
                    t_and_c:{
                        required:"Please accept privacy & policy."
                    }
                }
           });
       });
   </script>
   <!--endbuild-->
   
   
   
   
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





<script>
    
    function budgetbmdu(a){
        let selectedCountry=a.value;
        let selectedId=document.querySelector("#budget");
        
        let tooltip=document.querySelector("#tooltip");
        
        
        
        console.log(selectedId);
        
        let test12="<option value='' selected disabled>Budget</option>";
        if(selectedCountry=="IN"){
            test12="<option value='' selected disabled>Budget</option><option value='None, just getting started'>None, just getting started</option><option value='Less than &#8377;20,000'>Less than &#8377;20,000</option><option value='&#8377;20,000 to &#8377;50,000'>&#8377;20,000 to &#8377;50,000</option>";
        }else{
        test12="<option value='' selected disabled>Budget</option><option value='None, just getting started'>None, just getting started</option><option value='Less than $20,000'>Less than $20,000</option><option value='$20,000 to $50,000'>$20,000 to $50,000</option><option value='$50,000 to $100,000'>$50,000 to $100,000</option><option value='$100,000 to $500,000'>$100,000 to $500,000</option><option value='More than $500,000'>More than $500,000</option>";
        }
        
        
        
        //  const textNode = document.createTextNode(test12);
         
         
         selectedId.removeAttribute("disabled");
         tooltip.removeAttribute("data-tip");
         
         selectedId.innerHTML =test12;
        //  selectedId.appendChild(textNode);
        
        console.log('done');
        
    }
    
</script>




  
  
</body>

</html>