     
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
                                <!--Place caption/title/calls-to-action for your slide-->

                    <span class="captionDetail"><?php the_content(); ?></span>
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
                        <!--Place caption/title/calls-to-action for your slide-->

                    <span class="captionDetail"><p><?php the_content(); ?></p></span>
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
            <h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_url( get_template_directory_uri()); ?>/img/logo_white_datum_2.png" alt="Hamnfestivalen på Limhamns logotyp"></a></h1>
        </div>
    </div>
    <a class="page-scroll" href=".filter_wrapper"><i class="fa fa-chevron-down fa_arrow"></i></a>
    <!-- Full Page slider-->
</header>
