<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="theme-color" content="#FFFFFF" />

    <!-- Site CSS -->
    <link type='text/css' rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
    <link type='text/css' rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/custom.css">

    <link rel="alternate" type="text/xml" title="<?php bloginfo('name'); ?> RSS 0.92 Feed" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS 2.0 Feed" href="<?php bloginfo('rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    
    <!-- jQuery Library -->  
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Google Analytics Tag -->


    <?php wp_head(); ?>
    <script src='https://www.google.com/recaptcha/api.js'></script>

</head>
<body id="top">
<div id="st-container" class="st-container">
    <nav class="st-menu st-effect-4" id="menu-4">
        <h2>Navigation</h2>
        <?php
           wp_nav_menu( array(
               'menu'              => 'Mobile Nav',
               'theme_location'    => 'primary',
               'depth'             => 2,
               'container'         => '',
               'container_class'   => '',
               'menu_class'        => 'nav navbar-nav',
               'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
               'walker'            => new wp_bootstrap_navwalker())
           );
        ?>
            <!-- <li><a href="#">Home</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">About Us <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Exterior Pros Difference</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Certificates/Awards</a></li>
                    <li><a href="#">Testimonials</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Services <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Flooring</a></li>
                    <li><a href="roofing.php">Roofing</a></li>
                    <li><a href="#">Gutters</a></li>
                    <li><a href="#">Siding</a></li>
                    <li><a href="#">Painting</a></li>
                    <li><a href="#">Windows</a></li>
                    <li><a href="#">Doors</a></li>
                    <li><a href="#">Interiors</a></li>
                </ul>
            </li>
            <li><a href="#">Financing</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">Contact Us</a></li> -->
    </nav>
<div class="st-pusher">
<div class="st-content">
<div class="st-content-inner">

<header class="site-header">
	<div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 logo">
                <a href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png"></a>
            </div>
            <div class="col-sm-4 angies">
                <!-- <p>Exterior Pros is the Recipient of the Angies List Super Service Award 3 Years in a Row and Maintains an A+ BBB Rating</p> -->
                <div class="images">
                    <a href="https://www.angieslist.com/companylist/us/wi/menomonee-falls/exterior-pros-reviews-6796393.htm" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/angies3.png"></a>
                    <a href="https://www.bbb.org/wisconsin/business-reviews/roofing-contractors/exterior-pros-in-menomonee-falls-wi-1000011561" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/bbb.png"></a>
                </div>
            </div>
            <div class="col-sm-4 phone">
                <p class="cta"><span>Click To </span> Call Us Today</p>
                <p class="number"><a href="tel:262-456-3530">(262) 456-3530</a></p>
            </div>
        </div>
    </div>
</header>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div id="st-trigger-effects" class="column">
            <button class="mobile-toggle" data-effect="st-effect-4"><i class="fa fa-bars"></i> Navigation</button>
        </div>
        <div class="collapse navbar-collapse" id="main-nav">
            <?php
               wp_nav_menu( array(
                   'menu'              => 'Main Nav',
                   'theme_location'    => 'primary',
                   'depth'             => 2,
                   'container'         => '',
                   'container_class'   => '',
                   'menu_class'        => 'nav navbar-nav',
                   'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                   'walker'            => new wp_bootstrap_navwalker())
               );
            ?>
        </div>
    </div>
</nav>