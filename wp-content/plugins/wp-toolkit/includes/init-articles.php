<?php

function hd_articles_init() {
    $labels = array(
        'name'                  => __( 'Articles', 'article' ),
        'singular_name'         => __( 'Article', 'article' ),
        'menu_name'             => __( 'Articles', 'article' ),
        'name_admin_bar'        => __( 'Articles', 'article' ),
        'add_new'               => __( 'Add New', 'article' ),
        'add_new_item'          => __( 'Add New Article', 'article' ),
        'new_item'              => __( 'New Article', 'article' ),
        'edit_item'             => __( 'Edit Article', 'article' ),
        'view_item'             => __( 'View Article', 'article' ),
        'all_items'             => __( 'All Articles', 'article' ),
        'search_items'          => __( 'Search Articles', 'article' ),
        'parent_item_colon'     => __( 'Parent Aticles:', 'article' ),
        'not_found'             => __( 'No articles found.', 'article' ),
        'not_found_in_trash'    => __( 'No articles found in Trash.', 'article' ),
        'featured_image'        => __( 'Articles Side Image', 'article' ),
        'set_featured_image'    => __( 'Set side image', 'article' ),
        'remove_featured_image' => __( 'Remove side image', 'article' ),
        'use_featured_image'    => __( 'Use as side image', 'article' ),
    );

    $args = array(
        'labels'                => $labels,
        'description'           => 'Articles used on frontpage',
        'public'                => true,
        'publicly_queryable'    => true,
        'rewrite'               => array('slug' => 'article'),
        'has_archive'           => false,
        'hierarchical'          => false,
        'supports'              => array('title', 'thumbnail', 'editor'),
        'menu_icon'             => 'dashicons-format-quote'
    );

    register_post_type('articles', $args);
}

