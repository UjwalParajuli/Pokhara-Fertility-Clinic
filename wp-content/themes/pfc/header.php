<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>  <!-->    <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Pokhara Fertility Clinic</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lora:wght@700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
        <?php wp_head(); ?>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header class="top-header">
            <div class="header-info">
                <div class="container">
                    <div class="header-top">
                        <a href="/" class="pfc-logo">
                            <img src="<?php echo get_template_directory_uri().'/assets/img/pokhara-fertility-clinic-logo.png'?>" alt="PFC Logo" />
                        </a>

                        <div class="heading-contact-info">
                            <span>Address: <?php echo get_option('pfc_address'); ?></span>
                            <span>Phone: <?php echo get_option('pfc_phone'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-menu">
                <div class="container">
                    <div class="top-nav">
                        <a href="/" class="pfc-logo-mobile">
                            <img src="<?php echo get_template_directory_uri().'/assets/img/pokhara-fertility-clinic-logo.png'?>" alt="PFC Logo" />
                        </a>
    
                        <div class="hamburger">
                            <div class="line1"></div>
                            <div class="line2"></div>
                            <div class="line3"></div>
                        </div>
    
                        <?php
                            // $args = array(
                            //     'theme_location' => 'header-menu',
                            //     'container' => 'nav',
                            //     'container_class' => 'pfc-navigation',
                            //     'menu_class' => 'nav-links'
                            // );
                            // wp_nav_menu($args);
                        ?>
                        <nav class="pfc-navigation">
                        <?php
                            $args = array(
                                'theme_location' => 'header-menu',
                                'menu_class' => 'nav-links'
                            );
                            wp_nav_menu($args);
                        ?>
                        <button class="close-menu">&#x2715;</button>
                        </nav>
                            <!-- <ul class="nav-links">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="facilities.html">Facilities</a></li>
                                <li><a href="reviews.html">Reviews</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul> -->
                    </div>                     
                </div>
            </div>            
        </header>