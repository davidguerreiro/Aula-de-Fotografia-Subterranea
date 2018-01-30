<?php

/**
 * Template for single gallery CPT.
 * 
 * @package aula
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
        $intro_text = get_the_content();
        include( locate_template( 'modules/m018-intro-text.php' ) );

        // module 020.
        include( locate_template( 'modules/m020-gallery-body.php' ) );

        // module 015.
        include( locate_template( 'modules/m015-add-comment.php' ) );

        // comments section.
        include( locate_template( 'comments.php' ) );

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
