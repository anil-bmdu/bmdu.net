<!--page header section start-->
   <!-- <?php echo $post->meta_title; ?> -->
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
         <!-- <div class="col-lg-4">
            <div class="author-wrap text-center bg-light p-5 sticky-sidebar rounded-custom mt-5 mt-lg-0">
             <p><?= $post->paragraph; ?></p>
               <ul class="list-unstyled author-social-list list-inline mt-3 mb-0">
                  <li class="list-inline-item"><a href="<?php echo base_url('#'); ?>"><i class="fab fa-linkedin-in"></i></a></li>
                  <li class="list-inline-item"><a href="<?php echo base_url('#'); ?>"><i class="fab fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="<?php echo base_url('#'); ?>"><i class="fab fa-github"></i></a></li>
                  <li class="list-inline-item"><a href="<?php echo base_url('#'); ?>"><i class="fab fa-facebook-f"></i></a></li>
               </ul>
            </div>
         </div> -->
         <div class="col-lg-4">
            <!-- <div class="sticky-sidebar">
             <img src="<?= base_url('uploads/blog/'.$post->image); ?>" alt="designing-a-strong-online-presence-the-best-biotech-website-designs" style="width: 100%; hight:300px">
            </div> -->

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
                  <span>(20)</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <h6>
                    <i class="bi bi-chevron-double-right"></i> Gold Loan
                  </h6>
                  <span>(08)</span>
                </a>
              </li>
            
            </ul>
          </aside>
          <aside class="blog-widget widget-recent-entries-custom mt-30">
            <div class="widget-title">
              <h4>New Post</h4>
            </div>
            <ul class="widget-body">
              <li class="clearfix">
                <div class="wi">
                  <a href="smart-benefits-of-taking-gold-loan-with-HDFC-bank" previewlistener="true">
                    <img src="images/top-10-min.jpg" alt="">
                  </a>
                </div>
                <div class="wb">
                  <h6>
                    <a href="smart-benefits-of-taking-gold-loan-with-HDFC-bank" previewlistener="true">Smart Benefits Of Taking Gold Loan With HDFC Bank</a>
                  </h6>
                  <div class="wb-info">
                    <span class="post-date">
                      <i class="bi bi-person-circle"></i> By SwiftLoans</span>
                    <span class="post-date">
                      <i class="bi bi-calendar3"></i>March 23, 2023 </span>
                  </div>
                </div>
              </li>
              
              <li class="clearfix">
                <div class="wi">
                  <a href="Gold-Loan-Bank-the-Most-Secured-Assistance-in-Your-Case-of-Emergenc" previewlistener="true">
                    <img src="images/img/compress.jpg" alt="">
                  </a>
                </div>
                <div class="wb">
                  <h6>
                    <a href="Gold-Loan-Bank-the-Most-Secured-Assistance-in-Your-Case-of-Emergenc" previewlistener="true">Gold Loan Bank the Most Secured Assistance in Your Case of Emergency</a>
                  </h6>
                  <div class="wb-info">
                    <span class="post-date">
                      <i class="bi bi-person-circle"></i> By Swiftloans </span>
                    <span class="post-date">
                      <i class="bi bi-calendar3"></i> April 21, 2023 </span>
                  </div>
                </div>
              </li>
              
              
              <li class="clearfix">
                <div class="wi">
                  <a href="everything-you-need-to-know-about-HDFC-gold-Loan" previewlistener="true">
                    <img src="images/img/goldloan.jpg" alt="">
                  </a>
                </div>
                <div class="wb">
                  <h6>
                    <a href="everything-you-need-to-know-about-HDFC-gold-Loan" previewlistener="true">Everything You Need to Know About HDFC Gold Loan</a>
                  </h6>
                  <div class="wb-info">
                    <span class="post-date">
                      <i class="bi bi-person-circle"></i> By Swiftloans </span>
                    <span class="post-date">
                      <i class="bi bi-calendar3"></i> May 28, 2023 </span>
                  </div>
                </div>
              </li>
              
              
              <li class="clearfix">
                <div class="wi">
                  <a href="what-you-need-to-know-about-HDFC-Gold-Loan-Interest-Rates" previewlistener="true">
                    <img src="images/gold-loan2.webp" alt="">
                  </a>
                </div>
                <div class="wb">
                  <h6>
                    <a href="what-you-need-to-know-about-HDFC-Gold-Loan-Interest-Rates" previewlistener="true">What You Need to Know about HDFC Gold Loan Interest Rates
  </a>
                  </h6>
                  <div class="wb-info">
                    <span class="post-date">
                      <i class="bi bi-person-circle"></i> By Swiftloans </span>
                    <span class="post-date">
                      <i class="bi bi-calendar3"></i> June 16, 2023 </span>
                  </div>
                </div>
              </li>
            </ul>
          </aside>
          <aside class="blog-widget widget-tag-cloud mt-30">
            <div class="widget-title">
              <h4>Tags</h4>
            </div>
            <div class="tag-cloud widget-body">
             
              <a href="#">Gold Loans</a>
              <a href="#">Loan Against Gold</a>
              <a href="#">Loan Foreclosure</a>
              <a href="#">Collateral</a>
              <a href="#">Loan Terms</a>
              <a href="#">Eligibility Criteria</a>
              <a href="#">Safety and Security</a>
            </div>
          </aside>
        </div>
        </div>
         </div>
      </div>
   </div>
   </div>
   
