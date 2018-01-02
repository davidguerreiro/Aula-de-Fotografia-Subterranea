<?php

// custom posts types

/**
 * Register CPT
 *
 * @return void
 */
function aula_register_cpt() {

	// galerias
    $args = array(
				'public' 		=> true,
				'has_archive' 	=> true,
				'label'  		=> 'Galerias',
				'menu_icon' 	=> 'dashicons-format-gallery',
				'menu_position' => 5,
    );
	register_post_type( 'galeria', $args );
		
	// equipo
	$args = array(
      	'public' 				=> true,
		'label'  				=> 'Equipo',
		'menu_icon' 		=> 'dashicons-id-alt',
		'menu_position' => 5,
    );
	register_post_type( 'equipo', $args );
}

add_action( 'init', 'aula_register_cpt' );

/**
 * Icons - coming from font awesome
 * 
 * TODO: Add real icon classes.
 * 
 * @param String ( required ) $key
 * @return String icon_class
 */
function aula_get_icon( $key ) {
	$icons = array(
		'galleria' 		=> 'fa-graduation-cap',
		'aula' 			=> 'fa-graduation-cap',
		'actividades' 	=> 'fa-graduation-cap',
	);

	return $icons[ $key ];
}