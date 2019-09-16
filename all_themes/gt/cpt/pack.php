<?php
/*
* Creating a function to create our CPT
*/

function gt_custom_post_type_desti() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Packages', 'Post Type General Name', 'gaamatravels' ),
		'singular_name'       => _x( 'Package', 'Post Type Singular Name', 'gaamatravels' ),
		'menu_name'           => __( 'Packages', 'gaamatravels' ),
		'parent_item_colon'   => __( 'Parent Package', 'gaamatravels' ),
		'all_items'           => __( 'All Packages', 'gaamatravels' ),
		'view_item'           => __( 'View Package', 'gaamatravels' ),
		'add_new_item'        => __( 'Add New Package', 'gaamatravels' ),
		'add_new'             => __( 'Add New', 'gaamatravels' ),
		'edit_item'           => __( 'Edit Package', 'gaamatravels' ),
		'update_item'         => __( 'Update Package', 'gaamatravels' ),
		'search_items'        => __( 'Search Package', 'gaamatravels' ),
		'not_found'           => __( 'Not Found', 'gaamatravels' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'gaamatravels' ),
	);

// Set other options for Custom Post Type

	$args = array(
		'label'               => __( 'packages', 'gaamatravels' ),
		'description'         => __( 'Package news and reviews', 'gaamatravels' ),
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
	register_post_type( 'packages', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'gt_custom_post_type_desti', 0 );