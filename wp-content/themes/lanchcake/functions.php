<?php
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
  	foreach(glob(get_template_directory() . "/app/Customs/PostType/*.php") as $file)
	{
    	require $file;
	}
	foreach(glob(get_template_directory() . "/app/Customs/Toxonomy/*.php") as $file)
	{
    	require $file;
	}
	foreach(glob(get_template_directory() . "/app/Views/home/*.php") as $file)
	{
    	require $file;
	}

  	define( 'THEME_URL', get_stylesheet_directory() );
  	define( 'CORE', THEME_URL . '/core' );
  	require_once( CORE . '/init.php' );

	if ( ! function_exists( 'cake_theme_setup' ) ) {
		function cake_theme_setup() {

			$language_folder = THEME_URL . '/languages';
			load_theme_textdomain( 'cake', $language_folder );

			add_theme_support( 'automatic-feed-links' );

			add_theme_support( 'post-thumbnails' );

			add_theme_support( 'title-tag' );

			add_theme_support( 'post-formats',
				array(
					'video',
					'image',
					'audio',
					'gallery'
				)
			);

			$default_background = array(
				'default-color' => '#e8e8e8',
			);
			add_theme_support( 'custom-background', $default_background );

			register_nav_menu ( 'primary-menu', __('Primary Menu', 'cake') );

			$sidebar = array(
				'name' => __('Main Sidebar', 'cake'),
				'id' => 'main-sidebar',
				'description' => 'Main sidebar for cake theme',
				'class' => 'main-sidebar',
				'before_title' => '<h3 class="widgettitle">',
				'after_sidebar' => '</h3>'
			);
			register_sidebar( $sidebar );
		}
		add_action ( 'init', 'cake_theme_setup' );
	}