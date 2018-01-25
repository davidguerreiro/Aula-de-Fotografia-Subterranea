<?php
/**
 * All widgets code goes here
 * 
 * @package aula/inc/class
 */

/**
 * Author data widget
 * 
 * Displays author data on the sidebar. Can
 * be used to display any kind of text
 */
class Aula_Author_Data_Widget extends WP_Widget {

    /**
     * Widget construct method
     * 
     * @return void
     */
    public function __construct() {
        $class_name = 'author-data-widget';
        $description = 'Texto con Imagen y enlace';

        $widget_options = array(
            'classname' => $class_name,
            'description' => $description,
        );

        parent::__construct( $class_name, $description, $widget_options );
    }

    /**
     * Widget ouput method
     * 
     * @param Array ( required ) $args.
     * @param Array ( required ) $instance.
     * @return void
     */
    public function widget( $args, $instance ) {
        include( locate_template( 'modules/m008-sidebar-author-data.php' ) );
    }

    /**
     * Widget admin form
     * 
     * @param Array ( required ) $instance.
     * @return void
     */
    public function form( $instance ) {
        echo '<p>Utiliza los campos mostrados abajo para mostrar informacion en la pagina atraves de este widget : </p>';
    }
}

/**
 * Init all widgets.
 *
 * @return void
 */
function aula_init_widgets() {

    // module 08 author data.
    register_widget( 'Aula_Author_Data_Widget' );
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