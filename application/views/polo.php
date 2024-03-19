<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/calculate/css/style.css'); ?>">
   <link rel="stylesheet" href="<?php echo base_url('assets/calculate/css/s.css'); ?>">

</head>

<body>
      <div class="collapse show" id="collapseExample ">
        <div class="card card-body">
    <div class="web_doc_req">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">


                    <form class="multisteps_form overflow-hidden position-relative" id="wizard" method="POST">


                        <div class="multisteps_form_panel">
                            <div class="row pt-3">
                                <div class="col-md-12">
                                    <div class="Question"> Are You Looking For?</div>
                                </div>
                                <div class="col-md-12">
                                    <div class="">
                                        <ul class="text-center website_type_class">
                                            <li class="position-relative step_1 d-inline-block">
                                                <input id="static" type="radio" name="website_type"
                                                    value="Static / Information">
                                                <label for="static">Static / Information</label>
                                                <span class="position-absolute"></span>
                                            </li>
                                            <li class="step_1 position-relative d-inline-block ">
                                                <input id="dynamic" type="radio" name="website_type" value="Dynamic">
                                                <label for="dynamic">Dynamic</label>
                                                <span class="position-absolute"></span>
                                            </li>
                                            <li class="step_1 position-relative d-inline-block ">
                                                <input id="corporate" type="radio" name="website_type"
                                                    value="Corporate">
                                                <label for="corporate">Corporate Website</label>
                                                <span class="position-absolute"></span>
                                            </li>
                                            <li class="step_1 position-relative d-inline-block ">
                                                <input id="one_page" type="radio" name="website_type" value="One page">
                                                <label for="one_page">One Page Site</label>
                                                <span class="position-absolute"></span>
                                            </li>
                                            <li class="step_1 position-relative d-inline-block ">
                                                <input id="e_commerce" type="radio" name="website_type"
                                                    value="E Commerce">
                                                <label for="e_commerce">E-commerce</label>
                                                <span class="position-absolute"></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>



                            <div class="row pt-3">
                                <div class="col-md-12">
                                    <div class="Question"> Number Of Pages</div>
                                </div>
                                <div class="col-md-12">
                                    <div class="">
                                        <ul class="text-center page_type">
                                            <li class="position-relative step_2 d-inline-block">
                                                <input id="page_1_to_4" type="radio" name="page_type" value="4">
                                                <label for="page_1_to_4">1 - 4</label>
                                                <span class="position-absolute"></span>
                                            </li>
                                            <li class="step_2 position-relative d-inline-block ">
                                                <input id="page_5_to_8" type="radio" name="page_type" value="8">
                                                <label for="page_5_to_8">5 - 8</label>
                                                <span class="position-absolute"></span>
                                            </li>
                                            <li class="step_2 position-relative d-inline-block ">
                                                <input id="page_9_to_20" type="radio" name="page_type" value="20">
                                                <label for="page_9_to_20">9 - 20</label>
                                                <span class="position-absolute"></span>
                                            </li>
                                            <li class="step_2 position-relative d-inline-block ">
                                                <input id="page_20_to_25" type="radio" name="page_type" value="25">
                                                <label for="page_20_to_25">20 - 25</label>
                                                <span class="position-absolute"></span>
                                            </li>
                                            <li class="step_2 position-relative d-inline-block ">
                                                <input id="page_unlimited" type="radio" name="page_type" value="50">
                                                <label for="page_unlimited">Unlimited</label>
                                                <span class="position-absolute"></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="row pt-3">
                                <div class="col-md-4">
                                    <div class="Question"> Do You Want Domain
                                        <div class="popover-helpicon-main">
                                            <div class="tooltip-ques"> <span class="popover-helpicon">?</span>
                                                <span class="tooltiptext">

                                                    <en>What is domain name and why it is needed?</en>

                                                    <p>In general, a domain name identifies a network domain, or an
                                                        Internet Protocol (IP) resource, such as a personal computer
                                                        used to access the Internet, or a server computer. Domain names
                                                        are often used to identify services provided through the
                                                        Internet, such as websites and email services.</p>
                                                    <p>For Example:-</p>
                                                    <p>www.domainname.com
                                                    <p>

                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <ul class="text-center domain_type">
                                            <li class="position-relative step_1 d-inline-block">
                                                <input id="domain_yes" type="radio" name="domain" value="Yes">
                                                <label for="domain_yes">Yes</label>
                                                <span class="position-absolute"></span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="co_form">
                                        <input type="text" name="domain_name" placeholder="Enter Your Domain Name">
                                    </div>


                                </div>

                                <div class="col-md-4">
                                    <div class="Question"> Do You Want Hosting
                                        <div class="popover-helpicon-main">
                                            <div class="tooltip-ques"> <span class="popover-helpicon">?</span>
                                                <span class="tooltiptext">

                                                    <en> What is hosting used for? </en>
                                                    <p>When a hosting provider allocates space on a web server for a
                                                        website to stories its files, they
                                                        are hosting a website. Web hosting <b>makes the files that
                                                            comprise a website (code, images, etc.)
                                                            available for viewing online.</b> Every website you've ever
                                                        visited is hosted on a server. </p>

                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <ul class="text-center hosting_type">
                                            <li class="position-relative step_1 d-inline-block">
                                                <input id="hosting_yes" type="radio" name="hosting" value="Yes">
                                                <label for="hosting_yes">Yes</label>
                                                <span class="position-absolute"></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="co_form">
                                        <input type="text" name="hosting_space" readonly class="red"
                                            placeholder="Space As Per Need">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="Question">Do You Want Offical Email Ids
                                        <div class="popover-helpicon-main">
                                            <div class="tooltip-ques"> <span class="popover-helpicon">?</span>
                                                <span class="tooltiptext">

                                                    <en>what is Professional email id?<en>
                                                            <p>A professional email address is the email address used
                                                                for business communications, that is based on your
                                                                custom domain. In other words, a professional email
                                                                address is one that has your business name in it, in the
                                                                form of a domain name.</p>
                                                            <p>For Example:-</p>
                                                            <p>info@domainname.com
                                                            <p>

                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <ul class="text-center email_type">
                                            <li class="position-relative step_1 d-inline-block">
                                                <input id="email_yes" type="radio" name="email" value="Yes">
                                                <label for="email_yes">Yes</label>
                                                <span class="position-absolute"></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- <div class="co_form" id="emailCount">
                                        <label> Email </label>

                                        <div class="qty">
                                            <span class="minus bg-dark" id="minus">-</span>
                                            <input type="number" id="email_count" class="count" min="1" name="qty" value="1">
                                            <span class="plus bg-dark" id="plus">+</span>
                                        </div>
                                    </div> -->
                                </div>
                            </div>


                            <div class="row pt-3">
                                <div class="col-md-12">
                                    <div class="Question"> Pages Name
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="">
                                        <ul class="multiple_check" id="multiple_check">
                                            <li> <input id="" type="checkbox" name="pages_name[]" value="Home"> Home
                                            </li>
                                            <li> <input id="" type="checkbox" name="pages_name[]" value="About Us">
                                                About Us </li>
                                            <li> <input id="" type="checkbox" name="pages_name[]" value="Contact Us">
                                                Contact Us </li>
                                            <li> <input id="" type="checkbox" name="pages_name[]" value="Services">
                                                Services </li>
                                            <li> <input id="" type="checkbox" name="pages_name[]" value="Career"> Career
                                            </li>
                                            <li> <input id="" type="checkbox" name="pages_name[]" value="Gallery">
                                                Gallery </li>
                                            <li> <input id="" type="checkbox" name="pages_name[]" value="Product">
                                                Product </li>
                                            <li> <input id="" type="checkbox" name="pages_name[]"
                                                    value="Product Detail"> Product Detail </li>
                                            <li> <input id="" type="checkbox" name="pages_name[]" value="Portfolio">
                                                Portfolio </li>
                                            <li> <input id="" type="checkbox" name="pages_name[]" value="Media"> Media
                                            </li>
                                            <li> <input id="" type="checkbox" name="pages_name[]" value="Testimonial">
                                                Testimonial </li>
                                            <li> <input id="" type="checkbox" name="pages_name[]" value="Clients">
                                                Clients </li>
                                            <li> <input id="" type="checkbox" name="pages_name[]" value="Enquiry">
                                                Enquiry </li>
                                            <li> <input id="" type="checkbox" name="pages_name[]" value="Get A Quote">
                                                Get A Quote </li>
                                            <li> <input id="" type="checkbox" name="pages_name[]" value="Blog"> Blog
                                            </li>
                                            <li> <input id="" type="checkbox" name="pages_name[]" value="Vision Page">
                                                Vision Page </li>
                                            <li> <input id="" type="checkbox" name="pages_name[]" value="Mission Page">
                                                Mission Page </li>
                                            <li> <input id="" type="checkbox" name="pages_name[]" value="Team"> Team
                                            </li>
                                            <li> <input id="" type="checkbox" name="pages_name[]" value="Faq's"> Faq's
                                            </li>
                                            <li> <input id="" type="checkbox" name="pages_name[]" value="News"> News
                                            </li>
                                            <li> <input id="" type="checkbox" name="pages_name[]" value="Events"> Events
                                            </li>
                                            <li> <input id="" type="checkbox" name="pages_name[]" value="Awards"> Awards
                                            </li>
                                            <li> <input id="" type="checkbox" name="pages_name[]" value="Achievement">
                                                Achievement </li>
                                            <li> <input id="" type="checkbox" name="pages_name[]" value="CSR"> CSR </li>
                                            <li> <input id="" type="checkbox" name="pages_name[]"
                                                    value="Terms & Conditions"> Terms & Conditions </li>
                                            <li> <input id="" type="checkbox" name="pages_name[]"
                                                    value="Privacy Policy"> Privacy Policy </li>
                                            <li> <input id="" type="checkbox" name="pages_name[]" value="Refund Policy">
                                                Refund Policy </li>
                                            <li> <input id="" type="checkbox" name="pages_name[]"
                                                    value="Cancellation Policy"> Cancellation Policy </li>
                                            <li> <input id="" type="checkbox" name="pages_name[]" value="Studies">
                                                Studies </li>
                                            <li> <input id="" type="checkbox" name="pages_name[]" value="Industries">
                                                Industries </li>
                                            <li> <input id="" type="checkbox" name="pages_name[]" value="Site Map"> Site
                                                Map </li>
                                            <li> <input id="" type="checkbox" name="pages_name[]" value="Complaint">
                                                Complaint </li>
                                        </ul>
                                        <input type="text" id="addPage" placeholder="Add New Page">
                                        <span id="addMore"><i class="fa fa-plus"></i></span>
                                        <span id="error_msg"></span>
                                    </div>
                                </div>
                            </div>



                            <div class="row pt-3">
                                <div class="col-md-12">
                                    <div class="respn">
                                        <div class="Question">Responsive</div>
                                        <div class="co_form">

                                            <input type="checkbox" class="checke" name="responsive" id="compulsory"
                                                Value="1" checked>
                                            <label> Compulsory </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col-md-12">
                                    <div class="Question"> Special Requriment</div>
                                </div>

                                <div class="col-md-12">
                                    <div class="">
                                        <ul class="multiple_check Seo Sevv">
                                            <li for="seo"> <input id="seo" type="checkbox" class="spereq"
                                                    name="specialRequirment" price="5000" value="Seo Friendly"> Seo
                                                Friendly </li>
                                            <li> <input id="onPage" type="checkbox" class="spereq"
                                                    name="specialRequirment" value="On Page Seo" price="2000"> On Page
                                                Seo </li>

                                            <li> <input id="socialMedia" type="checkbox" class="spereq"
                                                    name="specialRequirment" price="500" value="Social Media Linking">
                                                Social Media Linking
                                                <span class="ques_mark"> ? </span>
                                                <div class="Img_ho">
                                                    <div class="tt">
                                                        <img src="img/social-media.png">
                                                    </div>
                                                </div>
                                            </li>
                                            <li> <input id="popup" type="checkbox" class="spereq"
                                                    name="specialRequirment" price="500" value="Popup Enquiry"> Popup
                                                Enquiry </li>
                                            <li> <input id="bannerDynamic" type="checkbox" class="spereq"
                                                    name="specialRequirment" value="Banner Dynamic"> Banner Dynamic
                                            </li>
                                            <li> <input id="adminPanel" type="checkbox" class="spereq"
                                                    name="specialRequirment" value="Admin Pannel"> Admin Pannel <span
                                                    class="ques_mark"> ? </span>
                                                <div class="Img_ho">
                                                    <div class="tt">
                                                        <img src="img/admin-panel.png">
                                                    </div>
                                                </div>
                                            </li>
                                            <li> <input id="editPage" type="checkbox" class="spereq"
                                                    name="specialRequirment" value="Edit Pages"> Edit Pages </li>
                                            <li> <input id="managePage" type="checkbox" class="spereq"
                                                    name="specialRequirment" value="Manage Pages"> Manage Pages </li>
                                            <li> <input id="contentWriting" type="checkbox" class="spereq"
                                                    name="specialRequirment" price="500" value="Content Writing">
                                                Content Writing </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                            <div class="row pt-3">
                                <div class="col-md-12">
                                    <div class="Question"> Special Requriment</div>
                                </div>


                                <div class="col-md-12">
                                    <div class="">
                                        <ul class="multiple_check Seo tiw_c Sevv">
                                            <li> <input id="tawkLiveChat" type="checkbox" price="500"
                                                    value="Tawk Live Chat"> Tawk Live Chat
                                                <span class="ques_mark" id="tawk"> ? </span>
                                                <div class="Img_ho" id="tawk1">
                                                    <div class="tt">
                                                        <img src="img/tawk.png">
                                                    </div>
                                                </div>
                                            </li>
                                            <li> <input id="googleMyBusiness" type="checkbox" price="500"
                                                    value="Google My Bussiness Page"> Google My Bussiness Page
                                                <span class="ques_mark"> ? </span>
                                                <div class="Img_ho">
                                                    <div class="tt">
                                                        <img src="img/google-bussines.jpg">
                                                    </div>
                                                </div>
                                            </li>


                                            <li> <input id="whatsappChat" type="checkbox" price="500"
                                                    value="Whatsapp Chat"> Whatsapp Chat
                                                <span class="ques_mark"> ? </span>
                                                <div class="Img_ho">
                                                    <div class="tt">
                                                        <img src="img/whatsapp_chat.jpg">
                                                    </div>
                                                </div>
                                            </li>

                                            <li> <input id="callButton" type="checkbox" price="500" value="Call Button">
                                                Call Button
                                                <span class="ques_mark"> ? </span>
                                                <div class="Img_ho">
                                                    <div class="tt">
                                                        <img src="img/Call-Now-Button.png">
                                                    </div>
                                                </div>
                                            </li>
                                            <li> <input id="paymentGateway" type="checkbox" price="5000"
                                                    value="Payment Gateway"> Payment Gateway
                                                <span class="ques_mark"> ? </span>
                                                <div class="Img_ho">
                                                    <div class="tt">
                                                        <img src="img/payment.png">
                                                    </div>
                                                </div>
                                            </li>
                                            <li> <input id="smsApi" type="checkbox" price="5000" value="SMS API"> SMS
                                                API
                                                <span class="ques_mark"> ? </span>
                                                <div class="Img_ho">
                                                    <div class="tt">
                                                        <img src="img/SMS-API-Blog.png">
                                                    </div>
                                                </div>
                                            </li>
                                            <li> <input id="professional_look" type="checkbox" price="10000"
                                                    value="Professional Look"> Highly Professional Look
                                                <span class="ques_mark"> ? </span>
                                                <div class="Img_ho">
                                                    <div class="tt">
                                                        <img src="img/SMS-API-Blog.png">
                                                    </div>
                                                </div>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </div>


                            <div class="row pt-3">
                                <div class="col-md-12">
                                    <div class="Question"> Technology
                                        <div class="popover-helpicon-main">
                                            <div class="tooltip-ques"> <span class="popover-helpicon">?</span>
                                                <span class="tooltiptext">

                                                    <en>What is web technology? </en>
                                                    <p>Web Technology refers to the various tools and techniques that
                                                        are utilized in the process of communication between different
                                                        types of devices over the internet. A web browser is used to
                                                        access web pages. Web browsers can be defined as programs that
                                                        display text, data, pictures, animation, and video on the
                                                        Internet</p>

                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div id="product2Content">
                                        <ul class="multiple_check tech">
                                            <li> <input id="" type="radio" checked value="PHP"> PHP </li>
                                            <li> <input id="" type="radio" checked value="HTML"> HTML </li>
                                            <li> <input id="" type="radio" checked value="CSS"> CSS </li>
                                            <li> <input id="" type="radio" checked value="JQUERY"> JQUERY </li>
                                            <li> <input id="" type="radio" checked value="AJAX"> AJAX </li>
                                            <li> <input id="" type="radio" checked value="JAVA SCRIPT"> JAVA SCRIPT</li>
                                            <li> <input id="" type="radio" checked value="MYSQL"> MYSQL </li>                                            
                                        </ul>
                                    </div>
                                <div id="product1Content">    
                                        <ul class="multiple_check ">
                                            <li> <input id="" type="checkbox" name="e_commerce_tec[]" value="Shopify">Shopify</li>
                                            <li> <input id="" type="checkbox" name="e_commerce_tec[]" value="Wordpress">WordPress</li>
                                            <li> <input id="" type="checkbox" name="e_commerce_tec[]" value="Laravel">PHP/Laravel </li>
                                            <li> <input id="" type="checkbox" name="e_commerce_tec[]" value="React"> React/Node JS</li>
                                            <li> <input id="" type="checkbox" name="e_commerce_tec[]" value="React"> Other</li>
                                        </ul>                                
                                </div>
                                    </div>

                            </div>




                            <div class="row pt-3">
                                <div class="col-md-8">
                                    <div class="Question"> Extra Requirement
                                    </div>
                                    <textarea placeholder="Write here..." id="extra_requirement" Rows="6"></textarea>
                                </div>


                                <div class="col-md-4">
                                    <div class="Question"> Attachment File <span class="add_mr"> Add more</span></div>


                                    <div class="more_files">

                                        <div class="File_atc">
                                            <div class="file-upload btn btn-primary">
                                                <span><i class="fa fa-cloud-upload"></i></span>
                                                <input type="file" name="FileAttachment" id="FileAttachment"
                                                    class="upload" />
                                            </div>
                                            <input type="text" id="fileuploadurl" readonly
                                                placeholder="Maximum file size is 1GB">
                                        </div>
                                    </div>

                                    <script>
                                        document.getElementById("FileAttachment").onchange = function () {
                                            document.getElementById("fileuploadurl").value = this.value;
                                        };
                                    </script>


                                </div>



                            </div>

                        </div>

                    </form>


                </div>

                    <div class="col-md-4 sticky_2">
                        <div class="dc-container-box sticky-contents desktop_odr_s">
                            <div class="shipping-items-details-section">
                                <div>
                                    <div class="heading prl20 open">Your order </div>
                                </div>
                                <div class="payment-details-container open">
                                    <div class="cart-payment-details mrl20" id="your_order">

                                        <div class="payment-details-tbl" id="looking_for" style="display:none;">
                                            <div class="name"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>"><span id="package_name">Static /
                                                    Information</span></div>
                                            <div class="value" id="package_price"><span
                                                    id="website_type_status">0</span></div>
                                        </div>



                                        <div class="">
                                            <div class="payment-details-tbl" id="no_of_page" style="display:none;">
                                                <div class="name"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>"><span id="page_type">No. of
                                                        Pages </span></div>
                                                <div class="value" id="package_price"><span
                                                        id="page_type_status">0</span></div>
                                            </div>
                                            <div class="Full_pages">
                                                <ul id="appendPages">
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="payment-details-tbl" id="" style="display:none;">
                                                <div class="name"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>"><span id="page_type">Advanced Technology </span></div>
                                                <div class="value" id="package_price"><span
                                                        id="page_type_status">0</span></div>
                                            </div>
                                            <div class="Full_pages">
                                                <ul id="appendPages_tech">
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="">
                                            <div class="payment-details-tbl" id="no_of_added_on_page"
                                                style="display:none;">
                                                <div class="name"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>"><span id="page_type">Add on
                                                        Page <span id="add_ons_page"></span></span></div>
                                                <div class="value" id="added_on_price"><span>0</span></div>
                                            </div>
                                            <div class="Full_pages">
                                                <ul>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="payment-details-tbl" id="do_you_domain" style="display:none;">
                                            <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>"><span
                                                    id="domain_text">Domain</span></div>
                                            <div class="value light-green"><span id="domain_type_status">0</span></div>
                                        </div>

                                        <div class="payment-details-tbl" id="do_you_hosting" style="display:none;">
                                            <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>"><span
                                                    id="hosting_text">Hosting</span></div>
                                            <div class="value light-green">
                                                <span id="hosting_type_status">0</span>
                                            </div>
                                        </div>

                                        <div class="payment-details-tbl" id="do_you_emails" style="display:none;">
                                            <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>"><span
                                                    id="emailids_text">Email Ids</span></div>
                                            <div class="value light-green">
                                                <span id="email_type_status">0</span>
                                            </div>
                                        </div>

                                        <div class="payment-details-tbl" id="responsive" style="display:none;">
                                            <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>">Responsive</div>
                                            <div class="value light-green">
                                                <span>Yes</span>
                                            </div>
                                        </div>

                                        <div class="payment-details-tbl" id="seo_box" style="display:none;">
                                            <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>">Seo</div>
                                            <div class="value light-green">
                                                <span id="seo_price">0</span>
                                            </div>
                                        </div>
                                        <div class="payment-details-tbl" id="on_page_box" style="display:none;">
                                            <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>">On Page</div>
                                            <div class="value light-green">
                                                <span id="on_page_price">0</span>
                                            </div>
                                        </div>
                                        <div class="payment-details-tbl" id="social_media_box" style="display:none;">
                                            <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>">Social Media Linking
                                            </div>
                                            <div class="value light-green">
                                                <span id="social_media_price">0</span>
                                            </div>
                                        </div>
                                        <div class="payment-details-tbl" id="popup_box" style="display:none;">
                                            <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>">Popup Enquiry</div>
                                            <div class="value light-green">
                                                <span id="popup_price">0</span>
                                            </div>
                                        </div>
                                        <div class="payment-details-tbl" id="banner_dynamic_box" style="display:none;">
                                            <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>">Banner Dynamic</div>
                                            <div class="value light-green">
                                                <span id="banner_dynamic_price">0</span>
                                            </div>
                                        </div>
                                        <div class="payment-details-tbl" id="admin_panel_box" style="display:none;">
                                            <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>">Admin Panel</div>
                                            <div class="value light-green">
                                                <span id="seo_price">0</span>
                                            </div>
                                        </div>
                                        <div class="payment-details-tbl" id="edit_page_box" style="display:none;">
                                            <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>">Edit Pages</div>
                                            <div class="value light-green">
                                                <span id="edit_page_price">0</span>
                                            </div>
                                        </div>
                                        <div class="payment-details-tbl" id="manage_pages_box" style="display:none;">
                                            <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>">Manage pages</div>
                                            <div class="value light-green">
                                                <span id="manage_pages_price">0</span>
                                            </div>
                                        </div>
                                        <div class="payment-details-tbl" id="content_writing_box" style="display:none;">
                                            <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>">Content Writing Per
                                                Page</div>
                                            <div class="value light-green">
                                                <span id="content_writing_price">0</span>
                                            </div>
                                        </div>
                                        <div class="payment-details-tbl" id="live_chat_box" style="display:none;">
                                            <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>">Tawk Live Chat</div>
                                            <div class="value light-green">
                                                <span id="live_chat_price">0</span>
                                            </div>
                                        </div>
                                        <div class="payment-details-tbl" id="google_business_box" style="display:none;">
                                            <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>">Google My Business
                                            </div>
                                            <div class="value light-green">
                                                <span id="google_business_price">0</span>
                                            </div>
                                        </div>
                                        <div class="payment-details-tbl" id="whatsapp_chat_box" style="display:none;">
                                            <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>">Whatsapp Chat</div>
                                            <div class="value light-green">
                                                <span id="whatsapp_chat_price">0</span>
                                            </div>
                                        </div>
                                        <div class="payment-details-tbl" id="call_button_box" style="display:none;">
                                            <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>">Call Button</div>
                                            <div class="value light-green">
                                                <span id="call_button_price">0</span>
                                            </div>
                                        </div>
                                        <div class="payment-details-tbl" id="payment_gateway_box" style="display:none;">
                                            <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>">Payment Gateway</div>
                                            <div class="value light-green">
                                                <span id="payment_gateway_price">0</span>
                                            </div>
                                        </div>
                                        <div class="payment-details-tbl" id="sms_api_box" style="display:none;">
                                            <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>">SMS Api</div>
                                            <div class="value light-green">
                                                <span id="sms_api_price">0</span>
                                            </div>
                                        </div>
                                        <div class="payment-details-tbl" id="professional_look_box"
                                            style="display:none;">
                                            <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>">Highly Professional
                                                Look</div>
                                            <div class="value light-green">
                                                <span id="professional_look_price">0</span>
                                            </div>
                                        </div>



                                    </div>


                                    <div class="payment-details-tbl grand-total-cell prl20"
                                        style="display:block !important">
                                        <div class="name">Grand Total</div>
                                        <div class="value fff">₹<span class="grandTotal">0</span>


                                            <sp class="span_cla"> <i class="fa fa-plus" aria-hidden="true"></i> </sp>

                                        </div>
                                    </div>

                                    <div class="payment-details-tbl prl20 payment-reward-row"
                                        style="display:block !important">
                                        <button>Proceed To Pay</button>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="DownLoad_c">
                            <a href="#" data-toggle="modal" data-target="#exampleModal"> Download Quotation <i
                                    class="fa fa-download" aria-hidden="true"></i></a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="mObile_ordr ">
            <div class="web_doc_req">
                <div class="dc-container-box sticky-contents   ">

                    <div class="shipping-items-details-section">
                        <div class="payment-details-container open">
                            <div class="cart-payment-details mrl20" id="mobile_order">

                                <div class="payment-details-tbl" id="mobile_looking_for" style="display:none;">
                                    <div class="name"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>"><span id="mobile_package_name">Static /
                                            Information</span></div>
                                    <div class="value" id="mobile_package_price"><span
                                            id="mobile_website_type_status">0</span></div>
                                </div>



                                <div class="">
                                    <div class="payment-details-tbl" id="mobile_no_of_page" style="display:none;">
                                        <div class="name"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>"><span id="mobile_page_type">No. of
                                                Pages </span></div>
                                        <div class="value" id="mobile_package_price"><span
                                                id="mobile_page_type_status">0</span></div>
                                    </div>
                                    <div class="Full_pages">
                                        <ul id="mobile_appendPages">
                                        </ul>
                                    </div>
                                </div>

                                <div class="">
                                    <div class="payment-details-tbl" id="mobile_no_of_added_on_page"
                                        style="display:none;">
                                        <div class="name"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>"><span id="mobile_page_type">Add on
                                                Page <span id="mobile_add_ons_page"></span></span></div>
                                        <div class="value" id="mobile_added_on_price"><span>0</span></div>
                                    </div>
                                    <div class="Full_pages">
                                        <ul>

                                        </ul>
                                    </div>
                                </div>
                                <div class="payment-details-tbl" id="mobile_do_you_domain" style="display:none;">
                                    <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>"><span
                                            id="mobile_domain_text">Domain</span></div>
                                    <div class="value light-green"><span id="mobile_domain_type_status">0</span></div>
                                </div>

                                <div class="payment-details-tbl" id="mobile_do_you_hosting" style="display:none;">
                                    <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>"><span
                                            id="mobile_hosting_text">Hosting</span></div>
                                    <div class="value light-green">
                                        <span id="mobile_hosting_type_status">0</span>
                                    </div>
                                </div>

                                <div class="payment-details-tbl" id="mobile_do_you_emails" style="display:none;">
                                    <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>"><span
                                            id="mobile_emailids_text">Email Ids</span></div>
                                    <div class="value light-green">
                                        <span id="mobile_email_type_status">0</span>
                                    </div>
                                </div>

                                <div class="payment-details-tbl" id="mobile_responsive" style="display:none;">
                                    <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>">Responsive</div>
                                    <div class="value light-green">
                                        <span>Yes</span>
                                    </div>
                                </div>

                                <div class="payment-details-tbl" id="mobile_seo_box" style="display:none;">
                                    <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>">Seo</div>
                                    <div class="value light-green">
                                        <span id="mobile_seo_price">0</span>
                                    </div>
                                </div>
                                <div class="payment-details-tbl" id="mobile_on_page_box" style="display:none;">
                                    <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>">On Page</div>
                                    <div class="value light-green">
                                        <span id="mobile_on_page_price">0</span>
                                    </div>
                                </div>
                                <div class="payment-details-tbl" id="mobile_social_media_box" style="display:none;">
                                    <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>">Social Media Linking</div>
                                    <div class="value light-green">
                                        <span id="mobile_social_media_price">0</span>
                                    </div>
                                </div>
                                <div class="payment-details-tbl" id="mobile_popup_box" style="display:none;">
                                    <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>">Popup Enquiry</div>
                                    <div class="value light-green">
                                        <span id="mobile_popup_price">0</span>
                                    </div>
                                </div>
                                <div class="payment-details-tbl" id="mobile_banner_dynamic_box" style="display:none;">
                                    <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>">Banner Dynamic</div>
                                    <div class="value light-green">
                                        <span id="mobile_banner_dynamic_price">0</span>
                                    </div>
                                </div>
                                <div class="payment-details-tbl" id="mobile_admin_panel_box" style="display:none;">
                                    <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>">Admin Panel</div>
                                    <div class="value light-green">
                                        <span id="mobile_seo_price">0</span>
                                    </div>
                                </div>
                                <div class="payment-details-tbl" id="mobile_edit_page_box" style="display:none;">
                                    <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>">Edit Pages</div>
                                    <div class="value light-green">
                                        <span id="mobile_edit_page_price">0</span>
                                    </div>
                                </div>
                                <div class="payment-details-tbl" id="mobile_manage_pages_box" style="display:none;">
                                    <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>">Manage pages</div>
                                    <div class="value light-green">
                                        <span id="mobile_manage_pages_price">0</span>
                                    </div>
                                </div>
                                <div class="payment-details-tbl" id="mobile_content_writing_box" style="display:none;">
                                    <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>">Content Writing Per Page
                                    </div>
                                    <div class="value light-green">
                                        <span id="mobile_content_writing_price">0</span>
                                    </div>
                                </div>
                                <div class="payment-details-tbl" id="mobile_live_chat_box" style="display:none;">
                                    <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>">Tawk Live Chat</div>
                                    <div class="value light-green">
                                        <span id="mobile_live_chat_price">0</span>
                                    </div>
                                </div>
                                <div class="payment-details-tbl" id="mobile_google_business_box" style="display:none;">
                                    <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>">Google My Business</div>
                                    <div class="value light-green">
                                        <span id="mobile_google_business_price">0</span>
                                    </div>
                                </div>
                                <div class="payment-details-tbl" id="mobile_whatsapp_chat_box" style="display:none;">
                                    <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>">Whatsapp Chat</div>
                                    <div class="value light-green">
                                        <span id="mobile_whatsapp_chat_price">0</span>
                                    </div>
                                </div>
                                <div class="payment-details-tbl" id="mobile_call_button_box" style="display:none;">
                                    <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>">Call Button</div>
                                    <div class="value light-green">
                                        <span id="mobile_call_button_price">0</span>
                                    </div>
                                </div>
                                <div class="payment-details-tbl" id="mobile_payment_gateway_box" style="display:none;">
                                    <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>">Payment Gateway</div>
                                    <div class="value light-green">
                                        <span id="mobile_payment_gateway_price">0</span>
                                    </div>
                                </div>
                                <div class="payment-details-tbl" id="mobile_sms_api_box" style="display:none;">
                                    <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>">SMS Api</div>
                                    <div class="value light-green">
                                        <span id="mobile_sms_api_price">0</span>
                                    </div>
                                </div>
                                <div class="payment-details-tbl" id="mobile_professional_look_box"
                                    style="display:none;">
                                    <div class="name light-green"><img src="<?php echo base_url('assets/calculate/img/check.png'); ?>">Highly Professional Look
                                    </div>
                                    <div class="value light-green">
                                        <span id="mobile_professional_look_price">0</span>
                                    </div>
                                </div>
                            </div>


                            <div class="payment-details-tbl grand-total-cell prl20" style="display:block !important">
                                <div class="name">Grand Total</div>
                                <div class="value fff">₹<span class="grandTotal">0</span>
                                    <sp class="span_cla"> <i class="fa fa-plus" aria-hidden="true"></i> </sp>
                                </div>
                            </div>

                            <div class="payment-details-tbl prl20 payment-reward-row" style=" gap: 7px;">



                                <div class="DownLoad_c">
                                    <button type="button" data-toggle="modal" data-target="#exampleModal" >  Download
                                        Quotation <i class="fa fa-download" aria-hidden="true"></i></button>
                                </div>
                                <button>Proceed To Pay</button>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Download Your Quotation</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                <!-- <form  id="myQuaDownload" action="<?php echo base_url('web_calculate_store');?>" method="POST" >
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i
                                        class="fa fa-user text-info"></i></div>
                            </div>
                            <input type="text" class="form-control" id="name" name="name"  placeholder="Enter Your Name"  required autocomplete="off"/>
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i
                                        class="fa fa-user text-info"></i></div>
                            </div>
                            <input type="email" class="form-control" id="email"  name="email" placeholder="Enter Your Email" required autocomplete="off" />
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i
                                        class="fa fa-user text-info"></i></div>
                            </div>
                            <input type="number" class="form-control" id="phone" name="phone" maxlength="14" minlength="10" placeholder="Enter Your Phone" required autocomplete="off"/>
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i
                                        class="fa fa-user text-info"></i></div>
                            </div>
                            <input type="text" class="form-control" id="city" name="city" placeholder="Enter Your City"  required autocomplete="off"/>
                            </div>
                    </div>
                 
                </div> -->
                <form action="<?php echo base_url('web_calculate_store') ?>" method="POST" id="">
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
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" form="myQuaDownload" class="btn btn-primary">Send message</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<div class="collapse " id="collapseExample1">

