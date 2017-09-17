<?php

/**
 * Template to display sidebar modules
 * 
 * @package aula
 */

?>

<aside class="sidebar">

<?php

// module 008.
include( locate_template( 'modules/m008-sidebar-author-data.php' ) );

// module 014.
include( locate_template( 'modules/m014-sidebar-search-form.php' ) );

// module 009.
include( locate_template( 'modules/m009-sidebar-most-popular-posts.php' ) );

// module 010.
include( locate_template( 'modules/m010-sidebar-facebook-group.php' ) );

// module 011.
include( locate_template( 'modules/m011-sidebar-history.php' ) );

?>
</aside>