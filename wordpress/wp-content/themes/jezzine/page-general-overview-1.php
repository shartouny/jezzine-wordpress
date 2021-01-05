<?php get_header(); get_posts(70);?>            
<!-- header-->
<section id="general-overview" class="mt-md-5 mt-2">
    <div class="container">
        <h2 class="middle-line">
            <span class="text-right"><?php the_title(); ?> </span>
        </h2>
        <?php 
            $args = array(  
                'post_type' => 'overview',
                'post_status' => 'publish',
            );
            $loop = new WP_Query($args);
            while($loop->have_posts()){
                $loop->the_post();
        ?>
        <div class="row mt-md-5 mt-2">
            <div class="col-md-3">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_id()); ?>" alt="" class="img-fluid">
            </div>
            <div class="col-md-9">
                <h3 class="py-3"><?php the_title(); ?></h3>
                <p><?php echo the_content(); ?></p>
            </div>
        </div>
        <hr>
        <?php } wp_reset_postdata(); ?>
    </div>
</section>
      
        
<?php include 'includes/subscribe-sec.inc.php'; ?> <!--subscribe section -->
<?php include 'includes/contact-sec.inc.php'; ?> <!--contact section -->
<!-- page content end  -->
<?php get_footer(); ?>            
