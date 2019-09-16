<?php
function fttn_styles_and_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), time(), 'all' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array(), time(), 'all' );
	wp_enqueue_style( 'blue', get_template_directory_uri() . '/assets/css/blue.css', array(), time(), 'all' );
	wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), time(), 'all' );
	wp_enqueue_style( 'owl.transition', get_template_directory_uri() . '/assets/css/owl.transitions.css', array(), time(), 'all' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), time(), 'all' );
	wp_enqueue_style( 'rateit', get_template_directory_uri() . '/assets/css/rateit.css', array(), time(), 'all' );
	wp_enqueue_style( 'bootstrap-select', get_template_directory_uri() . '/assets/css/bootstrap-select.min.css', array(), time(), 'all' );
	wp_enqueue_style( 'custom', get_template_directory_uri() . '/assets/css/custom.css', array(), time(), 'all' );
	wp_enqueue_style( 'lightbox-ld', get_template_directory_uri() . '/assets/css/lightbox-ld.css', array(), time(), 'all' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), time(), 'all' );
	wp_enqueue_style( 'font-google', 'https://fonts.googleapis.com/css?family=Barlow|Montserrat|Open+Sans|Roboto&display=swap', array(), time(), 'all' );

	// wp_enqueue_style('lightbox',get_template_directory_uri().'/assets/css/lightbox.css',array(),time(),'all');
	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'ajq', get_template_directory_uri() . '/assets/js/jquery-1.11.1.min.js', array(), time(), true );

	wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), time(), true );
	wp_enqueue_script( 'bootstra-hover', get_template_directory_uri() . '/assets/js/bootstrap-hover-dropdown.min.js', array(), time(), true );
	wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), time(), true );
	wp_enqueue_script( 'echo', get_template_directory_uri() . '/assets/js/echo.min.js', array(), time(), true );
	wp_enqueue_script( 'easing', get_template_directory_uri() . '/assets/js/jquery.easing-1.3.min.js', array(), time(), true );
	wp_enqueue_script( 'bootstra-slider', get_template_directory_uri() . '/assets/js/bootstrap-slider.min.js', array(), time(), true );
	wp_enqueue_script( 'rateit', get_template_directory_uri() . '/assets/js/jquery.rateit.min.js', array(), time(), true );
	wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/assets/js/lightbox.min.js', array(), time(), true );
	wp_enqueue_script( 'bootstrap-select', get_template_directory_uri() . '/assets/js/bootstrap-select.min.js', array(), time(), true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), time(), true );
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), time(), true );
	wp_enqueue_script( 'lightbox-lld', get_template_directory_uri() . '/assets/js/lightbox-ld.js', array(), time(), true );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array(), time(), true );
}

add_action( 'wp_enqueue_scripts', 'fttn_styles_and_scripts' );

/**
 * Theme Menus
 */
register_nav_menus(
	array(
		'primary-menu' => 'Primary Menu',
		'footer-menu'  => 'Footer Menu',
		'side-menu'    => 'Sidebar Menu',
		'search-menu'  => 'Search Menu',
	)
);
/**
 * Theme Support Files
 */
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
the_post_thumbnail(); // Without parameter ->; Thumbnail
the_post_thumbnail( 'thumbnail' ); // Thumbnail (default 150px x 150px max)
the_post_thumbnail( 'medium' ); // Medium resolution (default 300px x 300px max)
the_post_thumbnail( 'medium_large' ); // Medium-large resolution (default 768px x no height limit max)
the_post_thumbnail( 'large' ); // Large resolution (default 1024px x 1024px max)
the_post_thumbnail( 'full' ); // Original image resolution (unmodified)
/**
 * Importing the Custom Post Types
 */
require get_template_directory() . '/includes/testimonials.php';

//add_theme_support( 'woocommerce' );

remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );

function active_status( $sn, $status ) {
	if ( $sn < 2 ) {
		return $status;
	}
}

/**
 * Change a currency symbol
 */
