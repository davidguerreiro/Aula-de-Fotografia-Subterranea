<?php

/**
 * Template for footer
 * 
 * @package aula
 */

$logo_image_url = wp_get_attachment_url( 20 );

 ?>

            <footer class="main-footer">
                <section class="main-footer__section">
                    <ul>
                        <li>
                            Administrado por 
                            <a href="#" target="_blank">Angel Cascallana</a>
                        </li>
                        <li>
                            Desarrollado por
                            <a href="#" target="_blank">David Guerreiro</a>
                        </li>
                        <li>
                            <a href="#" target="_blank">Aviso Legal</a>
                        </li>
                    </ul>
                </section>
                <section class="main-footer__section">
                    <p>
                        This is an open source project. Collaborate with us on Github !
                    </p>
                    <a href="#" class="git-link" title="Collaborate with us!" target="_blank">
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
                        &copy; 2014 - 2017
                    </p>

                </section>
            </footer>
        </main>
    </body>
</html>