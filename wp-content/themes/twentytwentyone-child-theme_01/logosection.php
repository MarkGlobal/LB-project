<div style="background-color:#ccdbe080;">
    <div class="parallax section" >
        <div class="">
            <div class="logo-carousel">

                <?php if( have_rows('logos') ):
                    while ( have_rows('logos') ) : the_row();
                        $logo_url = get_sub_field('logo_image');
                        $supportingText = get_sub_field('logo_text');
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
