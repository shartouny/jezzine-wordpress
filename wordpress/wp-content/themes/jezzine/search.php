<?php get_header(); ?>
<!-- header-->

<section id="president-msj-sec" class="mt-md-5 mt-2 p-md-5 p-2">
	<div class="container">
		<h2 class="middle-line">
			<span class="text-right">
				<?php _e('نتائج البحث عن: ', 'twentynineteen'); ?>
				<span class="page-description"><?php echo get_search_query(); ?></span>
			</span>
		</h2>
		<div class="row mt-md-5 mt-2">
			<?php
				if (have_posts()) {
					echo '<br><p>loop starting now...</p> <br><br>';
					// Start the Loop.
					while (have_posts()) {
						echo '<div>this is ' . the_post() . 'right here</div> <br><br>';
						// Must be inside a loop.
						if (has_post_thumbnail()) { 
			?>
			<div class="col-md-3">
				<img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="" class="img-fluid">
			</div><?php } ?>
			<div class="col-md-9">
				<?php
					echo '<p>' . the_content() . '</p><br>';
					// End the loop.
				}
				// If no content, include the "No posts found" template.
			} else {
				// get_template_part( 'template-parts/content/content', 'none' );
				echo "no records";
			} ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>