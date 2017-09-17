<?php

/**
 * Template to display single posts
 * 
 * @package aula
 */

get_header();

?>

<div class="content-section">

<?php

/**
 * TODO: Display post title, date, etc
 */

 // module 018.
 include( locate_template( 'modules/m018-intro-text.php' ) );

 // module 015.
 include( locate_template( 'modules/m015-add-comment.php' ) );

 // comments
 include( locate_template( 'comments.php' ) );

 // include sidebar.
 get_sidebar();

?>

</div>

<?php

// module 013.
include( locate_template( 'modules/m013-newsletter.php' ) );

get_footer();