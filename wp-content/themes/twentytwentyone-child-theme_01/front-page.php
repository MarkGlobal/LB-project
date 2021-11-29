<?php get_header('internal');
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
?>

<div class="banner" style="background-image: url('<?php echo esc_url($featured_img_url); ?> ')"></div>
    <?php get_template_part('template-parts/why-lester-brunt', '' ); ?>
    <?php get_template_part('logosection', '' ); ?>
    <?php get_template_part('template-parts/services', 'homepage' ); ?>
    <?php get_template_part('template-parts/goinggreen', '' ); ?>
    <?php get_template_part('template-parts/people-that-matter2', '' ); ?>
    <?php get_template_part('template-parts/meet-your-adviser', '' ); ?>



<?php get_template_part('template-parts/our', 'brochure' ); ?>

<footer>
    <?php get_footer(); ?>
</footer>
