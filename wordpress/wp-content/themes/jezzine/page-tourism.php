<?php get_header();
get_posts(74); ?>

<!-- page content start  -->
<!-- tourism section start  -->
<section id="tourism">
    <div class="container my-md-5 my-2">
        <h2 class="middle-line">
            <span class="text-right"><?php the_title(); ?></span>
        </h2>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="p-3">
                    <div class="row justify-content-between">
                        <div class="col-auto p-0">
                            <h3><?php $content = get_the_content();
                                echo strip_tags($content); ?> </h3>
                        </div>
                        <div class="col-auto p-0 d-flex">
                            <a href="<?php echo get_the_post_thumbnail_url(get_the_id()); ?>" class="d-flex"><i class="fa fa-search bg-primary social-icon mx-2"></i></a>
                            <a href="<?php echo get_the_post_thumbnail_url(get_the_id()); ?>" class="d-flex" download><i class="fa fa-download social-icon mx-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_id()); ?>" alt="" class="img-fluid">
            </div>
        </div>
        <hr class="my-5">
        <?php
        $args = array(
            'post_type' => 'tourism',
            'post_status' => 'publish',
        );
        $loop = new WP_Query($args);
        while ($loop->have_posts()) {
            $loop->the_post();

        ?>
            <div class="row">
                <div class="col">
                    <h3 class="py-2"><?php the_title(); ?></h3>
                    <div class="text-justify"><?php the_content(); ?></div>
                </div>
            </div>
            <hr>
        <?php  }
        wp_reset_postdata(); ?>

</section>
<!-- tourism section end  -->


<!-- page content end  -->
<?php get_footer(); ?>