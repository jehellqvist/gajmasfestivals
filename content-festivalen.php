<?php
/*
Template Name: festivalen
*
* //used instead of page.php is choosen as template for the page
*/

?>

<section id='<?php echo $post->post_name; ?>' class='container-fluid'>
	<div class="row">	
        <div class="col-md-8 col-md-offset-2">   
    		<h1><?php echo get_field('rubrik')?></h1>		
    		<p><?php echo get_field('introtext')?></p>

            <ul class="list-unstyled list-inline festivalen-links">
                <li>
                    <a href="http://localhost/gajmas/for-medverkande-aktorer/">
    				<button class="btn"><?php echo get_field('medverka_lank')?></button>
                    </a>
                </li>

                <li><a class="fa fa-facebook-square festivalen-icon" href="https://www.facebook.com/hamnfestivalenpolimhamn" title="Facebook" target="_blank"></a></li>
                <li><a class="fa fa-instagram festivalen-icon" href="https://instagram.com/pohamnfestivalen/" title="Instagram" target="_blank"></a></li>
                <!--<li><a class="fa fa-google-plus-square" href="https://plus.google.com/share?url=http://www.hamnfestivalen.se/" title="Google +" target="_blank"></a></li>-->
            </ul>
        </div><!--.end col-md*-->
	</div><!--end .row-->
	<div class="row aktor festivalen">

		<article class="col-xs-12 col-sm-4">
        <div class="extra">
            <div class="festivalen-inner" style="background-image:url('<?php echo get_field('aktor_1_bild')?>')"></div>
            <div class="festivalen-inner-bottom">
                <div class="festivalen-wave">
                    <div class="festivalen-inner-content">
                        <p class="festivalen-description"><?php echo get_field('aktor_1_citat')?></p>
						<p class="aktor-name"><?php echo get_field('aktor_1')?></p>
					</div><!--.inner-content-->
                </div><!--.wave-->
            </div><!--.inner-bottom--> 
        </div>
        </article><!--End . col-*-* -->

        <article class="col-xs-12 col-sm-4">
        <div class="extra">
            <div class="festivalen-inner" style="background-image:url('<?php echo get_field('aktor_2_bild')?>')"></div>
            <div class="festivalen-inner-bottom">
                <div class="festivalen-wave">
                    <div class="festivalen-inner-content">
                        <p class="festivalen-description"><?php echo get_field('aktor_2_citat')?></p>
						<p class="aktor-name"><?php echo get_field('aktor_2')?></p>
					</div><!--.inner-content-->
                </div><!--.wave-->
            </div><!--.inner-bottom--> 
        </div>
        </article><!--End . col-*-* -->


        <article class="col-xs-12 col-sm-4">
        <div class="extra">
            <div class="festivalen-inner" style="background-image:url('<?php echo get_field('aktor_3_bild')?>')"></div>
            <div class="festivalen-inner-bottom">
                <div class="festivalen-wave">
                    <div class="festivalen-inner-content">
                        <p class="festivalen-description"><?php echo get_field('aktor_3_citat')?></p>
						<p class="aktor-name"><?php echo get_field('aktor_3')?></p>
					</div><!--.inner-content-->
                </div><!--.wave-->
            </div><!--.inner-bottom--> 
        </div>
        </article><!--End . col-*-* -->
    </div><!--end .aktor .festivalen-->
    
    <hr class="ample">

</section><!-- #post-## -->
