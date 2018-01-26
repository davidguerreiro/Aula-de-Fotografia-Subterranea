<?php

/**
 * Module 011 - Sidebar - History
 * 
 * This module is only used on the sidebar
 * 
 * @package aula/modules
 */

if ( isset( $args ) ) :
    $key        = 'widget_' . $args['widget_id'];
    $title      = get_field( 'm11_title', $key );
    $data       = aula_get_history_posts();

 ?>

 <div class="module m11">
    <?php if ( ! empty( $title ) ) : ?>
    <h3>
        <i class="fa fa-history m11__story-icon" aria-hidden="true"></i>
        <?php echo esc_html( $title ); ?>
    </h3>
    <?php endif; 
    
    if ( ! empty( $data ) ) : ?>
        <ul class="m11__year-list">
            <?php foreach ( $data as $year => $months ) : ?>
                <li>
                    <span class="year-parent" data-year="<?php echo $year; ?>">
                        <?php echo $year; ?>
                        <i class="fa fa-angle-right m11__icon-angle fa-rotate-45" aria-hidden="true"></i>
                    </span>
                    <ul class="m11__month-list" id="<?php echo $year; ?>-months">
                    <?php foreach ( $months as $month => $posts ) : ?>
                        <li>
                            <span class="month" data-month="<?php echo $year . '-' . $month; ?>"> 
                                - <?php echo ucfirst( $month ); ?> 
                                <i class="fa fa-angle-right m11__icon-angle" aria-hidden="true"></i>
                            </span>
                            <ul class="m11__post-list" id="<?php echo $year . '-' . $month; ?>">
                            <?php foreach ( $posts as $item ) : ?>
                                <li>
                                    <a href="<?php echo $item['permalink']; ?>">
                                        - <?php echo $item['title']; ?>
                                    </a>
                                </li>
                            <?php endforeach; // end posts loop. ?>
                            </ul>
                        </li>
                    <?php endforeach; // end months loop. ?>
                    </ul>
                </li>
            <?php endforeach; // end year loop. ?> 
        </ul>
    <?php endif; ?>
 </div>
<?php endif; ?>