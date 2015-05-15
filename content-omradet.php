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
		
		<!--<a href="http://localhost:8888/wp-content/uploads/2015/04/karta_full1.png">
			<div class="map">
				<div class="hover-map">
					<img src="<?php echo get_field('festivalkarta')?>" class="img-center">
				</div>
			</div></a>-->

			<a href="#popup1" class="portfolio-link" data-toggle="modal">
                <div class="map">
                	<figure class="hover-map">
						<img src='<?php echo esc_url( get_theme_mod( 'themeslug_map' ) ); ?>' alt="Karta över festivalområdet" class="img-center">                	
					</figure>
                </div>
            </a>

<!--Map popup-->
<div class="portfolio-modal modal fade" id="popup1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    	<h3>Karta över festivalområdet</h3>
                    	<figure>
                    		<img src='<?php echo esc_url( get_theme_mod( 'themeslug_map' ) ); ?>' alt="Karta över festivalområdet" class="img-center">
                		</figure>
                		<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Stäng</button>
                    </div><!-- End col-md-*-->
                </div><!--End . row-->
            </div><!--End .container-->
        </div><!--End .modal-content-->
    </div><!--End .portfolio-modal modal fade #project1-->


		</div><!--col-*-->
		<h2>Festivalområdet</h2>
		<div class="col-md-3 col-xs-6">
			<img src="<?php echo esc_url( get_template_directory_uri()); ?>/img/card.png" alt="Kort ikon" class="omradet-icon">
			<p><?php echo get_field('uttagsautomat')?></p>
		</div><!--.col-*-->
		<div class="col-md-3 col-xs-6">
			<img src="<?php echo esc_url( get_template_directory_uri()); ?>/img/toalett.png" alt="Toalett ikon" class="omradet-icon">		
			<p><?php echo get_field('toaletter')?></p>
		</div><!--.col-*-->
		<div class="col-md-3 omradet-water col-xs-6">
			<img src="<?php echo esc_url( get_template_directory_uri()); ?>/img/water.png" alt="Vatten ikon" class="omradet-icon">
			<p><?php echo get_field('vatten')?></p>
		</div><!--.col-*-->
		<div class="col-md-3 omradet-place col-xs-6">
			<img src="<?php echo esc_url( get_template_directory_uri()); ?>/img/platser.png" alt="Platser ikon" class="omradet-icon">
			<p><?php echo get_field('festivalplatser')?></p>
		</div><!--.col-*-->
	</div><!--.row-->

</section> <!--End $slug-->

