<?php
/**
 * Sidebar search form widget
 * 
 * Search form on the sidebar
 */
class Aula_Search_Widget extends WP_Widget {
    
        /**
         * Widget construct method
         * 
         * @return void
         */
        public function __construct() {
            $class_name = 'search-form-widget';
            $description = 'Muestra el formulario de busqueda en la barra lateral. Puedes modificar el titulo y el texto';
    
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
            include( locate_template( 'modules/m014-sidebar-search-form.php' ) );
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