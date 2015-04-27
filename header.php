<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="description" content="<?php bloginfo('description'); ?>">

<?php wp_head(); ?>
 
</head>
  
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
     
    <div id="wrapper">
     
    <header role="banner">

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
                echo get_primary_menu('primary');
                ?>


        </div><!--/.nav-collapse -->
      </div><!--End .container-->
    </nav>

    <h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_url( get_template_directory_uri()); ?>/img/logo_bla2.png" alt="Hamnfestivalen på Limhamns logotyp"></a></h1>

    <!-- Full Page slider-->
    </header>
    <?php 
    //echo do_shortcode("[metaslider id=27]"); 
    ?>