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
            <?php _e( 'Déjanos un comentario', 'aula' ); ?>
        </h2>
        <form action="" method="post" class="form">
            <input type="hidden" name="nonce" id="nonce" value="<?php echo $nonce; ?>">
            <input type="hidden" name="action" value="comment-form">
            <input type="hidden" name="post-id" value="<?php echo $post_id; ?>">
        </form>
    </div>
</div>
