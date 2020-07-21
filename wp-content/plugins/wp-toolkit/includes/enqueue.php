<?php

function hd_admin_theme_style_init () {
    wp_enqueue_style('hd-admin-theme', plugin_dir_url( __FILE__ ) . 'assets/metaboxer.css');
}
