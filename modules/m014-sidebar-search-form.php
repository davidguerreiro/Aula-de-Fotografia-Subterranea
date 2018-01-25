<?php

/**
 * Module 014 - Sidebar - Search form
 * 
 * @package aula/modules
 */

 if ( isset( $args  ) ) :
    $key        = 'widget_' . $args['widget_id'];
    $title      = get_field( 'm14_title', $key );
    $text       = get_field( 'm14_text', $key );
    $nonce      = wp_create_nonce( 'sidebar_search' );


 ?>

 <div class="module m14">
    <?php if ( ! empty( $title ) ) : ?>
        <h2>
            <?php echo esc_html( $title ); ?>
        </h2>
    <?php endif; ?>
     <!--
     <form action="" method="get" class="m14__form">
         <input type="hidden" name="nonce" value="<?php // echo $nonce; ?>">
         <div class="search-wrapper">
             <input type="search" name="s" required>
             <button type="submit" class="btn-sidebar-submit">
                 <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
             </button>
         </div>
     </form>
-->
    <?php
        // module 26.
        $is_sidebar = true;
        include( locate_template( 'modules/m026-search-page-form.php' ) );
        unset( $is_sidebar );

        if ( ! empty( $text ) ) :
    ?>
     <p>
         <?php echo esc_html( $text ); ?>
     </p>
        <?php endif; ?>
 </div>
 <?php 
unset( $key );
unset( $title );
unset( $text );
unset( $nonce );  
endif; 
 if ( isset( $args ) ) {
     unset( $args );
 }

 ?>