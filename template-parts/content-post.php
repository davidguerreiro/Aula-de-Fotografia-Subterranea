<?php
/**
 * Content post template
 * 
 * @package aula/template-parts
 */

$post_id             = get_the_ID();
$categories          = get_the_category();
$post_featured_image = get_the_post_thumbnail_url( $post_id, 'large' );
$comments            = get_approved_comments( $post_id );


?>
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
                <?php if ( ! empty( $categories ) && is_array( $categories ) ) : ?>
                <li>
                    <a href="<?php echo get_category_link( $categories[0]->term_id ); ?>">
                        <i class="fa <?php echo aula_get_page_icon_class( $categories[0]->slug ); ?> icon" aria-hidden="true"></i>
                        <?php echo $categories[0]->name; ?>
                    </a>
                </li>
                <?php endif; ?>
                <li>
                    <i class="fa fa-comment-o icon" aria-hidden="true"></i>
                    <?php echo count( $comments ); ?>
                </li>
            </ul>
        </section>
        <?php if ( ! empty( $post_featured_image ) ) : ?>
            <img src="<?php echo $post_featured_image; ?>" class="post-wrapper__featured-image" alt="">
        <?php endif; ?>
        <section class="post-wrapper__post-content">
            <?php the_content(); ?>
        </section>
    </article>