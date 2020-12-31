<?php get_header(); get_posts(66) ?>            
<!-- header-->
<!-- page content start  -->
<section id="news-header-slider" class="my-md-5 my-2">
    <div class="container">
        <h2 class="middle-line">
            <span class="text-right"><?php echo the_title(); ?></span>
        </h2>
        <div class="row mt-2 mt-md-0">
            <div class="col-12">
                <div id="news-slider" class="carousel slide h-100" data-ride="carousel">
                    <div class="carousel-inner h-100">
                        <?php 
                            $args = array( 
                                'category' => 4 ,
                                'numberposts' => 5, 
                                );
                            $myposts = get_posts($args);
                            $i=0;
                            foreach($myposts as $post){
                                setup_postdata($post);
                                $active = '';
                                if($i==0){
                                    $active = 'active';
                                }
                                // echo '<pre>';
                                // print_r($post);
                            
                        ?>
                        <div class="carousel-item bg-light-gray z-0 h-100 <?= $active;?>">
                            <div class="row h-100">
                                <div class="col-md-6 col-lg-8">
                                    <div class="position-relative h-100">
                                        <img class="d-block w-100 h-100" src="<?php  echo get_the_post_thumbnail_url( get_the_id() ); ?>" alt="First slide">

                                        <div class="bg-shadow-dark z-1"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 text-justify pr-md-0">
                                    <div class="container">
                                        <p class="date mb-0"><?php echo get_the_date();  ?></p>
                                        <h2 class="text-justify mb-md-5 mb-3 mini"><?php echo $post->post_title; ?></h2>
                                        <div class="text-justify"><?php echo $post->post_content; ?></div>
                                        <div class="position-absolute m-3 px-3 w-100 b-0 l-0">
                                            <div class=" border-top">
                                                <div class="text-left">
                                                    <a href="<?php the_permalink(); ?>"><?php _e('إقرأ المزيد') ?>
                                                        <i class="fa fa-play-circle fa-rotate-180"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php  $i++; }  wp_reset_postdata(); ?>
                    </div>
                    <ol class="carousel-indicators m-3">
                        <?php 
                            $i =0;
                            foreach($myposts as $sliderNew){
                                $active = '';
                                setup_postdata($sliderNew);
                                if($i==0){
                                    $active = 'active';
                                }
                        ?>
                        <li data-target="#news-slider" data-slide-to="i" class="<?= $active; ?>"></li>
                        <?php $i++; } wp_reset_postdata();?>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <hr>
</div>
<section id="news-list" class="my-md-4 my-2">
    <div class="container">
        <?php 
            $args = array( 
                
                'numberposts' => 3, 
                );
            $myposts = get_posts($args);
        
            foreach($myposts as $post){
                setup_postdata($post);
                
            
        ?>
        <div class="bg-light-gray my-3">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <img src="<?php  echo get_the_post_thumbnail_url( get_the_id() ); ?>" alt="" class="img-fluid">
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="container">
                        <p class="date mb-0"><?php echo get_the_date(); ?></p>
                        <h2 class="text-justify mini"><?php echo $post->post_title; ?></h2>
                        <div class="text-justify"><?php echo $post->post_content ; ?></div>

                        <div class="position-absolute m-3 px-3 w-100 b-0 l-0">
                            <div class="text-left">
                                <a href="<?php the_permalink(); ?>"><?php _e('إقرأ المزيد') ?>
                                    <i class="fa fa-play-circle fa-rotate-180"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php  } wp_reset_postdata();?>
  
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
