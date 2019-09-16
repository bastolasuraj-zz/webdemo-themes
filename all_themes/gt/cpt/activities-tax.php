<?php
//hook into the init action and call create_activities_nonhierarchical_taxonomy when it fires

add_action( 'init', 'create_activities_nonhierarchical_taxonomy', 0 );

function create_activities_nonhierarchical_taxonomy() {

// Labels part for the GUI

	$labels = array(
		'name' => _x( 'Activities', 'taxonomy general name' ),
		'singular_name' => _x( 'Activity', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Activities' ),
		'popular_items' => __( 'Popular Activities' ),
		'all_items' => __( 'All Activities' ),
		'parent_item' => null,
		'parent_item_colon' => null,
		'edit_item' => __( 'Edit Activity' ),
		'update_item' => __( 'Update Activity' ),
		'add_new_item' => __( 'Add New Activity' ),
		'new_item_name' => __( 'New Activity Name' ),
		'separate_items_with_commas' => __( 'Separate activities with commas' ),
		'add_or_remove_items' => __( 'Add or remove activities' ),
		'choose_from_most_used' => __( 'Choose from the most used activities' ),
		'menu_name' => __( 'Activities' ),
	);

// Now register the non-hierarchical taxonomy like tag

	register_taxonomy('activities','packages',array(
		'hierarchical' => false,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var' => true,
		'rewrite' => array( 'slug' => 'activity' ),
	));
}