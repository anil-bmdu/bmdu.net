
<title>Seo Calculator | BMDU</title>
    <!--meta-->
    <meta name="description" content="The intellectual biotech website design company helping startups to build a web responsive design to drive traffic on the website.">
    <meta name="author" content="Best Digital Marketing Company">


<!--page header section start-->
<section class="page-header position-relative overflow-hidden ptb-120 bg-gradient" style="background: url(<?php echo base_url('assets/img/page-header-bg.svg'); ?>)no-repeat bottom left">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <h1 class="display-5 fw-bold">Seo Calculator</h1>
                <p class="lead">Seo Calculator</p>
            </div>
        </div>
        <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
    </div>
</section>
<!--page header section end-->
<section class="feature-section pt-60 pb-120" >
    <div class="container">
        <div class="row align-items-lg-center justify-content-center">
            <div class="col-sm-12">
            <h1 class="text-center">Welcome to SEO Calculator</h1>
            </div>
            <div class="col-lg-6">
                <div id="container">
                    
                    
                    <!-- <div id="body"> -->

                    <div class="row">
                                <?php if ($this->session->flashdata('success_message')): ?>
                                    <div class="alert alert-success">
                                        <?php echo $this->session->flashdata('success_message'); ?>
                                    </div>
                                <?php endif; ?>
                                </div>
                        <div class="row justify-content-center">
                            <div class="col-sm-12 justify-content-center" style="background:padding:50px;margin-top:50px;border:2px solid #045887;border-radius:10px;">
                                <!-- <div class="row"><h1>SEO COST CALCULATOR</h1></div> -->
                                <!-- {{-- <h1>Hii Welcome Back My Projects</h1> --}} -->
                                <form action="" method="post">
                                    <label for="serviceName" class="form-label">Select Business Industry</label>
                                    <select name="serviceName" id="serviceName" class="form-control" required>
                                        <option value="" disabled selected>Choose Your Industry</option>
                                        <option value="Accounting & Tax">Accounting & Tax</option>
                                        <option value="Astrology & Tarot">Astrology & Tarot</option>
                                        <option value="Automobile">Automobile</option>
                                        <option value="eCommerce">eCommerce</option>
                                        <option value="Education">Education</option>
                                        <option value="Entertainment">Entertainment</option>
                                        <option value="Finance">Finance</option>
                                        <option value="Fintech">Fintech</option>
                                        <option value="Gambling & Casino">Gambling & Casino</option>
                                        <option value="Healthcare &Medical">Healthcare &Medical</option>
                                        <option value="Home Improvement">Home Improvement</option>
                                        <option value="Hospitality">Hospitality</option>
                                        <option value="IT & Technology">IT & Technology</option>
                                        <option value="Logistics">Logistics</option>
                                        <option value="Manufacturers">Manufacturers</option>
                                        <option value="Media & Advertisement">Media & Advertisement</option>
                                        <option value="Pet Care">Pet Care</option>
                                        <option value="Pharmaceutics">Pharmaceutics</option>
                                        <option value="Real Estate">Real Estate</option>
                                        <option value="Robotics">Robotics</option>
                                    </select>
                                    
                                    <label for="customRange3" class="form-label">Select No Of Keywords</label>
                                    <input type="range" class="form-range form-control" min="10" max="200" step="5" name="" id="customRange1">
                                        <div class="row justify-content-center">
                                        <div class="col-sm-4"><b><span id="minValue1">Min: 10</span></b></div>
                                        <div class="col-sm-4"><b><span id="rangeValue1">Range Value: </span></b></div>
                                        <div class="col-sm-4"><b><span id="maxValue1">Max: 200</span></b></div>
                                        </div>
                                    <br>
                                    <label for="customRange3" class="form-label">Select No Of Backlinks / Monthly</label>
                                    <input type="range" class="form-range form-control" min="100" max="1000" step="25" name="" id="customRange2">
                                        <div class="row justify-content-center">
                                        <div class="col-sm-4"><b><span id="minValue2">Min: 100</span></b></div>
                                        <div class="col-sm-4"><b><span id="rangeValue2">Range Value: </span></b></div>
                                        <div class="col-sm-4"><b><span id="maxValue2">Max: 1000</span></b></div>
                                        </div>
                                    <br>
                                    <label for="customRange3" class="form-label">Select Level Of On-Page</label>
                                    <input type="range" class="form-range form-control" min="1" max="3" step="1" name="" id="customRange3" value="2">
                                        <div class="row justify-content-center">
                                        <div class="col-sm-4"><b><span>Basic</span></b></div>
                                        <div class="col-sm-4"><b><span>Technical</span><br><span id="rangeValue">Level: </span></b></div>
                                        <div class="col-sm-4"><b><span>Advance</span></b></div>
                                        </div> 
                                        <br>
                                        <button type="button" id="fetchDataButton" class="btn btn-success" style="width:100%;">Calculate</button>
                                    <!-- {{-- <button type="submit" class="form-control btn btn-primary">Calculate</button> --}} -->
                                </form>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <!-- <div class="col-sm-3"></div> -->
                            <div class="col-sm-12 justify-content-center" id="secondFormContainer" style="display:none;background:#045887;padding:50px;margin-top:20px;">
                                <!-- {{-- <h1>Hii Welcome Back My Projects</h1> --}} -->
                                <form action="<?php echo site_url("seoController/formSubmit"); ?>" method="post">
                                    <div class="row">
                                        <div class="col-sm-12" >
                                            <span style="font-size:25px;"><p style="color:white;">SEO COST:<input type="hidden" style="background:#045887; color: Black; font-size: 30px; border: none;border-radius:10px;" name="total" id="total" readonly />Per Monthly</p></span> 
                                        </div>
                                    <div class="col-sm-6">
                                        <span style="background: #045887;border:1px solid #045887;"><b><span style="color:white;">Industry Name:</span>  <input type="text"  style="background: #045887; color: White; font-size: small; border: none;" name="industryName"  id="industryName" readonly></b></span><br>
                                    </div>
                                    <div class="col-sm-6">
                                        <span style="background: #045887;border:1px solid #045887;"><b><span style="color:white;">No of Keywords:</span>  <input type="text" style="background: #045887; color: White; font-size: small; border: none;" name="numberOfKeywords" id="numberOfKeywords"  readonly></b></span><br>
                                    </div>
                                    <div class="col-sm-6">
                                        <span style="background: #045887;border:1px solid #045887;"><b><span style="color:white;">No of BackLinks:</span> <input type="text" style="background: #045887; color: White; font-size: small; border: none;" name="numberOfBacklinks" id="numberOfBacklinks" readonly></b></span><br>
                                    </div>
                                    <div class="col-sm-6">
                                        <span style="background: #045887;border:1px solid #045887;"><b><span style="color:white;">Level Of On-Page:</span><input type="text" style="background: #045887; color: White; font-size: small; border: none;" name="levelOfOnPage" id="levelOfOnPage" readonly></b></span><br>
                                    </div>
                                    <div class="col-sm-6" >
                                        <!-- <input type="text" class="form-control" name="name" id="" value="<?php echo set_value("name") ?>"placeholder="Enter Name" required> -->
                                        <input type="text" class="form-control" name="name" id="nameInput" value="<?php echo set_value("name") ?>" placeholder="Enter Name" required oninput="validateAlphabet(this)">
                                        <?php echo form_error('name'); ?>
                                        <br>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control" name="email" id="emailInput" value="<?php echo set_value("email") ?>" placeholder="Enter email" required>
                                        <span id="emailFeedback" style="color: red;"></span><br>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="tel" class="form-control" id="phone1" style="width:100%" name="number" placeholder="" aria-label="company" autocomplete="off" required>
                                                    <!-- <span class="text-danger" id="output1"></span> -->
                                                    <span id="phoneHelp" style="color:red;"></span>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="url" id="websiteUrl" oninput="validateUrl()" value="<?php echo set_value("url") ?>" placeholder="Enter Website Url" required>
                                        <span id="urlMessage"></span><br>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" id="captchaInput" class="form-control" placeholder="Enter CAPTCHA code" required><br>
                                    </div>
                                    <div class="col-sm-6">
                                    <span style="background:white;font-size:20px;" id="captchaCode"></span><button onclick="generateCaptcha()" class="btn btn-warning">Reload</button>
                                    </div>
                                        </div> 
                                    <button type="submit" onclick="validateCaptcha()" class="form-control btn btn-success">Submit</button>
                                </div>
                                </form>
                            
                            </div>
                        </div>
                    </div>
                

                    
                </div>
            </div>
          
        </div>
    </div>
