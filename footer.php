<footer role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-3 col-md-offset-1 col-sm-offset-1 center">
			
				<!--<p>E-post: <a href="mailto:info@polimhamn.se">info@polimhamn.se </a></p>-->
				<h1>Meny</h1>
				<div>
	                 <?php// if (function_exists(clean_custom_menus())) clean_custom_menus(); else echo "string"; ?>
	          		<?php 
		            //get all pages and create navigation
		            $pagemenu = get_pages( array( 'sort_column' => 'menu_order', 'sort_order' => 'asc', 'parent'=> '0') ); 

		            echo"<ul id='footer-nav'>";
		                foreach ($pagemenu as $pagemenu_data) {
		                    $caption = $pagemenu_data->post_title;
		                    $pageslug = $pagemenu_data->post_name;
		            //Start Page Menu
		            echo "<li><a href='#$pageslug' class='page-scroll'>$caption</a></li>\n";
		            }

		            echo"</ul>";
	        		?>
        		</div><!--/#footer div-->
				<ul>
					<br>
					<li><a href="">För aktörer</a></li>
				</ul>
				<!--<h1>Intresserad av försäljning eller marknadsstånd? </h1>
				<p>Klicka <a href="">här</a> för mer information</p>-->
				
				
			</div><!--End of .col-->

			<div class="col-md-4 col-sm-4 center top">
				<h1>Följ Hamnfestivalen</h1>
				<p>
					<ul class="list-unstyled list-inline">
						<li><a class="fa fa-facebook-square" href="https://www.facebook.com/hamnfestivalenpolimhamn" title="Facebook" target="_blank"></a></li>
						<li><a class="fa fa-instagram" href="https://instagram.com/pohamnfestivalen/" title="Instagram" target="_blank"></a></li>
						<li><a class="fa fa-google-plus-square" href="https://plus.google.com/share?url=http://www.hamnfestivalen.se/" title="Google +" target="_blank"></a></li>
			        </ul>
			    </p>
			</div><!--End of .col-->

			<div class="col-md-3 col-sm-3 center">
				<a href="http://www.hamnfestivalen.se" target="_blank"><div id="hamnfestivalen_logo"></div></a>
				<a href="http://www.polimhamn.se" target="_blank"><div id="polimhamn_logo"></div></a>	
			</div><!--End of .col-->
		
		</div><!--End of .row-->
		
		<hr>
		<p class="center"><?php the_time('Y'); ?> &copy; <?php bloginfo('name'); ?></p>
		<!--<p>Hamnfestivalen pågår mellan den 30 juli och 2 augusti 2015</p>-->

	</div>  <!--End of .container-->

</footer>
 
</div><!--End of #wrapper-->
 
<?php wp_footer(); ?> <!--is what WordPress uses to add things to the bottom of the
site, more often that not used by plugins to add things like site tracking code.-->
 
</body>
</html>