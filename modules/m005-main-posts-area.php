<?php

/**
 * Module 005 - Main Posts Area
 * 
 * @package aula/modules
 */

$post_date = date( 'd-M-Y' );

 ?>

 <!--

 <article class="module m4 m5">
    <a href="#" class="wrapper-link">
        <header class="m4__header m5__header" style="background-image : url('http://lorempixel.com/500/300');">
        </header>
    </a>
    <section class="m4__post-data">
        <a href="#" class="wrapper-link">
            <div class="excerpt">
                <h2 class="m5__post-title">Adelante aunque solo tengas una camara</h2>
            </div>
        </a>
        <div class="post-info-wrapper">
            <ul>
                <li>
                    <a href="#">
                        <i class="fa fa-thumb-tack" aria-hidden="true"></i>
                        Articulo
                    </a>
                </li>
                <li>
                    <span>
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <?php // echo $post_date; ?>
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
 </article>

 <article class="module m4 m5">
    <a href="#" class="wrapper-link">
        <header class="m4__header m5__header" style="background-image : url('http://lorempixel.com/500/300');">
        </header>
    </a>
    <section class="m4__post-data">
        <a href="#" class="wrapper-link">
            <div class="excerpt">
                <h2 class="m5__post-title">Adelante aunque solo tengas una camara</h2>
            </div>
        </a>
        <div class="post-info-wrapper">
            <ul>
                <li>
                    <a href="#">
                        <i class="fa fa-thumb-tack" aria-hidden="true"></i>
                        Articulo
                    </a>
                </li>
                <li>
                    <span>
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <?php //echo $post_date; ?>
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
 </article>
-->

<div class="posts-container posts-container--home">
    <?php
        get_template_part( 'template-parts/post', 'home-single-item' );
        get_template_part( 'template-parts/post', 'home-single-item' );
        get_template_part( 'template-parts/post', 'home-single-item' );
    ?>
</div>