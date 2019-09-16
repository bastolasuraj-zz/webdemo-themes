<?php
/*
* Creating a function to create our CPT
*/

function gt_custom_post_type_desti() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Destinations', 'Post Type General Name', 'gaamatravels' ),
		'singular_name'       => _x( 'Destination', 'Post Type Singular Name', 'gaamatravels' ),
		'menu_name'           => __( 'Destinations', 'gaamatravels' ),
		'parent_item_colon'   => __( 'Parent Destination', 'gaamatravels' ),
		'all_items'           => __( 'All Destinations', 'gaamatravels' ),
		'view_item'           => __( 'View Destination', 'gaamatravels' ),
		'add_new_item'        => __( 'Add New Destination', 'gaamatravels' ),
		'add_new'             => __( 'Add New', 'gaamatravels' ),
		'edit_item'           => __( 'Edit Destination', 'gaamatravels' ),
		'update_item'         => __( 'Update Destination', 'gaamatravels' ),
		'search_items'        => __( 'Search Destination', 'gaamatravels' ),
		'not_found'           => __( 'Not Found', 'gaamatravels' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'gaamatravels' ),
	);

// Set other options for Custom Post Type

	$args = array(
		'label'               => __( 'destinations', 'gaamatravels' ),
		'description'         => __( 'Destination news and reviews', 'gaamatravels' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'genres' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'menu_icon'=>'dashicons-location-alt',//dashicons-palmtree//dashicons-location
	);

	// Registering your Custom Post Type
	register_post_type( 'destinations', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'gt_custom_post_type_desti', 0 );