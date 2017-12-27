<?php

/**
 * Template to display single posts
 * 
 * @package aula
 */

get_header();

$post_date = date( 'd-m-Y' );

?>

<div class="content-section">
    <article class="post-wrapper">
        <h2 class="post-wrapper__post-title">Post title</h2>
        <section class="post-wrapper__post-data">
            <ul>
                <li>
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <?php echo $post_date; ?>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-sun-o" aria-hidden="true"></i>
                        Aula
                    </a>
                </li>
                <li>
                    <i class="fa fa-clock-o" aria-hidden="true"></i> 5
                </li>
            </ul>
        </section>
        <img src="http://lorempixel.com/500/300" alt="">
        <section class="post-wrapper__post-content">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas posuere fringilla. Curabitur at ullamcorper metus. Quisque eleifend purus eu justo egestas, at feugiat velit fermentum. Etiam eget consectetur purus. Curabitur id ante porttitor, scelerisque nisi nec, bibendum nulla. Praesent faucibus nisl vel orci ultrices vestibulum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam elementum aliquet tincidunt. Integer ultrices posuere ipsum eu congue. Mauris vestibulum suscipit orci sit amet suscipit. Cras eu urna iaculis, pellentesque sapien vitae, mollis mi. Duis vel felis at turpis mattis posuere eu id velit. Nunc vitae pulvinar tellus.
            </p>
            <h3>
                This is a title
            </h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas posuere fringilla. Curabitur at ullamcorper metus. Quisque eleifend purus eu justo egestas, at feugiat velit fermentum. Etiam eget consectetur purus. Curabitur id ante porttitor, scelerisque nisi nec, bibendum nulla. Praesent faucibus nisl vel orci ultrices vestibulum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam elementum aliquet tincidunt. Integer ultrices posuere ipsum eu congue. Mauris vestibulum suscipit orci sit amet suscipit. Cras eu urna iaculis, pellentesque sapien vitae, mollis mi. Duis vel felis at turpis mattis posuere eu id velit. Nunc vitae pulvinar tellus.
            </p>
            <img src="http://lorempixel.com/500/300" alt="">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas posuere fringilla. Curabitur at ullamcorper metus. Quisque eleifend purus eu justo egestas, at feugiat velit fermentum. Etiam eget consectetur purus. Curabitur id ante porttitor, scelerisque nisi nec, bibendum nulla. Praesent faucibus nisl vel orci ultrices vestibulum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam elementum aliquet tincidunt. Integer ultrices posuere ipsum eu congue. Mauris vestibulum suscipit orci sit amet suscipit. Cras eu urna iaculis, pellentesque sapien vitae, mollis mi. Duis vel felis at turpis mattis posuere eu id velit. Nunc vitae pulvinar tellus.
            </p>
        </section>
    </article>

<?php

 // module 015.
 include( locate_template( 'modules/m015-add-comment.php' ) );

 // comments
 include( locate_template( 'comments.php' ) );

?>

</div>

<?php

// include sidebar.
get_sidebar();

?>

<div class="bottom-modules-wrapper">

<?php

// module 013.
include( locate_template( 'modules/m013-newsletter-section.php' ) );

?>

</div>

<?php

get_footer();