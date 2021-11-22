<?php
/*
 *
 *  Template Name: Timeline 
 * 
 * 
*/

get_header();

echo '<section class="timeline">';
echo '<div class="timeline-line"></div>';

// check if the repeater field has rows of data
if( have_rows('timeline_content') ):

    // loop through the rows of data
   while ( have_rows('timeline_content') ) : the_row();
        // Begin year
        echo '<div class="timeline__year">';

       // display a sub field value
       echo '<h1>' .get_sub_field('year'). '</h1>';

       //// Begin year details
       // Check value exists.
        if( have_rows('year_information') ):

            // Loop through rows.
            while ( have_rows('year_information') ) : the_row();

            if (get_row_index() % 2 == 0) {
                $eventSide = 'right';
            } else {
                $eventSide = 'left';
            }

            if (get_sub_field('event_side')) {
                $eventSide = get_sub_field('event_side');
            }
                

                // Case: Paragraph layout.
                if( get_row_layout() == 'year_and_day' ):
                    echo '<div class="timeline-event '.$eventSide.' year-day">';
                    echo '<div class="day__info '.get_sub_field('text_position').'">';
                    echo '<div class="day__wrap">';
                    echo '<h2 class="day">'.get_sub_field('day').'</h2>';
                    echo '<h2 class="day-text">'.get_sub_field('day_text').'</h2>';
                    echo '</div>';
                    echo  wp_get_attachment_image( get_sub_field('day_image'), 'medium' );

                    echo '</div>';
                    echo '<div class="year__info '.get_sub_field('text_position').'">';
                    echo '<div class="year__wrap">';

                    echo '<h4 class="year orange">'.get_sub_field('year').'</h4>';
                    echo  wp_get_attachment_image( get_sub_field('year_image'), 'medium' );
                    echo '<div class="header-underline"></div>';

                    echo '</div>';
                    echo '<p class="year-text">'.get_sub_field('year_text').'</p>';

                    echo '</div>';

                    echo '</div>';
                    // Do something...

                // Case: Download layout.
                elseif( get_row_layout() == 'year_and_image' ): 
                    echo '<div class="timeline-event '.$eventSide.'">';
                    echo '<div class="day__info '.get_sub_field('text_position').'">';
                    echo '<div class="day__wrap">';
                    echo '<h2 class="day-text">'.get_sub_field('second_image_text').'</h2>';

                    echo '</div>';
                    echo  wp_get_attachment_image( get_sub_field('second_image'), 'medium' );

                    echo '</div>';
                    echo '<div class="year__info '.get_sub_field('text_position').'">';
                    echo '<div class="year__wrap">';

                    echo '<h4 class="year orange">'.get_sub_field('year').'</h4>';
                    echo  wp_get_attachment_image( get_sub_field('year_image'), 'medium' );
                    echo '<div class="header-underline"></div>';

                    echo '</div>';
                    echo '<p class="year-text">'.get_sub_field('year_heading').'</p>';
                    echo '<div class="header-underline"></div>';

                    echo '<p class="year-text excerpt">'.get_sub_field('year_text').'</p>';
                    echo '<div class="header-underline"></div>';


                    echo '</div>';

                    echo '</div>';
                    // Do something...
                    // Do something...

                    elseif( get_row_layout() == 'text_and_image' ): 
                        echo '<div class="timeline-event '.$eventSide.' text-event">';
                        echo '<div class="day__info '.get_sub_field('text_position').'">';
                        echo '<div class="day__wrap">';
                        echo '<p class="day-text">'.get_sub_field('header').'</p>';
                        
                        echo '<p class="day-text">'.get_sub_field('text').'</p>';
                        echo '</div>';
    
                        echo '</div>';
                        echo '<div class="year__info '.get_sub_field('text_position').'">';
                        echo '<div class="year__wrap">';
    
                        echo  wp_get_attachment_image( get_sub_field('side_image'), 'medium' );
                        echo '</div>';
                        echo '<h2 class="year-text">'.get_sub_field('image_text').'</h2>';
    
                        echo '</div>';
    
                        echo '</div>';
                        // Do something...
                        // Do something...
    

                endif;

            // End loop.
            endwhile;

        // No value.
        else :
            // Do something...
        endif;
       //// End year details

       // End year
       echo '</div>';
   endwhile;

else :

   // no rows found

endif;

echo '</section>';

get_footer();