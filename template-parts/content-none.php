<?php

/**
 * Template used when there are no content to display
 * 
 * @package aula/template-parts
 */

 if ( isset( $no_content ) && ! empty( $no_content ) ) : ?>
    <p class="no-content-notification">
        <?php echo esc_html( $no_content ); ?>
    </p>
<?php endif; ?>
