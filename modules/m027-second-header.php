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
        <!--
        <nav class="main-menu">
            <ul>
                <li>
                    <a href="#">Fotografia</a>
                </li>
                <li>
                    <a href="#">Aula</a>
                </li>
                <li>
                    <a href="#">Actividades</a>
                </li>
                <li>
                    <a href="#">Equipo</a>
                </li>
                <li>
                    <a href="#">Contacto</a>
                </li>
            </ul>
        </nav>
        -->
    </div>
</div>
