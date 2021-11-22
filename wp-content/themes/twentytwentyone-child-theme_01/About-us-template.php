<?php
/*
* Template name: About Us
*
*/
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
?>
<?php get_header('internal'); ?>
    <div class="about-us-header">
        <div class="container">
            <div class="row title-row">

                <div class="team-image" style="background-image: url('<?php echo $featured_img_url; ?>'); ">
                    <h1 class="about-us white">About Us</h1>
                </div>
                <img class="lb-office-image" src="https://static.wixstatic.com/media/b4f9e2_121e3d8cbb46452195ec4a571fd62122~mv2.jpg/v1/crop/x_455,y_0,w_891,h_1200/fill/w_566,h_760,al_c,q_85,usm_0.66_1.00_0.01/ST1_8399rt.webp">
            </div>
        </div>
    </div>

    <div class="about-us-intro-section">
        <div class="container">
            <div class="row">
                <h4 class="orange">about us</h4>
                <h1 class="about-h1 white col-9">We believe in a fairer, more informed, more inclusive way of financial advice. Helping you and your family plan for the future.</h1>
                <p class="intro-paragraph white">Offering advice and guidance across a range of financial topics, from helping families get a foot on the property ladder to aiding clients save and grow that bit of spare income for life's adventures. We pride ourselves on informing and educating our clients through their financial journey, so they get the best outcome for them and their family.</p>
            </div>
        </div>
    </div>

    <div class="who-we-are">
        <div class="container">
            <div class="row about-us-row">
                <div class="">
                    <h4 class="orange left-heading">Who we are</h4>
                </div>
                <div class="about-para">
                    <p>For over 20 years we have been helping clients and their families navigate the complexities of financial planning, always putting the client and their family first. Based on the south coast and operating across the south of the UK, we are a leading Senior Partner Practice of St James’ Place Wealth Management.  We are a family based, family focused company, priding ourselves on taking a holistic view of client’s circumstances, appreciating the issues and challenges that face all of us, young or old irrespective of backgrounds.</p>
                </div>
            </div>

            <div class="row about-us-row">
                <div class="">
                    <h4 class="orange left-heading">What we do</h4>
                </div>
                <div class="about-para">
                    <p>We help over 4,500 clients to manage their finances, plan for their future and support their family whilst giving them financial peace of mind. Working with you, we take a holistic view to find a bespoke solution for your specific circumstances.  Taking the time to sit with you to understand your current situation, the goals you have planned and any doubts that may keep you from achieving them. Only then can we help you, using our expertise to find a solution suitable not only for the you, but your loved ones also. We put you at the centre of everything we do, making sure your needs are listened to and catered for, ensuring that it is always you and your family first.</p>
                </div>
            </div>

            <div class="row about-us-row">
                <div class="">
                    <h4 class="orange left-heading">Why we do it</h4>
                </div>
                <div class="about-para">
                    <p>Because families are important and working in a family business just makes you realise how important it is to look after future generations.  Our clients work hard and strive to improve their lives and the lives of their families, having money simply allows for different choices which directly impacts their wellbeing.  You need to plan ahead and have an idea of what you want to achieve.  This is hard to do without help and we feel we can give the best help available.</p>
                </div>
            </div>

        </div>
    </div>

    <div class="sjp-section" style="min-height: 500px;">
        <div class="container-fluid sjp-container">
            <div class="row sjp-row">
                <div class="col-6"></div>
                <div class="col-6 sjp-right">
                    <img src="/wp-content/uploads/2021/10/st-jamess-place-logo-768x373.png" class="col-2 sjp-logo">
                    <h3 class="sjp-header">St. James' Place<br>Wealth Management</h3>
                    <p class="sjp-para">St. James' Place Wealth Management
                        As a senior partner practice of St. James’s Place Wealth Management Lester Brunt Wealth Management will provide the advice whilst having access to the St. James’s Place distinctive investment approach and the backing and reassurance of investing with a FTSE 100 company.  With social value at the core of the St. James’s Place culture. They recognise that we have a responsibility to help address social, environmental and economic challenges the world faces. Aiming to make a lasting difference to those in need and change their lives for the better.
                        <br>
                        St. James’s Place guarantee the suitability of the advice given us when recommending any of the wealth management products and services available from companies in the Group.
                        More details of which are set out on the Group’s website at www.sjp.co.uk/products.
                        <br>
                        This quite simply gives you reassurance and peace of mind when planning your financial future.
                        <br>
                        The value of an investment with St. James’s Place will be directly linked to the performance of the funds you select and the value can therefore go down as well as up. You may get back less than you invested.
                    </p>
                    <button class="button-orange sjp-button">Read More</button>
                </div>
            </div>
        </div>
    </div>

    <div class="client-journey-section">
        <div class="container-fluid">
            <div class="row">
                <div class="map-image">
                    <h3 class="client-journey white">Client Journey</h3>
                </div>
            </div>
        </div>
        <div class="container journey-container">
            <?php
            $inc = 0;
            if( have_rows('client_journey') ):
            while( have_rows('client_journey') ) : the_row();
            $inc++;
            if ($inc > 1 && $inc % 2 == 0) {
                ?>
                <div class="row client-journey-row">
                    <div class="journey-text-container-left" style="width:55%;">
                        <h5 class="orange journey-number"><?php echo sprintf("%02d",$inc); ?></h5>
                        <h5 class="journey-heading"><?php echo get_sub_field( 'heading' ); ?></h5>
                        <p><?php echo get_sub_field( 'paragraph' ); ?></p>
                    </div>
                    <div class="journey-image" style="background-image: url(<?php echo get_sub_field( 'image' ); ?>);"></div>
                </div>
                        <?php
            } else {
                        ?>
                <div class="row client-journey-row">
                    <div class="journey-image" style="background-image: url(<?php echo get_sub_field( 'image' ); ?>);"></div>
                    <div class="journey-text-container-right" style="width:55%;">
                        <h5 class="orange journey-number"><?php echo sprintf("%02d",$inc); ?></h5>
                        <h5 class="journey-heading"><?php echo get_sub_field( 'heading' ); ?></h5>
                        <p><?php echo get_sub_field( 'paragraph' ); ?></p>
                    </div>
                </div>
                        <?php
            }
        ?>
            <?php
            endwhile;
            endif;
            ?>
        </div>
    </div>

<?php get_footer(); ?>
