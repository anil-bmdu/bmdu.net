
   <title>Career</title>
   <!--meta-->
   <meta name="description" content="We are consider Best Digital Marketing Company Globally. Get you all online marketing and digital marketing project done &amp; get huge returns.">
   <meta name="author" content="Best Digital Marketing Company">


<!--page header section start-->
<section class="page-header position-relative overflow-hidden ptb-120 bg-gradient" style="background: url(<?php echo base_url('assets/img/page-header-bg.svg'); ?>)no-repeat bottom left">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 col-md-12">
            <h1 class="display-5 fw-bold">Career</h1>
            <p class="lead">Seamlessly actualize client-based users after out-of-the-box value. Globally embrace strategic data through frictionless expertise.</p>
         </div>
      </div>
      <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
   </div>
</section>
<!--page header section end-->
<section id="open-positions" class="open-jobs ptb-120">
   <div class="container">
      <div class="row align-items-center justify-content-between">
         <div class="col-lg-5 col-md-12">
            <div class="section-heading">
               <h4 class="h5 text-primary">Our Jobs</h4>
               <h2>Current Available Positions at Quiety</h2>
            </div>
         </div>
         <div class="col-lg-7 col-md-12">
            <p>Phosfluorescently disintermediate revolutionary paradigms before enabled interfaces. Dynamically transition skills vis-a-vis virtual customer service via impactful partnerships with technically sound paradigms with cutting-edge initiatives. </p>
         </div>
      </div>
      <div class="row justify-content-center">
         <?php
                    $sr=1;
                    if(count($show) > 0){
                        foreach($show as $job){ ?>
         <div class="col-lg-6 col-md-12">
            <a href="<?php echo base_url('job-details/'.$job->job_id); ?>" class="text-decoration-none mt-4 single-open-job p-5 bg-gradient text-white d-block rounded-custom">
               <div class="d-flex justify-content-between align-items-center">
                  <span class="job-time h-6 mb-2"><i class="far fa-briefcase me-2"></i> <strong><?= $job->job_type ?></strong></span>
                  <span class="badge px-3 py-2 bg-custom-light rounded-pill small"><?= $job->requirement ?> </span>
               </div>
               <h3 class="h5"><?= $job->positions ?></h3>
               <ul class="job-info-list list-inline list-unstyled text-muted">
                  <li class="list-inline-item"><span class="far fa-house-building me-1"></span>Noida</li>
                  <li class="list-inline-item"><span class="far fa-map-marker-alt me-1"></span><?= $job->experience ?></li>
                  <li class="list-inline-item"><span class="far fa-wallet me-1"></span>Salary=<?= $job->salary ?></li>
                  <li class="list-inline-item"><span class="far fa-wallet me-1"></span><span>Total Vacancy = <?= $job->opening?></span></li>
               </ul>
               <div class="btn btn-outline-light btn-sm d-inline-block mt-4">Apply Now</div>
            </a>
         </div>
         <?php } ?>
           <?php } ?>
      </div>
   </div>
</section>
<!--open jobs section end-->
<!--career promo start-->
<section class="career-promo ptb-120 bg-light">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-12 col-md-12">
            <div class="section-heading text-center">
               <h4 class="h5 text-primary">Why Join Us</h4>
               <h2>Great Working Environment</h2>
               <p>Revolutionary paradigms before enabled interfaces dynamically transition technically sound paradigms with cutting-edge initiatives. </p>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-6 col-lg-6">
            <div class="single-feature d-flex mt-0 p-5 bg-white rounded-custom">
               <span class="fas fa-house-user fa-2x text-primary"></span>
               <div class="ms-4 mt-2">
                  <h5>Remote Working Facilities</h5>
                  <p class="mb-0">Credibly syndicate enterprise total linkage whereas cost effective innovate state of the art data without multifunctional. </p>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-6">
            <div class="single-feature d-flex mt-4 mt-xl-0 mt-lg-0 mt-md-0 p-5 bg-white rounded-custom">
               <span class="fas fa-clock fa-2x text-primary"></span>
               <div class="ms-4 mt-2">
                  <h5>Flexible Working Hours</h5>
                  <p class="mb-0">Credibly syndicate enterprise total linkage whereas cost effective innovate state of the art data without multifunctional. </p>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-6">
            <div class="single-feature d-flex mt-4 p-5 bg-white rounded-custom">
               <span class="fas fa-user-friends fa-2x text-primary"></span>
               <div class="ms-4 mt-2">
                  <h5>Friendly Skilled Team</h5>
                  <p class="mb-0">Credibly syndicate enterprise total linkage whereas cost effective innovate state of the art data without multifunctional. </p>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-6">
            <div class="single-feature d-flex mt-4 p-5 bg-white rounded-custom">
               <span class="fas fa-briefcase-medical fa-2x text-primary"></span>
               <div class="ms-4 mt-2">
                  <h5>Medical Insurance Facilities</h5>
                  <p class="mb-0">Credibly syndicate enterprise total linkage whereas cost effective innovate state of the art data without multifunctional. </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--career promo end-->
</div>