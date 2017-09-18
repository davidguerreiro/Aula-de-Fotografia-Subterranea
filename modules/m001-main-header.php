<?php

/**
 * Module 001 - Main header
 * 
 * @package auala/modules
 */

 $logo_image_url = wp_get_attachment_url( 20 );
 $site_title     = get_bloginfo( 'name' ); 

 ?>

<div class="m1">
    <img src="<?php echo esc_url( $logo_image_url ); ?>" class="m11__site-logo" alt="site-logo">
    <h1 class="m1__site-title">
        <?php echo esc_html( $site_title ); ?>
    </h1>
</div>