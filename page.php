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

// display content page.
while( have_posts() ) {
    the_post();
    get_template_part( 'template-parts/content', 'page' );
}

?>

</div>

<?php

// get sidebar.
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