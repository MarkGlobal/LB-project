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
            <div class="services-header"></div>
            <div class="paint-no">
                <div class="paint-inner-no">
                        <h4 class="orange "><?php the_title(); ?></h4>
                        <h1 class="col-12 teal services-title"><?php the_field('page_headline'); ?></h1>

                        <div>
                            <h3 class="teal services-subheader"><?php the_field('subheader'); ?>

                                <div class="keyword-container">
                                <?php
                                    if( have_rows('subheader_keywords') ):
                                        while( have_rows('subheader_keywords') ) : the_row();
                                            $firstClass = get_row_index() == 1 ? ' active' : '';
                                            echo '<span class="key-wd orange text-rotate'. $firstClass .'" style="font-family: verveine; ">' .get_sub_field('keyword') . '</span>';
                                        endwhile;
                                    else :
                                    endif;
                                ?>
                                    </div>
                            </h3>
                            <h3 class="teal services-subheader"><?php the_field('subheader_final'); ?></h3>
                        </div>

                </div>

            </div>
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

<style>
    .paint{
        width: unset;
        display: inline-block;
        background-image: url('/wp-content/uploads/2021/11/Ppaint.png');
        background-size: contain;
        background-repeat: no-repeat;
        padding-bottom: 150px;
        transform: translateX(-60px);


    }
    .paint-inner{
        margin-left: 60px;
        margin-top: 30px;
        margin-bottom: 50px;
        margin-right: 10px;
    }
    .keyword-container{
        display: inline-block;
        min-width: 170px;
    }
</style>

    <?php if (strtoupper(get_the_title()) === strtoupper('retirement planning')) : ?>
    <style>
        .paint-inner{
        width: 680px;
        }
        .paint{
            padding-bottom: 47px;
            padding-top: 50px;
        }
    </style>
    <?php endif; ?>


    <?php if (strtoupper(get_the_title()) === strtoupper('intergenerational wealth planning')) : ?>
        <style>
            .paint-inner{
                width: 720px;
            }
            .paint{
                padding-bottom: 47px;
                padding-top: 62px;
            }
        </style>
    <?php endif; ?>

    <?php if (strtoupper(get_the_title()) === strtoupper('corporate services')) : ?>
        <style>
            .paint-inner{
                margin-top: 57px;
            }
        </style>
    <?php endif; ?>

<?php if(get_field('light')) : ?>
    <style>
        .services-title, .services-subheader{
            color: white;
        }
        .paint{

        }
    </style>
<?php endif; ?>
