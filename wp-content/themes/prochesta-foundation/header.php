<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package prochesta_foundation
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/animate.min.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/jquery.mCustomScrollbar.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/jquery.countdown.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/jquery.fancybox.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/owl.carousel.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/owl.theme.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/owl.transitions.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'prochesta-foundation' ); ?></a>

	<div class="main-header content">
    	<!-- Header Upper -->
    	<header class="header-upper" style="color:#8abfe6">
         
            
        	   <div class="auto-container clearfix">
            	<!-- Logo -->
                <div class="logo" >
                    <a href="index.html"><img src="<?php bloginfo('stylesheet_directory');?>/img/prochesta original logo.png" alt="Radium"></a>
                 </div>
                 
                 <!--Info Outer-->
                 <div class="info-outer" >
                 	<!--Info Box-->
                    <div class="info-box">
                    	<div class="icon"><a class="msg-icon" href=""><i class="fa fa-phone"></i></a></div>
                        <strong>HOTLINE</strong>
                         <p class="phone" href="#">+8801842002023<br>+8801797599856</p>
                        
                    </div>
                    <!--Info Box-->
                  <div class="info-box">
                    	<div class="icon"><a class="msg-icon" href=""><i class="fa fa-map-marker" aria-hidden="true"></i></a></div>
                        <strong>ADDRESS</strong>
                         <p class="phone" href="#">Head Office- 46, North Begun<br>Bari,Tejgaon I/A, Dhaka-1208</p>
                        
                    </div>
                    <!--Info Box-->
                    <div class="info-box social-box">
                    	<div class="social-links-one clearfix">
                        	<a href="#" class="facebook img-circle"><i class="fa fa-facebook-f"></i></a>
                            <a href="#" class="google-plus img-circle"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="twitter img-circle"><i class="fa fa-youtube"></i></a>
                            <a href="#" class="linkedin img-circle"><span class="fa fa-linkedin"></span></a>
                        </div>
                    </div>
                 </div>
                
               </div>
                <div class="navbar navbar-inverse  opaque-navbar">
         <div class="container">
            <div class="row">
               <div class="navbar-header">
                   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    
              </div>

             
              <div class="collapse navbar-collapse" id="collapse">
               
                 <ul class="nav navbar-nav pull-right">
                      <li><a class="page-scroll" href="index.html">HOME</a></li>
                      <li><a class="page-scroll" href="about.html"  >ABOUT</a></li>
                      <li><a class="page-scroll" href="Events.html">EVENTS</a></li> 
                      <li><a class="page-scroll" href="volunteer.html">VOLUNTEER</a></li> 
                      <li><a class="page-scroll" href="#Contact">CONTACT</a></li> 
                      
                 </ul>
                 
              </div>
               <div class="donate-button">
                   <a href="Single-event.html" class="btn-default white">DONATE</a>
               </div>
               
         </div>
       </div>
           
        </header>


	<div id="content" class="site-content">
