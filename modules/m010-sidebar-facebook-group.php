<?php

/**
 * Module 010 - Sidebar - Facebook Group
 * 
 * This module is only used on the sidebar
 * 
 * @package aula/modules
 */

if ( isset( $args ) ) :
    $key                = 'widget_' . $args['widget_id'];
    $text_1             = get_field( 'm12_text_1', $key );
    $text_2             = get_field( 'm12_text_2', $key );
    $text_3             = get_field( 'm12_text_3', $key );
    $external_link      = get_field( 'm12_external_link', $key );
    $external_link_text = get_field( 'm12_external_link_text', $key );


 ?>

 <div class="module m10">
    <?php if ( ! empty( $external_link ) ) : ?>
        <a href="<?php echo esc_url( $external_link ); ?>" target="_blank" class="m10__face-icon-link">
            <i class="fa fa-facebook m10__main-icon" aria-hidden="true"></i>
        </a>
        <?php if ( ! empty( $text_1 ) ) : ?>
            <p>
                <?php echo esc_html( $text_1 ); ?>
            </p>
        <?php endif; 
        
        if ( ! empty( $text_2 ) ) : ?>
            <p>
                <?php echo esc_html( $text_2 ); ?>
            </p>
        <?php endif; 
        
        if ( ! empty( $text_3 ) ) : ?>
            <p class="m10__small-text">
                <?php echo esc_html( $text_3 ); ?>
            </p>
        <?php endif; ?>
        <a href="<?php echo esc_url( $external_link ); ?>" target="_blank" class="m10__face-link">
            <?php if ( ! empty( $external_link_text ) ) {
                echo esc_html( $external_link_text );
            } ?>
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </a>
    <?php
    unset( $key );
    unset( $text_1 );
    unset( $text_2 );
    unset( $text_3 );
    unset( $external_link );
    unset( $external_link_text );
endif; ?>
 </div>
<?php endif;
unset( $args );
?>