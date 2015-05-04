<?php
/**
 * Default Post Template
 * Description: Post template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>

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
        <div class="col-sm-12 col-md-7 no-margin">
            <img src="<?php echo get_field('bild')?>" class="img-responsive">
        </div><!--End . col-*-* -->

        <div class="col-sm-12 col-md-5 no-margin">
            <div class="inner-single col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 text-center">
                <header role="banner">
                    <h2><?php echo get_the_title() ?></h2>
                    <p class="content-meta"><?php echo $day_list?><?php echo $time?><p>
                </header>
                <p class="description"><?php echo get_field('beskrivning')?></p>
                <span class="place"><p>Plats på kartan: <?php echo get_field('plats_pa_kartan')?></p><i class="fa fa-map-marker"></i><p><?php echo get_field('plats')?></p></span>
            </div><!--.inner-single-->
             <div id="nav-bottom" class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
            <?php wp_nav_menu(
                array(
                'theme_location' => 'secondary',
                'fallback_cb' => false
              )
            );?>
            </div><!--End . col-*-* -->
        </div><!--End . col-*-* -->
        
    </article><!--/.row -->
</div><!--.container-fluid-->

</section>

<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>