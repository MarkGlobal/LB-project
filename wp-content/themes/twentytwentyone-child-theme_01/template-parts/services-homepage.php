<?php
/**
 * Created by IntelliJ IDEA.
 * User: mark
 * Date: 2021-11-24
 * Time: 13:26
 */
/*
*
*
*/
?>

<div class="services-home-section">
    <div class="container">
        <div class="row advice-heading-spacing">
            <h4 class="orange">what we offer</h4>
            <h3 class="getting-advice-heading cello">Getting advice.</h3>
            <h5 class="teal">See how we can help you<br>
                on your financial journey</h5>
        </div>

        <?php if( get_field('services') ): ?>
            <?php while( the_repeater_field('services') ):
                $serviceNumber = get_row_index();
                $newRow = ($serviceNumber == 1)||($serviceNumber == 4) ? true : false;
                $right = ($serviceNumber == 3)||($serviceNumber == 6) ? true : false;

                if($newRow){
                    $card = 'card-one';
                }
                else if($right){
                    $card = 'card-three';
                }
                else{
                    $card = '';
                }
                ?>

        <?php $Row = ($newRow) ? '<div class="row-of-services">' : '';  echo $Row ?>
            <div class="service-card <?php echo $card ?>">
                <div class="services-icon-container">
                    <img class="services-card-image" src="<?php echo get_sub_field('icon') ?>">
                </div>
                <h4 class="services-card-title"><?php echo get_sub_field('title_') ?></h4>
                <p class="services-card-sub"><?php echo get_sub_field('subheader') ?></p>
                <a href="<?php echo get_sub_field('service_page') ?>"><button class="button-orange scaled-button service-card-button">Discover more</button></a>
            </div>
                <?php $Row = ($right) ? '</div>' : '';  echo $Row ?>

           <?php endwhile; ?>
        <?php endif; ?>

<!--        <div class="row-of-services">-->
<!--            <div class="service-card card-one">-->
<!--                <div class="services-icon-container">-->
<!---->
<!--                    <img class="services-card-image" src="/wp-content/uploads/2021/11/Image-12.png">-->
<!--                </div>-->
<!--                <h4 class="services-card-title">investments & growth</h4>-->
<!--                <p class="services-card-sub">Helping you on<br>your journey.</p>-->
<!--                <a href="/investment-growth/"><button class="button-orange scaled-button service-card-button">Discover more</button></a>-->
<!--            </div>-->
<!--            <div class="service-card">-->
<!--                <div class="services-icon-container">-->
<!--                    <img class="services-card-image" src="/wp-content/uploads/2021/11/Image-18.png">-->
<!--                </div>-->
<!--                <h4 class="services-card-title">retirement planning</h4>-->
<!--                <p class="services-card-sub">A financial plan<br>that works for all.</p>-->
<!--                <a href="/retirement/"><button class="button-orange scaled-button service-card-button">Discover more</button></a>-->
<!--            </div>-->
<!--            <div class="service-card card-three">-->
<!--                <div class="services-icon-container">-->
<!--                    <img class="services-card-image" src="/wp-content/uploads/2021/11/Image-19.png">-->
<!--                </div>-->
<!--                <h4 class="services-card-title">Corporate services</h4>-->
<!--                <p class="services-card-sub">Supporting you<br>and your business.</p>-->
<!--                <a href="/corporate-services/"><button class="button-orange scaled-button service-card-button">Discover more</button></a>-->
<!--            </div>-->
<!--        </div>-->
<!--            <div class="row-of-services">-->
<!--                <div class="service-card card-one">-->
<!--                    <div class="services-icon-container">-->
<!--                        <img class="services-card-image" src="/wp-content/uploads/2021/11/Image-20.png">-->
<!--                    </div>-->
<!--                    <h4 class="services-card-title">protection planning</h4>-->
<!--                    <p class="services-card-sub">Protecting what's<br>important to you.</p>-->
<!--                    <a href="/protection-planning/"><button class="button-orange scaled-button service-card-button">Discover more</button></a>-->
<!--                </div>-->
<!--                <div class="service-card">-->
<!--                    <div class="services-icon-container">-->
<!--                        <img class="services-card-image" src="/wp-content/uploads/2021/11/Image-21.png">-->
<!--                    </div>-->
<!--                    <h4 class="services-card-title">intergenerational wealth managent</h4>-->
<!--                    <p class="services-card-sub">Building a plan<br>that works for all</p>-->
<!--                    <a href="/intergenerational-wealth-management/"><button class="button-orange scaled-button service-card-button">Discover more</button></a>-->
<!--                </div>-->
<!--                <div class="service-card card-three">-->
<!--                    <div class="services-icon-container">-->
<!--                        <img class="services-card-image" src="/wp-content/uploads/2021/11/Image-22.png">-->
<!--                    </div>-->
<!--                    <h4 class="services-card-title">Additional services</h4>-->
<!--                    <p class="services-card-sub">Catering for<br>all your needs</p>-->
<!--                    <a href="/additional-services/"><button class="button-orange scaled-button service-card-button">Discover more</button></a>-->
<!--                </div>-->
<!--            </div>-->

    </div>
</div>


<style>
    .row-of-services > div:nth-child(3n+2){}
    .services-icon-container{
        height: 100px;
    }
    .services-card-sub{
        color: #384f59;
        font-size: 20px;
        text-align: left;
        padding-top: 16px;
    }
    .service-card-button{
        float: left;
        margin-top: 15px;
    }
    .services-card-image{
        float: left;
        vertical-align: middle;
    }

    .services-card-title{
        color: #0d3427;
        text-align: left;
        padding-top: 5px;
        height: 45px;
    }
    .services-home-section{
        padding-top: 115px;
        padding-bottom: 115px;
    }
    .row-of-services{
        width: 100%;
        /*min-width: 1185px;*/
        text-align: center;
        padding-bottom: 50px;
    }
    .service-card{
        width: 350px;
        height: 350px;
        background-color: rgba(82,133,145, 0.18);
        display: inline-block;
        margin: auto;
        padding:25px;
        padding-top: 30px;
    }
    .card-three{
        float: right;
    }
    .card-one{
        float: left;
    }

    @media (max-width: 1200px) {
        .card-three, .card-one {
            float: none;
        }
    }
</style>
