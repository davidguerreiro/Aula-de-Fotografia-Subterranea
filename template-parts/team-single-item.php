<?php
/**
 * Team single item
 * 
 * This is the single team template.
 * 
 * @package aula/template-parts
 */

 $featured_post_image_url   = get_the_post_thumbnail_url( get_the_ID(), 'medium' );
 $role                      = get_field( 'team_role' );
 $email                     = get_field( 'team_email' );
 $location                  = get_field( 'team_location' );

 ?>

 <article class="team-item">
    <h3 class="team-item__title">
        <?php echo get_the_title(); ?>
    </h3>
    <div class="team-item__wrapper">
        <?php if ( ! empty( $featured_post_image_url ) ) : ?>
            <div class="team-item__section">
                <img src="<?php echo $featured_post_image_url; ?>" alt="" class="team-item__image">
            </div>
        <?php endif; ?>
        <div class="team-item__section team-item__section--data">
            <ul class="team-item__data">
                <?php if ( ! empty( $role ) ) : ?>
                    <li>
                        <i class="fa fa-id-badge" aria-hidden="true"></i>
                        <?php echo esc_html( $role ); ?>
                    </li>
                <?php endif; 
                
                if ( ! empty( $email ) ) : ?>
                    <li>
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <?php echo esc_html( $email ); ?>
                    </li>
                <?php endif; 
                
                if ( ! empty( $location ) ) : ?>
                    <li>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <?php echo esc_html( $location ); ?>
                    </li>
                <?php endif; ?>
            </ul>
            <p class="team-item__description">
                <?php echo get_the_content(); ?>
            </p>
        </div>
    </div>
 </article>