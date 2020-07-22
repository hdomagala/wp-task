<?php
/*
 * Plugin Name: Custom WordPress Toolkit
 * Description: A simple custom plugin with functionality for Applover task
 * Version: 1.0.0
 * Author: Hanna Domagała
 */

if( !function_exists('add_action') ) {
    echo "Hi there! I'm just a plugin, not much I can do when called directly.";
    exit;
}

// Includes
include('includes/activate.php');
include('includes/init-articles.php');
include('includes/init-gallery.php');
include('includes/init-metaboxes.php');
include('includes/init-customizer.php');
include('includes/enqueue.php');

// Admin customization
add_action('admin_enqueue_scripts', 'hd_admin_theme_style_init');

// Inits
register_activation_hook(__FILE__,'hd_activate_plugin');
add_action('init','hd_articles_init');
add_action('init','hd_gallery_init');

// Metaboxes
add_action('add_meta_boxes', ['HD_Color_Meta_Box', 'add']);
add_action('save_post', ['HD_Color_Meta_Box', 'save']);

// Customizer
add_action( 'customize_register', ['HD_Primary_Color_Customizer', 'register'] );
add_action( 'customize_register', ['HD_Logos_Customizer', 'register'] );

