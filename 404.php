<?php

/**
 * Template to display 404 error page
 * 
 * @package aula
 */

 get_header();

 // module 024.
 include( locate_template( 'modules/m24-404-header.php' ) );

 // module 025.
 include( locate_template( 'modules/m025-404-content.php' ) );

 // module 013.
 include( locate_template( 'modules/m013-newsletter-section.php' ) );

 get_footer();