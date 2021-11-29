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
<!--        <div class="col-4 team">-->
<!--            <img src="https://lesterbrunt.web2-globalgroup.temporarywebsiteaddress.com/wp-content/uploads/2021/11/emp1.png">-->
<!--            <p class="name">James Jones</p>-->
<!--            <h4 class="job-role">Financial Adviser</h4>-->
<!--            <p class="tag-line">Keeping fit and having fun along the way.</p>-->
<!--            <p class="bio-excerpt">Lorem ipsum dolor sit amet, consectetuer adipiing elit, sed diam non ummy nibh esmod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip.</p>-->
<!--            <div class="signature">-->
<!--                <img src="https://lesterbrunt.web2-globalgroup.temporarywebsiteaddress.com/wp-content/uploads/2021/11/sig3.png">-->
<!--            </div>-->
<!--            <button class="button-orange team-view-more">More about me</button>-->
<!--        </div>-->
        
            <h1 class="teal" style="text-align: center; padding-top: 70px; padding-bottom: 70px;">Meet our team</h1>
            <?php
            $args = array( 'post_type' => "team members", 'orderby' => 'menu_order post_title');
            $posts = get_posts($args);
            foreach( $posts as $post) : setup_postdata($post);
            ?>
            <div class="col-4 team">
                <img class="team-img" src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' )[0]; ?>">
                <p class="name"><?php echo $post->post_title; ?></p>
                <h4 class="job-role"><?php the_field( 'job_title', $post->ID ); ?></h4>
                <p class="tag-line"><?php the_field( 'tag_line', $post->ID ); ?></p>
                <p class="bio-excerpt"><?php the_field( 'bio', $post->ID ); ?></p>
                <div class="signature hide"><img src="<?php the_field( 'signature', $post->ID ); ?>"></div>
                <a href="<?php echo get_post_permalink($post->ID); ?>" target="_blank"><button class="button-orange team-view-more">More about me</button></a>
            </div>
             <?php
            endforeach;
            ?>

        <div class="col-4 team"></div>

        <style>
            .meet-team-banner-section{
                height: 840px;
                background-size: cover;
                background-position: bottom;
            }
            .team-img{
                width: 415px;
                height: 443px;
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
                height: 80px;
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
    </div>
</div>
<?php get_footer(); ?>
