<?php

/**
 * Module 029 - Add comment form modules
 * 
 * @package aula/modules
 */

if ( ! isset( $post_id ) ) {
    $post_id = get_the_ID();
}

$nonce                  = wp_create_nonce( 'comment-form' );
$privacy_policy_page    = get_field( 'aula_privacy_policy_page', 'option' );

?>

<div class="module">
    <div class="comment-form">
        <h2 class="comment-form__title">
            <i class="fa fa-commenting-o icon" aria-hidden="true"></i>
            Déjanos un comentario
        </h2>
        <form action="" method="post" class="form" id="post-comment-form">
            <input type="hidden" name="nonce" id="nonce" value="<?php echo $nonce; ?>">
            <input type="hidden" name="action" value="comment-form">
            <input type="hidden" name="post-id" value="<?php echo $post_id; ?>">
            <div class="form__section">
                <label for="name" class="form__basic-label"> - Nombre :</label>
                <input type="text" name="name" class="form__basic-text" id="name" required>
            </div>
            <div class="form__section">
                <label for="comment"class="form__basic-label"> - Comentario :</label>
                <textarea name="message" id="comment" class="form__content" rows="1" placeholder="Escribe aqui el contenido de tu mensaje" required></textarea>
            </div>
            <div class="form__section">
                <input type="checkbox" value="true" name="terms_and_conditions" id="terms_and_conditions" class="form__basic-checkbox" required>
                <label for="terms_and_conditions" class="form__privacy-text">
                    Acepto que mis datos sean almacenados en este sitio de forma privada y acepto haber leido
                    los <a href="<?php echo esc_url( $privacy_policy_page ); ?>">Términos y condiciones</a> de uso de este sitio web.
                </label>
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
