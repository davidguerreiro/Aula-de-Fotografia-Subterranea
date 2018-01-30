<?php
/**
 * Module 028 - Notifications
 * 
 * Only used when a notification has to be displayed.
 * 
 * @package aula/modules
 */

if ( isset( $_GET['not'] ) && ! empty( $_GET['not']) ) :
    $not_data = aula_display_user_notification( $_GET['not'] );
     
    if ( $not_data['type'] ==  'error' ) {
        $class  = 'notification__error';
        $icon   = 'fa-times-circle';
    } else {
        $class  = 'notification__success';
        $icon   = 'fa-check-circle';
    }

?>

<div class="module m18">
    <p class="notification <?php echo $class; ?>">
        <i class="fa <?php echo $icon; ?>" aria-hidden="true"></i>
        <?php echo $not_data['message']; ?>
    </p>
</div>
<?php
unset( $not_data );
unset( $class );
unset( $icon );
endif; ?>