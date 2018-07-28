<?php
/**
 * This module is used to display the cookies consent
 * message to new site users.
 * 
 * @package aula/template-parts
 */

 $cookie_message = get_field( 'aula_cookies_message', 'options' );

?>

<div class="cookie-box">
    <div class="cookie-box__section cookie-box__section--text">
    <?php if ( ! empty( $cookie_message ) ) : ?>
            <?php echo $cookie_message; ?>
    <?php endif; ?>
    </div>
    <div class="cookie-box__section cookie-box__section--links">
        <ul>
            <li>
                <a href="#" id="accept">Acepto</a>
            </li>
            <li>
                <a href="https://blogthinkbig.com/que-son-las-cookies" target="blank">Mas información</a>
            </li>
        </ul>
    </div>
</div>