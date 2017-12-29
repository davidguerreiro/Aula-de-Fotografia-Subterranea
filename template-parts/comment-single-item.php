<?php

/**
 * Template for displaying single comment item
 * 
 * @package aula/template-parts
 */

 ?>

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