<figure id="bridge_img">
	<img src="<?php echo esc_url( get_template_directory_uri()); ?>/img/bro_bla_light.png" alt="öresundsbron">
</figure>

<footer id="kontakt" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="col-md-6">

				<a href="http://www.polimhamn.se" target="_blank">

				<img src="<?php echo esc_url( get_template_directory_uri()); ?>/img/Pa-Limhamn-neg.png" class="polimhamn_logo" alt="På Limhamn logotype">


				</a>	
				<h3>OM ARRANGÖREN</h3>
				<p class="justify">På Limhamn är ett samarbete mellan <em>Malmö stad</em>, <em>fastighetsägare</em>, <em>handel</em>, <em>näringsliv och ideella föreningar</em> med fokus på att 
					vidareutveckla Limhamn som besök- och turistdestination. Samverkan är grunden i hela vår verksamhet och även den övergripande 
					metoden för vårt arbete. Läs mer om arrangören bakom Hamnfestivalen på <a target="_blank" href='<?php echo esc_url (get_theme_mod( 'themeslug_footer_webpage' )); ?>'><?php echo get_theme_mod( 'themeslug_footer_webpage' ); ?></a></p>
			
				<div class="row top notranslate">
					<div class="col-md-12 col-sm-12 col-xs-12 center border-top">

						<div class="col-md-4 col-sm-4 col-xs-4 center top">							
							<a class="footer_links" href="mailto:<?php echo get_theme_mod( 'themeslug_footer_mail' );?>?Subject=Hamnfestivalen">
								<i class="fa fa-envelope-o"></i>
								<p><?php echo get_theme_mod( 'themeslug_footer_mail' ); ?></p>
							</a>
						</div><!--End of .col-->

						<div class="col-md-4 col-sm-4 col-xs-4 center top">
							<a class="footer_links" href="http://goo.gl/QFE8k7">
								<i class="fa fa-map-marker"></i>
								<p><?php echo get_theme_mod( 'themeslug_footer_street' ); ?><br><?php echo get_theme_mod( 'themeslug_footer_address' ); ?></p>
							</a>
						</div><!--End of .col-->

						<div class="col-md-4 col-sm-4 col-xs-4 center top">
							<a class="footer_links" href="tel:+46760104405">
								<i class="fa fa-phone"></i>
								<p><?php echo get_theme_mod ( 'themeslug_footer_phone' ); ?></p>
							</a>
						</div><!--End of .col-->

					</div><!--End of .col-->
				</div> <!--End of .row-->
			</div><!--End of .col-->

			<div class="col-md-5 col-sm-12 col-md-offset-1 center">
				<h1>Följ <span class="notranslate">Hamnfestivalen</span></h1>
					<ul class="list-unstyled list-inline">
						<li><a class="fa fa-facebook-square" href="https://www.facebook.com/hamnfestivalenpolimhamn" title="Facebook" target="_blank"></a></li>
						<li><a class="fa fa-instagram" href="https://instagram.com/pohamnfestivalen/" title="Instagram" target="_blank"></a></li>
			        </ul>
			        <p class="tag">#pohamnfestivalen</p>

				<div class="row top">
					<div class="col-md-12 col-sm-12 center ">
						<h1>Är du en medverkande aktör eller intresserad av att bli? </h1>
               		 	<p>Besök vår sida <a href="http://localhost:8888/for-medverkande-aktorer/">för medverkande aktörer</a></p>
               		 	<!--http://localhost:8888/for-medverkande-aktorer-->
					</div>
				</div><!--End of nested .row-->
			</div><!--End of .col-->

			<div class="col-md-12 text-center">
				<!--<p class="design-by">Web design av <a href="http://www.gajmas.se">GAJMA</a></p>-->
				<?php bing_translator(); ?>
			</div>
		
		</div><!--End of .row-->
	</div>  <!--End of .container-->

</footer>
 
<?php wp_footer(); ?> 

</body>
</html>