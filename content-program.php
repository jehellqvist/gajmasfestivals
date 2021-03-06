<?php
/*
Template Name: program
*
* //used instead of page.php is choosen as template for the page
*/

?>

<section id='<?php echo $post->post_name; ?>' class='container-fluid'>
    <div class="row filter-function">
    	<div class="col-md-12 text-center program-intro">
	    	<h1><?php echo get_field('rubrik')?></h1>
	    	<p class="datum"><?php echo get_field('datum')?></p>
	    	<?php the_content() ?>
    	</div>
		<div class="col-sm-12">
	<?php
		echo do_shortcode("[posts]");
	?>
	<div class="row">
		<div class="col-md-12 text-center">
             <button type="button" class="load-more btn btn-default"><i class="fa fa-refresh"></i>Visa fler</button>
		</div>
	</div>
	<hr class="ample">
</section> <!--End $slug-->

