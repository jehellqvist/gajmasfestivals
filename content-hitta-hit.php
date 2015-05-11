<?php
/*
Template Name: hitta-hit
*
* //used instead of page.php is choosen as template for the page
*/

?>

<section id='<?php echo $post->post_name; ?>' class='container-fluid'>
    <h1><?php the_title()?></h1>
	<div class="row">
		<div id="by_bike" class="col-md-3 col-sm-6">
			<img src="<?php echo esc_url( get_template_directory_uri()); ?>/img/bike.png" alt="Cykla till festivalen ikon">
			<p><?php echo get_field('bike')?></p>
		</div><!--end #by_bike-->
		<div id="by_boat" class="col-md-3 col-sm-6">
			<img src="<?php echo esc_url( get_template_directory_uri()); ?>/img/boat.png" alt="Åk båt till festivalen ikon">
			<p><?php echo get_field('boat')?></p>
		</div><!--end #by_boat-->
		<div id="by_bus" class="col-md-3 col-sm-6">
			<img src="<?php echo esc_url( get_template_directory_uri()); ?>/img/bus.png" alt="Åk bus till festivalen ikon">
			<p><?php echo get_field('bus')?></p>
		</div><!--end #by_bus-->
		<div id="by_car" class="col-md-3 col-sm-6">
			<img src="<?php echo esc_url( get_template_directory_uri()); ?>/img/car.png" alt="Åk bil till festivalen ikon">
			<p><?php echo get_field('car')?></p>
		</div><!--end #by_car-->
	</div><!--end .row-->
</section> <!--End $slug-->

