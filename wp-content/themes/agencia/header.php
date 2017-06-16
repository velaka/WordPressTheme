<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <title>Virtuoso - Professional Bootstrap Template</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open Sans:300,400" />
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Source Sans Pro:300,400" />
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/flexslider.css" type="text/css">
        <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.flexslider-min.js"></script>
        <script type="text/javascript" charset="utf-8">
          $(window).load(function() {
            $('.flexslider').flexslider();
          });
        </script>
    </head>
    <body>
        <div id="body_bg">
        <!--
            <div id="container_header" class="container">
                <div id="header" class="row">
                    <div class="col-md-12 margin-top-15">
                        <ul class="social-icons circle pull-right">
                            <li class="social-rss">
                                <a href="#" target="_blank" title="RSS"></a>
                            </li>
                            <li class="social-twitter">
                                <a href="#" target="_blank" title="Twitter"></a>
                            </li>
                            <li class="social-facebook">
                                <a href="#" target="_blank" title="Facebook"></a>
                            </li>
                            <li class="social-googleplus">
                                <a href="#" target="_blank" title="GooglePlus"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            -->
            <div class="primary-container-group">
                <!-- Background -->
                <div class="primary-container-background">
                    <div class="primary-container"></div>
                    <div class="clearfix"></div>
                </div>
                <!--End Background -->
                <div class="primary-container">
                    <div id="container_hornav" class="container no-padding">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt="Logo" />
                            </a>
                        </div>
                        <!-- End Logo -->
                        <!-- Slogan -->
                        <p class="site-slogan">СВАТБЕНА АГЕНЦИЯ</p>
                        <!-- End Slogan -->
                        <!-- Top Menu -->
                        <div class="row">
                            <div class="hornav-block">
                                <div id="hornav" class="pull-right">
                                                                    
                                    <?php 
                                        wp_nav_menu(array(
                                            'theme_location'  => 'top-menu',
                                            'menu'            => 'navigation',
                                            'container'       => 'nav',
                                            'container_id'    => 'main-nav',
                                            'container_class'    => '',
                                            'menu_class'      => 'nav navbar-nav',
                                            'menu_id'         => 'idm',
                                            'echo'            => true,
                                            'fallback_cb'     => 'wp_page_menu',
                                            'before'          => '',
                                            'after'           => '',
                                            'link_before'     => '',
                                            'link_after'      => '',
                                            'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                                            'depth'           => 0,
                                            'walker'          => ''
                                        ));
                                    ?>

                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- End Top Menu -->
                    </div>