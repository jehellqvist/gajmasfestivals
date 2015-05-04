<?php
/*
Template Name: medverkande-aktorer
*
* //used instead of page.php is choosen as template for the page
* @package flyingtoffee
* @since flyingtoffee 1.0
*/
 
get_header(); ?>

	<main role="main">

		<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				// Include the page content template.
				get_template_part( 'content', 'page' );

				/*/ If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}*/
			endwhile;
		?>

	</main><!-- main -->
<?php get_footer(); ?>