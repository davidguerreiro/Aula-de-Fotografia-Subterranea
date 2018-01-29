<?php

/**
 * Template for displaying single comment item
 * 
 * @package aula/template-parts
 */

if ( isset( $comment ) && ! empty( $comment ) ) : ?>


<div class="comment">
    <h3>
        <i class="fa fa-user-circle-o comment__icon" aria-hidden="true"></i>
         <?php echo ucfirst( esc_html( $comment->comment_author ) ) ?> :
        <span class="comment__date">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
            <?php echo date( 'd F Y', strtotime( $comment->comment_date ) ); ?>
        </span>
    </h3>
    <p>
        <?php echo esc_html( $comment->comment_content ); ?>
    </p>
</div>
<?php endif; ?>