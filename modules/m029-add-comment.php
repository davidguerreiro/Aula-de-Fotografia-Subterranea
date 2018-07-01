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

<div class="module m29">
    <h2 class="m29__title">
        <i class="fa fa-commenting-o icon" aria-hidden="true"></i>
        Comentar esta entrada
    </h2>
    <form action="" method="post" class="basic-comment">
        <input type="hidden" name="nonce" id="nonce" value="<?php echo $nonce; ?>">
        <input type="hidden" name="action" value="comment-form">
        <input type="hidden" name="post-id" value="<?php echo $post_id; ?>">
        <div class="basic-comment__section">
            <label for="name" class="basic-comment__field-name">Nombre : </label>
            <input type="text" name="name" placeholder="Nombre" class="basic-comment__basic-text" id="name" required>
        </div>
        <div class="basic-comment__section">
            <label for="comment" class="basic-comment__field-name basic-comment__field-name--comment-field">Comentario : </label>
            <textarea name="message" id="comment" class="basic-comment__comment-field" placeholder="Mensaje" rows="1" required></textarea>
        </div>
        <div class="basic-comment__section">
        <label for="comment" class="basic-comment__field-name basic-comment__field-name--comment-field">Antispam : </label>
            <div class="g-recaptcha basic-comment__recaptcha" data-sitekey="6LfUxQcUAAAAALjbqmc1Km4DM5tUpfd9eniyESR7"></div>	
        </div>
        <div class="basci-comment__section">
            <input type="submit" value="Comentar" class="basic-comment__submit">
        </div>
    </form>
</div>