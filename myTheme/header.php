<!DOCTYPE html>
<html lang="en">

<head>
  
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Reveal</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.png" rel="icon">
  <link href="<?php echo get_template_directory_uri() ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- =======================================================
  * Theme Name: Reveal
  * Author: Muhammad Talha Awan
  ======================================================== -->
  <?php wp_head(); ?>
</head>

<body>

<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com">contact@bionic.com</a>
        <i class="fa fa-phone"></i> +92 302 2328003
      </div>
      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>
  </section><!-- End Top Bar-->

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <?php 
            if(function_exists('the_custom_logo')) {
                the_custom_logo();
            }
        ?>
      </div>

      <nav id="nav-menu-container">
        
        <?php wp_nav_menu(
            array(
                'menu' => 'primary-menu',
                'container' => '',
                'items_wrap' => '<ul class="nav-menu">%3$s</ul>'
                )
            ); 
        ?> 

      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- End Header -->