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

/**
 * PHP display all errors
 * 
 * @return void
 */
function aula_php_display_all_errors() {
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
}


/**
 * Create menu hooks.
 * 
 * @return void
 */
function aula_init_menus() {
	register_nav_menu('main-menu', __( 'Main Menu' ) );
}

add_action( 'init', 'aula_init_menus' );