<section class="video" style="background-image: url(images/Ray_1.jpg);">
        <div class="top">
            <div class="container">
                <h2 class="text-center heading2"><?php echo get_sub_field('heading'); ?></h2>
                
                <?php echo get_sub_field('content'); ?>
            </div>
        </div>
        <div class="bottom">
            <div class="container">
                <article class="left">
                    <span class="heading2"><?php echo get_sub_field('video_title'); ?></span>
                    <p>Artist:<?php echo get_sub_field('artist'); ?></p>
                    <p>Music Produced by: <?php echo get_sub_field('producer'); ?></p>
                    <p>Video shot by: <?php echo get_sub_field('shot_by'); ?></p>
                </article>
                <div class="right">
                    <?php the_sub_field('iframe') ?>
                </div>
            </div>
        </div>
    </section>