<?php

/**
 * Template for pagination
 * 
 * @package aula/template-parts
 */

global $wp_query, $wp;
$total_pages = $wp_query->max_num_pages;

if ( $total_pages > 1  ) {
    $current_page = max( 1, get_query_var( 'paged' ) );

    // current category / taxonomy / archive url for first link.
    //$first_page = home_url( add_query_arg( array(),$wp->request ) );
    $first_page = get_pagenum_link( 1 );

    // last page link.
    if ( $current_page > 1 ) {
        $last_page = str_replace( strval( $current_page), strval( $total_pages), $first_page );
    } else  {
        $last_page = $first_page . 'page/' . $total_pages;
    }


        $args = [
            'base' 			=> get_pagenum_link( 1 ) . '%_%',
            'format' 		=> 'page/%#%',
            'current' 	=> $current_page,
            'total' 		=> $total_pages,
            'prev_text' => 'ANTERIOR',
            'next_text' => 'SIGUIENTE',
        ];

        echo "<nav class='main-pagination'>";

        // display first link - not done automatically by the function.
        if ( $current_page > 1 ) :
            echo "<a href='" . esc_url( $first_page ) . "' class='prev page-numbers first'>PRIMERO</a>";
        endif;

        echo paginate_links( $args );

        // display last link  - not done automatically by the function.
        if ( $current_page < $total_pages ) :
            echo "<a href='" . esc_url( $last_page ) . "' class='next page-numbers last'>ÚLTIMO</a>";
        endif;
        echo '</nav>';
}