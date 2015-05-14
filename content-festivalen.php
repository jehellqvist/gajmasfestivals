<?php
/*
Template Name: festivalen
*
* //used instead of page.php is choosen as template for the page
*/

?>

<section id='<?php echo $post->post_name; ?>' class='container-fluid'>
	<div class="row festivalen">	    
		<h1><?php echo get_field('rubrik')?></h1>		
		<h4><?php echo get_field('introtext')?></h4>
		<a href="http://localhost/gajmas/for-medverkande-aktorer/" class="btn"><?php echo get_field('medverka_lank')?></a>
	</div>
	
	<div class="row">
		<article class="actor post-content col-md-4">
			<a href="">
				<div class="inner" style="background-image:url('<?php echo get_field('aktor_1_bild')?>'); background-position: top;"></div>
				<div class="inner-bottom">
					<div class="wave">
						<div id="citat" class="inner-content">
							<p class="description"><?php echo get_field('aktor_1_citat')?></p>
							<div class="author">
								<p>- <?php echo get_field('aktor_1')?></p>
							</div>
						</div><!--.inner-content-->
					</div><!--.wave-->
				</div><!--.inner-bottom-->
			</a><!--End .inner-->
		</article><!--End . col-*-* -->
		<article class="actor post-content col-md-4">
			<a href="">
				<div class="inner" style="background-image:url('<?php echo get_field('aktor_2_bild')?>')"></div>
				<div class="inner-bottom">
					<div class="wave">
						<div class="inner-content">
							<p class="description"><?php echo get_field('aktor_2_citat')?></p>
							<div class="author">
								<p>- <?php echo get_field('aktor_2')?></p>
							</div>
						</div><!--.inner-content-->
					</div><!--.wave-->
				</div><!--.inner-bottom-->
			</a><!--End .inner-->
		</article><!--End . col-*-* -->
		<article class="actor post-content col-md-4">
			<a href="">
				<div class="inner" style="background-image:url('<?php echo get_field('aktor_3_bild')?>')"></div>
				<div class="inner-bottom">
					<div class="wave">
						<div class="inner-content">
							<p class="description"><?php echo get_field('aktor_3_citat')?></p>
							<div class="author">
								<p>- <?php echo get_field('aktor_3')?></p>
							</div>
						</div><!--.inner-content-->
					</div><!--.wave-->
				</div><!--.inner-bottom-->
			</a><!--End .inner-->
		</article><!--End . col-*-* -->
	</div>
</section><!-- #post-## -->
