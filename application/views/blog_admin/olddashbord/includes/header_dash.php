<?php
defined('BASEPATH') or exit('No direct script access allowed');
$var = $this->session->userdata('login_blog');
if (empty($var['id'])) {
    echo "<script>window.location.href='http://localhost/manish/blog-Admin'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <!--required meta tags-->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
   <!--favicon icon-->
   <link rel="icon" href="<?php echo base_url('assets/img/favicon.png'); ?>" type="image/png" sizes="16x16">
   <!--title-->
   <title>Best Digital Marketing Company | Top Digital Marketing Service</title>
   <!--google fonts-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   <link href='https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css' rel='stylesheet'>

   <!--build:css-->
   <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>">            
   <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
   <!-- endbuild -->
   <!--custom css start-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!--custom css end-->
   <style>
   .error{
       color:red;
   }
   .c1{
       border:2px red ridge;
       background-color:#f2a9bc;
   }
   .c2{
       border:2px green ridge;
       background-color:#caf2c9;
   }
   /*admin navbar css*/
   *{
       margin : 0;
       padding : 0;
       box-sizing : border-box;
   }
   
   .navbar{
       padding : 0;
   }
   
   .navbar-toggler :focus{
       box-shadow : none;
   }
   
   @media(max-width:767px){
       .ul-bg{
           background-color : aqua;
       }
   }
   
   nav .nav-item a:hover{
       color : black !important;
   }
   
   .one,.two,.three,.four{
       border-radius: 10px;
   }
   </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-info">
        <a href = "<?php echo base_url('blog-dash') ?>" class = "navbar-brand fs-4 ms-3  text-light">BMDU Logo</a>
        <button class = "navbar-toggler me-3 text-light" type = "button" data-bs-toggle = "collapse" data-bs-target = "#btn">
            <i class='bx bx-menu bx-md'></i>
        </button>
        <div class = "collaps nav navbar-collapse ul-bg" id = "btn">
            <ul class = "navbar-nav me-auto">
            <li class="nav-item">
                    <a href="<?php echo base_url('create_blog') ?>" class="nav-link mx-3 text-light fs-4">Create Blog</a>
                </li>
            <li class="nav-item">
                    <a href="<?php echo base_url('create-blog-category') ?>" class="nav-link mx-3 text-light fs-4">Create Blog Category</a>
                </li>
            </ul>
        </div>
        <a href ="<?php echo base_url('blogLogout') ?>" class = "navbar-brand fs-4 me-5  text-light">Logout</a>
    </nav>
