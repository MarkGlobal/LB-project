<?php

get_header('internal');
$banner_image = (( get_field( 'banner_image', get_the_ID()) ) ? get_field( 'banner_image', get_the_ID()) : '/wp-content/uploads/2021/11/tree.webp');
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
$phone = (( get_field( 'phone', get_the_ID()) ) ? get_field( 'phone', get_the_ID()) : '01202 695801');?>
<div style="height: 260px;"></div>
<div class="team-member-banner" style="background-image: url('<?php echo $banner_image; ?>')"></div>
<div class="container">
    <div class="profile-container row">
        <div class="team-member-image" style="background-image: url('<?php echo $featured_img_url; ?>')"></div>
        <div class="team-member-details" style="">
            <p class="name"><?php echo $post->post_title; ?></p>
            <h4 class="job-role"><?php the_field( 'job_title', $post->ID ); ?></h4>
            <p class="tag-line"><?php the_field( 'tag_line', $post->ID ); ?></p>

            <p class="name">Email:</p>
            <p class="team-member-info"><?php the_field( 'email', $post->ID ); ?></p>
            <p class="name">Phone:</p>
            <p class="team-member-info"><?php echo $phone; ?></p>

        </div>
    </div>
    <div class="row bio-row">
        <div class="bio-content">
            <h4 class="job-role">about me</h4>
        <p class=""><?php the_field( 'bio', $post->ID ); ?></p>
        <div class="signature"><img src="<?php the_field( 'signature', $post->ID ); ?>"></div>
        </div>
    </div>
    <div class="row bio-row history">
        <div class="bio-content">
            <h4 class="job-role">History</h4>
            <div class="row">
            <p class="col-4">June 2025 - April 2026</p>
            <p class="col-8">This is a Job Description. Briefly describe your specific position, including details about important achievements and milestones. Make sure to include relevant skills and highlights, and don't forget to adjust the timeframe in the subtitle.</p>
            </div>

            <div class="row">
                <p class="col-4">June 2025 - April 2026</p>
                <p class="col-8">This is a Job Description. Briefly describe your specific position, including details about important achievements and milestones.</p>
            </div>
        </div>
    </div>
</div>

<style>
    .team-member-banner{
        height: 500px;
        background-size: cover;
        background-position: center;
    }
    .team-member-image{
        height: 500px;
        width: 500px;
        background-size: cover;
        background-position: center;
        padding: 0;
        margin: 0;
        display: inline-block;
        transform: translateX(2%);
    }
    .profile-container{
        transform: translateY(-50%);
        margin: 0 auto;
        /*background-color: red;*/
        max-width: 1010px;
    }
    .team-member-details{
        height: 500px;
        width: 500px;
        background-color: white;
        display: inline-block;
        margin: 0px;
        padding: 75px;
    }
    .team-member-info{

    }
    .bio-row{
       position: relative;
        top: -190px;
    }
    .bio-content{
        max-width: 950px;
        margin: 0 auto;
    }
    .history{
        padding-top: 50px;
    }
</style>

<?php get_footer();?>
