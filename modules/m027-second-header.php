<?php

/**
 * Module 027 - Sidebar - Search form
 * 
 * @package aula/modules
 */

$logo_image_url = wp_get_attachment_url( 20 );
$site_title     = get_bloginfo( 'name' );

?>

<div class="module m27">
    <div class="m27__section m27__title-content">
        <img src="<?php echo $logo_image_url; ?>" alt="">
        <h1>
            <?php echo $site_title; ?>
        </h1>
    </div>
    <div class="m27__section">
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
    </div>
</div>
