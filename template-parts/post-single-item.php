<?php
/**
 * Post single item
 * 
 * This is the single post template.
 * 
 * @package aula/template-parts
 */

 $post_date = date( 'd-m-Y' );

 ?>

 <article class="post-item">
     <a href="#" class="post-item__image-link">
        <img src="http://lorempixel.com/500/300" alt="" class="post-item__featured-image">
    </a>
     <div>
        <a href="#" class="post-item__title-link">
            <h3 class="post-item__data--title">
                Adelante aunque solo tengas una camara.
            </h3>
        </a>
        <ul class="post-item__data">
            <li class="post-item__data--element">
                <i class="fa fa-pencil" aria-hidden="true"></i>
                Angel
            </li>
            <li class="post-item__data--element">
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                <?php echo $post_date; ?>
            </li>
            <li class="post-item__data--link-element">
                <a href="#" class="post-item__category-link">
                    <i class="fa fa-sun-o" aria-hidden="true"></i>
                    Actividades
                </a>
            </li>
            <li class="post-item__data--element">
                <i class="fa fa-comment-o" aria-hidden="true"></i>
                5
            </li>
        </ul>
     </div>
 </article>