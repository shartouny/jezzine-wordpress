<?php get_header();
?>
<!-- header-->
<section id="president-msj-sec" class="mt-md-5 mt-2 p-md-5 p-2">
    <div class="container">
        <h2 class="middle-line">
            <span class="text-right"><?php the_title(); ?> </span>
        </h2>
        <div class="row">
            <div class="col-12">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" alt="" class="img-fluid">
            </div>
        </div>
        <div class="row mt-md-5 mt-2">

            <div class="col-12">
                <p><?php the_content(); ?></p>

            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>