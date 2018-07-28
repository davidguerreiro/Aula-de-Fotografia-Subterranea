<?php
/**
 * Instagram sidebar widget
 * 
 * Displays instagram sidebar widget with text
 * and link to instagram account.
 */
class Aula_Instagram_Group extends WP_Widget {

    /**
     * Widget construct method
     * 
     * @return void
     */
    public function __construct() {
        $class_name     = 'instagram-sidebar-widget';
        $description    = 'Sidebar - Instagram';

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
        include( locate_template( 'modules/m032-sidebar-instagram-group.php' ) );
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