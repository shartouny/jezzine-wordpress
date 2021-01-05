<?php get_header(); ?>

<!-- header banner start  -->
<div class="container">
    <div class="py-3 py-lg-5">
        <div class="row">
            <div class="col-md-8 ">
                <div id="home-slider" class="carousel slide h-100" data-ride="carousel">

                    <div class="carousel-inner h-100">
                        <?php
                        $maxSlides = 6;
                        $j = 0;
                        $args = array(
                            'category' => 8,
                            'numberposts' => 8,
                        );
                        $myposts = get_posts($args);
                        $i = 0;
                        foreach ($myposts as $post) :
                            setup_postdata($post);
                            $active = '';
                            if ($i == 0) {
                                $active = 'active';
                            }
                            // echo '<pre>';
                            // print_r($post);
                            if ($i < $maxSlides) {

                        ?>
                                <div class="carousel-item z-0 h-100 <?= $active; ?>">
                                    <div class="position-relative h-100">
                                        <img class="d-block w-100 h-100" src="<?php echo get_the_post_thumbnail_url(get_the_id()); ?>" alt="First slide">
                                        <div class="my-caption z-2">
                                            <div class="container px-5">
                                                <div class="row  border-bottom">
                                                    <div class="col-8">
                                                        <h3><?php echo $post->post_title; ?></h3>
                                                    </div>
                                                    <div class="col text-left">
                                                        <a href="<?php the_permalink(); ?>"><?php _e('إقرأ المزيد'); ?>
                                                            <i class="fa fa-play-circle fa-rotate-180"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col">
                                                        <p class="date"><?php echo get_the_date('m-d-Y');  ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-shadow-dark z-1"></div>
                                    </div>
                                </div>
                        <?php $i++;
                            }
                        endforeach;
                        wp_reset_postdata(); ?>
                    </div>
                    <ol class="carousel-indicators m-3"> <?php
                                                            $j = 0;
                                                            $i = 0;
                                                            foreach ($myposts as $post) {
                                                                $active = '';
                                                                setup_postdata($post);
                                                                if ($i == 0) {
                                                                    $active = 'active';
                                                                }
                                                                if ($i < $maxSlides) { ?>
                                <li data-target="#home-slider" data-slide-to=<?php echo $i; ?> class="<?= $active; ?>"></li><?php
                                                                                                                            $i++;
                                                                                                                        }
                                                                                                                    }

                                                                                                                    wp_reset_postdata(); ?>
                    </ol>
                </div>
            </div>
            <div class="col-md-4 d-none d-md-block" id="side-news">
                <div class="row">
                    <div class="col-12">
                        <div class="container">
                            <div class="row">
                                <?php
                                $i = 0;
                                foreach ($myposts as $post) :
                                    if ($i >= $maxSlides) : ?>
                                        <a href="<?php the_permalink(); ?>" class="col-12 px-md-0 mb-4">
                                            <img src="<?php echo get_the_post_thumbnail_url(get_the_id()); ?>" alt="" class="img-fluid">
                                            <div class="my-caption z-2">
                                                <div class="container p-2 px-lg-5">
                                                    <div class="row  border-bottom">
                                                        <div class="col">
                                                            <h3><?php the_title(); ?></h3>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <p class="date"><?php echo get_the_date('m-d-Y'); ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-shadow-dark z-1"></div>
                                        </a> <?php
                                            endif;
                                            $i++;
                                        endforeach;
                                        wp_reset_postdata(); ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- header banner end  -->
<!-- page content start  -->
<!-- projects section start  -->
<div class="container" id="projects-list">
    <section id=" projects">
        <div class="container">
            <div class="row">
                <div class="col-12 p-0">
                    <h2 class="middle-line">
                        <span class="text-right"><?php echo get_the_title(85); ?> </span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <?php
            $args = array(
                'post_type' => 'cpt_119',
                'post_status' => 'publish',
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'DESC',
            );

            $loop = new WP_Query($args);

            while ($loop->have_posts()) : $loop->the_post(); ?>
                <div class="col-lg-4 col-md-6 mt-4 mt-md-2">
                    <div class="bg-light-gray project">
                        <div class="row">
                            <div class="col-12">
                                <a href="#">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="container">
                                    <p class="date">
                                        <?php

                                        $date = get_post_meta(get_the_ID())['id_date'][0];
                                        if (!empty($date)) {
                                            echo $date;
                                        } else {
                                            echo get_the_date('Y-m-d');
                                        } ?>
                                    </p>
                                    <h3><?php echo the_title(); ?></h3>
                                </div>

                            </div>
                            <div class="position-absolute b-0 l-0 m-3">
                                <a href="<?php the_permalink(); ?>" class="m-3"><?php _e('إقرأ المزيد'); ?>
                                    <i class="fa fa-play-circle fa-rotate-180"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </div>
    </section>
</div>
<!-- projects section end  -->
<!-- overview section start  -->
<div class="container">
    <section id="overview-sec" class="mt-md-5 mt-2">
        <div class="row">

            <div class="col-md-6">
                <div class="bg-light-gray h-100">
                    <div class="container">
                        <h2 class="middle-line">
                            <span class="text-right"><?php echo get_the_title(268); ?> </span>
                        </h2>
                    </div>
                    <img src="<?php echo get_the_post_thumbnail_url(268); ?>" alt="" class="img-fluid">
                    <div class="container py-3">
                        <?php echo get_post_field('post_content', 268); ?>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="bg-light-gray h-100">
                    <div class="container">
                        <h2 class="middle-line">
                            <span class="text-right"><?php echo get_the_title(272); ?> </span>
                        </h2>
                    </div>
                    <div class="container py-3">
                        <?php echo get_post_field('post_content', 272); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- overview section end  -->


<?php get_template_part('includes/img-gallery.inc'); ?>
<!--img-gallery section -->
<?php get_template_part('includes/subscribe-sec.inc'); ?>
<!--subscribe section -->

<?php get_footer(); ?>
<!-- page content end  -->