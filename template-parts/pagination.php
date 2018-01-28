<?php

/**
 * Template for pagination
 * 
 * @package aula/template-parts
 */
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
global $wp_query;


 $next_page_link        = get_next_posts_page_link( $wp_query->max_num_pages );
 $previous_page_link    = get_previous_posts_page_link();

// check if there are previous posts.
if ( $wp_query->max_num_pages > 1 && $paged > 1 ) {
    $previous_page_link_class = 'pagination__link previous';
} else {
    $previous_page_link_class = 'pagination__link previous link-disabled';
}

// check if there are more posts.
if ( $wp_query->max_num_pages > 1 && $paged < $wp_query->max_num_pages ){
    $next_page_link_class = 'pagination__link next';
} else {
    $next_page_link_class = 'pagination__link next link-disabled';
}


if ( $wp_query->max_num_pages > 1 ) : ?>

<div class="pagination">
    <div class="pagination__link-wrapper">
        <a href="<?php echo $previous_page_link; ?>" class="<?php echo $previous_page_link_class; ?>">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
            Anterior
        </a>
    </div>
    <div class="pagination__link-wrapper">
        <a href="<?php echo $next_page_link; ?>" class="<?php echo $next_page_link_class; ?>">
            Siguiente
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </a>
    </div>
</div>
<?php endif; ?>