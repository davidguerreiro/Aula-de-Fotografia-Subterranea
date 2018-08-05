<?php

 // add featured images support.
 add_theme_support( 'post-thumbnails' );

 /**
  * Calculate current time in seconds to be used as a 
  * placeholder in loading scripts
  *
  * @return int $time_seconds
  */
  function aula_get_version_number() {
    $str_time = date( 'H:i' );
    sscanf($str_time, "%d:%d:%d", $hours, $minutes, $seconds);
    $time_seconds = isset($seconds) ? $hours * 3600 + $minutes * 60 + $seconds : $hours * 60 + $minutes;
    return $time_seconds;
  }

 /**
 * Create admin options page to
 * be used by ACF.
 */
if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page();
}

 /**
  * Load css and HTML
  *
  * @return void
  */
  function aula_enqueue_scripts() {

    $version = 122342344324;
    $version = aula_get_version_number();   // Do not let this value to go to production -- just comment this line.
      
    // main css
    wp_enqueue_style( '_theme-style', get_template_directory_uri() . '/css/style.css', array(), $version, 'all' );

    // font awesome
    wp_enqueue_style( '_font-awesome', get_template_directory_uri() . '/css/awesome/css/font-awesome.min.css', array(), false, 'all' );

    // google fonts.
    wp_enqueue_style( '_google-fonts', "https://fonts.googleapis.com/css?family=Asap|PT+Sans+Caption", array(), false, 'all' );

    // gallery plugin css.
    wp_enqueue_style( '_photoswipe-css', get_template_directory_uri() . '/js/photoswipe/dist/photoswipe.css', array(), false, 'all' );
    wp_enqueue_style( '_photoswipe-default-skin-css', get_template_directory_uri() . '/js/photoswipe/dist/default-skin/default-skin.css', array(), false, 'all' );

    // jquery.
    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), true );

    // gallery plugin js.
    wp_enqueue_script( '_photoswipe-js', get_template_directory_uri() . '/js/photoswipe/dist/photoswipe.min.js', array(), true );
    wp_enqueue_script( '_photoswipe-default-ui-js', get_template_directory_uri() . '/js/photoswipe/dist/photoswipe-ui-default.min.js', array(), true );

    // main scripts.
    wp_enqueue_script( '_main-script', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), $version, true );
    wp_localize_script( '_main-script', 'ajaxObject', array( 'ajaxUrl' => admin_url( 'admin-ajax.php' ) ) );  
  }

  add_action( 'wp_enqueue_scripts', 'aula_enqueue_scripts' );

/**
 * Load extra theme funcionality
 */
 include get_template_directory() . '/inc/extras.php';

/**
 * Widgets class file
 */
include get_template_directory() . '/inc/class/widgets.php';