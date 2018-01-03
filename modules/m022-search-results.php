<?php

/**
 * Module 022 - Search results
 * 
 * @package aula/modules
 */

 if ( isset( $_GET['s'] ) && $_GET['s'] !== '' ) : ?>

 <div class="module m21 m22">
    <?php if ( have_posts() ) : 
        while( have_posts() ) :
            the_post();
            get_template_part( 'template-parts/search', 'single-item' );
        endwhile;
    ?>
    <?php else : 
        $no_content = "No hay ningun resultado que coincida con el termino <span class='search_term'> Test </span>.
                        Prueba a realizar la busqueda utilizando otro termino.";
        include( locate_template( 'template-parts/content-none.php' ) );
        unset( $no_content );
    endif;
    ?>
 </div>
<?php endif; ?>