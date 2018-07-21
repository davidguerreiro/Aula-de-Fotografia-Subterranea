<?php

/**
 * Module 016 - Comments
 * 
 * Single comment located in template-parts/comment-single-item.php
 * 
 * @package aula/modules
 */

 if ( ! isset( $post_id ) ) {
     $post_id = get_the_ID();
 }

 $comments = get_approved_comments( $post_id );

 ?>

 <div class="module m15 m16">
    <h2 class="m15__title">
        <i class="fa fa-comment-o icon" aria-hidden="true"></i>
        Comentarios
    </h2>

    <section class="m16__comments-wrapper">

    <?php

        // no comments.
        if ( ! is_array( $comments ) || is_wp_error( $comments ) || empty( $comments ) ) {
            $no_content = 'No hay ningun comentario. Animate y se el primero en comentar esta entrada.';
            include( locate_template( 'template-parts/content-none.php' ) );
        } else {
            foreach ( $comments as $comment ) {
                include( locate_template( 'template-parts/comment-single-item.php' ) );
            }
        }

    ?>

    </section>

 </div>