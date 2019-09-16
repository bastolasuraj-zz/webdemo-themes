<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Need_Employment_Services
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
<!--======= TOP BAR =========-->
<div class="top-bar">
    <div class="container">
        <ul class="left-bar-side">
            <li>
                <p class="exo">Govt. Labour Licence No. 284/058/59</p>
            </li>
            <li>
                <p class="exo">Hotlines: +977 1 4384248, 4384251</p>
            </li>

        </ul>
        <ul class="right-bar-side social_icons">
			<?php
			if ( have_rows( 'social_media', 'option' ) ):

				// loop through the rows of data
				while ( have_rows( 'social_media', 'option' ) ) : the_row();

					// display a sub field value
					?>
                    <li class="<?php the_sub_field( 'social_media_name', 'option' ); ?>"><a
                                href="<?php the_sub_field( 'social_media_link', 'option' ); ?>"><i
                                    class="fa fa-<?php the_sub_field( 'social_media_name', 'option' ); ?>"></i> </a>
                    </li>

				<?php

				endwhile;

			else :

				// no rows found

			endif;
			?>
        </ul>
    </div>
</div>

<!--======= HEADER =========-->
<header>
    <div class="container">

        <!--======= LOGO =========-->
        <div class="logo"><a href="<?php bloginfo('url');?>"><img src="<?php the_field( 'main_logo', 'option' ); ?>" alt=""></a></div>

        <!--======= TOP INFORMATION =========-->
        <div class="header-contact">
            <div class="row">
                <div class="col-md-6">

                </div>
                <div class="col-md-6">
                    <img src="<?php the_field( 'side_logo', 'option' ); ?>" alt="">
                    <!--	                    --><?php //the_field('header_title', 'option'); ?>
                </div>
            </div>
        </div>

        <!--======= NAV =========-->
        <nav>

            <!--======= MENU START =========-->

			<?php
			$args = array(
				'menu'            => '',
				'container'       => 'ul',
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => 'ownmenu',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => '',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
				'item_spacing'    => 'preserve',
				'depth'           => 2,
				'walker'          => new navWalker(),
				'theme_location'  => 'primary-menu',
			);
			wp_nav_menu( $args );
			?>

            <!--======= SUBMIT COUPON =========-->
            <!--            <ul class="ownmenu">-->
            <!--                <li class="active"><a href="index.html">Home</a>-->
            <!--                </li>-->
            <!--                <li><a>About Us </a>-->
            <!--                    <ul class="dropdown">-->
            <!--                        <li><a href="introduction.html">Introduction</a></li>-->
            <!--                        <li><a href="message.html">Message from MD</a></li>-->
            <!--                        <li><a href="messagefrom.html">Message from Manager </a></li>-->
            <!--                        <li><a href="organizationalchart.html">Organizational Chart</a></li>-->
            <!--                    </ul>-->
            <!--                </li>-->
            <!--                <li><a href="aboutNepal.html">About Nepal</a></li>-->
            <!--                <li><a href="availablejobs.html">Available Jobs</a></li>-->
            <!--                <li><a href="clients.html">Our Clients</a></li>-->
            <!--                <li><a href="procedure.html">Recruitment Procedure</a></li>-->
            <!--                <li><a href="Certificates.html">Certificates</a></li>-->
            <!--                <li><a href="contact.html">Contact us</a></li>-->
            <!---->
            <!--            </ul>-->
        </nav>

    </div>
</header>

<?php
	do_shortcode( '[nes_breadcrumbs]' );