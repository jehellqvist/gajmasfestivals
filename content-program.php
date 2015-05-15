<?php
/*
Template Name: program
*
* //used instead of page.php is choosen as template for the page
*/

?>

<section id='<?php echo $post->post_name; ?>' class='container-fluid'>
    <div class="row filter-function">
    	<h1><?php echo get_field('rubrik')?></h1>
    	<p class="datum"><?php echo get_field('datum')?></p>
		<div class="col-sm-12">
	<?php
		echo do_shortcode("[posts]");
	?>
	<div class="row">
		<div class="col-md-12 text-center">
			<button type="button" class="load-more btn btn-default"><i class="fa fa-refresh"></i>Visa fler</button>
			<ul class="list-unstyled list-inline">
						<li><a class="fa fa-facebook-square" href="https://www.facebook.com/hamnfestivalenpolimhamn" title="Facebook" target="_blank"></a></li>
						<li><a class="fa fa-instagram" href="https://instagram.com/pohamnfestivalen/" title="Instagram" target="_blank"></a></li>
						<!--<li><a class="fa fa-google-plus-square" href="https://plus.google.com/share?url=http://www.hamnfestivalen.se/" title="Google +" target="_blank"></a></li>-->
			        </ul>
		</div>
	</div>
	<hr class="ample">
</section> <!--End $slug-->

