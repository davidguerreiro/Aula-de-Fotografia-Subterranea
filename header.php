<?php

/**
 * Header template
 * 
 * @package aula
 */

 ?>

<!DOCTYPE html>
<html>
   <head>
       <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Aula de Fotografía Subterránea</title>
       <?php wp_head(); ?>
       <script src="https://www.google.com/recaptcha/api.js" async defer></script>
   </head>
   <body>
       <main class="main">

<?php

 // final header - module 28.
include( locate_template( 'modules/m027-second-header.php' ) );

// mobile menu module - module 29.
include( locate_template( 'modules/m028-mobile-menu.php' ) );