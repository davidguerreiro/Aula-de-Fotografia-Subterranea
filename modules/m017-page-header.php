<?php

/**
 * Module 017 - Page Header
 * 
 * This module is re-used across several templates so the
 * way the title data is collected might be different.
 * 
 * @package aula/modules
 */

 $title         = '';
 $icon_class    = 'fa-file-text-o';

 if ( is_page() ) {
     // custom page.
     $title         = get_the_title( get_queried_object_id() );
     $icon_class    = aula_get_page_icon_class( strtolower( $title ) );
 } else if ( is_post_type_archive() ) {
     // Galerias CPT archive page.
     $title         = 'Fotografia';
     $icon_class    = aula_get_page_icon_class( 'galeria' );
 } else if ( is_category( 'actividades') ) {
    // Actividates category page.
    $title          = 'Actividades';
    $icon_class     = aula_get_page_icon_class( 'actividades' );
 } else if ( is_category( 'aula' ) ) {
     // Aula category page.
     $title         = 'Aula';
     $icon_class    = aula_get_page_icon_class( 'aula' );
 } else if( is_search() ) {
     // search page.
     $title      = 'Resultados de busqueda';
     $icon_class = aula_get_page_icon_class( 'search' );
 }

 ?>

<div class="module m17">
    <h2 class="m17__title">
        <i class="fa <?php echo $icon_class; ?>" aria-hidden="true"></i>
        <?php echo $title; ?>
    </h2>
</div>