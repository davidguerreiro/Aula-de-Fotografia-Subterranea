<?php

/**
 * Template for footer
 * 
 * @package aula
 */

$logo_image_url         = wp_get_attachment_url( 20 );
$year                   = date( 'Y' );
$legal_page             = get_page_by_title( 'Aviso Legal' );
$legal_page_link        = ( ! empty( $legal_page ) && ! is_null( $legal_page ) ) ? get_permalink( $legal_page ) : '';

 ?>

            <footer class="main-footer">
                <section class="main-footer__section">
                    <ul>
                        <li>
                            Administrado por 
                            <a href="https://www.facebook.com/angelavelinor" target="_blank">Angel Cascallana</a>
                        </li>
                        <li>
                            Desarrollado por
                            <a href="https://github.com/davidguerreiro" target="_blank">David Guerreiro</a>
                        </li>
                        <?php if ( ! empty( $legal_page_link ) ) : ?>
                            <li>
                                <a href="<?php echo $legal_page_link; ?>" target="_blank">Aviso Legal</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </section>
                <section class="main-footer__section">
                    <p>
                        This is an open source project. Collaborate with us on Github !
                    </p>
                    <a href="https://github.com/davidguerreiro/Aula-de-Fotografia-Subterranea" class="git-link" title="Collaborate with us!" target="_blank">
                        <i class="fa fa-github-alt" aria-hidden="true"></i>
                    </a>
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