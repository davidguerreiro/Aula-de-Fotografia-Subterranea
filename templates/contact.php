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
 if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();

        // module 018.
        $intro_text = apply_filters( 'the_content', get_the_content() );
        include( locate_template( 'modules/m018-intro-text.php' ) );

        // module 019.
        include( locate_template( 'modules/m019-contact-form.php' ) );
    endwhile;
    wp_reset_postdata();
endif;
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