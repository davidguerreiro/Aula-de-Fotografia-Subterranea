<?php

/**
 * Template for archive page
 * 
 * Gallery CPT list items should be displayed here.
 * 
 * @package aula
 */

get_header();

 // module 017.
 include( locate_template( 'modules/m017-page-header.php' ) );

 ?>

 <div class="content-section">
 <?php
 
 // module 018 intro text.
 $intro_text = get_field( 'fotografia_texto_de_introduccion', 'option' );
 include( locate_template( 'modules/m018-intro-text.php' ) );
 unset( $intro_text );

 if ( have_posts() ) : ?>
    <div class="posts-container">
        <?php
            while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/gallery', 'single-item' );
            endwhile; ?>
    </div>
<?php 
    // pagination.
    include( locate_template( 'template-parts/pagination.php' ) );
else : 
    $no_content = "No hay ninguna galeria de fotografia disponible";
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

 // module 013.
 include( locate_template( 'modules/m013-newsletter-section.php' ) );

 ?>
</div>
<?php

 get_footer();