<?php
/**
 * Post single item
 * 
 * This is the single post template.
 * 
 * @package aula/template-parts
 */

 $post_id               = get_the_ID();
 $comments              = get_approved_comments( $post_id );
 $featured_post_image   = get_the_post_thumbnail_url( $post_id, 'large' );
 $categories            = get_categories();
 
 $post_type = get_post_type( $post_id );
 $link_text = ( $post_type == 'galeria' ) ? 'Ver Galeria' : 'Leer mas';

 ?>
<!--
 <article class="post-item">
     <a href="#" class="post-item__image-link">
        <img src="http://lorempixel.com/500/300" alt="" class="post-item__featured-image">
    </a>
     <div>
        <a href="#" class="post-item__title-link">
            <h3 class="post-item__data--title">
                Adelante aunque solo tengas una camara.
            </h3>
        </a>
        <ul class="post-item__data">
            <li class="post-item__data--element">
                <i class="fa fa-pencil" aria-hidden="true"></i>
                Angel
            </li>
            <li class="post-item__data--element">
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                <?php echo $post_date; ?>
            </li>
            <li class="post-item__data--link-element">
                <a href="#" class="post-item__category-link">
                    <i class="fa fa-sun-o" aria-hidden="true"></i>
                    Actividades
                </a>
            </li>
            <li class="post-item__data--element">
                <i class="fa fa-comment-o" aria-hidden="true"></i>
                5
            </li>
        </ul>
     </div>
 </article>
-->

<article class="post-wrapper">
        <h2 class="post-wrapper__post-title">
            <?php echo get_the_title(); ?>
        </h2>
        <section class="post-wrapper__post-data">
            <ul>
                <li>
                    <i class="fa fa-clock-o icon" aria-hidden="true"></i>
                    <?php echo get_the_date(); ?>
                </li>
                <?php if ( ! empty( $categories ) && is_array( $categories ) && ! is_wp_error( $categories ) ) : 
                    $cat_icon = aula_get_page_icon_class( $categories[0]->slug ); ?>
                    <li>
                        <a href="<?php echo get_category_link( $categories[0]->term_id ); ?>">
                            <i class="fa <?php echo $cat_icon; ?> icon" aria-hidden="true"></i>
                            <?php echo $categories[0]->name; ?>
                        </a>
                    </li>
                <?php endif; ?>
                <li>
                    <i class="fa fa-comment-o icon" aria-hidden="true"></i> 5
                </li>
            </ul>
        </section>
        <?php if ( ! empty( $featured_post_image ) ) : ?>
            <img src="<?php echo $featured_post_image; ?>" alt="" class="post-wrapper__featured-image">
        <?php endif; ?>
        <section class="post-wrapper__post-content">
            <p>
                <?php echo get_the_excerpt(); ?>
            </p>
            <a href="<?php the_permalink(); ?>" class="post-wrapper__read-more">
                <?php echo $link_text; ?>
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>
        </section>
    </article>

    <!--
 <article class="post-item">
     <a href="#" class="post-item__image-link">
        <img src="http://lorempixel.com/500/300" alt="" class="post-item__featured-image">
    </a>
     <div>
        <a href="#" class="post-item__title-link">
            <h3 class="post-item__data--title">
                Adelante aunque solo tengas una camara.
            </h3>
        </a>
        <ul class="post-item__data">
            <li class="post-item__data--element">
                <i class="fa fa-pencil" aria-hidden="true"></i>
                Angel
            </li>
            <li class="post-item__data--element">
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                <?php // echo $post_date; ?>
            </li>
            <li class="post-item__data--link-element">
                <a href="#" class="post-item__category-link">
                    <i class="fa fa-sun-o" aria-hidden="true"></i>
                    Actividades
                </a>
            </li>
            <li class="post-item__data--element">
                <i class="fa fa-comment-o" aria-hidden="true"></i>
                5
            </li>
        </ul>
     </div>
 </article>
-->