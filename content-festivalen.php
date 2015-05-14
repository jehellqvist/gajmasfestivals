<?php
/*
Template Name: festivalen
*
* //used instead of page.php is choosen as template for the page
*/

?>

<section id='<?php echo $post->post_name; ?>' class='container-fluid'>
    <h1><?php the_title()?></h1>
	<div class="row">
		<h1><?php echo get_field('rubrik')?></h1>
		<p><?php echo get_field('introtext')?></p>
		<p><?php echo get_field('medverka_lank')?></p>
		<p><?php echo get_field('aktor_1')?></p>
		<img src='<?php echo get_field('aktor_1_bild')?>' alt="Bild på aktör 1">
		<p><?php echo get_field('aktor_1_citat')?></p>
		<p><?php echo get_field('aktor_2')?></p>
		<img src="<?php echo get_field('aktor_2_bild')?>" alt="Bild på aktör 2">
		<p><?php echo get_field('aktor_2_citat')?></p>
		<p><?php echo get_field('aktor_3')?></p>
		<img src="<?php echo get_field('aktor_3_bild')?>" alt="Bild på aktör 3">
		<p><?php echo get_field('aktor_3_citat')?></p>
	</div><!-- .row .entry-content -->

</section><!-- #post-## -->