</section>
<!--blog details section end-->
<!--related blog start-->
<section class="related-blog-list ptb-120 bg-light">
   <div class="container">
      <div class="row align-items-center justify-content-between">
         <div class="col-lg-4 col-md-12">
            <div class="section-heading">
               <h4 class="h5 text-primary">Related News</h4>
               <h2>More Latest News and Blog</h2>
            </div>
         </div>
         <div class="col-lg-7 col-md-12">
            <div class="text-start text-lg-end mb-4 mb-lg-0 mb-xl-0">
               <a href="<?= base_url('blog'); ?>" class="btn btn-primary">View All Article</a>
            </div>
         </div>
      </div>
      <div class="row">
         <!-- <div class="col-lg-4 col-md-6">
            <div class="single-article rounded-custom mb-4 mb-lg-0">
               <a href="<?php echo base_url('designing-a-strong-online-presence-the-best-biotech-website-designs'); ?>" class="article-img">
                  <img src="<?php echo base_url('assets/image/designing-a-strong-online-presence-the-best-biotech-website-designs.jpg'); ?>" alt="article" class="img-fluid">
               </a>
               <div class="article-content p-4">
                  <div class="article-category mb-4 d-block">
                     <a href="javascript:;" class="d-inline-block text-dark badge bg-warning-soft">Design</a>
                  </div>
                  <a href="<?php echo base_url('designing-a-strong-online-presence-the-best-biotech-website-designs'); ?>">
                     <h2 class="h5 article-title limit-2-line-text">Designing a Strong Online Presence: The Best Biotech Website Designs..</h2>
                  </a>
                  <p class="limit-2-line-text">Web design represents approximately for more than 94% of a company's first insights. ........</p>
                  <a href="javascript:;">
                     <div class="d-flex align-items-center pt-4">
                        <div class="avatar">
                           <img src="<?php echo base_url('assets/image/logo.png'); ?>" alt="Digital Marketing Agency" width="40" class="img-fluid rounded-circle me-3">
                        </div>
                        <div class="avatar-info">
                           <h6 class="mb-0 avatar-name">BM Digital Utilization</h6>
                           <span class="small fw-medium text-muted">April 10, 2023</span>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="single-article rounded-custom mb-4 mb-lg-0">
               <a href="<?php echo base_url('pros-and-cons-of-hiring-a-digital-marketing-company'); ?>" class="article-img">
                  <img src="<?php echo base_url('assets/image/Benefits-of-Hiring-Digital-Marketing-Agency.png'); ?>" alt="article" class="img-fluid">
               </a>
               <div class="article-content p-4">
                  <div class="article-category mb-4 d-block">
                     <a href="javascript:;" class="d-inline-block text-dark badge bg-primary-soft">Digital Marketing</a>
                  </div>
                  <a href="<?php echo base_url('pros-and-cons-of-hiring-a-digital-marketing-company'); ?>">
                     <h2 class="h5 article-title limit-2-line-text"> Pros and Cons of Hiring a Digital Marketing Company</h2>
                  </a>
                  <p class="limit-2-line-text">In the rapidly advancing digital landscape of today, businesses face the challenge of establishing a formidable online presence to remain competitive. ..</p>
                  <a href="javascript:;">
                    <div class="d-flex align-items-center pt-4">
                        <div class="avatar">
                           <img src="<?php echo base_url('assets/image/logo.png'); ?>" alt="Digital Marketing Agency" width="40" class="img-fluid rounded-circle me-3">
                        </div>
                        <div class="avatar-info">
                           <h6 class="mb-0 avatar-name">BM Digital Utilization</h6>
                           <span class="small fw-medium text-muted">May 8, 2023</span>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div> -->

          <!-- <div class="col-lg-4 col-md-6">
            <div class="single-article rounded-custom mb-4 mb-lg-0 mb-md-0">
               <a href="<?php echo base_url('why-digital-should-be-your-first-choice-when-you-think-to-invest'); ?>" class="article-img">
                  <img src="<?php echo base_url('assets/image/dc.png'); ?>" alt="article" class="img-fluid">
               </a>
               <div class="article-content p-4">
                  <div class="article-category mb-4 d-block">
                     <a href="javascript:;" class="d-inline-block text-dark badge bg-danger-soft">Digital Marketing</a>
                  </div>
                  <a href="<?php echo base_url('why-digital-should-be-your-first-choice-when-you-think-to-invest'); ?>">
                     <h2 class="h5 article-title limit-2-line-text">Why Digital Should Be Your First Choice, When You Think To Invest
                    </h2>
                  </a>
                  <p class="limit-2-line-text">If you want a sustainable future for your brand, you must put time, money, and effort into developing a digital transformation strategy.</p>
                   <a href="javascript:;">
                    <div class="d-flex align-items-center pt-4">
                        <div class="avatar">
                           <img src="<?php echo base_url('assets/image/logo.png'); ?>" alt="Digital Marketing Agency" width="40" class="img-fluid rounded-circle me-3">
                        </div>
                        <div class="avatar-info">
                           <h6 class="mb-0 avatar-name">BM Digital Utilization</h6>
                           <span class="small fw-medium text-muted">June 16, 2023</span>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div> -->
         <?php
                  if(count($show) > 0){
                        foreach($show as $post){ ?>
          <div class="col-lg-4 col-md-6"> 
            <div class="single-article rounded-custom ">
               <a href="<?php echo base_url('blog-details-show/'.$post->id); ?>" class="article-img">
                  <img src="<?php echo base_url('uploads/blog/'.$post->image); ?>" alt="Latest Google Adword Update 2023" class="img-fluid">
               </a>
               <div class="article-content p-4">
                  <div class="article-category mb-4 d-block">
                     <a href="javascript:;" class="d-inline-block text-dark badge bg-danger-soft"><?= $post->blog_category ?></a>
                  </div>
                  <a href="<?php echo base_url('blog-details-show/'.$post->id); ?>">
                     <h2 class="h5 article-title limit-2-line-text"><?= $post->heading ?></h2>
                  </a>
                  <p class="limit-2-line-text"><?= $post->paragraph ?> </p>
                  <a href="javascript:;">
                     <div class="d-flex align-items-center pt-4">
                        <div class="avatar">
                           <img src="<?php echo base_url('assets/image/logo.png'); ?>" alt="Digital Marketing Agency" width="40" class="img-fluid rounded-circle me-3">
                        </div>
                        <div class="avatar-info">
                           <h6 class="mb-0 avatar-name">BM Digital Utilization</h6>
                           <span class="small fw-medium text-muted"><?= date('d-m-Y h:i:s a', strtotime($post->create_at)); ?></span>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
         <br>
         <?php } ?>
           <?php } ?> 
         
      </div>
   </div>
</section>
<!--related blog end-->
<!--cat subscribe start-->
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