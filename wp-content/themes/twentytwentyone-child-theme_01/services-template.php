<?php
/*
* Template name: Services Page
*
*/
?>
<?php get_header('internal'); ?>

   <div class="svc"style="background-image: none; overflow: hidden;"  >
   <div class="parallax-image" id="parallax" style="background-image: url('<?php echo wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full' )[0];?>'); background-size: cover; background-position: center; "></div>
    <div class="container">
        <div class="row">
            <h4 class="orange services-header"><?php the_title(); ?></h4>
            <h1 class="col-9 cello services-title"><?php the_field('page_headline'); ?></h1>
            <div>
                <h3 class="cello services-subheader"><?php the_field('subheader'); ?>
                
                <?php
                    // Check rows exists.
                    if( have_rows('subheader_keywords') ):

                        // Loop through rows.
                        while( have_rows('subheader_keywords') ) : the_row();

                            $firstClass = get_row_index() == 1 ? ' active' : '';

                            // Load sub field value.
                            echo '<span class="orange text-rotate'. $firstClass .'" style="font-family: verveine; ">' .get_sub_field('keyword') . '</span>';
                            // Do something...

                        // End loop.
                        endwhile;

                    // No value.
                    else :
                        // Do something...
                    endif;
                ?></h3>
            </div>
            <h3 class="cello services-subheader"><?php the_field('subheader_final'); ?></h3>
        </div>
    </div>
   </div>

<?php get_template_part('template-parts/services-intro', '' ); ?>
<?php get_template_part('template-parts/services-how-we-work', '' ); ?>
<?php get_template_part('template-parts/what-we-offer-services', '' ); ?>
<?php get_template_part('template-parts/contact-section', '' ); ?>
<?php get_template_part('template-parts/investing-in-their-future', '' ); ?>
<?php get_template_part('template-parts/meet-your-adviser', '' ); ?>
<?php get_template_part('template-parts/our', 'brochure' ); ?>

<?php get_footer(); ?>
