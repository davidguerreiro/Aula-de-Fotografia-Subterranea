<?php

/**
 * Module 021 - Search header
 * 
 * @package aula/modules
 */

 if ( isset( $_GET['s'] ) && $_GET['s'] !== '' && have_posts() ) :
    global $wp_query;
 ?>

 <div class="module m18 m21">
    <p>
        El termino <span class="search_term"> <?php echo $_GET['s']; ?> </span> aparece en
        <span class="search_term"> <?php echo $wp_query->found_posts; ?> </span> entradas en esta pagina.
    </p>
 </div>
 
<?php endif; ?>