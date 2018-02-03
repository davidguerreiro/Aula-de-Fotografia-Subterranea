<?php

/**
 * Module 027 - Sidebar - Search form
 * 
 * @package aula/modules
 */

$logo_image_url = wp_get_attachment_url( 20 );
$site_title     = get_bloginfo( 'name' );

// menu args.
$args = array(
    'menu'              => 'main-menu',
    'container'         => 'nav',
    'container_class'   => 'main-menu',
);

?>

<div class="module m27">
    <a href="<?php echo home_url(); ?>" class="m27__title-link">
        <div class="m27__section m27__title-content">
            <img src="<?php echo $logo_image_url; ?>" alt="">
            <h1>
                <?php echo $site_title; ?>
            </h1>
        </div>
    </a>
    <div class="m27__section">
        <?php echo wp_nav_menu( $args ); ?>
        <span id="mobile-menu-icon" class="mobile-menu-icon-wrapper">
            <i class="fa fa-bars" aira-hidden="true"></i>
        </span>
    </div>
</div>
<?php
unset( $logo_image_url );
unset( $site_title );
unset( $args );
