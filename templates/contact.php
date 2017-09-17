<?php
/**
 * Contact template
 * 
 * Template name: Contact
 *
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

 // module 019.
 include( locate_template( 'modules/m019-contact-form.php' ) );

 // get sidebar.
 get_sidebar();

?>

</div>

<?php

 // module 012.
 include( locate_template( 'modules/012-facebook-group.php' ) );

 // module 013.
 include( locate_template( 'modules/013-newsletter-section.php' ) );

get_footer();