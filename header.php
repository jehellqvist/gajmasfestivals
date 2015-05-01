<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="description" content="<?php bloginfo('description'); ?>">

<?php wp_head(); ?>
 
</head>
  
<body id="page-top" data-spy="scroll" data-target=".navbar">
     
    <div id="wrapper">
     
    <header id="myCarousel" class="carousel slide" data-ride="carousel" role="banner">
                <!--Indicators-->
                <!--Your Slider Content Here-->
                <div class="carousel-inner">

                    <!--Each div with class name item is a slide item-->
                    <!--Use this code To make your slider pull slides and their content from WordPress-->

                    <?php
                        $args = array( 'post_type' => 'custom_slide', 'posts_per_page' => 1, 'orderby' => 'menu_order', 'order' => 'ASC' );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <!--Add an ‘active’ class to this div to make this slide appear as the first item-->
                        <div class="item active">
                            <?php
                                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), false);
                                $url = $thumb[0];
                            ?>
                            <div class="fill img-responsive" style="background-image:url(<?php echo $url; ?>);"></div>
                            <!--<img src="<?php echo $url; ?>" alt="Image Title" class="img-responsive">-->
                            <div class="carousel-caption">
                                <!--End slide content-->
                            </div>
                        </div>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        ?>
                    <!--Show the rest of the slide-->
                    <?php
                        $args = array( 'post_type' => 'custom_slide', 'offset' => 1, 'orderby' => 'menu_order', 'order' => 'ASC' );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                    ?>
                    <!--For the rest of the slide items, remove the ‘active’ class from the div to initially hide the other slides-->
                    <div class="item">
                    <?php
                        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), false);
                        $url = $thumb[0];
                    ?>
                            
                    <div class="fill" style="background-image:url(<?php echo $url; ?>);"></div>
                    <!--<img src="<?php echo $url; ?>" alt="Image Title" class="img-responsive">-->
                    <div class="carousel-caption">
                    <!--End slide content-->
                    </div>
                    </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    ?>  
                </div><!--End .carousel-inner-->
            </div>
        </div>

   
   
    <div id="title-box" class="row">
        <div class="col-md-12">
            <h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_url( get_template_directory_uri()); ?>/img/logo_bla2.png" alt="Hamnfestivalen på Limhamns logotyp"></a></h1>
        </div>
    </div>
    <a class="page-scroll" href="#program"><i class="fa fa-chevron-down fa_arrow"></i></a>
    <!-- Full Page slider-->
    </header>
 <nav id="affix-nav" class="navbar navbar-inverse" role="navigation" >
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
     
    <?php 
    //echo do_shortcode("[metaslider id=27]"); 
    ?>