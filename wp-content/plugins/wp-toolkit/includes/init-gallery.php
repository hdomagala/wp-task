<?php

function hd_gallery_init() {
    $labels = array(
        'name'                  => __( 'Gallery items', 'gallery' ),
        'singular_name'         => __( 'Gallery item', 'gallery' ),
        'menu_name'             => __( 'Gallery items', 'gallery' ),
        'name_admin_bar'        => __( 'Gallery items', 'gallery' ),
        'add_new'               => __( 'Add New', 'gallery' ),
        'add_new_item'          => __( 'Add New Item', 'gallery' ),
        'new_item'              => __( 'New Item', 'gallery' ),
        'edit_item'             => __( 'Edit Item', 'gallery' ),
        'view_item'             => __( 'View Item', 'gallery' ),
        'all_items'             => __( 'All Items', 'gallery' ),
        'search_items'          => __( 'Search Items', 'gallery' ),
        'parent_item_colon'     => __( 'Parent Items:', 'gallery' ),
        'not_found'             => __( 'No gallery item found.', 'gallery' ),
        'not_found_in_trash'    => __( 'No gallery item found in Trash.', 'gallery' ),
        'featured_image'        => __( 'Gallery Item Image', 'gallery' ),
        'set_featured_image'    => __( 'Set Item Image', 'gallery' ),
        'remove_featured_image' => __( 'Remove Item Image', 'gallery' ),
        'use_featured_image'    => __( 'Use as Item Image', 'gallery' ),
    );

    $args = array(
        'labels'                => $labels,
        'description'           => 'Images for front page gallery',
        'public'                => true,
        'publicly_queryable'    => true,
        'rewrite'               => array('slug' => 'gallery'),
        'has_archive'           => false,
        'hierarchical'          => false,
        'supports'              => array('title', 'thumbnail'),
        'menu_icon'             => 'dashicons-format-gallery'
    );

    register_post_type('gallery', $args);
}

