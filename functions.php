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
    $categories = get_categories('parent=0', 'type=post');    
    $option .= '<div class="row filtering">';
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
                
                 $option .= '<div class="col-xs-12 col-sm-6 col-md-3 post_content '. $cat_string .'"><div class="inner">
                    <h2>'. get_the_title(). '</h2>
                    <p>'.get_the_post_thumbnail().'</p>
                    <p>'. get_the_content().'</p>
                    <span>Plats: '.get_field('plats').'</span><br>
                    <span>Tid: '.get_field('tid').'</span>
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
            $('.' + this.id).fadeIn(1000);
            $('#post_filter > div').hide()
            $('#post_filter').find('.' + this.id).show()            
        }
        $('.btn').removeClass('active');
        $(this).addClass('active');
        if ($().hasClass('active')) {
            $(this).parent().addClass('active');
        }
        

        })
    </script>";

    return $option;
}

add_shortcode("posts", "posts_callback");


// Add Your Menu Locations
function register_my_menus() {
  register_nav_menus(
    array(  
        'primary' => __( 'Main one page navigation' )
    )
  );
} 
add_action( 'init', 'register_my_menus' );

function get_primary_menu($the_menu) {
    $menu_name = $the_menu;

    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

    $menu_items = wp_get_nav_menu_items($menu->term_id);

    $menu_list = '<ul id="one-page-nav" class="nav navbar-nav">';

    foreach ( (array) $menu_items as $key => $menu_item ) {
        $title = $menu_item->title;
        $id = $menu_item->object_id;
        $url = $menu_item->url;
        $slug = strtolower($title);
        $slug = str_replace(' ', '-', $slug);
        $slug = str_replace('å', 'a', $slug);
        $slug = str_replace('ä', 'a', $slug);
        $slug = str_replace('ö', 'o', $slug);
        $menu_list .= '<li><a href="#' . $slug . '" class="page-scroll">' . $title . '</a></li>';
    }
    $menu_list .= '</ul>';
    } else {
    $menu_list = '<ul><li>Menu "' . $menu_name . '" not defined.</li></ul>';
    }
    return $menu_list;
}


function get_pages_by_menu($the_menu) {
    //returns content from all pages in a menu
    $menu_name = $the_menu;

    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
        $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

        $menu_items = wp_get_nav_menu_items($menu->term_id);

        foreach ( (array) $menu_items as $key => $menu_item ) {
            
            $page_id = $menu_item->object_id;
            $title = $menu_item->title;
            $url = $menu_item->url;
            $slug = strtolower($title);
            $slug = str_replace(' ', '-', $slug);
            $slug = str_replace('å', 'a', $slug);
            $slug = str_replace('ä', 'a', $slug);
            $slug = str_replace('ö', 'o', $slug);

            $content = get_post_field( 'post_content', $page_id);
            if ($content) {
                $content = apply_filters('the_content', $content);
            $content_list .= "<section id='".$slug."' class='container-fluid'>";
            $content_list .= $content;
            $content_list .= "</section> <!--End $slug-->";
            }
        }
        return $content_list;
    }
}



