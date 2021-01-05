<?php get_header();$page = get_post(53); ?>   <!-- header-->
<section id="president-msj-sec" class="mt-md-5 mt-2 p-md-5 p-2">
    <div class="container">
        <h2 class="middle-line">
            <span class="text-right"><?php echo $page->post_title; ?> </span>
        </h2>
        <div class="row mt-md-5 mt-2">
            <div class="col-md-3">
                <img src="<?php echo get_the_post_thumbnail_url( get_the_ID())?>" alt="" class="img-fluid">
            </div>
            <div class="col-md-9">
                <p><?php echo $page->post_content;?></p>
            <p class="signature"><?php echo get_post_meta(get_the_id())['field_at1nxb'][0]; ?></p>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>   