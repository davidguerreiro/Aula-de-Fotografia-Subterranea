<?php

/**
 * Module 004 - Featured post
 * 
 * TODO: Add post data elements in ul.
 * 
 * @package aula/modules
 */

 $post_date = date( 'd M' );

 ?>

 <div class="module m4">
    <header class="m4__header">
        <h2>La cueva de Valporquero</h2>
    </header>
    <section class="m4__post-data">
        <div class="excerpt">
            <p>
                Podemos considerar esto como el contenido del post
                de prueba. Esto seria el texto inicial del post. No es esto
                mucho texto ?
            </p>
        </div>
        <div>
            <ul class="m4__post-info">
                <li>
                    <i class="fa fa-thumb-tack" aria-hidden="true"></i>
                    <a href="#">Articulo</a>
                </li>
                <li>
                    <i class="fa fa-sun-o" aria-hidden="true"></i>
                    <a href="#">Actividades</a>
                </li>
                <li>
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <span>15-5-2015</span>
                </li>
                <li>
                    <i class="fa fa-comment-o" aria-hidden="true"></i>
                    <span>4</span>
                </li>
            </ul>
        </div>
    </section>
 </div>