<?php
defined('BASEPATH') or exit('No direct script access allowed');
$var = $this->session->userdata('login_blog');
if (!empty($var['id'])) {
    echo "<script>window.location.href='https://localhost/manish/blog-dash'</script>";
}
?>
<?php
$var = $this->session->userdata('login_blog');
if (!empty($var['id'])) {
    echo "<script>window.location.href='https://localhost/manish/blog-dash'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
</head>
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
   </style>
</head>
<body class="crm_body_bg">
