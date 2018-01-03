<?php

/**
 * Module 021 - Search header
 * 
 * @package aula/modules
 */

 if ( isset( $_GET['s'] ) && $_GET['s'] !== '' ) : ?>

 <div class="module m18 m21">
    <p>
        El termino <span class="m21__term"> Test </span> aparece en
        <span class="m21__term"> 34 </span> entradas en esta pagina.
    </p>
 </div>
 
<?php endif; ?>