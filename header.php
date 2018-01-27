<?php

/**
 * Header template
 * 
 * @package aula
 */

 aula_php_display_all_errors();

 ?>

<!DOCTYPE html>
<html>
   <head>
       <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Aula de Fotografia Subterranea</title>
       <?php wp_head(); ?>
   </head>
   <body>
       <main class="main">

<?php

 // module 001.
 //include( locate_template( 'modules/m001-main-header.php' ) );

 // module 003.
 // include( locate_template( 'modules/m003-main-menu.php' ) );      

 // test new header.
include( locate_template( 'modules/m027-second-header.php' ) );