<?php
/**
 * History widget.$_FILES
 * 
 * Displays a posts history widget on the sidebar.
 */
class Aula_History extends WP_Widget {

    /**
     * Widget construct method
     * 
     * @return void
     */
    public function __construct() {
        $class_name     = 'history-sidebar-widget';
        $description    = 'Historial';

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
        include( locate_template( 'modules/m011-sidebar-history.php' ) );
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