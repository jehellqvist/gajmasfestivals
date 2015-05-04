<figure id="bridge_img">
<img src="http://localhost/gajmas/wp-content/uploads/2015/05/bro_bla.png" alt="öresundsbron" width="100%"/>
</figure>

<footer id="kontakt" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="col-md-6">

				<a href="http://www.polimhamn.se" target="_blank"><div id="polimhamn_logo"></div></a>	
				<p class="justify">På Limhamn är ett samarbete mellan Malmö stad, fastighetsägare, handel, näringsliv och ideella föreningar med fokus på att 
					vidareutveckla Limhamn som besök- och turistdestination. Samverkan är grunden i hela vår verksamhet och även den övergripande 
					metoden för vårt arbete. Läs mer om arrangören bakom Hamnfestivalen på <a href="http://polimhamn.se/">www.polimhamn.se</a></p>
			
				
				<div class="row top">
					<div class="col-md-12 col-sm-12 col-xs-12 center border-top">

						<div class="col-md-4 col-sm-4 center top">
						<!--<p>E-post: <a href="mailto:info@polimhamn.se">info@polimhamn.se </a></p>-->
							<i class="fa fa-envelope-o"></i>
							<p>info@polimhamn.se</p>
						</div>

						<div class="col-md-4 col-sm-4 center top">
						<!--<p>E-post: <a href="mailto:info@polimhamn.se">info@polimhamn.se </a></p>-->
							<i class="fa fa-map-marker"></i>
							<p>Järnvägsgatan 25 <br> 216 14 Limhamn</p>
						</div>	

						<div class="col-md-4 col-sm-4 center top">
						<!--<p>E-post: <a href="mailto:info@polimhamn.se">info@polimhamn.se </a></p>-->
							<i class="fa fa-phone"></i>
							<p>0760-10 44 05</p>
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

				<div class="row top">
					<div class="col-md-12 col-sm-12 center ">
						<!--<a href="http://www.hamnfestivalen.se" target="_blank"><div id="hamnfestivalen_logo"></div></a>	-->
						<h1>Är du en medverkande aktör eller intresserad av att bli en? </h1>
               		 	<p>Besök vår sida <a href="http://localhost/?page_id=15">för medverkande aktörer</a></p>
					</div>
				</div><!--End of nested .row-->
			</div><!--End of .col-->

			<div class="col-md-12 text-center">
				<p class="design-by">Web design av <a href="http://www.gajmas.se">GAJMA</a></p>
			</div>
		
		</div><!--End of .row-->
		
		<!--<p>Hamnfestivalen pågår mellan den 30 juli och 2 augusti 2015</p>-->

	</div>  <!--End of .container-->

</footer>
 
</div><!--End of #wrapper-->
 
<?php wp_footer(); ?> <!--is what WordPress uses to add things to the bottom of the
site, more often that not used by plugins to add things like site tracking code.-->
 <script type="text/javascript">
      $(document).ready(function() { 
	      $('#myCarousel').carousel({ 
	      	interval: 6000, 
	      	cycle: true, 
	      	pause: "false"
	      });
      }); 



$(function() {

  // Do our DOM lookups beforehand
  var nav_container = $(".container");
  var nav = $("nav");

  nav_container.waypoint({
    handler: function() {
      	nav.toggleClass('stuck');
    }
  });
});


</script>
</body>
</html>