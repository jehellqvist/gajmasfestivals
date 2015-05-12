<?php
/*
Template Name: medverkande-aktorer
*
* //used instead of page.php is choosen as template for the page
*/
 
get_header(); ?>

 <nav id="single-post-page-nav"role="navigation" >
  <div class="container-fluid">
    <a href="<?php echo esc_url(home_url( '/' )); ?>"><i class="fa fa-chevron-left"></i></a>
          <?php
          echo get_primary_menu('secondary');
          ?>
    </div><!--End .container-fluid-->
</nav>

	<main class="medverkande" role="main">

		<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();?>


			<div class="row">
				<div class="col-md-5 col-md-offset-2">
					<h1><?php echo get_field('rubrik')?></h1>
					<h2><?php echo get_field('datum')?></h2>
					<img src="http://localhost/wp-content/uploads/2015/05/vimplat_bred.png" alt="vimpel sidebar" />

				</div>
			</div>
				<div class="row">
					<div class="col-md-7 col-md-offset-1">
						<p><?php echo get_field('introtext')?></p>
						<h3>Anmälan</h3>
						<p>Blankett för anmälan till att medverka på Hamnfestivalen fylls i och skickas via e-post till:</p>

						<p><i class="fa fa-envelope"></i><a href="mailto:<?php echo get_field('e-post')?>?Subject=Anmälan%20medverkande%20aktör"><?php echo get_field('e-post')?></a></p>

						<p><?php echo get_field('krav_for_anmalan')?></p>
						<h3>Plats, Öppetider &amp; Pris</h3>
						<p><?php echo get_field('plats_och_oppettider')?></p>
						<table>
							<tbody>
								<tr>
									<th>Marknadsstånd</th>
									<th>Samtliga dagar</th>
								</tr>
								<tr>
									<td>Matförsäljning</td>
									<td><?php echo get_field('pris_for_matstand')?></td>
								</tr>
								<tr>
									<td>Konsthantverk &amp; Övrig försäljning</td>
									<td><?php echo get_field('pris_for_forsaljning')?></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-md-3 sidebar">
						<div class="row">
							<div class="col-md-12 col-sm-4 col-xs-12">
								<h3>Blanketter och Avtal</h3>
								<p><a class="left" href="<?php echo get_field('avtal_aktiviteter')?>" download="avtal_aktiviteter.pdf"><i class="fa fa-download"></i>Blankett för aktiviteter </a></p>
								<p class="top-neg"><a class="left" href="<?php echo get_field('avtal_mat')?>" download="avtal_mat.pdf"><i class="fa fa-download"></i>Blankett för mat</a></p>
								<p class="top-neg"><a class="left" href="<?php echo get_field('avtal_forsaljning')?>" download="avtal_forsaljning.pdf"><i class="fa fa-download"></i>Blankett för försäljning</a></p>
								<p class="top-neg"><a class="left" href="<?php echo get_field('avtal_el')?>" download="avtal_el.pdf"><i class="fa fa-download"></i>Blankett för el</a></p>

							</div>
						<div class="col-md-12 col-sm-4 col-xs-12">
							<h3>Arrangör</h3>
				
							<p><?php echo get_field('arrangor')?>
							<p class="top-neg"><i class="fa fa-phone"></i><?php echo get_field('arrangor_telefonnummer')?></p>

						</div>
						<div class="col-md-12 col-sm-4 col-xs-12">
							<h3>Arrangemanget marknadsförs i</h3>
							<p><?php echo get_field('marknadsfors_i')?></p>

						</div>
					</div>
				</div>
			</div>
			<?php endwhile; 
		?>



	</main><!-- main -->
<?php get_footer(); ?>