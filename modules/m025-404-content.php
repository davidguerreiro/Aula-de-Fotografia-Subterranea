<?php

/**
 * Module 025 - 404 content
 * 
 * @package aula/modules
 */

 $content = get_field( 'm25_mensaje_de_error', 'options' );

 ?>

 <div class="module m25">
    <?php if ( ! empty( $content ) ) : ?>
        <p class="m25__content">
            <?php echo $content; ?>
        </p>
    <?php endif;
        // module 026 - search form.
        include( locate_template( 'modules/m026-search-page-form.php' ) );
    ?>
 </div>