<?php
/*
Template Name: om-hamnfestivalen
*
* //used instead of page.php is choosen as template for the page
*/

?>

<section id='<?php echo $post->post_name; ?>' class='container-fluid'>
	<div id="about" class="row">
		<div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 center-text">
			<h1><?php the_title()?></h1>
			<?php the_content(); ?>
		</div><!--col-lg-*-->

		<div class="social_share col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 text-center">
			<p>Dela dina festivalminnen <span class="tag">
				#<?php echo get_field('hash-tag')?>
			</span></p>
		</div><!--.social_share col-lg-8 col-lg-offset-2 center-text-->

		<div class="col-md-12">
			<?php $shortcode = '[alpine-phototile-for-instagram id=136 user="jenniehellqvist" src="global_tag" tag="'.get_field('hash-tag').'" imgl="instagram" style="wall" row="6" size="M" num="6" highlight="1" align="center" max="100"]'?>
			<?php echo do_shortcode($shortcode);?>
		</div>
	</div><!--#about-->
	<hr class="ample">

	<div class="row">
		<div class="sponsorer col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 text-center">
			<h2><?php echo get_field('sponsor-rubrik')?></h2>
		</div><!--.sponsorer-->
		<div class="sponsorer col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 text-center">
			<?php echo get_field('sponsorer')?>
		</div><!--.social_share col-lg-8 col-lg-offset-2 center-text-->
	</div><!--.row-->

</section> <!--End $slug-->