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
		<p class="introtext"><?php echo get_field('introtext')?></p>

		<a href="http://localhost/gajmas/for-medverkande-aktorer/">
			<div class="aktor-medverka">
				<p><?php echo get_field('medverka_lank')?></p>
			</div><!--end aktor-medverka-->
		</a>

	</div><!--end .festivalen-->
	<div class="row aktor">

		<article class="col-xs-12 col-md-3 post-content">
            <div class="inner" style="background-image:url('<?php echo get_field('aktor_1_bild')?>')"></div>
            <div class="inner-bottom">
                <div class="wave">
                    <div class="inner-content">
                        <p class="description"><?php echo get_field('aktor_1_citat')?></p>
						<p class="aktor-name"><?php echo get_field('aktor_1')?></p>
					</div><!--.inner-content-->
                </div><!--.wave-->
            </div><!--.inner-bottom--> 
        </article><!--End . col-*-* -->

        <article class="col-xs-12 col-md-4 post-content">
            <div class="inner" style="background-image:url('<?php echo get_field('aktor_2_bild')?>')"></div>
            <div class="inner-bottom">
                <div class="wave">
                    <div class="inner-content">
                        <p class="description"><?php echo get_field('aktor_2_citat')?></p>
						<p class="aktor-name"><?php echo get_field('aktor_2')?></p>
					</div><!--.inner-content-->
                </div><!--.wave-->
            </div><!--.inner-bottom--> 
        </article><!--End . col-*-* -->


        <article class="col-xs-12 col-md-4 post-content">
            <div class="inner" style="background-image:url('<?php echo get_field('aktor_3_bild')?>')"></div>
            <div class="inner-bottom">
                <div class="wave">
                    <div class="inner-content">
                        <p class="description"><?php echo get_field('aktor_3_citat')?></p>
						<p class="aktor-name"><?php echo get_field('aktor_3')?></p>
					</div><!--.inner-content-->
                </div><!--.wave-->
            </div><!--.inner-bottom--> 
        </article><!--End . col-*-* -->
    </div><!--end .aktor-->



</section><!-- #post-## -->
