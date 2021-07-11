<?php

function theme_init_styles()
{
	wp_enqueue_style(THEME_NAME . '-bootstrap', ASSETS_URI . '/css/bootstrap.min.css', false, 'all');
	wp_enqueue_style(THEME_NAME . '-flaticon', ASSETS_URI . '/css/flaticon.css', false, 'all');
	wp_enqueue_style(THEME_NAME . '-barfiller', ASSETS_URI . '/css/barfiller.css', false, 'all');
	wp_enqueue_style(THEME_NAME . '-magnific-popup', ASSETS_URI . '/css/magnific-popup.css', false, 'all');
	wp_enqueue_style(THEME_NAME . '-font-awesome', ASSETS_URI . '/css/font-awesome.min.css', false, 'all');
	wp_enqueue_style(THEME_NAME . '-elegant-icons', ASSETS_URI . '/css/elegant-icons.css', false, 'all');
	wp_enqueue_style(THEME_NAME . '-nice-select', ASSETS_URI . '/css/nice-select.css', false, 'all');
	wp_enqueue_style(THEME_NAME . '-owl.carousel', ASSETS_URI . '/css/owl.carousel.min.css', false, 'all');
	wp_enqueue_style(THEME_NAME . '-slicknav', ASSETS_URI . '/css/slicknav.min.css', false, 'all');
	wp_enqueue_style(THEME_NAME . '-styles', ASSETS_URI . '/css/style.css', false, 'all');
}
add_action('wp_enqueue_scripts', 'theme_init_styles');

function theme_init_scripts()
{
	wp_enqueue_script(THEME_NAME . '-jquery', ASSETS_URI . '/js/jquery-3.3.1.min.js', false, true);
	wp_enqueue_script(THEME_NAME . '-js-boostrap', ASSETS_URI . '/js/bootstrap.min.js', false, true);
	wp_enqueue_script(THEME_NAME . '-jquery-nice-selec', ASSETS_URI . '/js/jquery.nice-select.min.j', false, true);
	wp_enqueue_script(THEME_NAME . '-jquery-barfiller', ASSETS_URI . '/js/jquery.barfiller.js', false, true);
	wp_enqueue_script(THEME_NAME . '-jquery-magnific-popup', ASSETS_URI . '/js/jquery.magnific-popup.min.js', false, true);
	wp_enqueue_script(THEME_NAME . '-jquery-slicknav', ASSETS_URI . '/js/jquery.slicknav.js', false, true);
	wp_enqueue_script(THEME_NAME . '-carousel', ASSETS_URI . '/js/owl.carousel.min.js', false, true);
	wp_enqueue_script(THEME_NAME . '-jquery-nicescroll', ASSETS_URI . '/js/jquery.nicescroll.min.js', false, true);
	wp_enqueue_script(THEME_NAME . '-main', ASSETS_URI . '/js/main.js', false, true);
	wp_enqueue_script(THEME_NAME . '-common', ASSETS_URI . '/js/common.js', false, true);

	$wp_script_data = array(
        'ADMIN_AJAX_URL' => admin_url('admin-ajax.php'),
        'HOME_URL' => HOME_URI
    );

    wp_localize_script(THEME_NAME . '-jquery', 'wp_vars', $wp_script_data);
}
add_action('wp_enqueue_scripts', 'theme_init_scripts');
