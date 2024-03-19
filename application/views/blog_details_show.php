
   <section class="page-header position-relative overflow-hidden ptb-120 bg-gradient" style="background: url(<?php echo base_url('assets/img/page-header-bg.svg'); ?>)no-repeat bottom left">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-12 col-12">
            <h1 class="display-5 designing"><?= $post->heading; ?>
         </h1>
         </div>
      </div>
      <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
   </div>
</section>
<!--page header section end-->
<!--blog details section start-->
<section class="blog-details ptb-120">
   <div class="container">
      <div class="row justify-content-between">
         <div class="col-lg-8 pe-lg-5">
            <div class="blog-details-wrap">
            <img src="<?= base_url('uploads/blog/'.$post->image); ?>" alt="how-can-improve-website-traffic-through-seo" style="width:100%; height:400px">
            <?= $post->blog_editor; ?>
               <div class="blog-details-info mt-5"></div>
            </div>
         </div>

         <div class="col-lg-4">
            <div class="sticky-sidebar">

            <div class="blog-sidebar ">
          <aside class="blog-widget widget-categories mt-30">
            <div class="widget-title">
              <h4>Categories</h4>
            </div>
            <ul class="widget-body">
              <li>
                <a href="#">
                  <h6>
                    <i class="bi bi-chevron-double-right"></i>Finance
                  </h6>
                </a>
              </li>            
            
            </ul>
          </aside>
          <aside class="blog-widget widget-recent-entries-custom mt-30">
            <div class="widget-title text-center">
              <h4 >New Post</h4>
            </div>
            <ul class="widget-body">
              <?php
                  if(count($show) > 0){
                        foreach($show as $post){ ?>
                        <div class="row">
                          <div class="col-sm-3">  <li class="clearfix">
                <div class="wi">
                  <a href="<?php echo base_url('blog-details-show/'.$post->id);?>" previewlistener="true">
                    <img src="<?= base_url('uploads/blog/'.$post->image); ?>" alt="" style="height: 100px; width:100px"> 
                  </a> 
                </div></div>
                          <div class="col-sm-9"> <div class="wb">
                  <h6>
                    <a href="<?php echo base_url('blog-details-show/'.$post->id);?>" previewlistener="true"><?= $post->heading; ?></a>
                  </h6>
                  <div class="wb-info">
                    <span class="post-date text-danger text-bold">
                      <i class="bi bi-person-circle "></i><?= $post->blog_category ?> 
                    </span>
                    <span class="post-date">
                      <i class="bi bi-calendar3"></i><?= date('d-m-Y ', strtotime($post->create_at)); ?> </span>
                  </div></div>
                        </div>                
                </div>
             <br>
              <?php } ?>
           <?php } ?> 
            </ul>
          </aside>
        </div>
        </div>
         </div>
      </div>
   </div>
   </div>
   
</section>

<section class="cta-subscribe bg-light ptb-120 position-relative overflow-hidden">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-8 col-md-10">
            <div class="subscribe-info-wrap text-center position-relative z-2">
               <div class="section-heading">
                  <h2>Ready to get started?</h2>
                  <p>We can help you to create your dream website for better business revenue.</p>
               </div>
               <div class="form-block-banner mw-60 m-auto mt-2">
                  <a href="<?php echo base_url('contact-us'); ?>" class="btn btn-primary">Contact with Us</a>
                  <a href="https://www.youtube.com/watch?v=IILumnhHlhw" class="text-decoration-none popup-youtube d-inline-flex align-items-center watch-now-btn ms-lg-3 ms-md-3 mt-3 mt-lg-0 text-primary">
                     <i class="fas fa-play text-primary border-primary"></i> Watch Demo </a>
               </div>
               <ul class="nav justify-content-center subscribe-feature-list mt-4">
                  <li class="nav-item">
                     <span><i class="far fa-check-circle text-primary me-2"></i>Free 14-day trial</span>
                  </li>
                  <li class="nav-item">
                     <span><i class="far fa-check-circle text-primary me-2"></i>No credit card required</span>
                  </li>
                  <li class="nav-item">
                     <span><i class="far fa-check-circle text-primary me-2"></i>Support 24/7</span>
                  </li>
                  <li class="nav-item">
                     <span><i class="far fa-check-circle text-primary me-2"></i>Cancel anytime</span>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-gradient left-5"></div>
      <div class="bg-circle rounded-circle circle-shape-1 position-absolute bg-light right-5" style="background: radial-gradient(#2eade2, transparent);"></div>
   </div>
</section>
<!--cat subscribe end-->