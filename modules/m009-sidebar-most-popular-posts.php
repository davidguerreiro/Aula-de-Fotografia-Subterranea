<?php

/**
 * Module 009 - Sidebar - Most popular posts
 * 
 * This module is only used on the sidebar
 * 
 * @package aula/modules
 */

 $args = array(
     'post_type'        => array( 'post', 'galeria' ),
     'posts_per_page'   => 3,
     'post_status'      => 'publish',
     'orderby'          => 'comment_count',
 );
 $p_posts = new WP_Query( $args );

 if ( $p_posts->have_posts() ) : ?>

 <div class="module m9">
    <?php while ( $p_posts->have_posts() ) : 
        $p_posts->the_post();
        $post_id    = get_the_ID();
        $comments   = get_approved_comments( $post_id );
        $post_type  = get_post_type( $post_id );
        $icon       = ( $post_type == 'post' ) ? 'fa-thumb-tack' : 'fa-camera-retro'
        ?>
        <a href="<?php the_permalink(); ?>">
            <article class="m9__item">
                <div class="m9__item-section m9__item-section-data">
                    <h3>
                        <?php echo get_the_title(); ?>
                    </h3>
                    <p>
                        <i class="fa fa-comment-o" aria-hidden="true"></i>
                        <?php echo ' ' . count( $comments ) . ' '; ?>
                    </p>
                </div>
                <div class="m9__item-section m9__item-section-icon">
                    <i class="fa <?php echo $icon; ?>" aria-hidden="true"></i>
                </div>
            </article>
        </a>
    <?php endwhile; 
    unset( $post_id );
    unset( $comments );
    unset( $post_type );
    unset( $icon );
    wp_reset_postdata();
    ?>

 </div>
<?php endif;
unset( $args );
unset( $p_posts );
?>