add_filter( 'woocommerce_currency_symbol', 'change_existing_currency_symbol', 10, 2 );

function change_existing_currency_symbol( $currency_symbol, $currency ) {
	switch ( $currency ) {
		case 'NPR':
			$currency_symbol = 'Rs.';
			break;
	}

	return $currency_symbol;
}

add_action( 'woocommerce_before_shop_loop_item_title', 'fttn_new_badge_shop_page', 3 );

function fttn_new_badge_shop_page() {
	global $product;
	$newness_days = 30;
	$created      = strtotime( $product->get_date_created() );
	if ( ( time() - ( 60 * 60 * 24 * $newness_days ) ) < $created ) {
		echo '<div class="tag hot"><span>' . esc_html__( 'New!', 'woocommerce' ) . '</span></div>';
	}
}

add_filter( 'woocommerce_get_price_html', 'fttn_price_free_zero_empty', 100, 2 );

function fttn_price_free_zero_empty( $price, $product ) {

	if ( '' === $product->get_price() || 0 == $product->get_price() ) {
		$price = '<span class="woocommerce-Price-amount amount">FREE</span>';
	}

	return $price;
}

function custom_price() {
	$product = wc_get_product( get_the_ID() );
	if ( $product->get_price() > 0 ) {
		if ( $product->is_on_sale() ) {
			?>
            <span class="price-before-discount"> Rs. &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $product->get_regular_price(); ?> </span>
            <span class="price"><?php echo $product->get_sale_price(); ?></span>
			<?php
		} else {
			?>
            <span class="price"><?php echo $product->get_price_html(); ?> </span>
		<?php }
	}else{
		$price = '<span class="woocommerce-Price-amount amount"> </span>';
		echo $price;
	}
}

add_action( 'pre_get_posts', 'fttn_search_woocommerce_only' );

function fttn_search_woocommerce_only( $query ) {
	if( ! is_admin() && is_search() && $query->is_main_query() ) {
		$query->set( 'post_type', 'product' );
	}
}
function new_excerpt_more( $more ) {
	return '<a href = "#description">[more...]</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

function enable_extended_upload ( $mime_types =array() ) {

	// The MIME types listed here will be allowed in the media library.
	// You can add as many MIME types as you want.
	$mime_types['exe']  = 'application/exe';

	return $mime_types;
}
add_filter('upload_mimes', 'enable_extended_upload');

function sho_breadcrumbs()
{
	?>

    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
					<?php
                    if(is_home()){

                    }else{
	                    if(function_exists('bcn_display'))
	                    {
		                    bcn_display();
	                    }
                    }

                    ?>
                </ul>
            </div>
            <!-- /.breadcrumb-inner -->
        </div>
        <!-- /.container -->
    </div>
    <!-- end page-title -->
	<?php
}
add_shortcode('sho_breadcrumbs', 'sho_breadcrumbs');

register_sidebar(array(
	'name' => 'Event Widget ',
	'id' => 'event-widget',
	'description' => 'This Widget is used for events.',
	'before_widget' => '<aside id="%1$s" class="widget">',
	'after_widget'  => '</aside>',
	'before_title' => '<h2 class="widget-title">',
	'after_title' => '</h2>'
));

function fttn_search_by_title( $search, $wp_query ) {
	if ( ! empty( $search ) && ! empty( $wp_query->query_vars['search_terms'] ) ) {
		global $wpdb;

		$q = $wp_query->query_vars;
		$n = ! empty( $q['exact'] ) ? '' : '%';

		$search = array();

		foreach ( ( array ) $q['search_terms'] as $term )
			$search[] = $wpdb->prepare( "$wpdb->posts.post_title LIKE %s", $n . $wpdb->esc_like( $term ) . $n );

		if ( ! is_user_logged_in() )
			$search[] = "$wpdb->posts.post_password = ''";

		$search = ' AND ' . implode( ' AND ', $search );
	}

	return $search;
}

add_filter( 'posts_search', 'fttn_search_by_title', 10, 2 );