Hello World


</div>
</div>
</div>

  </button>

  
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
                <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                <script src="https://kit.fontawesome.com/fde11f0f1d.js" crossorigin="anonymous"></script>
                 <!-- <script src="<?php //echo base_url('assets/calculate/js/javascript.js'); ?>"></script> -->
               <script src="<?php echo base_url('assets/calculate/js/api.js'); ?>"></script>
            <script src="<?php echo base_url('assets/calculate/js/s.js'); ?>"></script>
            <!-- <script src="./javascript.js"></script> -->
</body>
<script>
    $(document).ready(function(){
    // Wesite Type 
    $('#emailCount').hide();
    $(document).delegate('[name="website_type"]', 'change', function(){
    let website_type = $(this).val();
    let website_type_id = $(this).attr('id');
    $('[name="website_type"]').parent('li').removeClass('active');
    $('[name="page_type"]').parent('li').removeClass('active');
    $('#domain_yes').parent('li').removeClass('active');
    $('[name="domain"]').prop('checked', false);
    $('#hosting_yes').parent('li').removeClass('active');
    $('[name="hosting"]').prop('checked', false);
    $('[name="page_type"]').parent('li').removeClass('active');
    $('[name="email"]').prop('checked', false);
    $('#email_yes').parent('li').removeClass('active');
    $('#do_you_domain').css('display', 'none');
    $('#do_you_hosting').css('display', 'none');
    $('#do_you_emails').css('display', 'none');
    $('[name="pages_name[]"]').prop('checked', false);
    $('[name="e_commerce_tec[]"]').prop('checked', false);
    $('[type="checkbox"]').prop('checked', false);
    $('#seo_box').css('display', 'none');
    $('#on_page_box').css('display', 'none');
    $('#social_media_box').css('display', 'none');
    $('#popup_box').css('display', 'none');
    $('#banner_dynamic_box').css('display', 'none');
    $('#admin_panel_box').css('display', 'none');
    $('#edit_page_box').css('display', 'none');
    $('#manage_pages_box').css('display', 'none');
    $('#content_writing_box').css('display', 'none');
    $('#live_chat_box').css('display', 'none');
    $('#google_business_box').css('display', 'none');
    $('#whatsapp_chat_box').css('display', 'none');
    $('#call_button_box').css('display', 'none');
    $('#payment_gateway_box').css('display', 'none');
    $('#sms_api_box').css('display', 'none');
    $('#professional_look_box').css('display', 'none');
    $('#appendPages').html('');
    $('#email_count').val('1');
    $('#emailCount').css('display', 'none');
    if(website_type != ''){
    $.ajax({
    // url: 'looking.php',
    url: '<?php echo base_url("looking"); ?>',
    method: 'POST',
    data: {website_type: website_type, website_type_id: website_type_id},
    success: function(response){
    let data = JSON.parse(response);
    console.log(data);
    if(data.website_type == website_type)
    {
    $('.grandTotal').text(data.totalPrice);
    $('#'+data.id).parent('li').addClass('active');
    $('#looking_for').css('display', 'flex');
    $('#mobile_looking_for').css('display', 'flex');
    $('#package_name').text(data.website_type);
    $('#mobile_package_name').text(data.website_type);
    $('#website_type_status').text(data.websitePrice);
    $('#page_type_status').text(data.pagePrice);

    $('#mobile_website_type_status').text(data.websitePrice);
    $('#'+data.pageId).parent('li').addClass('active');
    $('#no_of_page').css('display', 'flex');
    $('#mobile_no_of_page').css('display', 'flex');
    $('#page_type').text(data.page);
    $('#mobile_page_type').text(data.page);
    if(data.website_type == 'One page')
    {
        $('#page_5_to_8').attr('disabled', true);
        $('#page_9_to_20').attr('disabled', true); 
        $('#page_20_to_25').attr('disabled', true); 
        $('#page_unlimited').attr('disabled', true); 
    }else{
        $('#page_5_to_8').attr('disabled', false);
        $('#page_9_to_20').attr('disabled', false); 
        $('#page_20_to_25').attr('disabled', false); 
        $('#page_unlimited').attr('disabled', false);
    }
    }
    }
    });
    }
    });

    // Page Type 
    $(document).delegate('[name="page_type"]', 'change', function(){
    
        let page_type = $(this).val();
    let page_type_id = $(this).attr('id');
    $('#do_you_domain').css('display', 'none');
    $('#do_you_hosting').css('display', 'none');
    $('#do_you_emails').css('display', 'none');
    $('#domain_yes').parent('li').removeClass('active');
    $('[name="domain"]').prop('checked', false);
    $('#hosting_yes').parent('li').removeClass('active');
    $('[name="hosting"]').prop('checked', false);
    $('[name="page_type"]').parent('li').removeClass('active');
    $('[name="email"]').prop('checked', false);
    $('#email_yes').parent('li').removeClass('active');
    $('[name="pages_name[]"]').prop('checked', false);
    $('[name="e_commerce_tec[]"]').prop('checked', false);
    $('[type="checkbox"]').prop('checked', false);
    $('#seo_box').css('display', 'none');
    $('#on_page_box').css('display', 'none');
    $('#social_media_box').css('display', 'none');
    $('#popup_box').css('display', 'none');
    $('#banner_dynamic_box').css('display', 'none');
    $('#admin_panel_box').css('display', 'none');
    $('#edit_page_box').css('display', 'none');
    $('#manage_pages_box').css('display', 'none');
    $('#content_writing_box').css('display', 'none');
    $('#live_chat_box').css('display', 'none');
    $('#google_business_box').css('display', 'none');
    $('#whatsapp_chat_box').css('display', 'none');
    $('#call_button_box').css('display', 'none');
    $('#payment_gateway_box').css('display', 'none');
    $('#sms_api_box').css('display', 'none');
    $('#professional_look_box').css('display', 'none');
    $('#appendPages').html('');
    $('#email_count').val('1');
    $('#emailCount').css('display', 'none');
    
    let website_type=$('#package_name').html();
    
    if(page_type != '' && $(this).attr('disabled', false)){
    $.ajax({
    // url: 'page_type.php',
    url: '<?php echo base_url("page_type"); ?>',
    method: 'POST',
    data: {website_type:website_type,page_type: page_type, page_type_id: page_type_id},
    success: function(response){
    let data = JSON.parse(response);
    console.log(data);
    if(data.page_type == page_type)
    {
    $('.grandTotal').text(data.totalPrice);
    $('#'+data.id).parent('li').addClass('active');
    $('#no_of_page').css('display', 'flex');
    $('#mobile_no_of_page').css('display', 'flex');
    $('#page_type').text(data.pageTitle);
    $('#mobile_page_type').text(data.pageTitle);
    $('#page_type_status').text(data.pagePrice);
    $('#mobile_page_type_status').text(data.pagePrice);
    $('#page_1_to_4').attr('disabled', data.page1To4?true:false);
    $('#page_5_to_8').attr('disabled', data.page1To4?true:false);
    $('#page_9_to_20').attr('disabled', data.page1To4?true:false);
    }
    }
    });   
    }
    });
    // Domain Type
    $(document).delegate('[name="domain"]', 'change', function(){
    let domain_type = $(this).val();
    let domain_type_id = $(this).attr('id');
    let totalprice=$('.grandTotal').html();

    if($(this).is(':checked')){
    if(domain_type != ''){
    $.ajax({
    // url: 'domain_type.php',
    url: '<?php echo base_url("domain_type"); ?>',
    method: 'POST',
    data: {totalPrice:totalprice,domain_type: domain_type, domain_type_id: domain_type_id},
    success: function(response){
    let data = JSON.parse(response);
    $('.grandTotal').text(data.totalPrice);
    $('#'+data.id).parent('li').addClass('active');
    $('#do_you_domain').css('display', 'flex');
    $('#mobile_do_you_domain').css('display', 'flex');
    $('#domain_type_status').text(data.domainPrice);
    $('#mobile_domain_type_status').text(data.domainPrice);
    }
    });
    }
    }
    });
    // Hosting Type
    $(document).delegate('[name="hosting"]', 'change', function(){
    let hosting_type = $(this).val();
    let hosting_type_id = $(this).attr('id');
    let totalprice=$('.grandTotal').html();


    if($(this).is(':checked')){
    if(hosting_type != ''){
    $.ajax({
    // url: 'hosting_type.php',
    url: '<?php echo base_url("hosting_type"); ?>',
    method: 'POST',
    data: {totalprice: totalprice ,hosting_type: hosting_type, hosting_type_id: hosting_type_id},
    success: function(response){
    let data = JSON.parse(response);
    $('.grandTotal').text(data.totalPrice);
    $('#'+data.id).parent('li').addClass('active');
    $('#do_you_hosting').css('display', 'flex');
    $('#mobile_do_you_hosting').css('display', 'flex');
    $('#hosting_type_status').text(data.hostingPrice);
    $('#mobile_hosting_type_status').text(data.hostingPrice);
    }
    });
    }
    }
    });
    // Emails Ids
    $(document).delegate('[name="email"]', 'change', function(){
    $('#emailCount').show();
    let email = $(this).val();
    let email_id = $(this).attr('id');
    let totalprice=$('.grandTotal').html();


    if($(this).is(':checked')){
    if(email != ''){
    $.ajax({
    // url: 'email.php',
    url: '<?php echo base_url("email"); ?>',
    method: 'POST',
    data: {totalprice: totalprice, email: email, email_id: email_id},
    success: function(response){
    let data = JSON.parse(response);
    console.log(data);
    $('.grandTotal').text(data.totalPrice);
    $('#'+data.id).parent('li').addClass('active');
    $('#do_you_emails').css('display', 'flex');
    $('#mobile_do_you_emails').css('display', 'flex');
    $('#email_type_status').text(data.emailPrice);
    $('#mobile_email_type_status').text(data.emailPrice);
    }
    });
    }
    }
    });
    // Email Count => Plus Option
    $(document).delegate('#plus', 'click', function(){
    let qty = $('[name="qty"]').val();
    let totalEmailPrice = parseInt(qty) * 1200;
    if($('[name="email"]').is(':checked') == true){
    if(qty == 1)
    {
    $(this).prop('disabled', true);
    return false;
    }else{
    
        if(totalEmailPrice > 0){
            let totalprice=$('.grandTotal').html();

            $.ajax({
    // url: 'email_count.php',
    url: '<?php echo base_url("email_count"); ?>',
    method: 'POST',
    data: {totalprice:totalprice, inc: 1, totalEmailPrice: totalEmailPrice},
    success: function(response){
    let data = JSON.parse(response);
    console.log(data);  
    $('.grandTotal').text(data.totalPrice);
    $('#email_type_status').text(data.emailPrice);
    $('#mobile_email_type_status').text(data.emailPrice);
    }
    })
    }
    }
}
    });
    // Email Count => Minus Option
    $(document).delegate('#minus', 'click', function(){
    let qty = $('[name="qty"]').val();
    if($('[name="email"]').is(':checked') == true){
    if(qty > 0){
    let totalEmailPrice = parseInt(qty) * 1200;
    if(totalEmailPrice > 0){
    $.ajax({
    url: 'process/<?php echo base_url("email_count"); ?>',
    method: 'POST',
    data: {totalEmailPrice: totalEmailPrice, dec: 1},
    success: function(response){
    let data = JSON.parse(response);
    console.log(data);  
    $('.grandTotal').text(data.totalPrice);
    $('#email_type_status').text(data.emailPrice);
    $('#mobile_email_type_status').text(data.emailPrice);
    }
    })
    }
    }
    }
    });
     // ecommarce Section
     $(document).delegate('[name="e_commerce_tec[]"]', 'change', function(){
        let pages = [];
        $('[name="e_commerce_tec[]"]:checked').each(function(){
        if($(this).is(':checked')){
        pages.push($(this).val());
        }
        });
        if(pages.length > 0){
    
            let totalprice=$('.grandTotal').html();
    
    
        $.ajax({    
        // url: 'page_count.php',
        url: '<?php echo base_url("page_count"); ?>',
        method: 'POST',
        data: {totalprice:totalprice,pages: pages, pageData:1},
        success: function(response){
        let data = JSON.parse(response);
        console.log(data);
        let total=data.totalPrice;
        
        $('.grandTotal').text(total);
        $('#mobile_page_type_status').text(data.addOnPagePrice);
        $('#appendPages_').html(data.pageArray);
        $('#mobile_appendPages').html(data.pageArray);
        }
        });
        }
        });
    // Pages Section
    $(document).delegate('[name="pages_name[]"]', 'change', function(){
    let pages = [];
    $('[name="pages_name[]"]:checked').each(function(){
    if($(this).is(':checked')){
    pages.push($(this).val());
    }
    });
    if(pages.length > 0){

        let totalprice=$('.grandTotal').html();


    $.ajax({    
    // url: 'page_count.php',
    url: '<?php echo base_url("page_count"); ?>',
    method: 'POST',
    data: {totalprice:totalprice,pages: pages, pageData:1},
    success: function(response){
    let data = JSON.parse(response);
    console.log(data);
    let total=data.totalPrice;
    
    $('.grandTotal').text(total);
    $('#mobile_page_type_status').text(data.addOnPagePrice);
    $('#appendPages').html(data.pageArray);
    $('#mobile_appendPages').html(data.pageArray);
    }
    });
    }
    });

    // Add Ons Page Section
    $(document).delegate('#addMore', 'click', function(){
        let pageName = $('#addPage').val();
        if(pageName != ''){
        $('#multiple_check').append('<li><input type="checkbox" name="pages_name[]" value="'+pageName+'">'+pageName+'</li>');
        $('#addPage').val('');
        }else{
            alert('Please Enter Page Name');
        }
    });

    // Add Ons Page Section
    $(document).delegate('#seo', 'change', function(){
    let price = $(this).attr('price');
    let id = $(this).attr('id');
    let totalprice=$('.grandTotal').html();
    if($(this).is(':checked')){
    $.ajax({
    url: '<?php echo base_url("special_requirements"); ?>',
    method: 'POST',
    data: {totalprice:totalprice ,price: price, id: id, seo:1},
    success: function(response){
    let data = JSON.parse(response);
    console.log(data);
    $('.grandTotal').text(data.totalPrice);
    $('#seo_price').text(data.price);
    $('#mobile_seo_price').text(data.price);
    $('#seo_box').css('display', 'flex');
    $('#mobile_seo_box').css('display', 'flex');
    }
    });
    }else{
   
        let totalprice=$('.grandTotal').html();

        $.ajax({
    // url:'special_requirements.php',
    url: '<?php echo base_url("special_requirements"); ?>',
    method: 'POST',
    data: {totalprice:totalprice,price: price, id: id, seo:0},
    success: function(response){
    let data = JSON.parse(response);
    console.log(data);
    $('#seo_box').css('display', 'none')
    $('#mobile_seo_box').css('display', 'none');
    $('.grandTotal').text(data.totalPrice);
    }
    });
    }
    });

$(document).delegate('#onPage', 'change', function(){
let price = $(this).attr('price');
let id = $(this).attr('id');
if($(this).is(':checked')){

    
    let totalprice=$('.grandTotal').html();


$.ajax({
url: '<?php echo base_url("special_requirements"); ?>',
method: 'POST',
data: {totalprice:totalprice ,price: price, id: id, onPage:1},
success: function(response){
let data = JSON.parse(response);
console.log(data);
$('.grandTotal').text(data.totalPrice);
$('#on_page_price').text(data.price);
$('#mobile_on_page_price').text(data.price);
$('#on_page_box').css('display', 'flex');
$('#mobile_on_page_box').css('display', 'flex');
}
});
}else{

    
    let totalprice=$('.grandTotal').html();

$.ajax({
url: '<?php echo base_url("special_requirements"); ?>',
method: 'POST',
data: {totalprice:totalprice,price: price, id: id, onPage:0},
success: function(response){
let data = JSON.parse(response);
console.log(data);
$('#on_page_box').css('display', 'none');
$('#mobile_on_page_box').css('display', 'none');
$('.grandTotal').text(data.totalPrice);
}
});
}
});



$(document).delegate('#socialMedia', 'change', function(){
    let price = $(this).attr('price');
    let id = $(this).attr('id');
    if($(this).is(':checked')){
        
    let totalprice=$('.grandTotal').html();

    $.ajax({
    url: '<?php echo base_url("special_requirements"); ?>',
    method: 'POST',
    data: {totalprice:totalprice,price: price, id: id, socialMedia:1},
    success: function(response){
    let data = JSON.parse(response);
    console.log(data);
    $('.grandTotal').text(data.totalPrice);
    $('#social_media_price').text(data.price);
    $('#mobile_social_media_price').text(data.price);
    $('#social_media_box').css('display', 'flex');
    $('#mobile_social_media_box').css('display', 'flex');
    }
    });
    }else{

        
    let totalprice=$('.grandTotal').html();

    $.ajax({
    url: '<?php echo base_url("special_requirements"); ?>',
    method: 'POST',
    data: {totalprice:totalprice,price: price, id: id, socialMedia:0},
    success: function(response){
    let data = JSON.parse(response);
    console.log(data);
    $('#social_media_box').css('display', 'none');
    $('#mobile_social_media_box').css('display', 'none');
    $('.grandTotal').text(data.totalPrice);
    }
    });
    }
    });

    $(document).delegate('#popup', 'change', function(){
        let price = $(this).attr('price');
        let id = $(this).attr('id');
        if($(this).is(':checked')){
            
    let totalprice=$('.grandTotal').html();

        $.ajax({
        url: '<?php echo base_url("special_requirements"); ?>',
        method: 'POST',
        data: {totalprice:totalprice,price: price, id: id, popup:1},
        success: function(response){
        let data = JSON.parse(response);
        console.log(data);
        $('.grandTotal').text(data.totalPrice);
        $('#popup_price').text(data.price);
        $('#mobile_popup_price').text(data.price);
        $('#popup_box').css('display', 'flex');
        $('#mobile_popup_box').css('display', 'flex');
        }
        });
        }else{

            
    let totalprice=$('.grandTotal').html();


        $.ajax({
        url: '<?php echo base_url("special_requirements"); ?>',
        method: 'POST',
        data: {totalprice:totalprice,price: price, id: id, popup:0},
        success: function(response){
        let data = JSON.parse(response);
        console.log(data);
        $('#popup_box').css('display', 'none');
        $('#mobile_popup_box').css('display', 'none');
        $('.grandTotal').text(data.totalPrice);
        }
        });
        }
        });

        $(document).delegate('#contentWriting', 'change', function(){
            let price = $(this).attr('price');
            let id = $(this).attr('id');
            if($(this).is(':checked')){
            
            
    let totalprice=$('.grandTotal').html();

            
                $.ajax({
            url: '<?php echo base_url("special_requirements"); ?>',
            method: 'POST',
            data: {totalprice:totalprice,price: price, id: id, contentWriting:1},
            success: function(response){
            let data = JSON.parse(response);
            console.log(data);
            $('.grandTotal').text(data.totalPrice);
            $('#content_writing_price').text(data.price);
            $('#mobile_content_writing_price').text(data.price);
            $('#content_writing_box').css('display', 'flex');
            $('#mobile_content_writing_box').css('display', 'flex');
            }
            });
            }else{

                
    let totalprice=$('.grandTotal').html();

            $.ajax({
            url: '<?php echo base_url("special_requirements"); ?>',
            method: 'POST',
            data: {totalprice:totalprice,price: price, id: id, contentWriting:0},
            success: function(response){
            let data = JSON.parse(response);
            console.log(data);
            $('#content_writing_box').css('display', 'none');
            $('#mobile_content_writing_box').css('display', 'none');
            $('.grandTotal').text(data.totalPrice);
            }
            });
            }
            });


        $(document).delegate('#tawkLiveChat', 'change', function(){
            let price = $(this).attr('price');
            let id = $(this).attr('id');
            if($(this).is(':checked')){

                
    let totalprice=$('.grandTotal').html();

            $.ajax({
            url: '<?php echo base_url("special_requirements"); ?>',
            method: 'POST',
            data: {totalprice:totalprice,price: price, id: id, tawkLiveChat:1},
            success: function(response){
            let data = JSON.parse(response);
            console.log(data);
            $('.grandTotal').text(data.totalPrice);
            $('#live_chat_price').text(data.price);
            $('#mobile_live_chat_price').text(data.price);
            $('#live_chat_box').css('display', 'flex');
            $('#mobile_live_chat_box').css('display', 'flex');
            }
            });
            }else{
                
    let totalprice=$('.grandTotal').html();

            $.ajax({
            url: '<?php echo base_url("special_requirements"); ?>',
            method: 'POST',
            data: {totalprice:totalprice,price: price, id: id, tawkLiveChat:0},
            success: function(response){
            let data = JSON.parse(response);
            console.log(data);
            $('#live_chat_box').css('display', 'none');
            $('#mobile_live_chat_box').css('display', 'none');
            $('.grandTotal').text(data.totalPrice);
            }
            });
            }
            });

        $(document).delegate('#googleMyBusiness', 'change', function(){
            let price = $(this).attr('price');
            let id = $(this).attr('id');
            if($(this).is(':checked')){

                
    let totalprice=$('.grandTotal').html();

            $.ajax({
            url: '<?php echo base_url("special_requirements"); ?>',
            method: 'POST',
            data: {totalprice:totalprice,price: price, id: id, googleMyBusiness:1},
            success: function(response){
            let data = JSON.parse(response);
            console.log(data);
            $('.grandTotal').text(data.totalPrice);
            $('#google_business_price').text(data.price);
            $('#mobile_google_business_price').text(data.price);
            $('#google_business_box').css('display', 'flex');
            $('#mobile_google_business_box').css('display', 'flex');
            }
            });
            }else{

    let totalprice=$('.grandTotal').html();
          
    $.ajax({
            url: '<?php echo base_url("special_requirements"); ?>',
            method: 'POST',
            data: {totalprice:totalprice ,price: price, id: id, googleMyBusiness:0},
            success: function(response){
            let data = JSON.parse(response);
            console.log(data);
            $('#google_business_box').css('display', 'none');
            $('#mobile_google_business_box').css('display', 'none');
            $('.grandTotal').text(data.totalPrice);
            }
            });
            }
            });


        $(document).delegate('#whatsappChat', 'change', function(){
            let price = $(this).attr('price');
            let id = $(this).attr('id');
            if($(this).is(':checked')){


                let totalprice=$('.grandTotal').html();
          
            $.ajax({
            url: '<?php echo base_url("special_requirements"); ?>',
            method: 'POST',
            data: {totalprice:totalprice,price: price, id: id, whatsappChat:1},
            success: function(response){
            let data = JSON.parse(response);
            console.log(data);
            $('.grandTotal').text(data.totalPrice);
            $('#whatsapp_chat_price').text(data.price);
            $('#mobile_whatsapp_chat_price').text(data.price);
            $('#whatsapp_chat_box').css('display', 'flex');
            $('#mobile_whatsapp_chat_box').css('display', 'flex');
            }
            });
            }else{


                let totalprice=$('.grandTotal').html();
            $.ajax({
            url: '<?php echo base_url("special_requirements"); ?>',
            method: 'POST',
            data: {totalprice:totalprice,price: price, id: id, whatsappChat:0},
            success: function(response){
            let data = JSON.parse(response);
            console.log(data);
            $('#whatsapp_chat_box').css('display', 'none');
            $('#mobile_whatsapp_chat_box').css('display', 'none');
            $('.grandTotal').text(data.totalPrice);
            }
            });
            }
            });
        $(document).delegate('#callButton', 'change', function(){
            let price = $(this).attr('price');
            let id = $(this).attr('id');
            if($(this).is(':checked')){

                
                let totalprice=$('.grandTotal').html();
          
            $.ajax({
            url: '<?php echo base_url("special_requirements"); ?>',
            method: 'POST',
            data: {totalprice:totalprice,price: price, id: id, callButton:1},
            success: function(response){
            let data = JSON.parse(response);
            console.log(data);
            $('.grandTotal').text(data.totalPrice);
            $('#call_button_price').text(data.price);
            $('#mobile_call_button_price').text(data.price);
            $('#call_button_box').css('display', 'flex');
            $('#mobile_call_button_box').css('display', 'flex');
            }
            });
            }else{

                
                let totalprice=$('.grandTotal').html();
          
            $.ajax({
            url: '<?php echo base_url("special_requirements"); ?>',
            method: 'POST',
            data: {totalprice:totalprice,price: price, id: id, callButton:0},
            success: function(response){
            let data = JSON.parse(response);
            console.log(data);
            $('#call_button_box').css('display', 'none');
            $('#mobile_call_button_box').css('display', 'none');
            $('.grandTotal').text(data.totalPrice);
            }
            });
            }
            });

        $(document).delegate('#paymentGateway', 'change', function(){
            let price = $(this).attr('price');
            let id = $(this).attr('id');
            if($(this).is(':checked')){

                let totalprice=$('.grandTotal').html();
          

            $.ajax({
            url: '<?php echo base_url("special_requirements"); ?>',
            method: 'POST',
            data: {totalprice:totalprice,price: price, id: id, paymentGateway:1},
            success: function(response){
            let data = JSON.parse(response);
            console.log(data);
            $('.grandTotal').text(data.totalPrice);
            $('#payment_gateway_price').text(data.price);
            $('#mobile_payment_gateway_price').text(data.price);
            $('#payment_gateway_box').css('display', 'flex');
            $('#mobile_payment_gateway_box').css('display', 'flex');
            }
            });
            }else{

                
                let totalprice=$('.grandTotal').html();
          
            $.ajax({
            url: '<?php echo base_url("special_requirements"); ?>',
            method: 'POST',
            data: {totalprice:totalprice,price: price, id: id, paymentGateway:0},
            success: function(response){
            let data = JSON.parse(response);
            console.log(data);
            $('#payment_gateway_box').css('display', 'none');
            $('#mobile_payment_gateway_box').css('display', 'none');
            $('.grandTotal').text(data.totalPrice);
            }
            });
            }
            });

        $(document).delegate('#smsApi', 'change', function(){
            let price = $(this).attr('price');
            let id = $(this).attr('id');
            if($(this).is(':checked')){

                let totalprice=$('.grandTotal').html();
          

            $.ajax({
            url: '<?php echo base_url("special_requirements"); ?>',
            method: 'POST',
            data: {totalprice:totalprice, price: price, id: id, smsApi:1},
            success: function(response){
            let data = JSON.parse(response);
            console.log(data);
            $('.grandTotal').text(data.totalPrice);
            $('#sms_api_price').text(data.price);
            $('#mobile_sms_api_price').text(data.price);
            $('#sms_api_box').css('display', 'flex');
            $('#mobile_sms_api_box').css('display', 'flex');
            }
            });
            }else{

                let totalprice=$('.grandTotal').html();


            $.ajax({
            url: '<?php echo base_url("special_requirements"); ?>',
            method: 'POST',
            data: {totalprice:totalprice,price: price, id: id, smsApi:0},
            success: function(response){
            let data = JSON.parse(response);
            console.log(data);
            $('#sms_api_box').css('display', 'none');
            $('#mobile_sms_api_box').css('display', 'none');
            $('.grandTotal').text(data.totalPrice);
            }
            });
            }
            });




        $(document).delegate('#professional_look', 'change', function(){
            let price = $(this).attr('price');
            let id = $(this).attr('id');
            if($(this).is(':checked')){

                let totalprice=$('.grandTotal').html();

            $.ajax({
            url: '<?php echo base_url("special_requirements"); ?>',
            method: 'POST',
            data: {totalprice:totalprice,price: price, id: id, professional_look:1},
            success: function(response){
            let data = JSON.parse(response);
            console.log(data);
            $('.grandTotal').text(data.totalPrice);
            $('#professional_look_price').text(data.price);
            $('#mobile_professional_look_price').text(data.price);
            $('#professional_look_box').css('display', 'flex');
            $('#mobile_professional_look_box').css('display', 'flex');
            }
            });
            }else{

                
                let totalprice=$('.grandTotal').html();

            $.ajax({
            url: '<?php echo base_url("special_requirements"); ?>',
            method: 'POST',
            data: {totalprice:totalprice,price: price, id: id, professional_look:0},
            success: function(response){
            let data = JSON.parse(response);
            console.log(data);
            $('#professional_look_box').css('display', 'none');
            $('#mobile_professional_look_box').css('display', 'none');
            $('.grandTotal').text(data.totalPrice);
            }
            });
            }
            });




            $(document).delegate('#submit', 'click', function(){
                let name = $('#name').val();
                let email = $('#email').val();
                let phone = $('#phone').val();
                let city = $('#city').val();

                if(name == ''){
                    $('#name_msg').text('Please Enter Name...');
                }
                if(email == ''){
                     $('#email_msg').text('Please Enter Email...');
                }
                if(phone == ''){
                     $('#phone_msg').text('Please Enter Phone...');
                }
                if(city == ''){
                     $('#city_msg').text('Please Enter City...');
                }

                if(name != '' && email != '' && phone != '' && city != '')
                {
                    $.ajax({
                        url: 'process/submit.php',
                        method: 'POST',
                        data: {name: name, email: email, phone: phone, city: city},
                        success: function(response){
                            console.log(response);
                        }
                    });
                }
            });
});


</script>

</html>