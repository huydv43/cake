<?php

/**
 * Theme init
 *
 */

add_action('after_setup_theme', 'pronetwptheme_setup');
function pronetwptheme_setup()
{
    // Make theme available for translation.
    load_theme_textdomain(DEV_TEXTDOMAIN);

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    add_theme_support('title-tag');

    /*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
    add_theme_support('post-thumbnails');

    add_theme_support('post-formats', array('aside', 'gallery'));

    add_theme_support('custom-header');
}


add_action('after_setup_theme', 'pronet_register_menu', 0);
function pronet_register_menu()
{
    register_nav_menus(array(
        'main_menu' => __('Main Menu', DEV_TEXTDOMAIN),
        'header_top' => __('Header Top', DEV_TEXTDOMAIN),
        'footer_no1' => __('Footer No.1', DEV_TEXTDOMAIN),
        'footer_no2' => __('Footer No.2', DEV_TEXTDOMAIN),
        '404_page' => __('404 Page', DEV_TEXTDOMAIN),
    ));
}
