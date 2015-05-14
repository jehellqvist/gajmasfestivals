<?php
/**
 * Default Post Template
 * Description: Post template
 *
 */
get_header(); ?>

 <nav id="single-post-page-nav" class="" role="navigation">
    <div class="container-fluid">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fa fa-chevron-left"></i></a>
        <?php
        echo get_primary_menu('secondary');
        ?>
    </div><!--End .container-fluid-->
</nav>

<?php while (have_posts()) : the_post(); ?>

    <section class="<?php echo get_post_type( $post ) ?>">
        <div class="container-fluid">
            <article class="single-post row">
                <?php
                    $days = get_field('dag');
                    if(count($days)>=4){
                        $day_list='Alla dagar';
                    }
                    else {
                        foreach ($days as $day) {
                            $day_list .= $day.', ';
                        }
                        $day_list = substr($day_list, 0, -2);
                    }

                    //format of time field
                    if(get_field('tid') == ''){
                        $time = '';
                    }
                    else {
                        $time = ' | '.get_field('tid');
                    }
                ?>
                <div class="col-sm-12 col-md-6 col-md-offset-3 post-img-container">
                    <img src="<?php echo get_field('bild')?>" class="img-responsive img-center">
                </div><!--End . col-*-* -->

                <div class="col-sm-12 col-md-12">
                    <div class="inner-single col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
                        <header role="banner">
                            <h2><?php echo get_the_title() ?></h2>
                            <p class="content-meta"><?php echo $day_list?><?php echo $time?><p>
                        </header>
                        <p class="description"><?php echo get_field('beskrivning')?></p>
                        <div class="content-meta">

                        <a href="#popup1" class="portfolio-link" data-toggle="modal">
                            <div class="map">
                                <figure class="hover-map">
                                    <img src='<?php echo esc_url( get_theme_mod( 'themeslug_map' ) ); ?>' alt="Karta över festivalområdet" class="img-center">                  
                                </figure>
                            </div>
                        </a>

                        <!--Map popup-->
                        <div class="portfolio-modal modal fade" id="popup1" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-content">
                                    <div class="close-modal" data-dismiss="modal">
                                        <div class="lr">
                                            <div class="rl">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-12">
                                                    <h3><?php echo get_the_title() ?></h3>
                                                    <p class="single-place"><?php echo get_field('plats_pa_kartan')?><i class="fa fa-map-marker"></i><?php echo get_field('plats')?></p>                                                    <figure>
                                                    <img src='<?php echo esc_url( get_theme_mod( 'themeslug_map' ) ); ?>' alt="Karta över festivalområdet" class="img-center">                  
                                                </figure>
                                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Stäng</button>
                                            </div><!-- End col-md-*-->
                                        </div><!--End . row-->
                                    </div><!--End .container-->
                                </div><!--End .modal-content-->
                            </div><!--End .portfolio-modal modal fade-->

                        <p class="single-place"><?php echo get_field('plats_pa_kartan')?><i class="fa fa-map-marker"></i><?php echo get_field('plats')?></p>
                        </div>
                    </div><!--.inner-single-->
                    <div class="col-md-12">
                        <hr class="ample">
                    </div>
                    <div class="social-sharing-buttons col-md-12 text-center">
                        <?php 
                            if ( function_exists( 'sharing_display' ) ) {
                                sharing_display( '', true );
                            }
                            if ( class_exists( 'Jetpack_Likes' ) ) {
                                $custom_likes = new Jetpack_Likes;
                                echo $custom_likes->post_likes( '' );
                            }
                        ?>
                    </div><!--.social-sharing-buttons-->
                </div><!--End . col-*-* -->
            </article><!--/.row -->
        </div><!--.container-fluid-->
    </section>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>