<?php

/**
 * Module 004 - Featured post
 * 
 * TODO: Add post data elements in ul.
 * 
 * @package aula/modules
 */

 $post_date = date( 'd-M-Y' );

 ?>

 <div class="module m4">
    <a href="#" class="wrapper-link">
        <header class="m4__header" style="background-image : url('http://lorempixel.com/500/300');">
            <h2>
                <span>La cueva de Valporquero</span>
            </h2>
        </header>
    </a>
    <section class="m4__post-data">
        <div class="excerpt">
            <p>
                Podemos considerar esto como el contenido del post
                de prueba. Esto seria el texto inicial del post. No es esto
                mucho texto ?
            </p>
        </div>
        <div class="post-info-wrapper">
            <ul>
                <li>
                    <a href="#">
                        <i class="fa fa-thumb-tack" aria-hidden="true"></i>
                        Articulo
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-sun-o" aria-hidden="true"></i>
                        Actividades
                    </a>
                </li>
                <li>
                    <span>
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <?php echo $post_date; ?>
                    </span>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-comment-o" aria-hidden="true"></i>
                        4
                    </a>
                </li>
            </ul>
        </div>
    </section>
 </div>