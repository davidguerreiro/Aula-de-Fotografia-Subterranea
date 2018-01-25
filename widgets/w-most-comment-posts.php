<?php
/**
 * Most Comment posts
 * 
 * Displays most comment posts.
 */
class Aula_Most_Comment_Posts_Widget extends WP_Widget {
    
        /**
         * Widget construct method
         * 
         * @return void
         */
        public function __construct() {
            $class_name     = 'most-comment-posts-widget';
            $description    = 'Posts mas comentados';
    
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
            include( locate_template( 'modules/m009-sidebar-most-popular-posts.php' ) );
        }
    
        /**
         * Widget admin form
         * 
         * @param Array ( required ) $instance.
         * @return void
         */
        public function form( $instance ) {
            echo '<p>Este Widget no es editable.</p>';
        }
}