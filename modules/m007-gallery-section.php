<?php

/**
 * Module 006 - Gallery Section
 * 
 * @package aula/modules
 */

 $page_id       = get_queried_object_id();
 $title         = get_field( 'm7_titulo', $page_id );
 $text          = get_field( 'm7_texto', $page_id );

 ?>

 <div class="module m7">
    <div class="m7__section m7__section-text">
        <?php if ( ! empty( $title ) ) : ?>
            <h2>
                <i class="fa fa-picture-o" aria-hidden="true"></i>
                <?php echo esc_html( $title ); ?>
            </h2>
        <?php endif; 
        
        if ( ! empty( $text ) ) : ?>
            <p><?php echo esc_html( $text ); ?></p>
        <?php endif; ?>
    </div>
    <a href="<?php echo get_post_type_archive_link( 'galeria' ); ?>" class="m7__section m7__section-link">
        <i class="fa fa-camera-retro" aria-hidden="true"></i>
        <p>Ver Galerias</p>
    </a>
 </div>

 <?php
 unset( $page_id );
 unset( $title );
 unset( $text );