<?php

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}

    function query_styles() {
    wp_enqueue_style('bootstrap-icons', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap-responsive.min.css' );
    wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), true );
    wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/js/javascript.js', array('jquery'), true );
    wp_enqueue_style('gajmas-styles',  get_stylesheet_directory_uri() . '/style.css');

}
    add_action( 'wp_enqueue_scripts', 'query_styles' );



/**
 * html5_shiv function.
 * 
 * @access public
 * @return void
 */

function html5_shiv() {
        ?>
        <!-- IE Fix for HTML5 Tags -->
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <?php
}
if(!is_admin()) {
        add_action('wp_head','html5_shiv');
}

if(get_page_by_title("Home") == null)
{
    $post = array(
        "post_title" => "Home",
        "post_status" => "publish",
        "post_type" => "page",
        "menu_order" => "-100",
        "page_template" => "single-page-theme.php"
    );

    wp_insert_post($post);

    $home_page = get_page_by_title("Home");
    update_option("page_on_front",$home_page->ID);
    update_option("show_on_front","page");
}

function posts_callback($atts=null, $content=null)
{
    ?>          
        <?php 
            $categories = get_categories('type=post'); 
            foreach ($categories as $category) {
                $option = '<button class="active btn" id="'.$category->cat_name.'">'.$category->cat_name.'</button>';
                echo $option;
                echo ' ';
            }
            ?>



    <div class="row" id="post_filter" >

    <?php
    if(have_posts()):
        while(have_posts()): 
            the_post();
            ?>
                <div class="col-md-3 <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>" style="height:200px;">
                    <h2><?php echo get_the_title(); ?></h2>
                    <p><?php the_content() ?></p>
                </div>
            <?php
        endwhile;
        else:
            echo "";
            die();
    endif;

    ?>
        </div>
<script>
var $btns = $('.btn').click(function() {
  if (this.id == 'Alla') {
    $('#post_filter > div').fadeIn(1000);
  } else {
    var $el = $('.' + this.id).fadeIn(1000);
    $('#post_filter > div').not($el).hide();
  }
  $btns.removeClass('active');
  $(this).addClass('active');
})
</script>
    <?php
}
add_shortcode("posts", "posts_callback");

