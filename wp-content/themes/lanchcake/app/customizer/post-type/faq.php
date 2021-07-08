<?php

/**
 * tạo post_type lấy từ Custom Post Type UI Tools
 *
 */

function register_post_type_faq()
{
    $labels = array(
        'name' => __('FAQ'),
        'singular_name' => __('FAQ')
    );

    $args = array(
        'labels' => $labels,
        'description' => 'FAQ',
        'menu_position' => 7,
        'public' => true,
        'has_archive' => true,
        'map_meta_cap' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'rewrite' => array('slug' => false),
        'menu_icon' => 'dashicons-info',
        'supports' => array(
            'title', 'editor', 'custom-fields', 'comments',
        ),
    );
    register_post_type('faq', $args);
}

add_action('init', 'register_post_type_faq');
