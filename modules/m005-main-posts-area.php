<?php

/**
 * Module 005 - Main Posts Area
 * 
 * First if variables coming from parent template.
 * 
 * @package aula/modules
 */
 $i = 0;
 if ( isset( $home_posts ) && isset( $home_posts_displayed ) && $home_posts->have_posts() ) : ?>

<div class="posts-container">
    <?php
        while ( $home_posts->have_posts() && $i < 3 ) {
            $home_posts->the_post();
            $post_id = get_the_ID();
            var_dump( get_the_title() );
            die( 'herethere');
            
            // check homepage displayed posts.
            if ( in_array( $post_id, $home_posts_displayed ) ) {
                continue;
            } else {
                $home_posts_displayed[] = $post_id;
                get_template_part( 'template-parts/post', 'single-item' );
                $i++;
            }
            unset( $post_id );
        }
        unset( $i );
        wp_reset_postdata();
        
    ?>
</div>
<?php endif; ?>