</section>
<script>
   
        // Range inputs for specific levels
        var rangeInput = document.getElementById('customRange3');
        var rangeInput1 = document.getElementById('customRange1');
        var rangeInput2 = document.getElementById('customRange2');
    
        // Span for displaying the range value
        var rangeValueSpan = document.getElementById('rangeValue');
    
        // Span elements where we want to display the values for the first range
        var minValueSpan1 = document.getElementById('minValue1');
        var maxValueSpan1 = document.getElementById('maxValue1');
        var rangeValueSpan1 = document.getElementById('rangeValue1');
    
        // Span elements where we want to display the values for the second range
        var minValueSpan2 = document.getElementById('minValue2');
        var maxValueSpan2 = document.getElementById('maxValue2');
        var rangeValueSpan2 = document.getElementById('rangeValue2');
    
        // Function to update the displayed range value for specific levels
        function updateValue() {
            var value = parseInt(rangeInput.value);
            var level = "";
            if (value === 1) {
                level = "Basic";
            } else if (value === 2) {
                level = "Technical";
            } else if (value === 3) {
                level = "Advanced";
            }
            rangeValueSpan.textContent = "Level: " + level;
        }
    
        // Function to update the displayed values for the first range
        function updateValues1() {
            minValueSpan1.textContent = "Min: " + rangeInput1.min;
            maxValueSpan1.textContent = "Max: " + rangeInput1.max;
            rangeValueSpan1.textContent = "Value: " + rangeInput1.value;
        }
    
        // Function to update the displayed values for the second range
        function updateValues2() {
            minValueSpan2.textContent = "Min: " + rangeInput2.min;
            maxValueSpan2.textContent = "Max: " + rangeInput2.max;
            rangeValueSpan2.textContent = "Value: " + rangeInput2.value;
        }
    
        // Call the updateValue function when the page loads
        updateValue();
    
        // Call the updateValues functions when the page loads
        updateValues1();
        updateValues2();
    
        // Add event listeners to listen for changes in the range input value for specific levels
        rangeInput.addEventListener('input', function() {
            updateValue();
        });
    
        // Add event listeners to listen for changes in the range input values for custom ranges
        rangeInput1.addEventListener('input', function() {
            updateValues1();
        });
    
        rangeInput2.addEventListener('input', function() {
            updateValues2();
        });
    
        document.getElementById('fetchDataButton').addEventListener('click', function() {
            
            var serviceName = document.getElementById('serviceName').value;
            var customRange1 = document.getElementById('customRange1').value;
            var customRange2 = document.getElementById('customRange2').value;
            var customRange3 = document.getElementById('customRange3').value;
            if (!serviceName || serviceName === "") {
                alert('Please select a service');

                return;
            }
            document.getElementById("secondFormContainer").style.display = "block";

           
            var customRange1 = Number(document.getElementById('customRange1').value);
            var customRange2 = Number(document.getElementById('customRange2').value);
            var customRange3 = document.getElementById('customRange3').value;
            // var serviceName = "Your Service Name"; // Replace this with your actual service name

            // Calculate total cost
            var total = customRange1 * 400 + customRange2 * 40;
            var levelCost = 0;

            if (customRange3 === "1") {
                levelCost = 0; // Basic cost
            } else if (customRange3 === "2") {
                levelCost = 500; // Technical cost
            } else if (customRange3 === "3") {
                levelCost = 1000; // Advanced cost
            }

            var totalCost = total + levelCost;

            document.getElementById('total').value = totalCost;

            // Fill data into the second form
            document.getElementById('industryName').value = serviceName;
            document.getElementById('numberOfKeywords').value = customRange1;
            document.getElementById('numberOfBacklinks').value = customRange2;
            document.getElementById('levelOfOnPage').value = (customRange3 === "1" ? "Basic" : (customRange3 === "2" ? "Technical" : "Advanced"));

            
        });

        document.addEventListener("DOMContentLoaded", function() {
    // Get reference to the scroll button
            var scrollButton = document.getElementById('fetchDataButton');
            
            // Add click event listener to the button
            scrollButton.addEventListener('click', function() {
                // Scroll down by 200 pixels
                window.scrollBy(0, 100);
            });
        });
       
        function validateAlphabet(input) {
            // Remove any non-alphabetic characters
            input.value = input.value.replace(/[^a-zA-Z]/g, '');
        }

        function validatePhoneNumber(input) {
        var phoneNumber = input.value.replace(/\D/g, ''); // Remove non-numeric characters
        // var isValid = /^\d{10}$/.test(phoneNumber); // Check if the phone number has exactly 10 digits
        var isValid = /^[6-9]\d{9}$/.test(phoneNumber);
        
        if (!isValid) {
            input.setCustomValidity("Please enter a 10-digit phone number"); // Set custom validation message
        } else {
            input.setCustomValidity(""); // Clear the custom validation message
        }
    }

    generateCaptcha();
    function generateCaptcha() {
            var captchaCode = '';
            var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            for (var i = 0; i < 6; i++) {
                captchaCode += characters.charAt(Math.floor(Math.random() * characters.length));
            }
            // Display the CAPTCHA code in the HTML element with id 'captchaCode'
            document.getElementById('captchaCode').textContent = captchaCode;
        }

        // Validate user input against the CAPTCHA code
        function validateCaptcha() {
            var userInput = document.getElementById('captchaInput').value.trim();
            var captchaCode = document.getElementById('captchaCode').textContent;
            if (userInput.toLowerCase() === captchaCode.toLowerCase()) {
                alert('CAPTCHA code is Correct!');
                // Here you can proceed with form submission or other actions
            } else {
                alert('CAPTCHA code is incorrect. Please try again.');
                // Clear the input field and generate a new CAPTCHA code
                document.getElementById('captchaInput').value = '';
                generateCaptcha();
            }
        }

        function validateUrl() {
        var urlInput = document.getElementById('websiteUrl').value;
        // This regex checks for a basic URL format (http/https), it can be adjusted as needed for more specific cases
        var regex = /^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/;
        var message = document.getElementById('urlMessage');

        if (regex.test(urlInput)) {
            message.innerHTML = "Valid URL";
            message.style.color = "green";
        } else {
            message.innerHTML = "Invalid URL";
            message.style.color = "red";
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
    var phoneInput = document.getElementById('phone1');
    var form = document.getElementById('phoneForm');
    var helpText = document.getElementById('phoneHelp');
    
    // Validate phone number in real-time
    phoneInput.addEventListener('input', function() {
        validatePhoneNumber(this.value);
    });

    // Validate on form submit
    form.addEventListener('submit', function(event) {
        var isValid = validatePhoneNumber(phoneInput.value);
        if (!isValid) {
            event.preventDefault(); // Prevent form submission
            alert("Please enter a valid phone number.");
        }
    });

    function validatePhoneNumber(number) {
        // Adjust the regex pattern to fit your needs
        var regex = /^\+?\d{12}$/;
        var isValid = regex.test(number);
        helpText.textContent = isValid ? "" : "Invalid phone number format.";
        return isValid;
    }
});
document.addEventListener('DOMContentLoaded', function() {
    var emailInput = document.getElementById('emailInput');
    var emailForm = document.getElementById('emailForm');
    var emailFeedback = document.getElementById('emailFeedback');

    // Validate email in real-time
    emailInput.addEventListener('input', function() {
        validateEmail(this.value);
    });

    // Validate on form submit
    emailForm.addEventListener('submit', function(event) {
        var isValid = validateEmail(emailInput.value);
        if (!isValid) {
            event.preventDefault(); // Prevent form submission
            alert("Please enter a valid email address.");
        }
    });

    function validateEmail(email) {
        var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        var isValid = regex.test(email);
        emailFeedback.textContent = isValid ? "" : "Invalid email format.";
        return isValid;
    }
});



      
    </script>
