<?php

/**
 * Module 021 - Search header
 * 
 * @package aula/modules
 */

 if ( isset( $_GET['s'] ) && $_GET['s'] !== '' && have_posts() ) : ?>

 <div class="module m18 m21">
    <p>
        El termino <span class="search_term"> Test </span> aparece en
        <span class="search_term"> 34 </span> entradas en esta pagina.
    </p>
 </div>
 
<?php endif; ?>