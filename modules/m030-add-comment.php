<?php

/**
 * Module 029 - Add comment form modules
 * 
 * @package aula/modules
 */

if ( ! isset( $post_id ) ) {
    $post_id = get_the_ID();
}

$nonce = wp_create_nonce( 'comment-form' );

?>

<div class="module">
    <div class="comment-form">
        <h2 class="comment-form__title">
            Déjanos un comentario
        </h2>
        <form action="" method="post" class="form">
            <input type="hidden" name="nonce" id="nonce" value="<?php echo $nonce; ?>">
            <input type="hidden" name="action" value="comment-form">
            <input type="hidden" name="post-id" value="<?php echo $post_id; ?>">
            <div class="form__section">
                <label for="name">Nombre</label>
                <input type="text" name="name" class="form__basic-text" id="name" required>
            </div>
            <div class="form__section">
                <label for="comment">Comentario</label>
                <textarea name="message" id="comment" class="form__content" rows="1" placeholder="Escribe aqui el contenido de tu mensaje" required></textarea>
            </div>
            <div class="form__section">
                <div class="g-recaptcha form__antispam" data-sitekey="6LfUxQcUAAAAALjbqmc1Km4DM5tUpfd9eniyESR7"></div>
            </div>
            <div class="form__section">
                <input type="submit" value="Publicar Comentario" class="form__btn">
            </div>
        </form>
    </div>
</div>
