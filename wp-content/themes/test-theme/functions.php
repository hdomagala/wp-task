<?php

// Setup
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );
add_theme_support( 'title-tag' );

register_nav_menus( array(
    'header'   => 'Display this menu in header',
    'footer'   => 'Display this menu in footer',
) );

// Thumbnails sizes
add_image_size('article', '640', 'auto', true);
