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
 
 if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        get_template_part( 'template-parts/post', 'single-item' );
    endwhile;
 else :
    $no_content = "No hay posts para mostrar en esta categoria.";
    include( locate_template( 'template-parts/content-none.php' ) );
 endif;

 ?>

 </div>

 <?php
 
 // display sidebar.
 get_sidebar();

 ?>

<div class="bottom-modules-wrapper">

<?php

 // pagination.
 include( locate_template( 'template-parts/pagination.php' ) );

 // module 013.
 include( locate_template( 'modules/m013-newsletter-section.php' ) );

 ?>

</div>

<?php

 get_footer();