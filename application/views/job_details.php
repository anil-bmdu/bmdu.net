<section class="page-header position-relative overflow-hidden ptb-120 bg-gradient" style="background: url('assets/img/page-header-bg.svg')no-repeat bottom left">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-8 col-12">
                        <div class="company-info-wrap">
                          <div class="company-overview">
                                <h1 class="display-5 fw-bold"><?= $post->positions ?></h1>

                                <h6>About The Company</h6>
                                <ul class="list-unstyled list-inline mb-0 mt-3">
                                    <li class="list-inline-item me-4"><i class="far fa-house-building me-2"></i>BMDU </li>
                                    <li class="list-inline-item me-4">

                                        <div class="star-rating">
                                            <i class="far fa-smile me-2"></i>
                                            <span class="fas fa-star small text-warning"></span>
                                            <span class="fas fa-star small text-warning"></span>
                                            <span class="fas fa-star small text-warning"></span>
                                            <span class="fas fa-star small text-warning"></span>
                                            <span class="fas fa-star small text-warning"></span>
                                        </div>
                                    </li>
                                    <li class="list-inline-item me-4"><i class="far fa-map-marker-alt me-2"></i>Noida
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12">
                        <div class="annual-salary-wrap rounded-custom">
                            <h6> Salary</h6>
                            <span class="display-6 fw-semi-bold text-dark mb-0"><?= $post->salary ?></span>
                        </div>
                    </div>
                </div>

                <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
            </div>
        </section>
        <!--page header section end-->

        <!--job details section start-->
        <section class="job-details ptb-120">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-8 pe-lg-5">
                        <div class="job-details-wrap">
                            <h2>Job Details</h2>
                             <?= $post->job_desc?>
                            <!-- <img src="<?php base_url('assets/img/apply-now-1.jpg') ?>" class="img-fluid mt-5 rounded-custom" alt="apply"> -->
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="job-overview-wrap bg-light p-5 sticky-sidebar rounded-custom mt-5 mt-lg-0">
                            <h5>Job Overviews</h5>
                            <ul class="job-overview-list list-unstyled mt-4">
                                <li>
                                    <i class="far fa-map-marker-alt text-primary"></i>
                                    <div class="overview-item">
                                        <h6 class="mb-0">Location:</h6>
                                        <span>Noida, Uttar Pradesh</span>
                                    </div>
                                </li>
                                <li>
                                    <i class="far fa-user text-primary"></i>
                                    <div class="overview-item">
                                        <h6 class="mb-0">Job Title:</h6>
                                        <span><?= $post->requirement	?></span>
                                    </div>
                                </li>
                                <li>
                                    <i class="far fa-user text-primary"></i>
                                    <div class="overview-item">
                                        <h6 class="mb-0">Job Positions:</h6>
                                        <span><?= $post->positions	?></span>
                                    </div>
                                </li>
                                <li>
                                    <i class="far fa-clock text-primary"></i>
                                    <div class="overview-item">
                                        <h6 class="mb-0">Job Type</h6>
                                        <span><?= $post->job_type ?> </span>
                                    </div>
                                </li>
                                <li>
                                    <i class="far fa-history text-primary"></i>
                                    <div class="overview-item">
                                        <h6 class="mb-0">Experience</h6>
                                        <span><?= $post->experience ?></span>
                                    </div>
                                </li>
                                <li>
                                    <i class="far fa-wallet text-primary"></i>
                                    <div class="overview-item">
                                        <h6 class="mb-0">Salary:</h6>
                                        <span><?= $post->salary?></span>
                                    </div>
                                </li>
                            </ul>
                            <!-- <a href="" class="btn btn-primary d-block mt-5"></a>Apply now -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#jobForm">
                            Apply now
                          </button>
                          <!-- <button type="button" id="blink" class="btn btn-white" data-bs-toggle="modal" data-bs-target="#myModal">
                           Apply Now ! </button> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--job details section end-->

        <!--related job start-->
        <section class="related-job-list ptb-120 bg-light">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-5 col-md-12">
                        <div class="section-heading">
                            <h4 class="h5 text-primary">Related Jobs</h4>
                            <h2>More Openings Jobs at Quiety</h2>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <p>Phosfluorescently disintermediate revolutionary paradigms before enabled interfaces. Dynamically
                            transition skills vis-a-vis virtual customer service via impactful partnerships with technically
                            sound paradigms with cutting-edge initiatives. </p>
                    </div>
                </div>
                <div class="row">
                    <!-- <div class="col-lg-4 col-md-6">
                        <a href="career-single.html" class="text-decoration-none mt-4 mt-lg-0 mt-xl-0 single-open-job p-5 bg-white d-block rounded-custom">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="text-muted h6 mb-2 job-time"><i class="far fa-briefcase me-2"></i> Remote - Full Time</span>
                                <span class="badge rounded-pill px-3 py-2 bg-primary-soft text-primary small">Developer</span>
                            </div>
                            <h3 class="h5">Jr Frontend Developer</h3>
                            <ul class="job-info-list list-inline list-unstyled text-muted">
                                <li class="list-inline-item"><span class="far fa-house-building me-1"></span> Google</li>
                                <li class="list-inline-item"><span class="far fa-map-marker-alt me-1"></span> London, UK
                                </li>
                                <li class="list-inline-item"><span class="far fa-wallet me-1"></span> $35k - $45k</li>
                            </ul>
                            <div class="btn btn-primary btn-sm d-inline-block mt-4">Apply Now</div>
                        </a>
                    </div> -->
                    <!-- <div class="col-lg-4 col-md-6">
                        <a href="career-single.html" class="text-decoration-none mt-4 mt-lg-0 mt-xl-0 single-open-job p-5 bg-white d-block rounded-custom">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="text-muted h6 mb-2 job-time"><i class="far fa-briefcase me-2"></i> Remote - Full Time</span>
                                <span class="badge rounded-pill px-3 py-2 bg-danger-soft text-danger small">Designer</span>
                            </div>
                            <h3 class="h5">UI/UX Product Designer</h3>
                            <ul class="job-info-list list-inline list-unstyled text-muted">
                                <li class="list-inline-item"><span class="far fa-house-building me-1"></span> Figma</li>
                                <li class="list-inline-item"><span class="far fa-map-marker-alt me-1"></span> California
                                </li>
                                <li class="list-inline-item"><span class="far fa-wallet me-1"></span> $25k - $35k</li>
                            </ul>
                            <div class="btn btn-primary btn-sm d-inline-block mt-4">Apply Now</div>
                        </a>
                    </div> -->
                    <?php
                    $sr=1;
                    if(count($show) > 0){
                        foreach($show as $job){ ?>

                    <div class="col-lg-4 col-md-6">
                        <a href="<?php echo base_url('job-details/'.$job->job_id); ?>" class="text-decoration-none mt-4 mt-lg-0 mt-xl-0 single-open-job p-5 bg-white d-block rounded-custom">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="text-muted h6 mb-2 job-time"><i
                                        class="far fa-briefcase me-2"></i><?  //echo  $job->positions ?> </span>
                                <span class="badge rounded-pill px-3 py-2 bg-success-soft text-success small"><?= $job->requirement ?></span>
                            </div>
                            <h3 class="h5"><?= $job->positions ?></h3>
                            <ul class="job-info-list list-inline list-unstyled text-muted">
                                <!-- <li class="list-inline-item"><span class="far fa-house-building me-1"></span> </li> -->
                                <li class="list-inline-item"><span class="far fa-map-marker-alt me-1">Noida Uttar Pradhesh</span> 
                                </li>
                                <li class="list-inline-item"><span class="far fa-wallet me-1"> Salary=<?= $job->salary ?></span></li>
                            </ul>
                            <div class="btn btn-primary btn-sm d-inline-block mt-4">Apply Now</div>
                        </a>
                    </div>
                    <?php } ?>
           <?php } ?>

                </div>
            </div>
        </section>
