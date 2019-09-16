<?php
//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'nes_create_jobs_hierarchical_taxonomy', 0 );

//create a custom taxonomy name it jobs for your posts

function nes_create_jobs_hierarchical_taxonomy() {

// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI

	$labels = array(
		'name' => _x( 'Job Categories', 'taxonomy general name' ),
		'singular_name' => _x( 'Job Category', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Job Categories' ),
		'all_items' => __( 'All Job Categories' ),
		'parent_item' => __( 'Parent Job Category' ),
		'parent_item_colon' => __( 'Parent Job Category:' ),
		'edit_item' => __( 'Edit Job Category' ),
		'update_item' => __( 'Update Job Category' ),
		'add_new_item' => __( 'Add New Job Category' ),
		'new_item_name' => __( 'New Job Category Name' ),
		'menu_name' => __( 'Job Categories' ),
	);

// Now register the taxonomy

	register_taxonomy('job-category',array('jobs'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'job-category' ),
	));

}