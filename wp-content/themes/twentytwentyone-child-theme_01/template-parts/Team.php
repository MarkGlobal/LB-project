<?php
/*
* Template name: Team
*
*/
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');

?>
<?php get_header('internal'); ?>
<div class="meet-team-banner-section" style="background-image: url('<?php echo $featured_img_url?>')"></div>

<div class="container">
    <div class="row">
            <h1 class="teal" style="text-align: center; padding-top: 70px; padding-bottom: 70px;">Meet our team</h1>
            <?php
            while( have_rows('team_cats') ) { the_row();
                $category = get_sub_field( 'category_name') ;
                $hasBio = get_sub_field( 'type') ;
                ?>

                <h4 class="category-name orange"><?php echo $category;?></h4>
                <?php
                    while (have_rows('team_members')) { the_row();

                            if(get_sub_field( 'team_member')) {
                                $teamMember = get_sub_field('team_member');
                                $teamMemberID = $teamMember->ID;
                                $individualPage = get_post_permalink($teamMemberID);
                                $individualFeaturedImage = wp_get_attachment_image_src(get_post_thumbnail_id($teamMemberID), 'full')[0];
                                ?>
                                <div class="col-4 team individual-team-card" style="<?php if(!$hasBio){ echo 'pointer-events: none;'; }?>">
                                    <a href="<?php echo $individualPage; ?>">
                                        <img class="team-img" src="<?php echo $individualFeaturedImage ?>">
                                        <p class="name"><?php echo $teamMember->post_title; ?></p>
                                        <h4 class="job-role"><?php the_field('job_title', $teamMemberID); ?></h4>

                                        <?php if ($hasBio): ?>
                                            <p class="tag-line"><?php the_field('tag_line', $teamMemberID); ?></p>
                                            <p class="bio-excerpt"><?php the_field('bio', $teamMemberID); ?></p>
                                            <a href="<?php echo get_post_permalink($teamMemberID); ?>" target="_blank">
                                            <button class="button-orange team-view-more">More about me</button>

                                                <style>

                                                </style>
                                        <?php else: ?>
                                            <div class="no-bio-spacer"></div>
                                        <?php endif; ?>
                                    </a>

                                    </a>
                                </div>

                                <?php
                            }
                    }
                    ?>
                <div class="group-space"></div>
                <?php
            }


            ?>







    </div>












</div>
<?php get_footer(); ?>


<style>
            .no-bio-spacer{
                padding-bottom: 80px;
            }
            .group-space{
                padding-bottom: 100px;
            }
            .category-name{
                padding-bottom: 15px;
            }
            .team a{
                text-decoration: none;
            }
            .meet-team-banner-section{
                height: 840px;
                background-size: cover;
                background-position: bottom;
            }
            .team-img{
                width: 415px;
                height: 587px;
                object-fit: cover;
                object-position: top;
            }
            .name{
                font-family: AvenirNextMedium;
                color: #486C78;
                font-size: 18px;
                padding-top: 23px;
            }

            .job-role{
                color: #5597AE;
                font-size: 18px;
                padding-top: 5px;
            }
            .tag-line{
                color: #4C5151;
                font-size: 25px;
                font-family: AvenirNextMedium;
                padding-top: 5px;
                height: 100px;
                overflow: hidden;
            }
            .team-view-more{
                transform: scale(0.8) translateX(-12%) !important;
                margin-top: 20px;
                margin-bottom: 60px;
            }
            .team-view-more:hover{
                color: white;
            }
            .bio-excerpt{
                font-size: 15px;
                line-height: 20px;
                padding-top: 18px;
                padding-right: 15px;
                color: #9D9D9C;

                -webkit-mask-image: linear-gradient(to bottom, black 70%, transparent 100%);
                mask-image: linear-gradient(to bottom, black 50%, transparent 100%);
                height: 120px;
            }
            .signature{
                padding-top: 30px;
                height:80px;
            }

        </style>
