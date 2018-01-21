<?php

/**
 * Module 002 - Header Video
 * 
 * @package aula/modules
 */

 $video_url = get_field( 'm02_video', 'option' );

 ?>
 <div class="module m2">
     <video class="m2__video" autoplay loop muted>
        <source src="<?php echo $video_url; ?>" type="video/ogg">
     </video>
 </div>