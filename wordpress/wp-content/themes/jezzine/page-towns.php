<?php get_header();
get_posts(72); ?>

<section id="towns" class="mt-md-5 mt-2">
    <div class="container">
        <h2 class="middle-line">
            <span class="text-right"><?php the_title(); ?></span>
        </h2>
        <?php
        $categories = get_terms('towns-categories',array('orderby' => 'title',
                    'order'   => 'desc',)
                );
        foreach ($categories as $category) {
            echo '<h3>'. $category->name .'</h3>';
            
            $loop = new WP_Query(array(
                    'post_type' => 'towns',
                    
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'towns-categories',
                             'field' => $category->term_id,
                              'terms' => $category->name,
                        )
                    ),
                ));
            while ($loop->have_posts()) {
                $loop->the_post();
               
            }
        
        ?>
       
        <div class="row mt-md-5 mt-2">
            <div class="col-lg-3 col-md-4 col-sm-6 py-3">
                <div class="row">
                    <div class="col-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 px-0">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_id()); ?>" alt="" class="img-fluid">
                                    <div class="my-caption z-2">
                                        <div class="container p-2 px-lg-2">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <h3><?php the_title(); ?></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-shadow-dark z-1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <?php } wp_reset_postdata(); ?>
    </div>
</section>


<!-- page content end  -->
<?php get_footer(); ?>