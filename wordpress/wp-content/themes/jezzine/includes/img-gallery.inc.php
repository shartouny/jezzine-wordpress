<!-- img gallery section start  -->
<section id="img-gallery" class="bg-light-gray mt-md-5 mt-2 p-md-5 p-2">
    <div class="container">
        <h2 class="middle-line">
            <span class="text-right"> <?php echo _e('ألبوم الصور') ;?></span>
        </h2>
        <div class="owl-carousel owl-theme mt-md-5 mt-2">
            <?php 
            $args = array(
                'post_type' => 'img-gallery',
                'post_status' => 'publish'
            );
            $imgs = new WP_Query($args);
            while($imgs->have_posts()): $imgs->the_post();
             ?>
            <div class="item"><img src="<?php echo get_the_post_thumbnail_url(get_the_id());?>" alt="" class="img-fluid"></div>
            <?php 
            endwhile; wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
<!-- img gallery section end  -->