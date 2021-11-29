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

        </div>
    </div>
</div>