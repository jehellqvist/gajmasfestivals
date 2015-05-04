<?php
/**
 * The template used for displaying page content
 *
 */
?>

<section class="container-fluid" id="post-<?php the_ID(); ?>">

	<div class="row entry-content">
		<?php
			the_content();
		?>
	</div><!-- .row .entry-content -->

</section><!-- #post-## -->
