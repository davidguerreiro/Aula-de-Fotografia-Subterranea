<?php

/**
 * Template to display search results
 * 
 * @package aula
 */

 if ( ! isset( $_GET['s'] ) || $_GET['s'] == '' ) {
     wp_safe_redirect( get_home_url() );
     exit;
 }

 get_header();

 // module 017.
 include( locate_template( 'modules/m017-page-header.php' ) );

 ?>

 <div class="content-section">
 
 <?php

 // module 021.
 include( locate_template( 'modules/m021-search-header.php' ) );

 // module 022.
 include( locate_template( 'modules/m022-search-results.php' ) );

 ?>
 </div>

 <?php

 // get sidebar.
 get_sidebar();

 ?>

<div class="bottom-modules-wrapper">

 <?php

 // pagination.
 include( locate_template( 'template-parts/pagination.php' ) );

 // module 013.
 include( locate_template( 'modules/m013-newsletter-section.php' ) );

 ?>

</div>

<?php

 get_footer();