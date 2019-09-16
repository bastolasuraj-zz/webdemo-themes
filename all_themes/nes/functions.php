<?php
/**
 * Need Employment Services functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Need_Employment_Services
 */

if ( ! function_exists( 'nes_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function nes_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Need Employment Services, use a find and replace
		 * to change 'nes' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'nes', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary-menu' => esc_html__( 'Primary', 'nes' ),
			'footer-menu'  => esc_html__( 'Footer', 'nes' )
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'nes_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'nes_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nes_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'nes_content_width', 640 );
}

add_action( 'after_setup_theme', 'nes_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nes_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'nes' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'nes' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'nes_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function nes_scripts() {
	wp_enqueue_style( 'nes-style', get_stylesheet_uri() );
	wp_enqueue_style( 'google-font1', 'http://fonts.googleapis.com/css?family=Exo+2:700,600,200,800,300,400,500,100,900' );
	wp_enqueue_style( 'google-font2', 'http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), time(), 'all' );
	wp_enqueue_style( 'main.css', get_template_directory_uri() . '/css/main.css', array(), time(), 'all' );
	wp_enqueue_style( 'style.css', get_template_directory_uri() . '/css/style.css', array(), time(), 'all' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', array(), time(), 'all' );
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css', array(), time(), 'all' );
	wp_enqueue_style( 'font-awesome.min.css', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
//	wp_enqueue_style( '',get_template_directory_uri().'',array(),time(),'all');

	wp_enqueue_script( 'nes-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
//	wp_deregister_script('jquery');
	wp_enqueue_script( 'jquery-1.11.0.min.js', 'http://code.jquery.com/jquery-1.12.4.min.js', array(), time(), true );
	wp_enqueue_script( 'wow.min.js', get_template_directory_uri() . '/js/wow.min.js', array(), time(), true );
	wp_enqueue_script( 'bootstrap.min.js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), time(), true );
	wp_enqueue_script( 'jquery.stellar.js', get_template_directory_uri() . '/js/jquery.stellar.js', array(), time(), true );
	wp_enqueue_script( 'jquery.isotope.min.js', get_template_directory_uri() . '/js/jquery.isotope.min.js', array(), time(), true );
	wp_enqueue_script( 'jquery.flexslider-min.js', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array(), time(), true );
	wp_enqueue_script( 'counter.js', get_template_directory_uri() . '/js/counter.js', array(), time(), true );
	wp_enqueue_script( 'owl.carousel.min.js', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), time(), true );
	wp_enqueue_script( 'jquery.sticky.js', get_template_directory_uri() . '/js/jquery.sticky.js', array(), time(), true );
	wp_enqueue_script( 'jquery.magnific-popup.min.js', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), time(), true );
	wp_enqueue_script( 'own-menu.js', get_template_directory_uri() . '/js/own-menu.js', array(), time(), true );
	wp_enqueue_script( 'main.js', get_template_directory_uri() . '/js/main.js', array(), time(), true );
	wp_enqueue_script( 'nes-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'nes_scripts' );
/**
 * Import Job Custom Post Types
 */
require get_template_directory() . '/cpt/cpt-jobs.php';
require get_template_directory() . '/tax/tax-jobs.php';

/**
 * Import custom post type Client
 */
require get_template_directory() . '/cpt/cpt-clients.php';
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
/*
 * Start custom codes from here for Need Employment Services.
 */
if ( function_exists( 'acf_add_options_page' ) ) {

	acf_add_options_page( array(
//		'page_title' 	=> 'Site Settings',
		'menu_title' => 'Theme Options',
		'menu_slug'  => 'theme-general-settings',
		'capability' => 'edit_posts',
		'redirect'   => true
	) );

	acf_add_options_sub_page( array(
		'page_title'  => 'Header Settings',
		'menu_title'  => 'Header',
		'parent_slug' => 'theme-general-settings',
	) );

//	acf_add_options_sub_page(array(
//		'page_title' 	=> 'Certificate Settings',
//		'menu_title'	=> 'Certificate',
//		'parent_slug'	=> 'theme-general-settings',
//	));
	acf_add_options_sub_page( array(
		'page_title'  => 'Footer Settings',
		'menu_title'  => 'Footer',
		'parent_slug' => 'theme-general-settings',
	) );

}

class navWalker extends Walker_Nav_Menu {
	function start_lvl( &$output, $depth ) {
		$indent = str_repeat( "\t", $depth );
		$output .= "\n$indent<ul class=\"dropdown\">\n";
	}
}

function nes_breadcrumbs() {
	if ( is_page_template( 'templates/home.php' ) ) {
//        echo 'hello';
	} else {


		?>

        <div class="sub-banner">
            <div class="container">
                <h1>
					<?php
					if ( is_archive() ) {
						the_archive_title();
					} else {
						the_title();
					} ?>
                </h1>
            </div>
            <ol class="breadcrumb">
				<?php
				if ( function_exists( 'bcn_display' ) ) {
					bcn_display();
				}
				?>
            </ol>
        </div>
		<?php
	}
}

add_shortcode( 'nes_breadcrumbs', 'nes_breadcrumbs' );

add_filter( 'get_the_archive_title', function ($title) {

	if ( is_category() ) {

		$title = single_cat_title( '', false );

	} elseif ( is_tag() ) {

		$title = single_tag_title( '', false );

	} elseif ( is_tax('job-category') ) {

		$title = single_cat_title( '', false );

	} elseif ( is_author() ) {

		$title = '<span class="vcard">' . get_the_author() . '</span>' ;

	}
//	elseif (is())

	return $title;

});