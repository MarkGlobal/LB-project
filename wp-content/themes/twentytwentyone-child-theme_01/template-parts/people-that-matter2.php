<div class="people-that-matter">

    <div class="section container people-matter-section">
        <h3 class="people-heading cyprus text-center">The people that matter</h3>
        <div class="row">

                <?php if( have_rows('people_that_matter') ):
                    while ( have_rows('people_that_matter') ) : the_row();
                        $title = get_sub_field('title');
                        $image = get_sub_field('image');
                        $text = get_sub_field('text');
                        $link = get_sub_field('link');
                        $buttonText = get_sub_field('button_text');
                        ?>
                        <div class="col-4 people-col-container" style="">
                            <div class="people-col-new" style="background-image: url('<?php echo $image; ?>');">

                            </div>
                            <h4 class="people-that-matter-title"><?php echo $title; ?></h4>
                            <p class="tag-line-new"><?php echo $text; ?></p>
                            <a href="<?php echo $link; ?>"><button class="button-orange scaled-button"><?php echo $buttonText; ?></button></a>
                        </div>
                    <?php endwhile;
                else :
                    // no rows found
                endif;?>


<!--            <div class="col-4 people-col-container" style="">-->
<!---->
<!--                <div class=" people-col-new">-->
<!---->
<!--                </div>-->
<!--                <h4 class="people-that-matter-title">Clients</h4>-->
<!--                <p class="tag-line-new">You're the most important person-->
<!--                    we can ever meet, click here to find-->
<!--                    out what your LB journey-->
<!--                    could look like.</p>-->
<!--                <button class="button-orange scaled-button">discover more</button>-->
<!--            </div>-->
<!---->
<!--            <div class="col-4 people-col-container" style="">-->
<!--                <div class="people-col-new" style="background-image: url('/wp-content/uploads/2021/10/clients.jpg');">-->
<!---->
<!--                </div>-->
<!--                <h4 class="people-that-matter-title">Our People</h4>-->
<!--                <p class="tag-line-new">Highly qualified, professional,-->
<!--                    and always ready to answer any query,-->
<!--                    our staff are great people-->
<!--                    who are keen to help.</p>-->
<!--                <a href="/our-team"><button class="button-orange scaled-button">meet the team</button></a>-->
<!--            </div>-->
<!---->
<!--            <div class="col-4 people-col-container" style="">-->
<!--                <div class="people-col-new" style="background-image: url('/wp-content/uploads/2021/11/community2.jpg');  background-position: top -100px;">-->
<!--                    -->
<!--                </div>-->
<!--                <h4 class="people-that-matter-title">Community</h4>-->
<!--                <p class="tag-line-new">We believe in making an impact.-->
<!--                    Our local community is no different,-->
<!--                    see the work we do in our-->
<!--                    local communities.</p>-->
<!--                <a href="/our-team"><button class="button-orange scaled-button">join us</button></a>-->
<!--            </div>-->



        </div>
    </div>
</div>