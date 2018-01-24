<?php

/**
 * Module 004 - Featured post
 * 
 * $home_posts query coming form parent template.
 * 
 * @package aula/modules
 */

 $display = true;

 if ( isset( $home_posts ) && isset( $home_posts_displayed ) && $home_posts->have_posts() ) : 
    while( $home_posts->have_posts() && $display ) : 
        $home_posts->the_post();
        $post_id            = get_the_ID();
        $post_type          = get_post_type( $post_id );
        $permalink          = get_the_permalink();
        $comments           = get_approved_comments($post_id);

        // category.
        if ( $post_type == 'post' ) {
            $post_type_label    = 'Articulo';
            $categories         = get_the_category();
        } else {
            $post_type_label = ucfirst( $post_type );
        }

        $featured_post_image_url = get_the_post_thumbnail_url( $post_id, 'large' );
        $style                   = ( ! empty( $featured_post_image_url ) ) ? "background-image : url('" . $featured_post_image_url . "');" : '';
    ?>

 <div class="module m4">
    <a href="<?php echo $permalink; ?>" class="wrapper-link">
        <header class="m4__header" style="<?php echo $style; ?>">
            <h2>
                <span>
                    <?php echo get_the_title(); ?>
                </span>
            </h2>
        </header>
    </a>
    <section class="m4__post-data">
        <div class="excerpt">
            <div class="excerpt-wrapper">
                <p>
                    <?php echo get_the_excerpt(); ?>
                </p>
            </div>
            <a href="<?php echo $permalink; ?>" class="read-link read-link--home read-link--featured-post">
                Leer post
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
        </div>
        <div class="post-info-wrapper">
            <ul>
                <li>
                    <a href="<?php echo get_post_type_archive_link( $post_type ); ?>">
                        <i class="fa fa-thumb-tack" aria-hidden="true"></i>
                        <?php echo $post_type_label; ?>
                    </a>
                </li>
                <?php if ( isset( $categories ) && ! empty( $categories ) && is_array( $categories ) ) : ?>
                <li>
                    <a href="<?php echo get_category_link( $categories[0]->term_id ); ?>">
                        <i class="fa fa-sun-o" aria-hidden="true"></i>
                        <?php echo $categories[0]->name; ?>
                    </a>
                </li>
                <?php endif; ?>
                <li>
                    <span>
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <?php echo get_the_date(); ?>
                    </span>
                </li>
                <li>
                    <a href="<?php echo $permalink; ?>">
                        <i class="fa fa-comment-o" aria-hidden="true"></i>
                        <?php echo count( $comments ); ?>
                    </a>
                </li>
            </ul>
        </div>
    </section>
 </div>
 <?php 
 $display                = false;
 $home_posts_displayed[] = $post_id;
 endwhile;
 unset( $post_id );
 unset( $featured_post_image_url );
 unset( $display );
 unset( $style );
 unset( $permalink );
 unset( $post_type );
 unset( $comments );

 if ( isset( $categories ) ) {
     unset( $categories );
 }
endif; 