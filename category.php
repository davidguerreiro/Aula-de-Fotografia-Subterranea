<?php

/**
 * Template to display category posts
 * 
 * @package aula
 * 
 */

 get_header();

 // module 017.
 include( locate_template( 'modules/m017-page-header.php' ) );

 ?>

 <div class="content-section">
 <?php
 
 // TODO: Display posts here.

 // display sidebar
 get_sidebar();
 
 ?>

 </div>

<?php

 // module 013.
 include( locate_template( 'modules/m013-newsletter-section.php' ) );

 get_footer();