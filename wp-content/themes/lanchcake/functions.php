<?php

$my_theme = wp_get_theme();
define('THEME_NAME', sanitize_title($my_theme->get('Name')));

$arrayDevEnv = ['local', 'test', 'staging'];
define('THEME_VERSION', in_array(WP_ENV, $arrayDevEnv) ? time() : $my_theme->get('Version'));

define('DEV_TEXTDOMAIN', $my_theme->get('TextDomain'));

// Homepage uri
define('HOME_URI', esc_url(home_url('/')));

// Theme path
define('THEME_DIR', get_template_directory());
define('THEME_URI', get_template_directory_uri());

// Assets uri
define('ASSETS_URI', THEME_URI . '/assets');

// App dir
define('APP_DIR', THEME_DIR . '/app');

// Third party dir
define('THIRD_DIR', THEME_DIR . '/third_party');

// Gutenberg path
define('GUTENBERG_DIR', THEME_DIR . '/gutenberg');
define('GUTENBERG_URI', THEME_URI . '/gutenberg');

/**
 * Initialize all the things.
 */
require APP_DIR . '/init.php';
