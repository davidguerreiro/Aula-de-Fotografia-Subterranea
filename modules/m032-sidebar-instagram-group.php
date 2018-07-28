<?php

/**
 * Module 032 - Sidebar - Instagram
 * 
 * This module is only used on the sidebar
 * 
 * @package aula/modules
 */

if ( isset( $args ) ) :
 $key           = 'widget_' . $args['widget_id'];
 $text          = get_field( 'sidebar_instagram_text', $key );
 $external_link = get_field( 'sidebar_instagram_link', $key );

 if ( ! empty( $external_link ) ) : ?>

<div class="module m32">
    <a href="<?php echo esc_url( $external_link ); ?>" class="m32__icon-link" target="_blank" title="Ir a Instagram">
        <i class="fa fa-instagram m32__main-icon" aria-hidden="true"></i>
        <?php if ( ! empty( $text ) ) : ?>
            <p class="m32__text">
                <?php echo esc_html( $text ); ?>
            </p>
        <?php endif; ?>
    </a>
</div>
<?php endif;
endif; ?>