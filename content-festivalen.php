<?php
/*
Template Name: festivalen
*
* //used instead of page.php is choosen as template for the page
*/

?>

<section class="container-fluid" id="post-<?php the_ID(); ?>">

	<div class="row entry-content">
		<?php
			the_content();
		?>
	</div><!-- .row .entry-content -->

</section><!-- #post-## -->
