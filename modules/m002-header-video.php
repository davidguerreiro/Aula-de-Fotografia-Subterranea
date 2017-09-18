<?php

/**
 * Module 002 - Header Video
 * 
 * @package aula/modules
 */

 $video_url = wp_get_attachment_url( 22 );

 ?>
 <div class="module m2">
     <video class="m2__video" autoplay loop muted>
        <source src="<?php echo $video_url; ?>" type="video/ogg">
     </video>
 </div>