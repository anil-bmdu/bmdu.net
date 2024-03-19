<?php
defined('BASEPATH') or exit('No direct script access allowed');
$var = $this->session->userdata('login_blog');
if (!empty($var['id'])) {
    echo "<script>window.location.href='https://localhost/manish/blog-dash'</script>";
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
   </style>
</head>
<body style="background-color:#808080;">