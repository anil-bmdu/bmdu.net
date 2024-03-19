
   <title>Blog</title>
   <!--meta-->
   <meta name="description" content="We are consider Best Digital Marketing Company Globally. Get you all online marketing and digital marketing project done &amp; get huge returns.">
   <meta name="author" content="Best Digital Marketing Company">


<!--page header section start-->
<section class="page-header position-relative overflow-hidden ptb-120 bg-gradient" style="background: url(<?php echo base_url('assets/img/page-header-bg.svg'); ?>)no-repeat center bottom">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-8 col-md-12">
            <div class="section-heading text-center">
               <h1 class="display-5 fw-bold">Our Latest News and Blogs</h1>
               <p class="lead mb-0">Completely integrate equity invested partnerships without revolutionary systems. Monotonectally network pandemic e-services via bricks-and-clicks information. </p>
            </div>
         </div>
      </div>
      <div class="row justify-content-center text-center">
         <div class="col-xl-8">
            <a href="javascript:;" class="btn btn-soft-primary btn-pill btn-sm m-2">Marketing</a>
            <a href="javascript:;" class="btn btn-soft-primary btn-pill btn-sm m-2">Sales</a>
            <a href="javascript:;" class="btn btn-soft-primary btn-pill btn-sm m-2">Design</a>
            <a href="javascript:;" class="btn btn-soft-primary btn-pill btn-sm m-2">Development</a>
            <a href="javascript:;" class="btn btn-soft-primary btn-pill btn-sm m-2">Product Design</a>
            <a href="javascript:;" class="btn btn-soft-primary btn-pill btn-sm m-2">Customers</a>
            <a href="javascript:;" class="btn btn-soft-primary btn-pill btn-sm m-2">Agency</a>
            <a href="javascript:;" class="btn btn-soft-primary btn-pill btn-sm m-2">Investors</a>
            <a href="javascript:;" class="btn btn-soft-primary btn-pill btn-sm m-2">Research</a>
         </div>
      </div>
      <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
   </div>
</section>
<!--page header section end-->
<section class="masonary-blog-section ptb-120">
   <div class="container">
      <div class="row">
     <div class="row">
           <?php
                  if(count($show) > 0){
                        foreach($show as $blog){ ?>
    <div class="col-lg-4 col-md-6">
            <div class="single-article rounded-custom my-3">
               <a href="<?php echo base_url('blog-details-show/'.$blog->id); ?>" class="article-img">
                  <img src="<?php echo base_url('uploads/blog/'.$blog->image); ?>" alt="article" class="img-fluid">
               </a>
               <div class="article-content p-4">
                  <div class="article-category mb-4 d-block">
                     <a href="javascript:;" class="d-inline-block text-dark badge bg-primary-soft"><?= $blog->blog_category ?></a>
                  </div>
                  <a href="<?php echo base_url('blog-details-show/'.$blog->id); ?>">
                     <h2 class="h5 article-title limit-2-line-text"><?= $blog->heading ?></h2>
                  </a>
                  <p class="limit-2-line-text"><?= $blog->paragraph ?>..</p>
                   <a href="javascript:;">
                     <div class="d-flex align-items-center pt-4">
                        <div class="avatar">
                           <img src="<?php echo base_url('assets/image/logo.png'); ?>" alt="Digital Marketing Agency" width="40" class="img-fluid rounded-circle me-3">
                        </div>
                        <div class="avatar-info">
                           <h6 class="mb-0 avatar-name">BM Digital Utilization</h6>
                           <span class="small fw-medium text-muted"><?= date('d-m-Y h:i:s a', strtotime($blog->create_at)); ?></span>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
         <?php } ?>
         <?php }else{ ?>    
            <div class="col-lg-4 col-md-6">
            <div class="single-article rounded-custom ">
               <a href="https://bmdu.net/what-steps-is-the-internet-publishing-industry-taking-to-improve-digital-literacy-and-media-education" class="article-img">
                  <img src="https://bmdu.net/assets/image/what-steps-is-the-internet-publishing-industry-taking-to-improve-digital-literacy-and-media-education.jpg" alt="Latest Google Adword Update 2023" class="img-fluid">
               </a>
               <div class="article-content p-4">
                  <div class="article-category mb-4 d-block">
                     <a href="javascript:;" class="d-inline-block text-dark badge bg-danger-soft">Digital Marketing</a>
                  </div>
                  <a href="https://bmdu.net/what-steps-is-the-internet-publishing-industry-taking-to-improve-digital-literacy-and-media-education">
                     <h2 class="h5 article-title limit-2-line-text">What steps is the Internet Publishing Industry taking to improve digital literacy and media education?</h2>
                  </a>
                  <p class="limit-2-line-text">The internet publishing industry is the economic sector that creates and distributes material via the internet. It comprises a diverse spectrum of firms..</p>
                  <a href="javascript:;">
                     <div class="d-flex align-items-center pt-4">
                        <div class="avatar">
                           <img src="https://bmdu.net/assets/image/logo.png" alt="Digital Marketing Agency" width="40" class="img-fluid rounded-circle me-3">
                        </div>
                        <div class="avatar-info">
                           <h6 class="mb-0 avatar-name">BMDU</h6>
                           <span class="small fw-medium text-muted">Sept 11, 2023</span>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
            <?php } ?> 
   </div>
</section>

</div>