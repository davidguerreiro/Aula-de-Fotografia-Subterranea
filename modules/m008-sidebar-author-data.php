<?php

/**
 * Module 008 - Sidebar - Author Data
 * 
 * This module is only used on the sidebar
 * 
 * This template is loaded by widget so $args
 * variable comes from WP_Widgets::widget method.
 * 
 * @package aula/modules
 */

if ( isset( $args ) ) :
 $key       = 'widget_' . $args['widget_id'];
 $title     = get_field( 'm8_title', $key );
 $image     = get_field( 'm8_image', $key );
 $content   = get_field( 'm8_text', $key );
 $link      = get_field( 'm8_link', $key );
 $link_text = get_field( 'm8_link_text', $key );

 ?>

 <div class="module m8">
    <?php if ( ! empty( $image ) && is_array( $image ) ) : ?>
         <img src="<?php echo $image['sizes']['large']; ?>" alt="">
    <?php endif; ?>
     <div class="m8__section">
         <?php if ( ! empty( $title ) ) : ?>
            <h2>
                <?php echo esc_html( $title ); ?>
            </h2>
        <?php endif; 
        if ( ! empty( $content ) ) : ?>
            <p>
                <?php echo esc_html( $content ); ?>
            </p>
        <?php endif;
        if ( ! empty( $link ) && ! empty( $link_text ) ) : ?>
            <a href="<?php echo esc_url( $link ); ?>">
                <?php echo esc_html( $link_text ); ?> 
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
        <?php endif; ?>
     </div>
 </div>

<?php 
unset( $key );
unset( $title );
unset( $image );
unset( $content );
unset( $link );
unset( $link_text );
endif; ?>