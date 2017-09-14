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
        'public' 				=> true,
				'label'  				=> 'Galerias',
				'menu_icon' 		=> 'dashicons-format-gallery',
				'menu_position' => 5,
    );
		register_post_type( 'galleria', $args );
		
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