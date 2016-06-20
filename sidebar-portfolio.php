
<?php query_posts( 'category_name=portfolio' ); ?>

<!-- Portfolio Grid Section -->
<section id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2>Portfolio</h2>
				<hr class="star-primary">
			</div>
		</div>
		<div class="row">
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content-portfolio', get_post_format() );

				// End the loop.
			endwhile;
			?>
		</div>
	</div>
</section>


<?php rewind_posts(); ?>

<!-- Portfolio Modals -->
<?php
// Start the loop.
while ( have_posts() ) : the_post();

	/*
	 * Include the Post-Format-specific template for the content.
	 * If you want to override this in a child theme, then include a file
	 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
	 */
	get_template_part( 'template-parts/content-portfolio-modal', get_post_format() );

	// End the loop.
endwhile;
?>