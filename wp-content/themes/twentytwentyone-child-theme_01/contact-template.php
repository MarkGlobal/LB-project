<?php
/*
 * Template name: Contact page
 *
 */
get_header('internal'); ?>

<div class="contact-page" style='background-image: url(<?php echo get_stylesheet_directory_uri(  ) . '/assets/images/contact-back.jpg'; ?>);'>

<div class="container">
    <div class="how-to-find-us row">
        <div class="get-in-touch col-6">
            <div class="get-in-touch-inner col-8 offset-2">
                <h4 class="orange">get in touch</h4>
                <h1 class="cyprus get-in-touch-header">How to find us</h1>
                <h5>Building relationships built upon trust to last through the generations</h5>
                <p class="grey get-in-touch-body">Based in the heart of the historic market town of Wimborne Minster our office is designed to be a welcoming and inclusive environment for clients to freely discuss their finances at a time of their pleasing.  </p>
                <i class="fas fa-phone-alt contact-icon"><span class="contact-details">01202 695 801</span></i>
                <i class="fas fa-envelope contact-icon"><span class="contact-details">lesterbrunt@sjpp.co.uk</span></i>
                <p class="opening-hours grey">Opening hours:</p>
                <p>Monday to Friday, 9am to 5pm.</p>
            </div>
        </div>
            <div class="map col-6">
<!--            <img class="contact-map" src="--><?php //echo get_stylesheet_directory_uri(  ). '/assets/images/map.jpg'; ?><!--" alt="">-->
<!--             <iframe class="map-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8722.158612359239!2d-1.9794478495220236!3d50.79795925728895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4873a4ec43c4112b%3A0xf966f358dd8f7cd7!2sLester%20Brunt%20Wealth%20Management!5e0!3m2!1sen!2suk!4v1634208820992!5m2!1sen!2suk" allowfullscreen="" loading="lazy"></iframe> -->
                <div class="lets-chat">
                    <div class="get-in-touch-inner">
                        <h4 class="white">get in touch</h4>
                        <h1 class="contact-form-header teal">Conversations with the<br>right people are priceless.</h1>
                        <h6 class="contact-form-subheader">Arrange a no obligation meeting<br>to start planning your financial future.</h6>
                        <div class="form-container white"><?php echo do_shortcode('[contact-form-7 id="50" title="Contact form"]'); ?></div>
                    </div>
                </div>
            </div>


    </div>

<!--    <div class="lets-chat row col-10 offset-1">-->
<!--        <div class="get-in-touch-inner col-10 offset-1">-->
<!--            <h4 class="white">get in touch</h4>-->
<!--            <h1 class="contact-form-header teal">Conversations with the<br>right people are priceless.</h1>-->
<!--            <h6 class="contact-form-subheader">Arrange a no obligation meeting<br>to start planning your financial future.</h6>-->
<!--            <div class="form-container white">--><?php //echo do_shortcode('[contact-form-7 id="50" title="Contact form"]'); ?><!--</div>-->
<!--        </div>-->
<!--    </div>-->
    </div>
    <div class="container-fluid">
    <div class="row globe-container">
        <div class="col-12">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/globe.png" alt="">
        </div>
    </div>
    </div>
</div>

<div class="container">
    <div class="row section building-relationships">
        <h4 class="orange">what to expect</h4>
        <h1 class="contact-form-header col-8 teal">Building relationships built upon trust to last through the generations.</h1>
        <p class="col-8 gold">Based in the heart of the historic market town of Wimborne Minster our office is designed to be a welcoming and inclusive environment for clients to freely discuss their finances at a time of their pleasing. </p>
        <p class="col-6">We have 17 dedicated adviser based throughout the south of England, operating across the width and breadth of the nation. Our heart may be based in Wimborne but our advisers operate on your terms. Meeting you when and where youfeel most comfortable. We cater for face to face or video conferencing meetings for our clients, priding ourselves on making the process as carefree and easy as possible. </p>
        <img class="sofa-image col-6" src="/wp-content/uploads/2021/10/sofa.svg">
    </div>
</div>

<div class="contact-specialist-advisers-section">
    <div class="container">
        <div class="row section contact-specialist-advisers text-center">
           <h3>We have over 17 specialist advisors<br>waiting to help you.</h3>
            <button class="adviser-button button-orange">locate an adviser near you</button>
            <p class="col-8 offset-2 medium-copy">If you have any questions or queries we have over 40 highly qualified staff waiting to help you. Please feel free to fill in the contact form or get in touch via phone or email and one of our staff will be sure to point you in the right direction.</p>
            <p class="col-8 offset-2">For all things Lester Brunt, follow us on LinkedIn, Instagram, Facebook or Youtube to make sure you’re up to date.</p>
            <img class="briefcase-image" src="/wp-content/uploads/2021/10/briefcase2.png">

            <div class="social-container row teal">
                <div class="x col-1 justify-content-center offset-4 "><i class="social-icon fab fa-facebook" style="horiz-align: center"></i></div>
                <div class="x col-1"><i class="social-icon fab fa-linkedin-in justify-content-center"></i></div>
                <div class="col-1"><i class="social-icon fab fa-instagram"></i></div>
                <div class="col-1"><i class="social-icon fab fa-twitter"></i></div>
            </div>

        </div>
    </div>
</div>

<?php 
get_template_part('template-parts/our-brochure' ); 
get_footer(); 
?>