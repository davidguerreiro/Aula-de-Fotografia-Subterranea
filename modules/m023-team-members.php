<?php

/**
 * Module 023 - Team members
 * 
 * @package aula/modules
 */

$team_members = get_field( 'team_members' );

 if ( ! empty( $team_members ) ) : ?>

 <div class="module m23">
    <?php
        foreach ( $team_members as $member ) :
            include( locate_template( 'template-parts/team-single-item.php' ) );
        endforeach;
    ?>
 </div>
<?php endif; ?>