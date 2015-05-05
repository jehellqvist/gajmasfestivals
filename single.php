<?php
/**
 * Default Post Template
 * Description: Post template
 *
 */
get_header(); ?>

 <nav id="single-post-page-nav" class="navbar navbar-inverse" role="navigation" >
      <div class="container-fluid">
        <!-- Collect the nav links, forms, and other content for toggling -->
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fa fa-chevron-left"></i></a>
            <?php
            echo get_primary_menu('secondary');
            ?>
      </div><!--End .container-->
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
            <img src="<?php echo get_field('bild')?>" class="img-responsive">
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
        </div><!--End . col-*-* -->
        
    </article><!--/.row -->
</div><!--.container-fluid-->

</section>

<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>