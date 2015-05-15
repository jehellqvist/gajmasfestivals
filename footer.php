<figure id="bridge_img">
	<img src="<?php echo esc_url( get_template_directory_uri()); ?>/img/bro_bla_light.png" alt="öresundsbron">
</figure>

<footer id="kontakt" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="col-md-6">

				<a href="http://www.polimhamn.se" target="_blank"><div id="polimhamn_logo"></div></a>	
				<p class="justify">På Limhamn är ett samarbete mellan <em>Malmö stad</em>, <em>fastighetsägare</em>, <em>handel</em>, <em>näringsliv och ideella föreningar</em> med fokus på att 
					vidareutveckla Limhamn som besök- och turistdestination. Samverkan är grunden i hela vår verksamhet och även den övergripande 
					metoden för vårt arbete. Läs mer om arrangören bakom Hamnfestivalen på <a target="_blank" href='<?php echo esc_url (get_theme_mod( 'themeslug_footer_webpage' )); ?>'><?php echo get_theme_mod( 'themeslug_footer_webpage' ); ?></a></p>
			
				
				<div class="row top">
					<div class="col-md-12 col-sm-12 col-xs-12 center border-top">

						<div class="col-md-4 col-sm-4 center top">
						<!--<p>E-post: <a href="mailto:info@polimhamn.se">info@polimhamn.se </a></p>-->
							<i class="fa fa-envelope-o"></i>
							<a class="footer_mail" href="mailto:<?php echo get_theme_mod( 'themeslug_footer_mail' );?>?Subject=Hamnfestivalen"><p><?php echo get_theme_mod( 'themeslug_footer_mail' ); ?></p></a>
						</div>

						<div class="col-md-4 col-sm-4 center top">
						<!--<p>E-post: <a href="mailto:info@polimhamn.se">info@polimhamn.se </a></p>-->
							<i class="fa fa-map-marker"></i>
							<p><?php echo get_theme_mod( 'themeslug_footer_street' ); ?><br><?php echo get_theme_mod( 'themeslug_footer_address' ); ?></p>
						</div>	

						<div class="col-md-4 col-sm-4 center top">
						<!--<p>E-post: <a href="mailto:info@polimhamn.se">info@polimhamn.se </a></p>-->
							<i class="fa fa-phone"></i>
							<p><?php echo get_theme_mod ( 'themeslug_footer_phone' ); ?></p>
						</div>		
					</div>
				</div>
			</div><!--End of .col-->

			<div class="col-md-5 col-sm-12 col-md-offset-1 center">
				<h1>Följ Hamnfestivalen</h1>
					<ul class="list-unstyled list-inline">
						<li><a class="fa fa-facebook-square" href="https://www.facebook.com/hamnfestivalenpolimhamn" title="Facebook" target="_blank"></a></li>
						<li><a class="fa fa-instagram" href="https://instagram.com/pohamnfestivalen/" title="Instagram" target="_blank"></a></li>
						<!--<li><a class="fa fa-google-plus-square" href="https://plus.google.com/share?url=http://www.hamnfestivalen.se/" title="Google +" target="_blank"></a></li>-->
			        </ul>
			        <p class="tag">#pohamnfestivalen</p>

				<div class="row top">
					<div class="col-md-12 col-sm-12 center ">
						<!--<a href="http://www.hamnfestivalen.se" target="_blank"><div id="hamnfestivalen_logo"></div></a>	-->
						<h1>Är du en medverkande aktör eller intresserad av att bli? </h1>
               		 	<p>Besök vår sida <a href="http://localhost:8888/for-medverkande-aktorer/">för medverkande aktörer</a></p>
               		 	<!--http://localhost:8888/for-medverkande-aktorer-->
					</div>
				</div><!--End of nested .row-->
			</div><!--End of .col-->

			<div class="col-md-12 text-center">
				<!--<p class="design-by">Web design av <a href="http://www.gajmas.se">GAJMA</a></p>-->
			</div>
		
		</div><!--End of .row-->
		
		<!--<p>Hamnfestivalen pågår mellan den 30 juli och 2 augusti 2015</p>-->

	</div>  <!--End of .container-->

</footer>
 
<?php wp_footer(); ?> 

</body>
</html>