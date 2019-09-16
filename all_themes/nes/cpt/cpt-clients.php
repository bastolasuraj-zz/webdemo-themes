<?php
/*
* Creating a function to create our CPT
*/

function nes_custom_post_type_clients() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Clients', 'Post Type General Name', 'nes' ),
		'singular_name'       => _x( 'Client', 'Post Type Singular Name', 'nes' ),
		'menu_name'           => __( 'Clients', 'nes' ),
		'parent_item_colon'   => __( 'Parent Client', 'nes' ),
		'all_items'           => __( 'All Clients', 'nes' ),
		'view_item'           => __( 'View Client', 'nes' ),
		'add_new_item'        => __( 'Name of The Country', 'nes' ),
		'add_new'             => __( 'Add New', 'nes' ),
		'edit_item'           => __( 'Edit Client', 'nes' ),
		'update_item'         => __( 'Update Client', 'nes' ),
		'search_items'        => __( 'Search Client', 'nes' ),
		'not_found'           => __( 'Not Found', 'nes' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'nes' ),
	);

// Set other options for Custom Post Type

	$args = array(
		'label'               => __( 'clients', 'nes' ),
		'description'         => __( 'Client news and reviews', 'nes' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', ),
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
	register_post_type( 'clients', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'nes_custom_post_type_clients', 0 );