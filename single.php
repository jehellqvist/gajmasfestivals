<?php
/**
 * Default Post Template
 * Description: Post template
 *
 */
get_header(); ?>

 <nav id="single-post-page-nav" class="navbar navbar-inverse" role="navigation">
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
            <article class="row">
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
                        <span class="place"><p>Plats på kartan: <?php echo get_field('plats_pa_kartan')?></p><i class="fa fa-map-marker"></i><p><?php echo get_field('plats')?></p></span>
                    </div><!--.inner-single-->
                    <hr class="ample">
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