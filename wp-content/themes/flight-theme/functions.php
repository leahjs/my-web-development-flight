<?php

// INCLUDES

// Original boilerplate functions
require_once(get_stylesheet_directory() . '/includes/utilities.php');
require_once(get_stylesheet_directory() . '/includes/enqueue.php');
require_once(get_stylesheet_directory() . '/includes/thumbnails.php');
require_once(get_stylesheet_directory() . '/includes/navigation.php');
require_once(get_stylesheet_directory() . '/includes/pagination.php');
require_once(get_stylesheet_directory() . '/includes/widgets.php');
require_once(get_stylesheet_directory() . '/includes/post-metas.php');

// ACF HOOKS
require_once(get_stylesheet_directory() . '/includes/acf-hooks.php');


function flight_theme_styles(){
  wp_enqueue_style( 'foundtion_css', get_template_directory_uri() . '/css/foundation.css' );
  wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
  wp_enqueue_style( 'google_css', 'https://fonts.googleapis.com/css?family=Montserrat:400,700' );
  // wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'flight_theme_styles' );


function flight_theme_js() {
  // wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/js/modernizr.js', '', '', false);
  // wp_enqueue_script( 'foundation_js', get_template_directory_uri() . 'js/foundation.min.js', array('jquery'), '', true );
  // wp_enqueue_script( 'app_js', get_template_directory_uri() . '/js/app.js', array('jquery', 'foundation_js'), '', true );
  // wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js', '', '', true );
}

add_action( 'wp_enqueue_scripts', 'flight_theme_js' );




?>
