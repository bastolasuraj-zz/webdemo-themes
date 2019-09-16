<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    wp_head();
    ?>
</head>
<body>
<div class="layer"></div>
    <!-- Mobile menu overlay mask -->
    
	<!-- Header================================================== -->
	<div id="header_1" class="layer_slider">
		<header>
			<div id="top_line">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<a href="tel://004542344599" id="phone_top">+977-01-4XXXXX</a><span id="opening">Mon - Sat 8.00/18.00</span>
						</div>
						
					</div>
					<!-- End row -->
				</div>
				<!-- End container-->
			</div>
			<!-- End top line-->

			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div id="logo_home">
							<h1><a href="<?php echo site_url(); ?>" title="City tours travel template">Gaama Travels Travel&amp;Excursion Multipurpose Template</a></h1>
						</div>
					</div>
					<nav class="col-md-9 col-sm-9 col-xs-9">
						<ul id="tools_top">
							<li><a href="#" class="search-overlay-menu-btn"><i class="icon-search-6"></i></a>
							</li>
						</ul>
						<a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
						<div class="main-menu">
							<div id="header_menu">
								<img src="img/logo_menu.png" width="145" height="34" alt="Gaama Travels" data-retina="true">
							</div>
							<a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                            <?php
                            $args = array(
	                            'menu'            => '',
	                            'container'       => 'ul',
	                            'container_class' => 'nav navbar-nav',
	                            'container_id'    => '',
	                            'menu_class'      => 'nav navbar-nav',
	                            'menu_id'         => '',
	                            'echo'            => true,
//	                            'fallback_cb'     => 'wp_page_menu',
	                            'before'          => '',
	                            'after'           => '',
	                            'link_before'     => '',
	                            'link_after'      => '',
//	                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	                            'item_spacing'    => 'preserve',
	                            'depth'           => 2,
//	                            'walker'          => new WP_Bootstrap_Navwalker(),
	                            'theme_location'  => 'primary-menu',
                            );
                            wp_nav_menu($args);
                            ?>

<!--							<ul>-->
<!--								<li>-->
<!--									<a href="index.html">Home</a>-->
<!--									-->
<!--								</li>-->
<!--								<li>-->
<!--									<a href="about.html">About us</a>-->
<!--								</li>-->
<!--								<li class="submenu">-->
<!--									<a href="javascript:void(0);" class="show-submenu">Destinations</a>-->
<!--									<ul>-->
<!--										<li><a href="grid.html">Pokhara </a>-->
<!--										</li>-->
<!--										<li><a href="grid.html">lumbini</a>-->
<!--										</li>-->
<!--										<li><a href="grid.html">baglung</a>-->
<!--										</li>-->
<!--										-->
<!--									</ul>-->
<!--								</li>-->
<!--								<li class="submenu">-->
<!--									<a href="javascript:void(0);" class="show-submenu">Tours</a>-->
<!--									<ul>-->
<!--										<li><a href="grid.html">4D/3N Nepal Tour Package </a>-->
<!--										</li>-->
<!--										<li><a href="grid.html">5D/4N Nepal Tour Package</a>-->
<!--										</li>-->
<!--										<li><a href="grid.html">5D/4N Nepal Tour Package</a>-->
<!--										</li>-->
<!--										<li><a href="grid.html">5D/4N Nepal Tour Package</a>-->
<!--										</li>-->
<!--										<li><a href="grid.html">5D/4N Nepal Tour Package</a>-->
<!--										</li>-->
<!--										-->
<!--									</ul>-->
<!--								</li>-->
<!---->
<!--								-->
<!--								-->
<!--								<li class="submenu">-->
<!--									<a href="javascript:void(0);" class="show-submenu">Trekking</a>-->
<!--									<ul>-->
<!--										<li><a href="grid.html">11 Days Mardi Himal Trekking</a>-->
<!--										</li>-->
<!--										<li><a href="grid.html">15 Days Jomsom-Muktinath trek-005</a>-->
<!--										</li>-->
<!--										<li><a href="grid.html">13 Days Annapurna Base Camp Trek-</a>-->
<!--										</li>-->
<!--										-->
<!--									-->
<!--									</ul>-->
<!--								</li>-->
<!--								-->
<!--								</li>-->
<!--								<li>-->
<!--									<a href="blog.html">blog</a>-->
<!--								</li>-->
<!--								<li>-->
<!--									<a href="contacts.html">Contact us</a>-->
<!--								</li>-->
<!--								-->
<!--							</ul>-->
						</div>
						<!-- End main-menu -->
					</nav>
				</div>
			</div>
			<!-- container -->
		</header>
		<!-- End Header -->
	</div>
	<!-- End Header 1-->
