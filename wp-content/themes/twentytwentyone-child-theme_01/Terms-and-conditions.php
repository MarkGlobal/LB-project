<?php
//Template name: Terms & Conditions Template
$featured_img_url = (get_the_post_thumbnail_url(get_the_ID(),'full')) ? get_the_post_thumbnail_url(get_the_ID(),'full') : '/wp-content/uploads/2021/12/flip-signature-picture.jpg';
get_header('internal');
?>
<div class="definitions-banner-section" style="background-image: url('<?php echo $featured_img_url?>')">
    <div class="container">
        <div class="row">
            <div class="title-container">
                <h4 class="orange main-heading">Lester Brunt</h4>
                <h1 class="tc-title cello secondary-heading"><?php the_title() ?></h1>
            </div>
        </div>
    </div>
</div>

    <div class="section container">
        <div class="row">
            <?php the_content() ?>
        </div>
    </div>

<?php get_footer() ?>
<style>
    .definitions-banner-section{
        height: 640px;
        background-size: cover;
        background-color: #00000010;
        background-blend-mode: multiply;

    }
    .title-container{
        padding-top: 228px;
    }
    .tc-title{
        /*color: #4c5151;*/
    }
</style>
