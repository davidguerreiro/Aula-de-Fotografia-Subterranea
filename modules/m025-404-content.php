<?php

/**
 * Module 025 - 404 content
 * 
 * @package aula/modules
 */

 ?>

 <div class="module m25">
    <p class="m25__content">
        Ya sea intencionadamente o sin querer, has ido a parar a una pagina
        que no existe. Prueba a volver a la pagina de inicio o usa el buscador
        abajo para intentar encontrar lo que sea que estas buscando.
    </p>
    <?php
        // module 026 - search form.
        include( locate_template( 'modules/m026-search-page-form.php' ) );
    ?>
 </div>