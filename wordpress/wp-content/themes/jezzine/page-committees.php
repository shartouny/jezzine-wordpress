<?php get_header();
get_posts(288); ?>
<!-- header-->


<section id="counsler-members-sec" class="mt-md-5 mt-2 p-md-5 p-2">
    <div class="container">
        <h2 class="middle-line">
            <span class="text-right"><?php echo the_title(); ?></span>
        </h2>
        <div class="row mt-md-5 mt-2">
            <?php
            $args = array(
                'post_type' => 'committee',
                'post_status' => 'publish',
                'posts_per_page' => 20,
                'orderby' => 'date',
                'order' => 'asc',
            );

            $committees = new WP_Query($args);

            while ($committees->have_posts()) {
                $committees->the_post();
                
            ?>

                <div class="col-md-3">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                    <p><?php the_title(); ?></p>
                    
                </div>
            <?php }
            wp_reset_postdata(); ?>
        </div>
    </div>
</section>


<!-- page content end  -->
<?php get_footer(); ?>
<!-- footer-->