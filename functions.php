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
    wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/js/jquery.easing.min.js', array('jquery'), true );
    wp_enqueue_script( 'bootstrap-nav-script', get_template_directory_uri() . '/js/scrolling-nav.js', array('jquery'), true );
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


function posts_callback($atts=null, $content=null){
    query_posts(array('orderby' => 'date', 'order' => 'DESC' , 'showposts' => $posts));

    $option .= '<div class="row filtering">';
    $categories = get_categories('type=post'); 
    foreach ($categories as $category) {
        $option .= '<button class="btn btn-default" id="'.$category->cat_name.'">'.$category->cat_name.'</button>';
    }
    $option .= '</div><!--End .row-->';

    $option .= '<div class="row" id="post_filter" >';


    if(have_posts()):
        while(have_posts()):
            the_post();
                ?>
                <?php foreach((get_the_category()) as $category) { 
                    $cat_string .= $category->cat_name . " ";

                }
                 $option .= '<div class="col-xs-12 col-sm-6 col-md-3 '. $cat_string .'"><div class="inner">
                    <h2>'. get_the_title(). '</h2>
                    <p>'. get_the_content().'</p>
                </div><!--End .inner--></div><!--End . col-*-* -->';
                ?><?php $cat_string = "";
        endwhile;

    endif;

    $option .= '</div>';

    $option .= 
    "<script>
        var btns = $('.btn').click(function() {
            $('#post_filter > div').show()
        if (this.id == 'Alla') {
            $('#post_filter > div').fadeIn(1000);
        } 
        else {
            var el = $('.' + this.id).fadeIn(1000);
            $('#post_filter > div').hide()
            $('#post_filter').find('.' + this.id).show()            
        }
        $('.btn').removeClass('active');
        $(this).addClass('active');
        })
    </script>";

    return $option;
}

add_shortcode("posts", "posts_callback");


function one_page_menu_reg() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'festivals' ) );
}
add_action( 'after_setup_theme', 'one-page-menu-reg' );


// custom menu example @ http://digwp.com/2011/11/html-formatting-custom-menus/
function clean_custom_menus() {
    $menu_name = 'primary'; // specify custom menu slug
    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
        echo "hej";
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);

        $menu_list = '<nav>' ."\n";
        $menu_list .= "\t\t\t\t". '<ul>' ."\n";
        foreach ((array) $menu_items as $key => $menu_item) {
            $title = $menu_item->title;
            $url = $menu_item->url;
            $menu_list .= "\t\t\t\t\t". '<li><a href="'. $url .'">'. $title .'</a></li>' ."\n";
        }
        $menu_list .= "\t\t\t\t". '</ul>' ."\n";
        $menu_list .= "\t\t\t". '</nav>' ."\n";
    } else {
        // $menu_list = '<!-- no list defined -->';
    }
    echo $menu_list;
}
