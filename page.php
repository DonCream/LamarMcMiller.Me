<?php
/**
 * The template for displaying all pages
 * @package LamarMcMiller.Me
 */
get_header();
?>


	<div class="" id="content">
		<div class="row">
	     <div id="primary" class="content-area col-md-10">
		<main id="" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
		<?php get_sidebar(); ?>
   </div><!-- .row end-->
</div><!-- .container end -->
	<?php get_footer();
