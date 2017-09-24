<?php

/**
 * Module 008 - Sidebar - Author Data
 * 
 * This module is only used on the sidebar
 * 
 * @package aula/modules
 */

 $admin_image = wp_get_attachment_url( 24 );

 ?>

 <div class="module m8">
     <img src="<?php echo $admin_image; ?>" alt="">
     <div class="m8_section">
         <h2>Angel Rodriguez Cascallana</h2>
         <p>
            Angel Avelino Rodríguez Cascallana es el fundador, director y principal administrador del Aula de Fotografía Subterranea. Con mas de 2 décadas de experiencia en el mundo de la fotografía subterranea, ha decidido fundar este espacio en internet para compartir todos sus conocimientos y dar consejos a todos aquellos interesados en el mundo de la espeleología y la fotografía.
         </p>
         <a href="#">
            Ver equipo 
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </a>
     </div>
 </div>