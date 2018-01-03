<?php

/**
 * Template to display search results
 * 
 * @package aula
 */

 

 get_header();

 // module 017.
 include( locate_template( 'm017-page-header.php' ) );

 ?>

 <div class="content-section">
 
 <?php

 // module 021.
 include( locate_template( 'modules/m021-search-header.php' ) );

 // module 022.
 include( locate_template( 'modules/m22-search-results.php' ) );

 ?>
 </div>

 <?php

 // get sidebar
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