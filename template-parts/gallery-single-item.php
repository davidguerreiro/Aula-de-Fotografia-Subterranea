<?php
/**
 * Gallery single item
 * 
 * This is the single gallery template.
 * 
 * @package aula/template-parts
 */

 $post_date = date( 'd-m-Y' );

 ?>

 <article class="gallery-item">
     <div class="gallery-item__section">
        <h3 class="gallery-item__title">Galeria de prueba</h3>
        <ul class="gallery-item__data">
           <li class="gallery-item__data--element">
                <i class="fa fa-pencil" aria-hidden="true"></i>
                Angel
           </li>
           <li class="gallery-item__data--element">
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                <?php echo $post_date; ?>
           </li>
           <li class="gallery-item__data--element">
                <i class="fa fa-comment-o" aria-hidden="true"></i>
                5
           </li>
        </ul>
        <p class="gallery-item__description">
            Lorem ipsun sit amet, consectetur adipiscing elit. Fusce egestas posuere fringilla. Curabitur at ullamcorper metus.
        </p>
        <a href="#" class="gallery-item__view-link">
            View
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </a>
     </div>
     <div class="gallery-single-item__section gallery-single-item__section--image">
        <img src="http://lorempixel.com/500/300" alt="" class="gallery-item__image">
     </div>
 </article>