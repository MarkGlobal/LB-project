<div style="background-color: white;">
<div class="container sub-section__title">
    <div class="row">
        <div class="col-12">
        <h4 class="orange">What we offer</h4>
        </div>
    </div>
</div>

    <div class="container">
        <div class="row">
<?php
// check if the repeater field has rows of data
if( have_rows('accordion_section') ):
 	// loop through the rows of data
    while ( have_rows('accordion_section') ) : the_row(); ?>

        <section class="pre-accordion col-6">
                <div class="">
                <h1 class="intro-header"><?php the_sub_field('title'); ?></h1>
                <?php the_sub_field('content'); ?>
                <a href="/service-definitions#<?php the_sub_field('title'); ?>" target="_blank">
                    <button class="discover-more button-orange scaled-button">
                        Discover More
    <!--                    <span class="discover-more--main active">Discover More</span>-->
    <!--                    <span class="discover-more--close">Close</span>-->
                    </button>
                </a>
                </div>
    </section>


    <?php endwhile;
else :

    // no rows found

endif;

?>
        </div>
    </div>

<script>

</script>
</div>