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

get_header();

// module 002.
include( locate_template( 'modules/m002-header-video.php' ) ); 

?>

<div class="content-section">

<?php

// module 004.
include( locate_template( 'modules/m004-featured-post.php' ) );

// module 005.
include( locate_template( 'modules/m005-main-posts-area.php' ) );

// module 007.
include( locate_template( 'modules/m007-gallery-section.php' ) );

// module 005.
include( locate_template( 'modules/m005-main-posts-area.php' ) );

// module 006.
include( locate_template( 'modules/m006-load-more.php' ) );

?>

</div>

<?php

// display sidebar
get_sidebar();

?>

<div class="bottom-modules-wrapper">

<?php

// module 012.
include( locate_template( 'modules/m012-facebook-group.php' ) );

// module 013.
include( locate_template( 'modules/m013-newsletter-section.php' ) );

?>

</div>

<?php

get_footer();
 