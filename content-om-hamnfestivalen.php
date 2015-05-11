<?php
/*
Template Name: om-hamnfestivalen
*
* //used instead of page.php is choosen as template for the page
* @package flyingtoffee
* @since flyingtoffee 1.0
*/

?>

<section id='<?php echo $post->post_name; ?>' class='container-fluid'>
	<div id="about" class="row">
		<div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 center-text">
			<h1><?php the_title()?></h1>
			<?php the_content(); ?>
		</div><!--col-lg-*-->

		<div class="social_share col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 text-center">
			<p>Dela dina festivalminnen <span class="tag">
				<?php 
				echo get_field('hash-tag')?>
			</span></p>
		</div><!--.social_share col-lg-8 col-lg-offset-2 center-text-->

		<div class="col-md-12">
			[alpine-phototile-for-instagram id=136 user="jenniehellqvist" src="global_tag" tag="pohamnfestivalen" imgl="instagram" style="wall" row="6" size="M" num="6" highlight="1" align="center" max="100"]
		</div>
	</div><!--#about-->
	<hr class="ample">

	<div class="row">
		<div class="sponsorer col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 text-center">
			<h2><?php echo get_field('sponsor-rubrik')?></h2>
		</div><!--.sponsorer-->
	<div class="sponsorer col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 text-center">
		<?php echo get_field('sponsorer')?>
	</div><!--.social_share col-lg-8 col-lg-offset-2 center-text-->

</div><!--.row-->

</section> <!--End $slug-->

<?php 


/*
<div id="about" class="row">
<div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 center-text">
<h1>Om Hamnfestivalen</h1>
<p>Den gamla Hamnfesten i Limhamn drevs av fiskareföreningen mellan år 1937 och 1992. I juli 2014 slog samverkansföreningen <a href="http://www.polimhamn.se" target="_blank">På Limhamn</a> åter upp portarna och arrangerade en ny fantastisk Hamnfestival längst havet. Succén var omedelbar! </p>

<p>Hamnfestivalen bjuder på fyra festfyllda dagar med massor av upplevelser, möten och fartfyllda äventyr på och vid havet. Musik för alla åldrar. Mat för alla smaker. Prova-på-aktiviteter. Båtturer på Öresund. Konst, kultur och historia i en genuint äkta miljö vid havet. Hamnfestivalen är en mötesplats dit alla är välkomna! Entrén är gratis.</p>
</div><!--col-lg-8 col-lg-offset-2-->

<div class="social_share col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 text-center">
<p>Dela dina festivalminnen <span class="tag">#pohamnfestivalen</span></p>
</div><!--.social_share col-lg-8 col-lg-offset-2 center-text-->
<div class="col-md-12">
[alpine-phototile-for-instagram id=136 user="jenniehellqvist" src="global_tag" tag="pohamnfestivalen" imgl="instagram" style="wall" row="6" size="M" num="6" highlight="1" align="center" max="100"]
</div>
</div>
<hr class="ample">
<div class="row">
<div class="sponsorer col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 text-center">
Hamnfestivalen 2015 sponsras av: 
</div>
<div class="sponsorer col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 text-center">
<a href="http://malmo.se/" target="_blank">Malmö stad</a> <a href="http://sydsvenskan.se/" target="_blank">Sydsvenskan</a> <a href="http://skanska.se/" target="_blank">SKANSKA Öresund</a> <a href="http://www.smabatshamnen.nu/">Hamnbolaget – Limhamns Småbåtshamn</a> <a href="http://www.ica.se/butiker/kvantum/malmo/ica-kvantum-malmborgs-limhamn-2737/start/" target="_blank">Malmborgs Limhamn</a> <a href="http://limhamnsfiskrokeri.se/rokeri/" target="_blank">Limhamns Fiskrökeri AB</a> <a href="http://www.svenskfast.se/" target="_blank">Svensk fastighetsförmedling</a> <a href="http://limhamnsbegravningsbyra.se/" target="_blank">Limhamns Begravningsbyrå</a>
</div><!--.social_share col-lg-8 col-lg-offset-2 center-text-->

</div><!--.row-->*/
?>
</section> <!--End $slug-->