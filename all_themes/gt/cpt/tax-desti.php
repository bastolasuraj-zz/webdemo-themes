<?php
//hook into the init action and call create_places_nonhierarchical_taxonomy when it fires

add_action( 'init', 'create_places_nonhierarchical_taxonomy', 0 );

function create_places_nonhierarchical_taxonomy() {

// Labels part for the GUI

	$labels = array(
		'name' => _x( 'Places', 'taxonomy general name' ),
		'singular_name' => _x( 'Place', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Places' ),
		'popular_items' => __( 'Popular Places' ),
		'all_items' => __( 'All Places' ),
		'parent_item' => null,
		'parent_item_colon' => null,
		'edit_item' => __( 'Edit Place' ),
		'update_item' => __( 'Update Place' ),
		'add_new_item' => __( 'Add New Place' ),
		'new_item_name' => __( 'New Place Name' ),
		'separate_items_with_commas' => __( 'Separate places with commas' ),
		'add_or_remove_items' => __( 'Add or remove places' ),
		'choose_from_most_used' => __( 'Choose from the most used places' ),
		'menu_name' => __( 'Places' ),
	);

// Now register the non-hierarchical taxonomy like tag

	register_taxonomy('places','packages',array(
		'hierarchical' => false,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var' => true,
		'rewrite' => array( 'slug' => 'place' ),
	));
}