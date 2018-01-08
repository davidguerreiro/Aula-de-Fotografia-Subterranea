<?php

/**
 * Module 026 - Search page form
 * 
 * @package aula/modules
 */

 $s_term            = ( isset( $_GET['s'] ) ) ? sanitize_text_field( $_GET['s'] ) : '';
 $nonce             = wp_create_nonce( 'search_page_form' );
 $form_class        = ( is_404() ) ? "search-page-form search-page-form__404" : "search-page-form";
 $text_input_class  = ( isset( $is_sidebar ) && $is_sidebar ) ? "search-page-form__input-text search-page-form__input-text--sidebar" : "search-page-form__input-text";

 ?>

 <div class="module m26">
    <form action="" method="get" class="<?php echo $form_class; ?>">
        <input type="hidden" name="nonce" value="<?php echo $nonce; ?>">
        <input type="search" name="s" value="<?php echo $s_term; ?>"
        class="<?php echo $text_input_class; ?>" 
        placeholder="Busqueda ... " 
        required> 
        <button type="submit" class="btn-search-page-submit">
            <i class="fa fa-search" aria-hidden="true"></i>
        </button>
    </form>
 </div>