<!--style guide block start-->

<section class="hero-section ptb-120 bg-gradient">
    <div class="container">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-xl-5 col-lg-5">
                <div class="hero-content-wrap text-center text-xl-start text-lg-start aos-init aos-animate" data-aos="fade-right">
                    <h1 class="fw-bold display-5">Our Customers Get Results</h1>
                    <p class="lead">Results matter to you and so do they for us. We assure our clients to get results beyond their expectations.</p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 mt-4 mt-xl-0">
                <div class="hero-img-wrap position-relative aos-init aos-animate" data-aos="fade-left">
                    <!--animated shape start-->
                    <ul class="position-absolute animate-element parallax-element shape-service hide-medium" style="transform: translate3d(0px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden;">
                        <li class="layer" data-depth="0.03" style="position: relative; display: block; left: 0px; top: 0px; transform: translate3d(14.3175px, -7.39215px, 0px); transform-style: preserve-3d; backface-visibility: hidden;">
                            <img src="<?php echo base_url('assets/img/color-shape/image-1.svg'); ?>" alt="Biotech Website Design Company" class="img-fluid position-absolute color-shape-1">
                        </li>
                        <li class="layer" data-depth="0.02" style="position: absolute; display: block; left: 0px; top: 0px; transform: translate3d(9.54501px, -4.9281px, 0px); transform-style: preserve-3d; backface-visibility: hidden;">
                            <img src="<?php echo base_url('assets/img/color-shape/feature-2.svg'); ?>" alt="Biotech Website Design Company" class="img-fluid position-absolute color-shape-2 z-5">
                        </li>
                        <li class="layer" data-depth="0.03" style="position: absolute; display: block; left: 0px; top: 0px; transform: translate3d(14.3175px, -7.39215px, 0px); transform-style: preserve-3d; backface-visibility: hidden;">
                            <img src="<?php echo base_url('assets/img/color-shape/feature-3.svg'); ?>" alt="Biotech Website Design Company" class="img-fluid position-absolute color-shape-3">
                        </li>
                    </ul>
                    <!--animated shape end-->
                    <div class="hero-img-wrap position-relative">
                        <div class="hero-screen-wrap">
                            <div class="phone-screen">
                                <img src="<?php echo base_url('assets/img/screen/phone-screen.png'); ?>" alt="Web design for Biotech Company" class="position-relative img-fluid">
                            </div>
                            <div class="mac-screen">
                                <img src="<?php echo base_url('assets/img/screen/mac-screen.png'); ?>" alt="Web design for Biotech Company" class="position-relative img-fluid rounded-custom">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--feature section start-->
