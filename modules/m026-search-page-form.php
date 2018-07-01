<?php

/**
 * Module 026 - Search page form
 * 
 * @package aula/modules
 */

 $s_term            = ( isset( $_GET['s'] ) ) ? sanitize_text_field( $_GET['s'] ) : '';
 $nonce             = wp_create_nonce( 'search_page_form' );
 
 $text_input_class      = 'search-page-form__input-text';
 $submit_input_class    = 'btn-search-page-submit';

 /**
  * Some style differs when the form is displayed on the 404 page
  */
 $form_class        = ( is_404() ) ? "search-page-form search-page-form__404" : "search-page-form";
 
 /**
  * Some style differs when the form is used on the sidebar
  */
  if ( isset( $is_sidebar ) && $is_sidebar ) {
      $text_input_class .= ' search-page-form__input-text--sidebar';
      $submit_input_class .= ' btn-search-page-submit--sidebar';
  }

 ?>

 <div class="module m26">
    <form action="<?php echo get_home_url(); ?>" method="get" class="<?php echo $form_class; ?>">
        <input type="hidden" name="nonce" value="<?php echo $nonce; ?>">
        <input type="search" name="s" value="<?php echo $s_term; ?>"
        class="<?php echo $text_input_class; ?>" 
        placeholder="Búsqueda ... " 
        required> 
        <button type="submit" class="<?php echo $submit_input_class; ?>">
            <i class="fa fa-search" aria-hidden="true"></i>
        </button>
    </form>
 </div>