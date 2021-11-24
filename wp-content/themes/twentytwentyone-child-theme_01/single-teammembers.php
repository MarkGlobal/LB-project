<?php

get_header('internal');
$banner_image = (( get_field( 'banner_image', get_the_ID()) ) ? get_field( 'banner_image', get_the_ID()) : '/wp-content/uploads/2021/11/tree.webp');
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
$phone = (( get_field( 'phone', get_the_ID()) ) ? get_field( 'phone', get_the_ID()) : '01202 695801');?>
<div style="height: 260px;"></div>
<div class="container">
    <div class="profile-row">
        <div class="profile-outer">
            <div class="team-featured-image" style="background-image: url('<?php echo $featured_img_url; ?>')">
                <div class="white-team-outer">
                    <div class="team-info">
                        <p class="name"><?php echo $post->post_title; ?></p>
                        <h4 class="job-role"><?php the_field( 'job_title', $post->ID ); ?></h4>
                        <p class=""><?php the_field( 'bio', $post->ID ); ?></p>
                        <div class="signature"><img src="<?php the_field( 'signature', $post->ID ); ?>"></div>
                        <div class="row scale-social">
                        <div class="col-2"><i class="social-icon fab fa-instagram"></i></div>
                        <div class="col-2"><i class="social-icon fab fa-facebook"></i></div>
                        <div class="col-2"><i class="social-icon fab fa-linkedin-in"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="supporting-text">
        <div class="row">
            <div class="further-info-container offset-1 col-9">
                <h5 class="tag-line col-8"><?php the_field( 'tag_line', $post->ID ); ?></h5>
                <p class="further-info-para"><?php the_field( 'how_i_work', $post->ID ); ?> </p>
            </div>
        </div>
    </div>
    <div class="quote-image-section">
        <div class="row">
            <div class="quote-image-container offset-1 col-9">
                <div class="width-half team-member-quote-img-container">
                    <img class="" src="<?php the_field( 'second_image', $post->ID ); ?>">
                </div>
                <div class="width-half team-member-quote">
                    <h2 class="teal">"<?php the_field( 'personal_quote', $post->ID ); ?>"</h2>
                    <p class="name quote-name"><?php echo $post->post_title; ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="outside-work-section">
        <div class="row">
            <div class="outside-work-content offset-1 col-9">
                <h4 class="teal">Oustide work</h4>
                <p class=""><?php the_field( 'outside_work', $post->ID ); ?></p>
            </div>
        </div>
    </div>
    <div class="outside-work-section">
        <div class="row">
            <div class="outside-work-content offset-1 col-9">
                <h4 class="teal">What i'm passionate about</h4>

                <?php if( have_rows('what_im_passionate_about') ):
                while ( have_rows('what_im_passionate_about') ) : the_row(); ?>
                    <div class="row">
                        <p class="col-4 tag-line"><?php the_sub_field( 'title'); ?></p>
                        <p class="col-8"><?php the_sub_field( 'supporting_text'); ?></p>
                    </div>
                <?php endwhile;
                else :
                    // no rows found
                endif;?>
            </div>
        </div>
    </div>

    <div class="meet-my-pod-section">
        <div class="">
            <div class="meet-my-pod offset-1 col-9">
                <div class="row">
                <h4 class="teal text-center">Meet my pod</h4>
                </div>
                <?php if( have_rows('pod_members') ):
                    while ( have_rows('pod_members') ) : the_row();
                        $teamMemberID = get_sub_field('pod_member')->ID;
                        $img_url = get_the_post_thumbnail_url($teamMemberID,'full');
                        $name = get_sub_field('pod_member')->post_title;
                        $job_title = get_field('job_title', $teamMemberID);
                        $teamMemberLink = get_post_permalink($teamMemberID);
                        ?>
                        <a href="<?php echo $teamMemberLink; ?>" style="text-decoration: none;">
                        <div class="pod-member" >
                            <div class="pod-member-image" style="background-image: url('<?php echo  $img_url; ?>')"></div>
                            <p class="name pod-name"><?php echo $name; ?></p>
                            <h4 class="pod-role"><?php echo $job_title; ?></h4>
                        </div>
                        </a>
                    <?php endwhile;
                else :
                    // no rows found
                endif;?>
            </div>
        </div>
    </div>


</div>
<div class="accreditations-section">
    <div style="background-color:#ccdbe080;">
        <div class="parallax section" >
            <div class="">
                <div class="logo-carousel-team-member">

                    <div class="company-logo">
                        <div class="logo-wrap">
                            <img  class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fvt.png">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur, ex nobis, sit unde officia blanditiis natus, ipsum vel aliquam error molestiae vero cupiditate mollitia? Non omnis aliquid in soluta assumenda.</p>
                        </div>
                    </div>
                    <div class="company-logo">
                        <div class="logo-wrap">
                            <img  class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gbc.png">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur, ex nobis, sit unde officia blanditiis natus, ipsum vel aliquam error molestiae vero cupiditate mollitia? Non omnis aliquid in soluta assumenda.</p>
                        </div>
                    </div>

                    <div class="company-logo">
                        <div class="logo-wrap">
                            <img  class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/solla.png">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur, ex nobis, sit unde officia blanditiis natus, ipsum vel aliquam error molestiae vero cupiditate mollitia? Non omnis aliquid in soluta assumenda.</p>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </div>

</div>


<style>
    .meet-my-pod{


        justify-content: center; align-items: center;
    }
    .pod-name{
        font-family: AvenirNextMedium;
        color: #486C78;
        font-size: 18px;
        padding-top: 9px;
    }
    .pod-role{
        color: #5597AE;
        font-size: 13px;
        padding-top: 5px;
        margin-bottom: 20px;
    }
    .pod-member{
        width: 24%;
        min-height: 300px;
        background-size: cover;
        background-position: center;
        display: inline-block;


    }
    .pod-member-image{
        height: 270px;
    }
    .outside-work-section{
        margin-bottom: 50px;
    }
    .quote-name{
        padding-top: 13px;
    }
    .width-half{
        width:48%;
        display: inline-block;
        margin: auto;
        vertical-align: middle;
    }

    .team-member-quote h2{
        margin-bottom: 0px;
    }
    .team-member-quote{
        padding: 50px;
        padding-right: 0px;
    }
    .team-member-quote-img-container{
        padding-right: 0px;
    }
    .quote-image-section{
        margin-top: 50px;
        margin-bottom: 50px;

    }
    .quote-image-container{
        background-color:rgba(82,133,145, 0.05);
        padding-left: 0px;
        transform: scale(calc(var(--bs-gutter-x) * .5));

    }
    .profile-row{ }
    .profile-outer{
        width: 900px;
        margin: auto;}
    .team-featured-image{
        height: 700px;
        width: 500px;
        background-size: cover;
        background-position: center;
        position: relative;
        left: 42.2%;
    }
    .white-team-outer{
        background-color: rgb(255,255,255);
        width: 500px;
        min-height: 550px;
        position: absolute;
        top: 60px;
        left: -470px;
    }
    .team-info{
        width: 100%;
        min-height: 550px;
        background-color:rgba(82,133,145, 0.05);
        padding: 75px;
    }
    .scale-social{
        padding-top: 20px;
        transform: scale(0.8) translateX(-12%);
    }
    .further-info-container{
        padding-top: 50px;
    }
    .further-info-para{
        padding-top: 15px;
    }
</style>

<?php get_footer();?>


























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
