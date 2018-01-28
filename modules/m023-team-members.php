<?php

/**
 * Module 023 - Team members
 * 
 * @package aula/modules
 */

 $args = array(
     'post_type' => 'equipo',
     'posts_per_page' => -1,
     'post_status' => 'publish',
 );
 $members = new WP_Query( $args );

 if ( $members->have_posts() ) : ?>

 <div class="module m23">
    <?php
        while ( $members->have_posts() ) :
            $members->the_post();
            get_template_part( 'template-parts/team', 'single-item' );
        endwhile;
    wp_reset_postdata();
    ?>
 </div>
<?php endif; ?>