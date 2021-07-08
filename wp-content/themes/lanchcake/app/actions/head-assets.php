<?php

function theme_init_styles()
{
	//wp_enqueue_style(THEME_NAME . 'bootstrap', ASSETS_URI . '/css/bootstrap.css', false, THEME_VERSION, 'all');
	//wp_enqueue_style(THEME_NAME . 'slick', ASSETS_URI . '/css/slick.css', false, THEME_VERSION, 'all');
	//wp_enqueue_style(THEME_NAME . '-styles', ASSETS_URI . '/css/styles.css', false, THEME_VERSION, 'all');
}
add_action('wp_enqueue_scripts', 'theme_init_styles');

function theme_init_scripts()
{
	//wp_enqueue_script(THEME_NAME . '-jquery', ASSETS_URI . '/js/jquery-1.9.1.min.js', false, THEME_VERSION, true);
	//wp_enqueue_script(THEME_NAME . '-jquery-print', ASSETS_URI . '/js/jquery-1.6.0.print.min.js', false, THEME_VERSION, true);
	//wp_enqueue_script(THEME_NAME . '-js-popper', ASSETS_URI . '/js/popper.min.js', false, THEME_VERSION, true);
	//wp_enqueue_script(THEME_NAME . '-js-boostrap', ASSETS_URI . '/js/bootstrap.min.js', false, THEME_VERSION, true);
	//wp_enqueue_script(THEME_NAME . '-js-slick', ASSETS_URI . '/js/slick.js', false, THEME_VERSION, true);
	//wp_enqueue_script(THEME_NAME . '-svg', ASSETS_URI . '/js/svg.js', false, THEME_VERSION, true);
	//wp_enqueue_script(THEME_NAME . '-common', ASSETS_URI . '/js/common.js', false, THEME_VERSION, true);

	$wp_script_data = array(
        'ADMIN_AJAX_URL' => admin_url('admin-ajax.php'),
        'HOME_URL' => HOME_URI
    );

    wp_localize_script(THEME_NAME . '-jquery', 'wp_vars', $wp_script_data);
}
add_action('wp_enqueue_scripts', 'theme_init_scripts');
