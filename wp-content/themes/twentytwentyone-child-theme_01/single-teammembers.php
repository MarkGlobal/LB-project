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
                        <div class="signature hide"><img src="<?php the_field( 'signature', $post->ID ); ?>"></div>
                        <div class="row scale-social">
                            <?php if (get_field('instagram', $post->ID)) : ?>
                        <div class="col-2"><a href="<?php the_field( 'instagram', $post->ID ); ?>"><i class="social-icon fab fa-instagram"></i></a></div>
                            <?php endif; ?>
                            <?php if (get_field('facebook', $post->ID)) : ?>
                        <div class="col-2"><a href="<?php the_field( 'facebook', $post->ID ); ?>"><i class="social-icon fab fa-facebook"></i></a></div>
                            <?php endif; ?>
                            <?php if (get_field('linked_in', $post->ID)) : ?>
                        <div class="col-2"><a href="<?php the_field( 'linked_in', $post->ID ); ?>"><i class="social-icon fab fa-linkedin-in"></i></a></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="supporting-text">
        <?php $hide = (get_field( 'how_i_work', $post->ID )) ? '' : 'hide'; ?>
        <div class="row <?php echo $hide; ?>">
            <div class="further-info-container offset-1 col-9">
                <h5 class="tag-line col-8"><?php the_field( 'tag_line', $post->ID ); ?></h5>
                <p class="further-info-para"><?php the_field( 'how_i_work', $post->ID ); ?> </p>
            </div>
        </div>
    </div>

    <div class="quote-image-section">
        <?php $hide = (get_field( 'personal_quote', $post->ID )) ? '' : 'hide'; ?>
        <?php $noPhoto = (get_field( 'second_image', $post->ID )) ? '' : 'nophoto'; ?>
        <div class="row <?php echo $hide; ?>">
            <div class="quote-image-container offset-1 col-9 <?php echo $noPhoto; ?>">
                <div class="width-half team-member-quote-img-container">
                    <img class="" src="<?php the_field( 'second_image', $post->ID ); ?>">
                </div>
                <div class="width-half team-member-quote">
                    <h2 class="teal">"<?php the_field( 'personal_quote', $post->ID ); ?>"</h2>
                    <p class="name quote-name white"><?php echo $post->post_title; ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="outside-work-section">

        <?php $hide = (get_field( 'outside_work', $post->ID )) ? '' : 'hide'; ?>
        <div class="row <?php echo $hide; ?>">
            <div class="outside-work-content offset-1 col-9">
                <h4 class="teal">Oustide work</h4>
                <p class=""><?php the_field( 'outside_work', $post->ID ); ?></p>
            </div>
        </div>
    </div>
    <div class="outside-work-section">
        <?php $hide = (get_field( 'what_im_passionate_about', $post->ID )) ? '' : 'hide'; ?>
        <div class="row <?php echo $hide; ?>">
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
                <?php $hide = (get_field( 'pod_members', $post->ID )) ? '' : 'hide'; ?>
                <div class="row <?php echo $hide; ?>">
                <h4 class="teal">Meet my pod</h4>
                </div>
                <div class="team-container row">

                    <?php if( have_rows('pod_members') ):
                        while ( have_rows('pod_members') ) : the_row();
                            if (!get_sub_field('pod_member')) { continue; }
                            $teamMemberID = get_sub_field('pod_member')->ID;
                            $img_url = get_the_post_thumbnail_url($teamMemberID,'full');
                            $pod_image = (get_field('pod_image', $teamMemberID)) ? (get_field('pod_image', $teamMemberID)) : $img_url;
                            $name = get_sub_field('pod_member')->post_title;
                            $job_title = get_field('job_title', $teamMemberID);
                            $teamMemberLink = get_post_permalink($teamMemberID);
//                            $newRow = (get_row_index()==5)||(get_row_index()==5) ? '</div><div class="team-container">' : '';
                            $emailDefault = strtolower(str_replace(' ', '.', $name)).'@sjpp.co.uk';
                            $email = (get_field( 'email', $teamMemberID )) ? get_field( 'email', $teamMemberID ) : $emailDefault;
                            ?>
