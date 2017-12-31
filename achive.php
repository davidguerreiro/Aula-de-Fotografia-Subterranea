<?php

/**
 * Template for archive page
 * 
 * Gallery CPT list items should be displayed here.
 * 
 * @package aula
 */

get_header();

 // module 017.
 include( locate_template( 'modules/m017-page-header.php' ) );

 ?>

 <div class="content-section">
 <?php
 
 // TODO: Display posts here.
 
 ?>
 </div>
<?php

 // display sidebar
 get_sidebar();

 ?>
<div class="bottom-modules-wrapper">
<?php

 // module 013.
 include( locate_template( 'modules/m013-newsletter-section.php' ) );

 ?>
</div>
<?php

 get_footer();