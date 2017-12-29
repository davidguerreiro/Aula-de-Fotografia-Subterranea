<?php

/**
 * Module 016 - Comments
 * 
 * Single comment located in template-parts/comment-single-item.php
 * 
 * @package aula/modules
 */

 $date = date( 'd-m-Y' );

 ?>

 <div class="module m15 m16">
    <h2 class="m15__title">
        <i class="fa fa-comment-o icon" aria-hidden="true"></i>
        Comentarios
    </h2>

    <div class="comment">
        <h3>
            <i class="fa fa-user-circle-o comment__icon" aria-hidden="true"></i>
            Martin :
            <span class="comment__date">
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                <?php echo $date; ?>
            </span>
        </h3>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas posuere fringilla. Curabitur at ullamcorper metus. Quisque eleifend purus eu justo egestas, at feugiat velit fermentum. Etiam eget consectetur purus.
        </p>
    </div>

    <div class="comment">
        <h3>
            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
            Alejandro :
            <span class="comment__date">
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                <?php echo $date; ?>
            </span>
        </h3>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas posuere fringilla. Curabitur at ullamcorper metus. Quisque eleifend purus eu justo egestas, at feugiat velit fermentum. Etiam eget consectetur purus.
        </p>
    </div>
 </div>