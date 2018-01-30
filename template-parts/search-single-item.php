<?php
/**
 * Search single item
 * 
 * This is the single post template displayed in search page
 * 
 * @package aula/template-parts
 */

 $post_type = get_post_type( get_the_ID() );
 $icon      = aula_get_page_icon_class( $post_type );

 ?>

 <article class="search-item">
    <a href="<?php the_permalink(); ?>" class="search-item__wrapper-link">
        <div class="search-item__section">
            <h3 class="search-item__title">
                <?php echo esc_html( get_the_title() ); ?>
            </h3>
            <ul class="search-item__data">
                <li class="search-item__data--element">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                    <?php echo esc_html( ucfirst( get_the_author() ) ); ?>
                </li>
                <li class="search-item__data--element">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <?php echo get_the_date(); ?>
                </li>
            </ul>
        </div>
        <div class="search-item__section search-item__section--icon">
            <i class="fa <?php echo $icon; ?>" aria-hidden="true"></i>
        </div>
    </a>
 </article>