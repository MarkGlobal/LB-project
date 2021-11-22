<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<div class="footer">
    <div class="container section">
    <div class="row section-headings">

    </div>

    <div class="row">
        <h4 class="footer-heading offset-1 col-12">Keep in touch</h4>
        <h5 class="footer-sub-heading offset-1 col-5">Keep up-to-date with our latest news</h5>
            <div class="col-1 justify-content-center"><i class="social-icon fab fa-facebook" style="horiz-align: center"></i></div>
            <div class="col-1"><i class="social-icon fab fa-linkedin-in"></i></div>
            <div class="col-1"><i class="social-icon fab fa-instagram"></i></div>
            <div class="col-1"><i class="social-icon fab fa-twitter"></i></div>
    </div>

    <div class="row">
       <?php echo do_shortcode( '[contact-form-7 id="84" title="Email CTA"]' ); ?>
    </div>

    <div class="row">
        <div class="offset-1 col-9">
            <p class="terms-conditions">Lester brunt Wealth Management is an Appointed Representative of and represents only St. James's Place Wealth Management plc (which is authorised and regulated by the Financial Conduct Authority) for the purpose of advising solely on the Group’s wealth management products and services, more details of which are set out on the Group’s website www.sjp.co.uk/products.
                The ‘St. James's Place Partnership’ and the titles ‘Partner’ and ‘Partner Practice’ are marketing terms used to describe
                St. James's Place representatives. </p>
            <p class="terms-conditions">Lester Brunt Wealth Management is a trading name of Lester Brunt Wealth Management Ltd. Lester Brunt Wealth Management Ltd is a Limited Liability Partnership registered in England and Wales, Number 10973718. Registered Office: 7 & 8 Church Street, Wimborne, Dorset, BH21 1JH.  </p>
        </div>

    <div class="row no-gutters">
        <p class="footer-tc-links offset-1 col-12">
        <a>Privacy policy |</a>
        <a>Site Disclaimer |</a>
        <a>T&Cs |</a>
        <a>Acessibility</a>
        </p>
    </div>

    </div>
    </div>
</div>
<?php wp_footer(); ?>

</body>
</html>