<!--                --><?php //echo $newRow ?>

                            <div class=" col-3" >
                                <a href="<?php echo $teamMemberLink; ?>" style="text-decoration: none;">
                                <div class="pod-member-image" style="background-image: url('<?php echo  $pod_image; ?>')"></div>
                                <p class="name pod-name"><?php echo $name; ?></p>
                                <h4 class="pod-role"><?php echo $job_title; ?></h4>
                                <p class="pod-email"><?php echo $email ?></p>
                                </a>
                            </div>

                        <?php endwhile;
                    else :
                        // no rows found
                    endif;?>
                </div>
            </div>
        </div>

    </div>

</div>

<?php $hide = (get_field( 'video', $post->ID )) ? '' : 'hide'; ?>
<div class="team-page-video <?php echo $hide; ?>">
    <div class="container">
        <div class="row offset-1 col-9">

            <h4 class="teal ">Video</h4>
                <div class="video-container">
                    <?php the_field( 'video'); ?>
                </div>

        </div>
    </div>
</div>


    <?php $hide = (get_field( 'accreditations_', $post->ID )) ? '' : 'hide'; ?>
    <div class="accreditations-section <?php echo $hide; ?>" style="background-color:#ccdbe080;">

        <div class="parallax ">
            <div class="">
                <div class="container">
                    <div class="row">
                        <div class="row">
                            <h4 class="teal offset-1">Accreditations</h4>
                        </div>
                    </div>
                </div>
                <div class="logo-carousel-team-member">
                    <?php if( have_rows('accreditations_') ):
                        while ( have_rows('accreditations_') ) : the_row();
                            $logo_url = get_sub_field('logo');
                            $supportingText = get_sub_field('suporting_text');
                    ?>
                    <div class="company-logo">
                        <div class="logo-wrap">
                            <img  class="logo" src="<?php echo $logo_url; ?>">
                            <p><?php echo $supportingText; ?></p>
                        </div>
                    </div>
                        <?php endwhile;
                    else :
                        // no rows found
                    endif;?>
                </div>
            </div>
        </div>
    </div>





<?php get_template_part('template-parts/contact-section', '' ); ?>

<style>
    .meet-my-pod{
        padding-left: 11px;
    }
    .nophoto .width-half{
        width: unset;
    }
    .nophoto .team-member-quote{
        padding-right: 50px;
    }
    .video-container{
        width: 750px;
        margin: 10px auto;
        margin-bottom: 80px;

    }
    .accreditations-section{
        padding-top: 50px;
        padding-bottom: 20px;
        margin-bottom: 80px;
    }
    .meet-my-pod-section{
        margin-bottom: 50px;
    }
    .team-container{

    }
    .team-container a{

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

    }
    .pod-email{
        font-size: 14px;
        margin-bottom: 30px;
        line-height: 18px;
    }
    .pod-member{
        padding-right: 2px;
        padding-left: 2px;
        width: 100%;
        min-height: 300px;
        background-size: cover;
        background-position: center;
        display: inline-block;


    }
    .pod-member-image{
        height: 270px;
        background-size: cover;
    }
    .outside-work-section{
        margin-bottom: 50px;
    }
    .quote-name{
        padding-top: 13px;
        color: white;
    }
    .width-half{
        width:48%;
        display: inline-block;
        margin: auto;
        vertical-align: middle;
    }

    .team-member-quote h2{
        margin-bottom: 0px;
        color: white;
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
        /*background-color:rgba(82,133,145, 0.05);*/
        background-color:  #f8390e;
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
        width: 550px;
        min-height: 550px;
        position: absolute;
        top: 60px;
        left: -470px;
    }
    .team-info{
        width: 100%;
        min-height: 550px;
        background-color:rgba(82,133,145, 0.05);
        padding: 50px;

    }
    .scale-social{
        padding-top: 30px;
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
