<!-- The Modal -->
<div class="modal" id="jobForm">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <button type="button" class="btn-n" data-bs-dismiss="modal">
            <i class="fa-solid fa-xmark"></i>
        </button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form  id="careerForm"  action="<?php echo base_url('career-ap-form'); ?>"  method="POST" enctype="multipart/form-data" class=""  >
    <div class="row">
        <div class="col-sm-6">
            <label for="fName" class="mb-1">Full Name <span class="text-danger">*</span></label>
            <div class="form-group mb-3">
                <input type="text" class="form-control" id="fname" name="fname" placeholder="Full Name" aria-label="fname" >
                <p id="fnameError" class="text-danger"></p>
            </div>
        </div>
                  <div class="col-sm-6">
                     <label for="phone" class="mb-1">Phone Number <span class="text-danger">*</span> </label>
                     <div class="form-group mb-3">
                        <input type="Number" class="form-control"   id="phone" name="phone" placeholder="Phone" aria-label="phone" autocomplete="off"  />
                        <p id="phoneError" class="text-danger"></p>
                     </div>
                     </div>
                  <div class="col-sm-6">
                     <label for="email" class="mb-1">Email<span class="text-danger">*</span></label>
                     <div class="form-group mb-3">
                        <input type="email" class="form-control"   name="email" id="email"  placeholder="Email" aria-label="email" autocomplete="off" >
                        <p id="emailError" class="text-danger"></p>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <label for="position" class="mb-1">Positions<span class="text-danger">*</span></label>
                     <div class="form-group mb-3">
                        <input type="text" class="form-control"   name="position" id="position"  placeholder="Positions" aria-label="position" autocomplete="off">
                        <p id="positionError" class="text-danger"></p>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <label for="skills" class="mb-1">Skills<span class="text-danger">*</span></label>
                     <div class="form-group mb-3">
                        <input type="text" class="form-control"   name="skills" id="skills"  placeholder="Skills" aria-label="skills" autocomplete="off"/>
                        <p id="skillsError" class="text-danger"></p>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <label for="experience" class="mb-1">Experience<span class="text-danger">*</span></label>
                     <div class="form-group mb-3">
                        <input type="text" class="form-control"   name="experience" id="experience"  placeholder="Fresher/0-10 years" aria-label="experience" autocomplete="off" />
                        <p id="experienceError" class="text-danger"></p>
                     </div>
                  </div>
                  <div class="col-sm-12">
                     <label for="file" class="mb-1">Upload Resume<span class="text-danger">*</span></label>
                     <div class="form-group mb-3">
                        <input type="file" class="form-control"   name="resume" id="resume" accept="application/pdf/doc/docx"  placeholder="" aria-label="resume" autocomplete="OFF" />
                        <p id="resumeError" class="text-danger"></p>
                     </div>
                  </div>
                  <div class="col-12">
                     <label for="yourMessage" class="mb-1">Message</label>
                     <div class="form-group mb-3">
                        <textarea name="message" class="form-control"   id="yourMessage" rows="3" maxlength="150"  placeholder="" style="height:50px;" ></textarea>
                     </div>
                     <p id="yourMessage" class="text-danger"></p>
                  </div>
               </div>
               <button type="submit"  name="submit" value="Submit" class="btn btn-primary mt-4">Get in Apply</button>
            </form>
         </div>
              </div>
          </div>
      </div>

      <!-- Modal footer -->
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div> -->

    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
