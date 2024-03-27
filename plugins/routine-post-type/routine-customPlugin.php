<?php
/*
* Plugin Name: routine-customPlugin
 */

function routine_register_post_type() {

$labels = array(

    'name'                     => __( 'Routines', 'Serene' ),
    'singular_name'            => __( 'Routine', 'Serene' ),
    'add_new'                  => __( 'Add New', 'Serene' ),
    'add_new_item'             => __( 'Add New Routine', 'Serene' ),
    'edit_item'                => __( 'Edit Routine', 'Serene' ),
    'new_item'                 => __( 'New Routine', 'Serene' ),
    'view_item'                => __( 'View Routine', 'Serene' ),
    'view_items'               => __( 'View Routines', 'Serene' ),
    'search_items'             => __( 'Search Routines', 'Serene' ),
    'not_found'                => __( 'No Routines found.', 'Serene' ),
    'not_found_in_trash'       => __( 'No Routines found in Trash.', 'Serene' ),
    'parent_item_colon'        => __( 'Parent Routines:', 'Serene' ),
    'all_items'                => __( 'All Routines', 'Serene' ),
    'archives'                 => __( 'Routine Archives', 'Serene' ),
    'attributes'               => __( 'Routine Attributes', 'Serene' ),
    'insert_into_item'         => __( 'Insert into Routine', 'Serene' ),
    'uploaded_to_this_item'    => __( 'Uploaded to this Routine', 'Serene' ),
    'featured_image'           => __( 'Featured Image', 'Serene' ),
    'set_featured_image'       => __( 'Set featured image', 'Serene' ),
    'remove_featured_image'    => __( 'Remove featured image', 'Serene' ),
    'use_featured_image'       => __( 'Use as featured image', 'Serene' ),
    'menu_name'                => __( 'Routines', 'Serene' ),
    'filter_items_list'        => __( 'Filter Routine list', 'Serene' ),
    'filter_by_date'           => __( 'Filter by date', 'Serene' ),
    'items_list_navigation'    => __( 'Routines list navigation', 'Serene' ),
    'items_list'               => __( 'Routines list', 'Serene' ),
    'item_published'           => __( 'Routine published.', 'Serene' ),
    'item_published_privately' => __( 'Routine published privately.', 'Serene' ),
    'item_reverted_to_draft'   => __( 'Routine reverted to draft.', 'Serene' ),
    'item_scheduled'           => __( 'Routine scheduled.', 'Serene' ),
    'item_updated'             => __( 'Routine updated.', 'Serene' ),
    'item_link'                => __( 'Routine Link', 'Serene' ),
    'item_link_description'    => __( 'A link to an routine.', 'Serene' ),

);

$args = array(

    'labels'                => $labels,
    'description'           => __( 'organize and manage company routines', 'Serene' ),
    'public'                => true,
    'hierarchical'          => false,
    'exclude_from_search'   => true,
    'publicly_queryable'    => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'show_in_nav_menus'     => false,
    'show_in_admin_bar'     => false,
    'show_in_rest'          => true,
    'menu_position'         => null,
    'menu_icon'             => 'dashicons-admin-customizer',
    'capability_type'       => 'post',
    'capabilities'          => array(),
    'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
    'taxonomies'            => array('category'),
    'has_archive'           => true,
    'rewrite'               => array( 'slug' => 'routine' ),
    'query_var'             => true,
    'can_export'            => true,
    'delete_with_user'      => false,
    'template'              => array(),
    'template_lock'         => false,

);

register_post_type( 'serene_routine', $args );

}

add_action( 'init', 'routine_register_post_type' );