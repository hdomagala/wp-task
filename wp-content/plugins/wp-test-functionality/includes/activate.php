<?php

function hd_activate_plugin () {
    if(version_compare(get_bloginfo( 'version' ),'5.0','<')) {
        wp_die("You must update WordPress to use Custom WP Toolkit plugin.");
    }
}
