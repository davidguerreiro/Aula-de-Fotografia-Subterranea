<?php

/**
 * Template to display default page templates
 * 
 * @package aula
 */

get_header();

// module 017.
include( locate_template( 'modules/m017-page-header.php' ) );

?>

<div class="content-section">

<?php

 // module 018.
 include( locate_template( 'modules/m018-intro-text.php' ) );

 // get sidebar.
 get_sidebar();

?>

</div>

<?php

// module 012.
include( locate_template( 'modules/m012-facebook-group-text.php' ) );

// module 013.
include( locate_template( 'modules/m013-newsletter-section.php' ) );

get_footer();