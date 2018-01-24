<?php

/**
 * Module 006 - Load More
 * 
 * @package aula/modules
 */

 $blog_page_id = get_option( 'page_for_posts' );

 ?>

 <div class="module m6">
    <div class="m6__section m6__section-text">
        <p>Ver mas entradas</p>
    </div>
    <a href="<?php echo get_permalink( $blog_page_id ); ?>" class="m6__section m6__section-link">
        <i class="fa fa-arrow-right" aria-hidden="true"></i>
    </a>
 </div>