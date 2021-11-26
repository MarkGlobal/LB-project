<?php
/**
 * Created by IntelliJ IDEA.
 * User: mark
 * Date: 2021-11-25
 * Time: 10:01
 */
get_header('internal');

$bannerDefault = (get_field('banner_image')) ? get_field('banner_image') : '/wp-content/uploads/2021/11/newsstand1.jpg';
?>

<div class="post-banner-section" style="background-image: url('<?php echo $bannerDefault?>')">

</div>
    <div class="container">
        <div class="row article-content">
            <h4 class="orange"><?php echo get_post_type_object(get_post_type())->labels->name; ?></h4>
            <h1 class="teal"><?php the_title(); ?></h1>
            <p class="cello article-date"><?php the_field( 'date', $post->ID ); ?></p>
            <div class="the-article-content">
                <?php the_content(); ?>
            </div>
        </div>
    </div>


<?php get_footer() ?>

<style>
    .the-article-content{
        padding-top: 50px;
    }
    .article-content{
        padding-top: 115px;
        padding-bottom: 115px;
    }
    .post-banner-section{
        height: 640px;
        background-size: cover;
    }
    .article-date{
        color: #4C5151;
        font-family: AvenirNextMedium;
    }

</style>
