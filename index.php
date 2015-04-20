<?php get_header(); ?>

 <div id="content">
 
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         
    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                 
    <?php the_content(); ?>
     
    <p><?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?> | <?php the_category(', '); ?> | <?php comments_number('No comment', '1 comment', '% comments'); ?></p>
     
    <?php endwhile; else: ?>
     
    <h2>Woops...</h2>
     
    <p>Sorry, no posts we're found.</p>
     
    <?php endif; ?>
     
    <p align="center"><?php posts_nav_link(); ?></p>
         
</div>

<?php get_footer(); ?>