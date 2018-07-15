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
            <input type="hidden" name="action" id="action" value="comment-form">
            <input type="hidden" name="post-id" value="<?php echo $post_id; ?>">
            <div class="form__section">
                <label for="name" class="form__basic-label"> - Nombre :</label>
                <input type="text" name="name" class="form__basic-text" id="name" required>
                <p class="form__error-message name-error-message">* Este campo es obligatorio</p>
            </div>
            <div class="form__section">
                <label for="comment"class="form__basic-label"> - Comentario :</label>
                <textarea name="message" id="comment" class="form__content" rows="1" placeholder="Escribe aquí el contenido de tu mensaje" required></textarea>
                <p class="form__error-message comment-error-message">* Este campo es obligatorio</p>
            </div>
            <div class="form__section">
                <input type="checkbox" value="true" name="terms_and_conditions" id="terms_and_conditions" class="form__basic-checkbox" required>
                <label for="terms_and_conditions" class="form__privacy-text">
                    Acepto que mis datos sean almacenados en este sitio de forma privada y acepto haber leido
                    los <a href="<?php echo esc_url( $privacy_policy_page ); ?>">Términos y condiciones</a> de uso de este sitio web.
                </label>
                <p class="form__error-message terms-and-conditions-error-message">* Es obligatorio aceptar los Términos y Condiciones para publicar un comentario.</p>
            </div>
            <div class="form__section">
                <div class="g-recaptcha form__antispam" data-sitekey="6LfUxQcUAAAAALjbqmc1Km4DM5tUpfd9eniyESR7"></div>
                <p class="form__error-message google-antispam-error-message">* Este campo es obligatorio.</p>                
            </div>
            <div class="form__section">
                <input type="submit" value="Publicar Comentario" class="form__btn">
                <div class="form__loader-wrapper">
                    <svg width="120" height="30" viewBox="0 0 120 30" xmlns="http://www.w3.org/2000/svg" fill="#515CAF" id="loader" class="form__loader">
                        <circle cx="15" cy="15" r="15">
                            <animate attributeName="r" from="15" to="15"
                                    begin="0s" dur="0.8s"
                                    values="15;9;15" calcMode="linear"
                                    repeatCount="indefinite" />
                            <animate attributeName="fill-opacity" from="1" to="1"
                                    begin="0s" dur="0.8s"
                                    values="1;.5;1" calcMode="linear"
                                    repeatCount="indefinite" />
                        </circle>
                        <circle cx="60" cy="15" r="9" fill-opacity="0.3">
                            <animate attributeName="r" from="9" to="9"
                                    begin="0s" dur="0.8s"
                                    values="9;15;9" calcMode="linear"
                                    repeatCount="indefinite" />
                            <animate attributeName="fill-opacity" from="0.5" to="0.5"
                                    begin="0s" dur="0.8s"
                                    values=".5;1;.5" calcMode="linear"
                                    repeatCount="indefinite" />
                        </circle>
                        <circle cx="105" cy="15" r="15">
                            <animate attributeName="r" from="15" to="15"
                                    begin="0s" dur="0.8s"
                                    values="15;9;15" calcMode="linear"
                                    repeatCount="indefinite" />
                            <animate attributeName="fill-opacity" from="1" to="1"
                                    begin="0s" dur="0.8s"
                                    values="1;.5;1" calcMode="linear"
                                    repeatCount="indefinite" />
                        </circle>
                    </svg>
                </div>
                <p class="form__error-message form-error-message">El comentario no ha sido publicado porque el formulario contiene algun error.</p>
            </div>
        </form>
    </div>
</div>
