<div style="background-color: white;">
    <div class="container sub-section__title">
        <div class="row">
            <div class="col-12">
                <h4 class="orange">What we offer</h4>
            </div>
        </div>
    </div>


    <?php
    // check if the repeater field has rows of data
    if( have_rows('accordion_section') ):
        // loop through the rows of data
        while ( have_rows('accordion_section') ) : the_row(); ?>
            <section class="pre-accordion" >
                <a class="definition-anchor" id="<?php the_sub_field('title'); ?>"></a>

                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="intro-header" ><?php the_sub_field('title'); ?></h1>
                            <?php the_sub_field('content'); ?>
<!--                            <button class="discover-more button-orange scaled-button">-->
<!--                                <span class="discover-more--main active">Discover More</span>-->
<!--                                <span class="discover-more--close">Close</span>-->
<!--                            </button>-->
                        </div>
                    </div>
                </div>
            </section>
            <section class="accordion open">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">

                            <?php if( have_rows('accordion') ):
                                // loop through the rows of data
                                while ( have_rows('accordion') ) : the_row(); ?>

                                    <?php if ( get_sub_field('title') ) { echo '<h4 class="orange">' . get_sub_field('title') . '</h4>'; } ?>
                                    <div class="text-wrap">
                                        <?php the_sub_field('content'); ?>
                                    </div>



                                <?php endwhile;
                            else :
                                // no rows found
                            endif;?>
                        </div>
                    </div>
                </div>

            </section>

        <?php endwhile;
    else :

        // no rows found

    endif;

    ?>

    <script>

    </script>
    <style>
        a.definition-anchor{
            display: block;
            position: relative;
            top: -300px;
            visibility: hidden;
        }
    </style>
</div>