<?php

define('THEME_DIR', get_template_directory_uri());
define('SITE_URL', get_bloginfo('wpurl'));

function enqueue_styles() {
  // Load our main stylesheet.
  wp_register_style('main', get_stylesheet_uri(), array(), '1');
  wp_enqueue_style('main');
  
  wp_register_style('libs', THEME_DIR . '/public/styles/libs.min.css', array('main'), '1');
  wp_enqueue_style('libs');

  wp_register_style('styles', THEME_DIR . '/public/styles/styles.min.css', array('libs'), '1');
  wp_enqueue_style('styles');
}

add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts() {
  wp_register_script('libs', THEME_DIR . '/public/js/libs.min.js', array(), '1', true);
  wp_enqueue_script( 'libs' );
  wp_register_script('main', THEME_DIR . '/public/js/main.min.js', array('libs'), '1', true);
  wp_localize_script('main', 'misFinanzasAPI', array('url' => SITE_URL . '/wp-json/posts'));
  wp_enqueue_script('main');
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');

if (!function_exists('misFinanzas_setup')) {
  function misFinanzas_setup() {
    if ( function_exists('add_theme_support') ) {
      add_theme_support('post-thumbnails');
    }

    register_nav_menu('menu_uno',__( 'Principal' ));
    register_nav_menu('menu_dos',__( 'Responsive' ));
    register_nav_menu('menu_tres',__( 'Pie de Sitio' ));
  }
}

add_action('init', 'misFinanzas_setup');