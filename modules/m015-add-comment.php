<?php

/**
 * Module 015 - Add comment form
 * 
 * @package aula/modules
 */

 ?>

 <div class="module m15">
    <h2 class="m15__title">
        <i class="fa fa-comment-o icon" aria-hidden="true"></i>
        Comenta algo
    </h2>
    <form action="" class="comment-form">
        <input type="text" name="name" placeholder="Nombre" class="commet-form__input-text" required>
        <textarea name="message" class="comment-form__textarea" required>
            Message
        </textarea>
        <input type="submit" value="Comentar" class="commet-form__input-submit">
    </form>
 </div>