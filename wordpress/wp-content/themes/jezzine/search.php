<?php get_header(); ?>   <!-- header-->
<section id="president-msj-sec" class="mt-md-5 mt-2 p-md-5 p-2">
    <div class="container">
        <h2 class="middle-line">
            <span class="text-right">
				<?php _e( 'نتائج البحث عن: ', 'twentynineteen' ); ?>
				<span class="page-description"><?php echo get_search_query(); ?></span>
			 </span>
        </h2>
        <div class="row mt-md-5 mt-2">
            <div class="col-md-3">
				<img src="
				<?php
					// Must be inside a loop.
					
					if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					}
					else {
						echo get_bloginfo( 'stylesheet_directory' ) . '/images/thumbnail-default.jpg';
					}
					?>
				" alt="" class="img-fluid">
            </div>
            <div class="col-md-9">
            	<p>
				<?php if ( have_posts() ) : 
			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that
				 * will be used instead.
				 */
				echo the_content();			
				// get_template_part( 'template-parts/content/content', 'excerpt' );

				// End the loop.
			endwhile;

			// Previous/next page navigation.
			// twentynineteen_the_posts_navigation();

			// If no content, include the "No posts found" template.
		else :
			// get_template_part( 'template-parts/content/content', 'none' );
			echo "no records";

		endif;
		?>
				</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>   



