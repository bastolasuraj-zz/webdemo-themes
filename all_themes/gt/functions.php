<?php

add_theme_support('title-tag');

function gt_styles_and_scripts(){
	wp_enqueue_style('google-font','https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Satisfy',array(),time(),'all');
wp_enqueue_style('animate.min.css',get_template_directory_uri().'/assets/css/animate.min.css',array(),time(),'all');
wp_enqueue_style('bootstrap.min.css',get_template_directory_uri().'/assets/css/bootstrap.min.css',array(),time(),'all');
wp_enqueue_style('style.css',get_template_directory_uri().'/assets/css/style.css',array(),time(),'all');
wp_enqueue_style('responsive.css',get_template_directory_uri().'/assets/css/responsive.css',array(),time(),'all');
wp_enqueue_style('menu.css',get_template_directory_uri().'/assets/css/menu.css',array(),time(),'all');
wp_enqueue_style('icons.css',get_template_directory_uri().'/assets/css/icon_fonts/css/all_icons.min.css',array(),time(),'all');
wp_enqueue_style('blog.css',get_template_directory_uri().'/assets/layerslider/css/layerslider.css',array(),time(),'all');
wp_enqueue_style('custom.css',get_template_directory_uri().'/assets/css/custom.css',array(),time(),'all');
//wp_enqueue_style('custom.css',get_template_directory_uri().'/assets/css/custom.css',array(),time(),'all');


//wp_enqueue_style('blog.css',get_template_directory_uri().'/assets/css/blog.css',array(),time(),'all');
//wp_enqueue_style('color-scheme.css',get_template_directory_uri().'/assets/css/color-scheme.css',array(),time(),'all');
//wp_enqueue_style('date_time_picker.css',get_template_directory_uri().'/assets/css/date_time_picker.css',array(),time(),'all');
//wp_enqueue_style('jquery.cookiebar.css',get_template_directory_uri().'/assets/css/jquery.cookiebar.css',array(),time(),'all');
//wp_enqueue_style('magnific-popup.min.css',get_template_directory_uri().'/assets/css/magnific-popup.min.css',array(),time(),'all');
wp_enqueue_style('timeline.min.css',get_template_directory_uri().'/assets/css/timeline.min.css',array(),time(),'all');
//wp_enqueue_style('pop_up.css',get_template_directory_uri().'/assets/css/pop_up.css',array(),time(),'all');

wp_deregister_script('jquery');
wp_enqueue_script('jquery-2.2.4.min.js',get_template_directory_uri().'/assets/js/jquery-2.2.4.min.js',array(),time(),true);
wp_enqueue_script('common_scripts_min.js',get_template_directory_uri().'/assets/js/common_scripts_min.js',array(),time(),true);
wp_enqueue_script('validate',get_template_directory_uri().'/assets/validate.js',array(),time(),true);
wp_enqueue_script('jquery.tweet.min.js',get_template_directory_uri().'/assets/js/jquery.tweet.min.js',array(),time(),true);
wp_enqueue_script('functions.js',get_template_directory_uri().'/assets/js/functions.js',array(),time(),true);

wp_enqueue_script('greensock.js',get_template_directory_uri().'/assets/layerslider/js/greensock.js',array(),time(),true);
wp_enqueue_script('layerslider.kreaturamedia.jquery.js',get_template_directory_uri().'/assets/layerslider/js/layerslider.kreaturamedia.jquery.js',array(),time(),true);
wp_enqueue_script('layerslider.transitions.js',get_template_directory_uri().'/assets/layerslider/js/layerslider.transitions.js',array(),time(),true);

// wp_enqueue_script('bootstrap-datepicker.js',get_template_directory_uri().'/assets/js/bootstrap-datepicker.js',array(),time(),true);
// wp_enqueue_script('bootstrap.min.js',get_template_directory_uri().'/assets/js/bootstrap.min.js',array(),time(),true);
// wp_enqueue_script('countdown.js',get_template_directory_uri().'/assets/js/countdown.js',array(),time(),true);
// wp_enqueue_script('html5shiv.min.js',get_template_directory_uri().'/assets/js/html5shiv.min.js',array(),time(),true);
// wp_enqueue_script('infobox.js',get_template_directory_uri().'/assets/js/infobox.js',array(),time(),true);
// wp_enqueue_script('jquery.bxslider.min.js',get_template_directory_uri().'/assets/js/jquery.bxslider.min.js',array(),time(),true);
// wp_enqueue_script('jquery.cookiebar.js',get_template_directory_uri().'/assets/js/jquery.cookiebar.js',array(),time(),true);
 wp_enqueue_script('jquery.magnific-popup.min.js',get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js',array(),time(),true);
// wp_enqueue_script('jquery.selectbox-0.2.js',get_template_directory_uri().'/assets/js/jquery.selectbox-0.2.js',array(),time(),true);
// wp_enqueue_script('map.js',get_template_directory_uri().'/assets/js/map.js',array(),time(),true);
// wp_enqueue_script('mapmarker.jquery.js',get_template_directory_uri().'/assets/js/mapmarker.jquery.js',array(),time(),true);
// wp_enqueue_script('mapmarker_func.jquery.js',get_template_directory_uri().'/assets/js/mapmarker_func.jquery.js',array(),time(),true);
// wp_enqueue_script('modernizr.js',get_template_directory_uri().'/assets/js/modernizr.js',array(),time(),true);
 wp_enqueue_script('owl.carousel.min.js',get_template_directory_uri().'/assets/js/owl.carousel.min.js',array(),time(),true);
// wp_enqueue_script('parallax.min.js',get_template_directory_uri().'/assets/js/parallax.min.js',array(),time(),true);
// wp_enqueue_script('pop_up.min.js',get_template_directory_uri().'/assets/js/pop_up.min.js',array(),time(),true);
// wp_enqueue_script('pop_up_func.js',get_template_directory_uri().'/assets/js/pop_up_func.js',array(),time(),true);
// wp_enqueue_script('respond.min.js',get_template_directory_uri().'/assets/js/respond.min.js',array(),time(),true);
// wp_enqueue_script('retina-replace.min.js',get_template_directory_uri().'/assets/js/retina-replace.min.js',array(),time(),true);
// wp_enqueue_script('sidebar_carousel_detail_page_func.js',get_template_directory_uri().'/assets/js/sidebar_carousel_detail_page_func.js',array(),time(),true);
// wp_enqueue_script('video_header.js',get_template_directory_uri().'/assets/js/video_header.js',array(),time(),true);
// wp_enqueue_script('wow.min.js',get_template_directory_uri().'/assets/js/wow.min.js',array(),time(),true);


}
add_action('wp_enqueue_scripts','gt_styles_and_scripts');

require get_template_directory().'/cpt/desti.php';
require get_template_directory().'/cpt/tourr.php';
require get_template_directory().'/cpt/trekks.php';
//require get_template_directory().'/cpt/tax-desti.php';
register_nav_menus(
	array(
		'primary-menu'=>'Primary Menu',
		'primary-menu'=>'Primary Menu',
	)
);