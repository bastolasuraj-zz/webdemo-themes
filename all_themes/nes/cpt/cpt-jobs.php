<?php
/*
* Creating a function to create our CPT
*/

function nes_custom_post_type_jobs() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Jobs', 'Post Type General Name', 'nes' ),
		'singular_name'       => _x( 'Job', 'Post Type Singular Name', 'nes' ),
		'menu_name'           => __( 'Jobs', 'nes' ),
		'parent_item_colon'   => __( 'Parent Job', 'nes' ),
		'all_items'           => __( 'All Jobs', 'nes' ),
		'view_item'           => __( 'View Job', 'nes' ),
		'add_new_item'        => __( 'Add New Job', 'nes' ),
		'add_new'             => __( 'Add New', 'nes' ),
		'edit_item'           => __( 'Edit Job', 'nes' ),
		'update_item'         => __( 'Update Job', 'nes' ),
		'search_items'        => __( 'Search Job', 'nes' ),
		'not_found'           => __( 'Not Found', 'nes' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'nes' ),
	);

// Set other options for Custom Post Type

	$args = array(
		'label'               => __( 'jobs', 'nes' ),
		'description'         => __( 'Job news and reviews', 'nes' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'genres' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/
		'hierarchical'        => true,
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
	);

	// Registering your Custom Post Type
	register_post_type( 'jobs', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'nes_custom_post_type_jobs', 0 );