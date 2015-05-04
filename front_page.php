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

<main role="main">
	<?php
		echo get_pages_by_menu('primary');
	?>
</main>
<?php get_footer(); ?>