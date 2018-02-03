<?php
/**
 * Gallery single item
 * 
 * This is the single gallery template.
 * 
 * @package aula/template-parts
 */

 $post_id               = get_the_ID();
 $permalink             = get_permalink();
 $featured_post_image   = get_the_post_thumbnail_url( $post_id, 'medium' );
 $comments              = get_approved_comments( $post_id );

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
        <?php if ( ! empty( $featured_post_image ) ) : ?>
            <div class="gallery-item__section gallery-item__section--image">
                <a href="<?php echo $permalink; ?>">
                    <img src="<?php echo $featured_post_image; ?>" alt="" class="gallery-item__image">
                </a>
            </div>
        <?php endif; ?>
        <p class="gallery-item__description">
        </p>
        <a href="<?php echo $permalink; ?>" class="gallery-item__view-link">
            Ver Galeria
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </a>
     </div>
 </article>