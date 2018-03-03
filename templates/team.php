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

if ( have_posts() ) :
    while ( have_posts() ): 
        the_post();
        $intro_text = apply_filters( 'the_content', get_the_content() );
        // module 018.
        include( locate_template( 'modules/m018-intro-text.php' ) );

        // module 023.
        include( locate_template( 'modules/m023-team-members.php' ) );
    endwhile;
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