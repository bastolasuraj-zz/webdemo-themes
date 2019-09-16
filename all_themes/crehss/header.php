<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package crehss
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- main header -->
    <header class="main-header">

        <!-- header top -->
        <div class="header-top">
            <div class="container">
                <div class="outer-box">
                    <!--Top Left-->
                    <div class="top-left">
                        <ul class="links-nav clearfix">
                            <li><i class="fa fa-phone"></i>Call Us <strong>+977- 014034387,
                                    015219888</strong></li>
                            <li><i class="fa fa-envelope-open"></i> Email <strong>crehss.info@gmail.com</strong></li>
                        </ul>
                    </div>

                    <!--Top Right-->
                    <div class="top-right">
                        <div class="social-links clearfix">
                            <a href="#"><span class="fab fa-twitter"></span></a>
                            <a href="#"><span class="fab fa-facebook"></span></a>
                            <a href="#"><span class="fab fa-google-plus"></span></a>
                            <a href="#"><span class="fab fa-youtube"></span></a>
                            <a href="#"><span class="fab fa-pinterest-p"></span></a>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!--Header-Upper-->
        <div class="header-upper">
            <div class="container clearfix">

                <div class="float-left logo-outer">
                    <div class="logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
                </div>

                <div class="float-right upper-right clearfix">

                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-lg">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="current dropdown"><a href="index.html">Home</a>

                                    </li>
                                    <li class="  dropdown"><a href="#">About Us</a>
                                        <ul>
                                            <li><a href="mission.html">Mission,Vision and Objectives</a></li>
                                            <li><a href="whyworkwithus.html">Why work with us</a></li>
                                            <li><a href="whoweare.html">Who we are</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="causes-3.html">News and Events</a></li>
                                    <li class="  dropdown">
                                        <a href="research.html">Research</a>
                                        <ul>
                                            <li><a href="Ongoing.html">Ongoing</a></li>
                                            <li><a href="Ongoing.html">Completed</a></li>
                                        </ul>
                                    </li>
                                    <li class="  dropdown"><a href="about.html">Publications</a>
                                        <ul>
                                            <li><a href="causes-3.html">Report</a></li>
                                            <li><a href="causes-3.html">Articles</a></li>
                                            <li><a href="causes-3.html">Presentations</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </nav>

                        <!-- Main Menu End-->


                    </div>

                </div>

            </div>
        </div>
        <!--End Header Upper-->

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="container">
                <div class="clearfix  h-25">
                    <!--Logo-->
                    <div class="logo float-left">
                        <a href="index.html" class="img-responsive"><img src="images/logosticky.png" alt=""
                                                                         title=""></a>
                    </div>

                    <!--Right Col-->
                    <div class="right-col float-right">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-lg">
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="current dropdown"><a href="index.html">Home</a>

                                    </li>
                                    <li class="  dropdown"><a href="#">About Us</a>
                                        <ul>
                                            <li><a href="mission.html">Mission,Vision and Objectives</a></li>
                                            <li><a href="whyworkwithus.html">Why work with us</a></li>
                                            <li><a href="whoweare.html">Who we are</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="causes-3.html">News and Events</a></li>
                                    <li class="  dropdown">
                                        <a href="research.html">Research</a>
                                        <ul>
                                            <li><a href="Ongoing.html">Ongoing</a></li>
                                            <li><a href="Ongoing.html">Completed</a></li>
                                        </ul>
                                    </li>
                                    <li class="  dropdown"><a href="about.html">Publications</a>
                                        <ul>
                                            <li><a href="mission.html">Report</a></li>
                                            <li><a href="whyworkwithus.html">Articles</a></li>
                                            <li><a href="whoweare.html">Presentations</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->
                    </div>
                </div>


            </div>
        </div>
        <!--End Sticky Header-->
    </header>
