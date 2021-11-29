<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php

$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );

?>
<header class="main-header load-fade">
    <div class="main-header__color"></div>

    <div class="container">

        <div class="row">
            
            <div class="col-6">
            <div class="main-site-logo clearfix">
                <a href="<?php echo get_home_url(); ?>">
                    <img class="lb-logo-top" src="<?php echo get_stylesheet_directory_uri(  ) . '/assets/images/LB_logo_top.png'; ?>">
                    <img class="lb-logo-bottom" src="<?php echo get_stylesheet_directory_uri(  ) . '/assets/images/LB_logo_bottom.png'; ?>">
                </a>
                </div>
            </div>
            <div class="col-6">
            <button class=" menu mobile-menu-activate top force-green" onclick="this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu">
                <svg width="70" height="45" viewBox="0 0 100 100">
                    <path style="stroke-linecap:round;" class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058"></path>
                    <path style="stroke-linecap:round;" class="line line2" d="M 20,50 H 80"></path>
                    <path style="stroke-linecap:round;" class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942"></path>
                </svg>
            </button>
            </div>
        </div>

    </div>

</header>




<div class="mobile-menu">
    <div class="container">
        <div class="row header-container">

            <div class="col-12 menu-container">
                <?php
                wp_nav_menu(array('theme_location' => 'primary','container' => '',));
                ?>
            </div>
        </div>
    </div>

</div>
