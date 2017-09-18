<?php


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

  }

  add_action( 'wp_enqueue_scripts', 'aula_enqueue_scripts' );

/**
 * Load extra theme funcionality
 */
 include get_template_directory() . '/inc/extras.php';

