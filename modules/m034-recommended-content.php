<?php
/**
 * Module 034 - Recommended Content
 * 
 * @package aula/modules
 */

 $categories = get_the_category();
 $post_id    = get_the_ID();

if ( is_array( $categories ) && ! empty( $categories ) && ! is_wp_error( $categories ) ) :
    $args = [
        'post_type'         => [ 'post', 'galleria' ],
        'post_status'       => 'publish',
        'posts_per_page'    => 3,
        'post__not_in'      => [ $post_id ],
        'cat'               => $categories[0]->term_id,
        'orderby'           => 'rand'
    ];

    $related_posts = new WP_Query( $args );

if ( $related_posts->have_posts() ) : ?>

<div class="module m34">
    <h2 class="m34__title">
        También te puede interesar ...
    </h2>

    <ul class="posts-list">
        <?php while ( $related_posts->have_posts() ) : 
            $related_posts->the_post();
            $post_title              = get_the_title();
            $post_featured_image_url = get_the_post_thumbnail_url( $post_id, 'medium' );
            $categories              = get_the_category();
        ?>
        <li>
            <article class="posts-list__post-link">
            <?php if ( ! empty( $post_featured_image_url ) ) : ?>
                <div class="posts-list__section posts-list__section--image-wrapper">
                    <img src="<?php echo esc_url( $post_featured_image_url ); ?>" alt="<?php echo esc_html( $post_title ); ?>">
                </div>
            <?php endif; ?>
                <div class="posts-list__section">
                    <h3><?php echo esc_html( $post_title ); ?></h3>
                    <ul class="posts-list__post-data-list">
                    <?php if ( is_array( $categories ) && ! empty( $categories ) && ! is_wp_error( $categories ) ) : ?>
                        <li>
                            <i class="fa fa-sun-o" aria-hidden="true"></i> <?php echo esc_html( $categories[0]->name ); ?>
                        </li>
                    <?php endif; ?>
                        <li>
                            <i class="fa fa-pencil" aria-hidden="true"></i> <?php echo ucfirst( get_the_author() ); ?>
                        </li>
                    </ul>
                    <p class="posts-list__excerpt">
                        <?php echo get_the_excerpt(); ?>
                    </p>
                    <a href="<?php echo get_permalink(); ?>" class="posts-list__read-more">
                        Leer más
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </a>
                </div>
            </article>
        </li>
        <?php endwhile; 
        wp_reset_postdata();
        unset( $post_title );
        unset( $categories );
        unset( $post_featured_image_url );
        ?>
    </ul>
</div>
<?php endif;
    unset( $related_posts );
endif; 
unset( $categories );
?>