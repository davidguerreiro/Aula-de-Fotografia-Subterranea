<?php
/**
 * Homepage template
 * 
 * Template name: Home
 * 
 * This is the home template. This page will be displayed on
 * the root url.
 * 
 * @package aula/templates
 */

// aula_php_display_all_errors();

get_header();

// module 002.
include( locate_template( 'modules/m002-header-video.php' ) ); 

?>

<div class="content-section">

<?php

// posts to be displayed across de homepage modules.
$args = array(
    'post_type'         => array( 'post', 'galeria' ),
    'posts_per_page'    => 6,
    'post_status'       => 'publish',
);
$home_posts             = new WP_Query( $args );
$home_posts_displayed   = array();

// module 005.
include( locate_template( 'modules/m005-main-posts-area.php' ) );

// module 007.
include( locate_template( 'modules/m007-gallery-section.php' ) );

// module 005.
include( locate_template( 'modules/m005-main-posts-area.php' ) );

// module 006.
include( locate_template( 'modules/m006-load-more.php' ) );

unset( $home_posts );
unset( $home_posts_displayed );

?>

</div>

<?php

get_sidebar();

?>

<div class="bottom-modules-wrapper">

<?php

// module 013.
include( locate_template( 'modules/m013-newsletter-section.php' ) );

?>

</div>

<?php

get_footer();
 