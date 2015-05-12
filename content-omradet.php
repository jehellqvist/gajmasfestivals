<?php
/*
Template Name: omradet
*
* //used instead of page.php is choosen as template for the omradet
*/

?>

<section id='<?php echo $post->post_name; ?>' class='container-fluid'>
    
	<div class="row text-center omradet-row">
		<div class="col-md-12-12">
		<a href="http://localhost:8888/wp-content/uploads/2015/04/karta_full1.png">
			<div class="map">
				<div class="hover-map">
					<img src="<?php echo get_field('festivalkarta')?>" class="img-center">
				</div>
			</div></a>
		</div><!--col-*-->
		<h2>Festivalområdet</h2>
		<div class="col-md-3 col-xs-6">
			<img src="<?php echo esc_url( get_template_directory_uri()); ?>/img/card.png" alt="Kort ikon">
			<p><?php echo get_field('uttagsautomat')?></p>
		</div><!--.col-*-->
		<div class="col-md-3 col-xs-6">
			<img src="<?php echo esc_url( get_template_directory_uri()); ?>/img/toalett.png" alt="Toalett ikon">		
			<p><?php echo get_field('toaletter')?></p>
		</div><!--.col-*-->
		<div class="col-md-3 col-xs-6">
			<img src="<?php echo esc_url( get_template_directory_uri()); ?>/img/water.png" alt="Vatten ikon">
			<p><?php echo get_field('vatten')?></p>
		</div><!--.col-*-->
		<div class="col-md-3 omradet-place col-xs-6">
			<img src="<?php echo esc_url( get_template_directory_uri()); ?>/img/platser.png" alt="Platser ikon">
			<p><?php echo get_field('festivalplatser')?></p>
		</div><!--.col-*-->
	</div><!--.row-->

</section> <!--End $slug-->

