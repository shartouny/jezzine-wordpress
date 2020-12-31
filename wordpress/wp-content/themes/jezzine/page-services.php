<?php get_header(); get_post(68); ?>            
<!-- page content start  -->
<section id="services-tbl" class="mt-md-5 mt-2 p-md-5 p-2">
    <div class="container">
        <h2 class="middle-line">
            <span class="text-right"><?php the_title(); ?></span>
        </h2>
        <?php 
            $args=array(
                'post_type'=>'services',
                'post_status'=> 'publish',
            );
            $services =new WP_Query($args);
            while($services->have_posts()){
                $services->the_post();
              
            $serviceType =get_post_meta(get_the_id())['service-type'][0];
            $serviceFile = get_post_meta(get_the_id())['service-file'][0];
        ?>
        <div class="row mt-2 mt-md-0">
            <div class="col-md-auto m-md-2">
                <div class="row h-100">
                    <div class="col-12 my-auto">
                        <p class="my-auto"><?php _e('رمز المعاملة') ?> : <span class="rtl mr-1"><?php echo the_title(); ?></span></p>
                    </div>
                </div>
            </div>
            <div class="col-md m-md-2">
                <div class="row h-100">
                    <div class="col-lg-10 col-auto my-auto">
                        <p class="my-auto"><?php _e('إسم المعاملة') ?> :  <strong class="ml-1"><?php echo $serviceType; ?></strong></p>
                    </div>
                    <div class="col-auto mx-auto mx-sm-0 mr-md-auto my-auto p-2">
                        <a href="<?php echo $serviceFile; ?>" download=""><?php _e('تحميل') ?> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/pictures/pdf-icon Object.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <?php } wp_reset_postdata(); ?>
    </div>
</section>
      
        
<!-- page content end  -->
<?php get_footer(); ?>            
