<?php

/**
 * Module 019 - Contact form
 * 
 * @package aula/modules
 */

 $nonce = wp_create_nonce( 'contact-form' );

 ?>

 <div class="module m19">
    <form action="#" method="post" class="contact-form">
        <input type="hidden" name="nonce" id="nonce" value="<?php echo $nonce; ?>">
        <input type="text" name="name" class="contact-form__text-input"
        placeholder="Nombre" required>
        <input type="email" name="email" class="contact-form__text-input"
        placeholder="Email ( privado )" required>
        <textarea name="message" rows="1" placeholder="Mensaje" class="contact-form__textarea" required></textarea>
        <input type="submit" value="Enviar" class="contact-form__submit-input">
    </form>
 </div>