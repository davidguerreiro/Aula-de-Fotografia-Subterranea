<?php

/**
 * Module 013 - Newsletter section
 * 
 * @package aula/modules
 */

 $title         = get_field( 'm13_title', 'option' );
 $text          = get_field( 'm13_text', 'option' );
 $action_url    = add_query_arg( 'na', 's', get_home_url() . '/' );

 ?>

 <div class="module m13">
    <div class="m13__section m13__section--text">
        <?php if ( ! empty( $title ) ) : ?>
            <h3>
                <?php echo esc_html( $title ); ?>
            </h3>
        <?php endif; 
        
        if ( ! empty( $text ) ) : ?>
            <p>
                <?php echo esc_html( $text ); ?>
            </p>
        <?php endif; ?>
    </div>
    <div class="m13__section m13__section--form">
        <form method="post" action="<?php echo $action_url; ?>" class="newsletter" onsubmit="return newsletter_check(this)">
            <input class="newsletter__text-input" type="email" name="ne" required="" placeholder="Email">
            <input type="submit" value="Subscribirse" class="newsletter__submit-input">
        </form>
    </div>
 </div>