<!--feature section start-->
<section class="work-process ptb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-6">
                <div class="section-heading text-center aos-init aos-animate" data-aos="fade-up">
                    <!-- <h4 class="h5 text-primary">Process</h4> -->
                    <h2>We Follow Our Work Process</h2>
                    <p>Our skilled teams make sure to work and take the right steps to make your business a hit. </p>
                </div>
            </div>
        </div>
        <div class="row d-flex align-items-center">
            <div class="col-md-6 col-lg-3">
                <div class="process-card text-center px-4 py-lg-5 py-4 rounded-custom shadow-hover mb-3 mb-lg-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="50">
                    <div class="process-icon border border-light bg-custom-light rounded-custom p-3">
                        <span class="h2 mb-0 text-primary fw-bold">1</span>
                    </div>
                    <h3 class="h5">Research</h3>
                    <p class="mb-0">Do the in-depth right research.</p>
                </div>
            </div>
            <div class="dots-line first"></div>
            <div class="col-md-6 col-lg-3">
                <div class="process-card text-center px-4 py-lg-5 py-4 rounded-custom shadow-hover mb-3 mb-lg-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <div class="process-icon border border-light bg-custom-light rounded-custom p-3">
                        <span class="h2 mb-0 text-primary fw-bold">2</span>
                    </div>
                    <h3 class="h5">Designing</h3>
                    <p class="mb-0">Work on producing unique designs.</p>
                </div>
            </div>
            <div class="dots-line first"></div>
            <div class="col-md-6 col-lg-3">
                <div class="process-card text-center px-4 py-lg-5 py-4 rounded-custom shadow-hover mb-3 mb-lg-0 mb-md-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="150">
                    <div class="process-icon border border-light bg-custom-light rounded-custom p-3">
                        <span class="h2 mb-0 text-primary fw-bold">3</span>
                    </div>
                    <h3 class="h5">Building</h3>
                    <p class="mb-0">Building it the right way. Step by step.</p>
                </div>
            </div>
            <div class="dots-line first"></div>
            <div class="col-md-6 col-lg-3">
                <div class="process-card text-center px-4 py-lg-5 py-4 rounded-custom shadow-hover mb-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <div class="process-icon border border-light bg-custom-light rounded-custom p-3">
                        <span class="h2 mb-0 text-primary fw-bold">4</span>
                    </div>
                    <h3 class="h5">Deliver</h3>
                    <p class="mb-0">Deliver you the best results. </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--feature section end-->
</div>