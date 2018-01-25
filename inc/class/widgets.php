<?php
/**
 * All widgets code goes here
 * 
 * @package aula/inc/class
 */

// author aula widget.
require get_template_directory() . '/widgets/w-author-data.php';

// search sidebar form.
require get_template_directory() . '/widgets/w-search-sidebar.php';

// most comment posts.
require get_template_directory() . '/widgets/w-most-comment-posts.php';

// facebook group sidebar.
require get_template_directory() . '/widgets/w-facebook-sidebar.php';
/**
 * Init all widgets.
 *
 * @return void
 */
function aula_init_widgets() {

    // module 08 author data.
    register_widget( 'Aula_Author_Data_Widget' );

    // module 14 search form.
    register_widget( 'Aula_Search_Widget' );

    // module 09 most popular posts.
    register_widget( 'Aula_Most_Comment_Posts_Widget' );

    // module 12 facebook sidebar.
    register_widget( 'Aula_Facebook_Group' );
}

add_action( 'widgets_init', 'aula_init_widgets' );

/**
 * Register sidebar area in our theme
 * 
 * @return void
 */
function aula_register_sidebar() {
    register_sidebar( 
        array(
            'id'          => 'main-sidebar',
            'name'        => __( 'Barra Leteral', $text_domain ),
            'description' => __( 'Esta es la barra lateral de widgets principal', $text_domain ),
        ) 
    );
}

add_action( 'widgets_init', 'aula_register_sidebar' );