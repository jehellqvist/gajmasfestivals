<?php
/*
Template Name: one-page-frontpage
*
*
* @package gajmas
* @since gajmas 1.0
*/

get_header();
include("image-slider.php");
include("nav.php");
?>

	<!--<div class="link-to-omradet">
		<a href="#omradet" class="page-scroll"><i class="fa fa-info"></i></a>
	</div>-->
	<?php
		echo get_pages_by_menu('primary');
	?>
<?php get_footer(); ?>