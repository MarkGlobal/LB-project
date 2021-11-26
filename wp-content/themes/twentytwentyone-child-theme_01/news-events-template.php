<?php
/*
* Template name: News & Events Page
*
*/
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
?>

<?php get_header('internal'); ?>
<div class="news-banner-section" style="background-image: url('<?php echo $featured_img_url?>')"></div>
<div class="container" style="padding: 100px 0px;">
    <div class="row">
        <div class="col-5 offset-1">
            <h1 class="teal section-title" id="div_element">Latest News</h1>
            <?php get_custom_posts('Latest News'); ?>
        </div>
        <div class="col-5 offset-1">
            <h1 class="gold section-title">Current Events</h1>
            <?php get_current_events('Current Events'); ?>
        </div>
    </div>
</div>

<div style="background-color: #d4e0e3; padding-top: 100px;">
    <div class="container">
        <div style="text-align: center; padding-bottom: 50px;">
            <h1>Notable past events</h1>
        </div>
        <div class="row" style="margin-bottom:0px;">
            <?php get_notable_past_events('Past Events'); ?>
        </div>
    </div>
    <!--    <div id="submit">ajax</div>-->
    <!--    <div id="div_element"> </div>-->
</div>

<?php get_template_part('template-parts/goinggreen', '' ); ?>
<?php get_template_part('template-parts/our', 'brochure' ); ?>
<?php get_footer(); ?>

<style>
    .news-banner-section{
        height: 640px;
        background-size: cover;
    }
</style>