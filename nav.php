 <div class="nav-container">
  <nav id="one-page" class="navbar navbar-inverse" role="navigation" aria-label="Primär navigation" >
   <a href="#page-top" class="nav-logo page-scroll"><?php echo get_bloginfo ( 'description' ); ?></a>

      <div class="container">
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand page-scroll" href="#page-top"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php
            echo get_primary_menu('primary');
            ?>


        </div><!--/.nav-collapse -->
      </div><!--End .container-->
  </nav>
</div> <!--End .nav-container-->