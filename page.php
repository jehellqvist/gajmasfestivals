<?php
/**
 * The template for displaying all pages
 *
 *
 */

?>
<?php get_header();?>
	<main role="main">

		<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				// Include the page content template.
				get_template_part( 'content', get_post_format() );
				
				/*/ If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}*/
			endwhile;


		?>

		

	</main><!-- main -->


<?php get_footer();?>
