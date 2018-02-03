<?php

/**
 * Module 028 - Mobile form
 * 
 * @package aula/modules
 */

 // mobile menu args.
 $args = array(
     'menu'             => 'main-menu',
     'container'        => 'nav',
     'container_class'  => 'mobile-menu',
 );

?>

<div class="module m28">
    <?php echo wp_nav_menu( $args ); ?>
</div>
<?php
unset( $args );