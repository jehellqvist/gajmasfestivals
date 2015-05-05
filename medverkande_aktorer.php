<?php
/*
Template Name: medverkande-aktorer
*
* //used instead of page.php is choosen as template for the page
* @package flyingtoffee
* @since flyingtoffee 1.0
*/
 
get_header(); ?>

 <nav class="navbar navbar-inverse" role="navigation" >
      <div class="container">
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand page-scroll" href="#page-top">Meny</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php
            echo get_primary_menu('secondary');
            ?>


        </div><!--/.nav-collapse -->
      </div><!--End .container-->
</nav>

	<main class="medverkande" role="main">

		<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();


				// Include the page content template.
				get_template_part( 'content', 'page' );

				/*/ If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}*/
			endwhile;
		?>

	</main><!-- main -->
<?php get_footer(); ?>