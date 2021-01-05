<?php get_header(); get_posts(85); ?>   <!-- header-->


<section id="counsler-members-sec" class="mt-md-5 mt-2 p-md-5 p-2">
    <div class="container">
        <h2 class="middle-line">
            <span class="text-right"><?php echo the_title(); ?></span>
        </h2>
        <div class="row mt-md-5 mt-2">
            <?php 
                $args = array(  
                    'post_type' => 'cpt_144',
                    'post_status' => 'publish',
                    'posts_per_page' => 20, 
                    'orderby' => 'date', 
                    'order' => 'asc', 
                );
            
                $members = new WP_Query( $args ); 
                
                while($members->have_posts()){$members->the_post();
                    $memberName = get_post_meta(get_the_ID())['mem-name'][0];
                    $memberTown = get_post_meta(get_the_ID())['mem-town'][0];
             ?>

            <div class="col-md-3">
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="" class="img-fluid">
                <p><?php echo $memberName ;?></p>
                <p><?php echo $memberTown ; ?></p>
            </div>
            <?php } wp_reset_postdata();?>
        </div>
    </div>
</section>
      
        
<!-- page content end  -->
<?php get_footer(); ?>   <!-- footer-->
