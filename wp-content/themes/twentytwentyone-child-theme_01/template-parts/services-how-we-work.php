<section class="how-we-work-bg" style="background: #fff url(/wp-content/uploads/2021/10/bark-vertical3.png);">
    <div class="container how-we-work-section">
        <div class="row">
            <h4 class="orange">how we work</h4>
            <h1 class="cyprus"><?php the_field('heading'); ?></h1>
            <p class="gold col-6 gold-para" style="font-family:AvenirNextMedium;"><?php the_field('gold_paragraph'); ?></p>
            <p class="how-we-work-para"><?php the_field('normal_paragraph'); ?></p>

            <div class="row <?php if(!get_the_id()==95){echo "hide";} ?>">
                <div class="col-4 diagram-container" style="">
                        <div style="position: relative; top:140px; left: 182px;"><h2 class="diagram-text orange">Plan</h2></div>
                        <div style="display: inline-block; "><img src="/wp-content/uploads/2021/10/Asset%204.png" ></div>
                    <p><?php the_field('plan'); ?></p>
                </div>
                <div class="col-4 diagram-container">
                    <h2 class="diagram-text orange" style="position: relative; top:180px; left:0px;">Design</h2>
                    <img src="/wp-content/uploads/2021/10/Asset%205.png" style="position: relative; left: 63px; top: -10px;">
                    <p><?php the_field('design'); ?></p>
                </div>
                <div class="col-4 diagram-container">
                <h2 class="diagram-text orange" style="position: relative; top:144px; left: 200px;">Review</h2>
                <img src="/wp-content/uploads/2021/10/Asset%206.png" >

                <p><?php the_field('review'); ?></p>
            </div>
            </div>

        </div>
    </div>
</section>
