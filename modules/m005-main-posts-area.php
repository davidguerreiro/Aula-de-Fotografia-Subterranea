<?php

/**
 * Module 005 - Main Posts Area
 * 
 * @package aula/modules
 */

 if ( isset( $home_posts ) && isset( $home_posts_displayed ) && $home_posts->have_posts() ) : ?>

 ?>

<div class="posts-container posts-container--home">
    <?php
        while ( $home_posts->have_posts() ) {
            $home_posts->the_post();
            $post_id = get_the_ID();
            
            // check homepage displayed posts.
            if ( in_array( $post_id, $home_posts_displayed ) ) {
                continue;
            } else {
                $home_posts_displayed[] = $post_id;
                get_template_part( 'template-parts/post', 'home-single-item' );
            }
            unset( $post_id );
        }
        
    ?>
</div>
<?php endif; ?>