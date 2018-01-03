<?php
/**
 * Team template
 * 
 * Template name: Team
 * 
 * This is the home template. This page will be displayed on
 * the root url.
 * 
 * @package aula/templates
 */

get_header();

// module 017.
include( locate_template( 'modules/m017-page-header.php' ) );

?>

<div class="content-section">

<?php
 
 // module 018.
 include( locate_template( 'modules/m018-intro-text.php' ) );

 // module 023.
 include( locate_template( 'modules/m023-team-members.php' ) );

?>

</div>

<?php
// get sidebar.
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