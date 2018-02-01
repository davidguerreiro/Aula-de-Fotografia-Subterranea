<?php

/**
 * Template for footer
 * 
 * @package aula
 */

$logo_image_url         = wp_get_attachment_url( 1267 );
$year                   = date( 'Y' );
$legal_page             = get_page_by_title( 'Aviso Legal' );
$legal_page_link        = ( ! empty( $legal_page ) && ! is_null( $legal_page ) ) ? get_permalink( $legal_page ) : '';

 ?>

            <footer class="main-footer">
                <section class="main-footer__section">
                    <ul>
                        <li>
                            Administrado por 
                            <a href="https://www.facebook.com/angelavelinor" target="_blank" class="author-a">Angel Cascallana</a>
                        </li>
                        <li>
                            Desarrollado por
                            <a href="https://github.com/davidguerreiro" target="_blank" class="author-a">David Guerreiro</a>
                        </li>
                        <?php if ( ! empty( $legal_page_link ) ) : ?>
                            <li>
                                <a href="<?php echo $legal_page_link; ?>" target="_blank" class="author-a">Aviso Legal</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </section>
                <section class="main-footer__section">
                    <ul class="main-footer__social-links">
                        <li>
                            <a href="" target="_blank" class="social-a">
                                <i class="fa fa-facebook-f" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank" class="social-a">
                                <i class="fa fa-github-alt" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </section>
                <section class="main-footer__bottom-section">
                    <?php if ( ! empty( $logo_image_url ) ) : ?>
                        <img src="<?php echo $logo_image_url; ?>" alt="">
                    <?php endif; ?>
                    <p>
                        Aula de Fotografia Subterranea
                        </br>
                        &copy; 2014 - <?php echo $year; ?>
                    </p>

                </section>
            </footer>
        </main>
        <?php wp_footer(); ?>
    </body>
</html>