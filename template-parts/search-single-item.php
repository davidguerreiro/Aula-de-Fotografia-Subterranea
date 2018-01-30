<?php
/**
 * Search single item
 * 
 * This is the single post template displayed in search page
 * 
 * @package aula/template-parts
 */

 $post_date = date( 'd-m-Y' );
 $post_id = get_the_ID();

 ?>

 <article class="search-item">
    <a href="#" class="search-item__wrapper-link">
        <div class="search-item__section">
            <h3 class="search-item__title">
                Adelante aunque tengas solo una camara.
            </h3>
            <ul class="search-item__data">
                <li class="search-item__data--element">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                    Angel
                </li>
                <li class="search-item__data--element">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <?php echo $post_date; ?>
                </li>
            </ul>
        </div>
        <div class="search-item__section search-item__section--icon">
            <i class="fa fa-thumb-tack" aria-hidden="true"></i>
        </div>
    </a>
 </article>