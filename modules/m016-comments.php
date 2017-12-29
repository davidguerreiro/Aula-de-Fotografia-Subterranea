<?php

/**
 * Module 016 - Comments
 * 
 * Single comment located in template-parts/comment-single-item.php
 * 
 * @package aula/modules
 */

 ?>

 <div class="module m15 m16">
    <h2 class="m15__title">
        <i class="fa fa-comment-o icon" aria-hidden="true"></i>
        Comentarios
    </h2>

    <?php

    // no comments.
    $no_content = 'No hay ningun comentario. Animate y se el primero en comentar esta entrada.';
    include( locate_template( 'template-parts/content-none.php' ) );

    // include comments.
    get_template_part( 'template-parts/comment', 'single-item' );

    get_template_part( 'template-parts/comment', 'single-item' );

    get_template_part( 'template-parts/comment', 'single-item' );

    ?>

 </div>