<?php

 // add featured images support.
 add_theme_support( 'post-thumbnails' ); 

 /**
  * Load css and HTML
  *
  * @return void
  */
  function aula_enqueue_scripts() {
      
    // main css
    wp_enqueue_style( '_theme-style', get_template_directory_uri() . '/css/style.css', array(), false, 'all' );

    // font awesome
    wp_enqueue_style( '_font-awesome', get_template_directory_uri() . '/css/awesome/css/font-awesome.min.css', array(), false, 'all' );

    // google fonts
    wp_enqueue_style( '_google-fonts', "https://fonts.googleapis.com/css?family=Asap|PT+Sans+Caption", array(), false, 'all' );

    // jquery
    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), true );

    // main scripts
    wp_enqueue_script( '_main-script', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), true );

  }

  add_action( 'wp_enqueue_scripts', 'aula_enqueue_scripts' );

/**
 * Load extra theme funcionality
 */
 include get_template_directory() . '/inc/extras.php';

