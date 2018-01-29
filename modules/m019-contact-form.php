<?php

/**
 * Module 019 - Contact form
 * 
 * @package aula/modules
 */
 
 $page_id   = get_queried_object_id();
 $nonce     = wp_create_nonce( 'contact-form' );

 ?>

 <div class="module m19">
    <form action="" method="post" class="contact-form">
        <input type="hidden" name="nonce" id="nonce" value="<?php echo $nonce; ?>">
        <input type="hidden" name="action" value="contact-form">
        <input type="hidden" name="page-id" value="<?php echo $page_id; ?>">
        <input type="text" name="name" class="contact-form__text-input"
        placeholder="Nombre" required>
        <input type="email" name="email" class="contact-form__text-input"
        placeholder="Email ( privado )">
        <textarea name="message" rows="1" placeholder="Mensaje" class="contact-form__textarea" required></textarea>
        <input type="submit" value="Enviar" class="contact-form__submit-input">
    </form>
 </div>