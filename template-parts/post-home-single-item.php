<?php
/**
 * Post homepage single item.
 * 
 * This is the single gallery template.
 * 
 * @package aula/template-parts
 */

 $post_id                   = get_the_ID();
 $permalink                 = get_permalink();
 $comments                  = get_approved_comments( $post_id );
 $featured_post_image_url   = get_the_post_thumbnail_url( $post_id );

 ?>

 <article class="gallery-item">
     <div class="gallery-item__section">
        <h3 class="gallery-item__title">
            <?php echo get_the_title(); ?>
        </h3>
        <ul class="gallery-item__data">
           <li class="gallery-item__data--element">
                <i class="fa fa-pencil" aria-hidden="true"></i>
                <?php echo get_the_author(); ?>
           </li>
           <li class="gallery-item__data--element">
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                <?php echo get_the_date(); ?>
           </li>
           <li class="gallery-item__data--element">
                <i class="fa fa-comment-o" aria-hidden="true"></i>
                <?php echo count( $comments ); ?>
           </li>
        </ul>
        <p class="gallery-item__description">
            <?php // echo get_the_excerpt(); ?>
        </p>
        <a href="<?php echo $permalink; ?>" class="gallery-item__view-link">
            Leer post
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </a>
     </div>
     <?php if ( ! empty( $featured_post_image_url ) ) : ?>
        <div class="gallery-item__section gallery-item__section--image">
            <a href="<?php echo $permalink; ?>">
                <img src="<?php echo $featured_post_image_url; ?>" alt="" class="gallery-item__image">
            </a>
        </div>
    <?php endif; ?>
 </article>