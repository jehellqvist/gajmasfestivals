<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-lg-offset-1">
				<h1>Meny</h1>
				<p>Program</p>
				<p>Hitta hit</p>
				<p>Om Hamnfestivalen</p>

				<h1>Intresserad av försäljning eller marknadsstånd? </h1>
				<p>Klicka <a href="">här</a> för mer information</p>
			</div>
			<div class="col-lg-3">
				<h1>Följ Hamnfestivalen</h1>
				<p>
					<ul class="list-unstyled list-inline">
						<li><a class="fa fa-facebook" href="https://www.facebook.com/hamnfestivalenpolimhamn" title="Facebook" target="_blank"></a></li>
			            <li><a class="fa fa-instagram" href="" title="Instagram" target="_blank"></a></li>
			        </ul>
			    </p>

			</div>

			<div class="col-lg-3">
				<h1>Arrangör</h1>
				<p>På Limhamn </p>
				<p>E-post: <a href="mailto:info@polimhamn.se">info@polimhamn.se </a></p>
				<p><a href="mailto:http://www.polimhamn.se">www.polimhamn.se </a></p>
			</div>
		</div>
		
		<div class="row">
			<hr>
			<div class="col-lg-2 col-lg-offset-5 center">
				<p><?php the_time('Y'); ?> &copy; <?php bloginfo('name'); ?></p>
			</div>
		</div>

	</div>  

</footer>
 
</div><!--End of #wrapper-->
 
<?php wp_footer(); ?> <!--is what WordPress uses to add things to the bottom of the
site, more often that not used by plugins to add things like site tracking code.-->
 
</body>
</html>