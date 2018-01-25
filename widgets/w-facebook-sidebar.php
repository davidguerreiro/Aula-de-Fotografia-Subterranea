<?php
/**
 * Facebook sidebar widget
 * 
 * Displays facebook sidebar widget with text
 * and link to facebook group.
 */
class Aula_Facebook_Group extends WP_Widget {

    /**
     * Widget construct method
     * 
     * @return void
     */
    public function __construct() {
        $class_name     = 'facebook-sidebar-widget';
        $description    = 'Grupo de Facebook';

        $widget_options = array(
            'classname'     => $class_name,
            'description'   => $description,
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
        include( locate_template( 'modules/m010-sidebar-facebook-group.php' ) );
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