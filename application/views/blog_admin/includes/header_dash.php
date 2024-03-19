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
   <link rel="stylesheet" href="<?php echo base_url('assets/dashboard/css/bootstrap1.min.css'); ?>" />

<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/vendors/themefy_icon/themify-icons.css'); ?>" />

<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/vendors/swiper_slider/css/swiper.min.css'); ?>" />

<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/vendors/select2/css/select2.min.css'); ?>" />

<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/vendors/niceselect/css/nice-select.css'); ?>" />

<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/vendors/owl_carousel/css/owl.carousel.css'); ?>" />

<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/vendors/gijgo/gijgo.min.css'); ?>" />

<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/vendors/font_awesome/css/all.min.css'); ?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/vendors/tagsinput/tagsinput.css'); ?>" />
<link rel="stylesheet" href="" />

<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/vendors/datatable/css/jquery.dataTables.min.css'); ?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/vendors/datatable/css/responsive.dataTables.min.css'); ?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/vendors/datatable/css/buttons.dataTables.min.css'); ?>" />

<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/vendors/text_editor/summernote-bs4.css'); ?>" />

<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/vendors/morris/morris.css'); ?>">

<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/vendors/material_icon/material-icons.css'); ?>" />

<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/css/metisMenu.css'); ?>">

<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/css/style1.css'); ?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/css/colors/default.css'); ?>" id="colorSkinCSS">
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
 <!-- menu start -->
<nav class="sidebar">
<div class="logo d-flex justify-content-between">
<a href="<?php echo base_url('blog-dash')?>"><img src="<?php echo base_url('assets/image/logo.png'); ?>" alt></a>
<div class="sidebar_close_icon d-lg-none">
<i class="ti-close"></i>
</div>
</div>

<ul id="sidebar_menu">
<li class="mm-active">
<a class="has-arrow" href="<?php echo base_url('blog-dash')?>" aria-expanded="false">

<img src="img/menu-icon/1.svg" alt>
<span>Dashboard</span>
</a>
<ul>
<!-- <li><a class="active" href="index.html">Classic</a></li>
<li><a href="index_2.html">Minimal</a></li> -->
</ul>
</li>
<li class>
<a class="has-arrow" href="<?= base_url('blog-details'); ?>" aria-expanded="false">
<img src="img/menu-icon/2.svg" alt>
<span>All Blog</span>
</a>
<li class>
<a class="has-arrow" href="<?= base_url('blog-category-details'); ?>" aria-expanded="false">
<img src="img/menu-icon/2.svg" alt>
<span>All Categories</span>
</a>
<ul>
<!-- <li><a href="login.html">create</a></li> -->
<!-- <li><a href="resister.html">show</a></li> -->
<!-- <li><a href="forgot_pass.html">Forgot Password</a></li> -->
</ul>
</li>
</nav>


<section class="main_content dashboard_part">

<div class="container-fluid g-0">
<div class="row">
<div class="col-lg-12 p-0">
<div class="header_iner d-flex justify-content-between align-items-center">
<div class="sidebar_icon d-lg-none">
<i class="ti-menu"></i>
</div>
<div class="serach_field-area">
<div class="search_inner">
<form action="#">
<div class="search_field">
<input type="text" placeholder="Search here...">
</div>
<button type="submit"> <img src="img/icon/icon_search.svg" alt> </button>
</form>
</div>
</div>
<div class="header_right d-flex justify-content-between align-items-center">
<div class="header_notification_warp d-flex align-items-center">
<li>
<a href="#"> <img src="img/icon/bell.svg" alt> </a>
</li>
<li>
<a href="#"> <img src="img/icon/msg.svg" alt> </a>
</li>
</div>
<div class="profile_info">
<img src="<?php echo base_url('assets/image/logo.png'); ?>" alt="#">
<div class="profile_info_iner">
<!-- <p>Welcome Admin!</p>
<h5>Travor James</h5> -->
<div class="profile_info_details">
<a href="#">My Profile <i class="ti-user"></i></a>
<a href="#">Settings <i class="ti-settings"></i></a>
<a href="<?php echo  base_url('blogLogout') ?>">Log Out <i class="ti-shift-left"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- end -->
