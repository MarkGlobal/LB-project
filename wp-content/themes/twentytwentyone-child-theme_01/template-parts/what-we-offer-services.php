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
    $content;
    while ( have_rows('accordion_section') ) : the_row();
        $discoverMore = (get_row_index()==1) ? '/service-definitions#'.get_sub_field('title') : $discoverMore;
        $content =  get_sub_field('content');

?>

        <section class=" service-def pre-accordion col-6">
                <div class="">
                <h1 class="intro-header teal"><?php the_sub_field('title'); ?></h1>
                <div class="service-contents"> <?php echo $content; ?> </div>
                <a href="/service-definitions#<?php the_sub_field('title'); ?>" target="_blank">
                    <div class="spacer"></div>
<!--                    <button class="discover-more button-orange scaled-button">-->
<!--                        Discover More-->
    <!--                    <span class="discover-more--main active">Discover More</span>-->
    <!--                    <span class="discover-more--close">Close</span>-->
<!--                    </button>-->
                </a>
                </div>

    </section>


    <?php endwhile; ?>
    <p class="text-center reach-out">For more details about <?php the_sub_field('title'); ?> services that we offer reach out to us on 01202 695801, or click the button below.</p>
    <a class="definitions-button" href="<?php echo $discoverMore ?>"><button class="discover-more button-orange scaled-button definitions-button">View service definitions</button></a>
        <?php
else :

    // no rows found

endif;

?>
        </div>
    </div>
</div>

<style>
    .service-def h1, .service-def p {
        text-align: left;
    }
    .reach-out{
        padding-bottom: 20px;
    }
    .spacer{
        margin-bottom: 60px;
    }
    .service-contents > p{
        color: #000000;

        padding-right: 100px;
        padding-bottom: 50px;
    }
    .intro-header{
        color: #4C5151 !important;
    }
    .definitions-button{
        width: 400px;
        margin: 0 auto 20px ;
    }
</style>