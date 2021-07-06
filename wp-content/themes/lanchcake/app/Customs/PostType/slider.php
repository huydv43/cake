<?php
function create_slider_post_type()
{

    $label = array(
        'name' => 'Slider', 
        'singular_name' => 'Slider'
    );

    $args = array(
        'labels' => $label,
        'description' => 'Post type đăng sản phẩm',
        'supports' => array(
            'title',
            'thumbnail',
        ), 
        'hierarchical' => false,
        'public' => true, 
        'show_ui' => true, 
        'menu_position' => 2, 
        'menu_icon' => 'dashicons-images-alt2', 
        'has_archive' => true, 
        'capability_type' => 'post' 
    );
    register_post_type('slider', $args);
}
add_action('init', 'create_slider_post_type');