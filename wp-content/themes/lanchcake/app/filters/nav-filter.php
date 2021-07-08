<?php

// add user svg
function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

// add menu active
function special_nav_class($classes)
{
    if (in_array('current-menu-item', $classes) || in_array( 'current-menu-ancestor', $classes)) {
        $classes[] = 'active ';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'special_nav_class', 10);
