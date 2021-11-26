<?php
/**
 * Created by IntelliJ IDEA.
 * User: mark
 * Date: 2021-11-25
 * Time: 14:02
 */
//Template name: Definitions Template
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
get_header('internal');
?>
<div class="definitions-banner-section" style="background-image: url('<?php echo $featured_img_url?>')"></div>
<?php get_template_part('template-parts/meet-your-adviser', '' ); ?>
<?php get_template_part('template-parts/what-we-offer-services', '' ); ?>
<?php get_footer() ?>
<style>
    .definitions-banner-section{
        height: 640px;
        background-size: cover;
    }
</style>
