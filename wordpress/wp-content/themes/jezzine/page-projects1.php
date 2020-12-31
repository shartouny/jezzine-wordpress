<?php get_header(); $page = get_post(85); ?><!-- header-->
<!-- page content start  -->

<section id="projects-title" class="my-md-5 my-2">
    <div class="container">
        <h2 class="middle-line">
            <span class="text-right"><?php echo the_title(); ?></span>
        </h2>
        
    </div>
</section>

<section id="projects-list" class="my-md-4 my-2">
    <div class="container">
        <?php
        // echo get_post_type();


        $args = array(  
                'post_type' => 'cpt_119',
                'post_status' => 'publish',
                'posts_per_page' => 4, 
                'orderby' => 'date', 
                'order' => 'DESC', 
            );
        
            $loop = new WP_Query( $args ); 
                
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="bg-light-gray my-3">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <img src="<?php echo get_the_post_thumbnail_url( get_the_id() )?>" alt="" class="img-fluid">
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="container">
                        <p class="date mb-0">
                            <?php
                            
                            $date = get_post_meta(get_the_ID())['id_date'][0];
                            if(!empty($date)){
                                echo $date;
                            }else{
                                echo get_the_date(); 
                            } ?>
                        </p>
                        
                        <h2 class="text-justify mini"><?php echo the_title(); ?></h2>
                        <p class="text-justify"><?php echo limit_content_chr( get_the_content(), 300 ); ?></p>
                        <div class="position-absolute m-3 px-3 w-100 b-0 l-0">
                            <div class="text-left">
                                <a href="<?php the_permalink() ; _e('إقرأ المزيد')?>">
                                    <i class="fa fa-play-circle fa-rotate-180"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
             
            endwhile;
        
            wp_reset_postdata();
        ?>
        

    </div>
    <nav aria-label="Page navigation example" class="my-4">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">الصفحة التالية</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">الصفحة التالية</a>
            </li>
        </ul>
    </nav>
</section>
<!--contact section -->
<!-- page content end  -->
<?php get_footer(); ?>            
