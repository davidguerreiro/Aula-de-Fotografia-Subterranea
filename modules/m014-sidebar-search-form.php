<?php

/**
 * Module 014 - Sidebar - Search form
 * 
 * @package aula/modules
 */

 $nonce = wp_create_nonce( 'sidebar_search' );

 ?>

 <div class="module m14">
     <h2>Busqueda</h2>
     <form action="" method="get" class="m14__form">
         <input type="hidden" name="nonce" value="<?php echo $nonce; ?>">
         <div class="search-wrapper">
             <i class="" aria-hidden="true"></i>
             <input type="search" name="s" required>
             <button type="submit" class="btn-sidebar-submit">
                 <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
             </button>
         </div>
     </form>
     <p>
         No te hace falta entrar en una cueva para encontrar algo en esta
         pagina, al menos por ahora.
     </p>
 </div>