$(document).ready(function() {
    $('#careerForm').submit(function(e) {
        $('.text-danger').text('');

        // Validate meta title
        var fName = $('#fname').val();
        if (fName.trim() === '') {
            $('#fnameError').text('Full Name is required');
            e.preventDefault();
        }

        //Validate blog title
        var phone = $('#phone').val();

if (phone.trim() === '') {
    $('#phoneError').text('Phone Number is required');
    e.preventDefault();
} else if (phone.length < 10 || phone.length > 14 || !(/^\d+$/.test(phone))) {
   
    $('#phoneError').text('Invalid phone number. Please enter a valid number.');
    e.preventDefault();
} 


    // Assuming this is inside a form submission event
   
      //   var email = $('#email').val();

      //   if (email.trim() === '') {
      //       $('#emailError').text('Email is required');
      //       e.preventDefault(); // Prevent the form submission
      //   }



         var blogTitle = $('#position').val();
        if (blogTitle.trim() === '') {
            $('#positionError').text('Position is required');
            e.preventDefault();
        }
        // Validate blog heading
        var skills = $('#skills').val();
        if (skills.trim() === '') {
            $('#skillsError').text(' Skills is required');
            e.preventDefault();
        }

        // Validate paragraph
        var experience = $('#experience').val();
        if (experience.trim() === '') {
            $('#experienceError').text('Experience are required');
            e.preventDefault();
        }

        // Validate image
        var resume = $('#resume').val();
        if (resume.trim() === '') {
            $('#resumeError').text('Resume File Uploads is required');
            e.preventDefault();
        } else {
            // You can add additional resume type validation if needed
            var allowedExtensions = /(\.pdf|\.docx|\.doc)$/i;
            if (!allowedExtensions.exec(resume)) {
                $('#resumeError').text('Invalid file type. Allowed types:pdf,docx,doc');
                e.preventDefault();
            }
        }
    });
});
</script>