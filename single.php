<?php

/**
 * Template to display single posts
 * 
 * @package aula
 */

get_header();

if ( have_posts() ) : ?>
<div class="content-section">

<?php while( have_posts() ) :
        the_post();
        $post_id = get_the_ID();

        // module 028.
        include( locate_template( 'modules/m028-notifications.php' ) );

        // post content
        get_template_part( 'template-parts/content', 'post' );

        // module 030.
        include( locate_template( 'modules/m030-add-comment.php' ) );

        // comments
        include( locate_template( 'comments.php' ) );
    endwhile;
?>

</div>

<?php

endif;

// include sidebar.
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