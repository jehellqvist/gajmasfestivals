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
                        <div class="content-meta">
                            <div class="single-map">
                                <a href="http://localhost:8888/wp-content/uploads/2015/04/karta_full1.png">
                                    <img src="http://localhost:8888/wp-content/uploads/2015/04/map_icon.png" alt="karta_icon" />
                                </a>
                            </div>
                            <p class="single-place"><?php echo get_field('plats_pa_kartan')?><i class="fa fa-map-marker"></i><?php echo get_field('plats')?></p>
                        </div>
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