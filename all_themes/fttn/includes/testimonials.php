<?php
/*
* Creating a function to create our CPT
*/
 
function fttn_cpt_testimonial() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Testimonials', 'Post Type General Name', 'fttn' ),
        'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'fttn' ),
        'menu_name'           => __( 'Testimonials', 'fttn' ),
        'parent_item_colon'   => __( 'Parent Testimonial', 'fttn' ),
        'all_items'           => __( 'All Testimonials', 'fttn' ),
        'view_item'           => __( 'View Testimonial', 'fttn' ),
        'add_new_item'        => __( 'Add New Testimonial', 'fttn' ),
        'add_new'             => __( 'Add New', 'fttn' ),
        'edit_item'           => __( 'Edit Testimonial', 'fttn' ),
        'update_item'         => __( 'Update Testimonial', 'fttn' ),
        'search_items'        => __( 'Search Testimonial', 'fttn' ),
        'not_found'           => __( 'Not Found', 'fttn' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'fttn' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'testimonials', 'fttn' ),
        'description'         => __( 'Testimonial news and reviews', 'fttn' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'custom-fields', ),
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
        'exclude_from_search' => true,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'testimonials', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'fttn_cpt_testimonial', 0 );