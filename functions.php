<?php
include ('one-page-slider.php');
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
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/full-slider.css' );
    wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/js/jquery.easing.min.js', array('jquery'), true );
    wp_enqueue_script( 'bootstrap-nav-script', get_template_directory_uri() . '/js/scrolling-nav.js', array('jquery'), true );
    wp_enqueue_style('gajmas-styles',  get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array('jquery'), true );
    wp_enqueue_script( 'waypoints-sticky', get_template_directory_uri() . '/js/sticky.min.js', array('jquery'), true );
    wp_enqueue_script( 'javascript-script', get_template_directory_uri() . '/js/javascript.js', array('jquery'), true );
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
    query_posts(array('orderby' => 'date','order' => 'DESC' , 'showposts' => $posts));
    $option .= '
        <div class="row filter-function">';
            $option .='
            <div class="col-lg-1">
                <button id="clear">Visa alla</button>
            </div><!--End col-lg-1-->
            <div class="col-lg-11">
            <div class="row">';
            $catID = get_categories(array('parent' => '0','type' => 'post' , 'orderby' => 'slug', 'order' => 'ASC'));
            foreach ($catID as $id) {
                $display_name = $id->cat_name;
                $new_id = $id->cat_ID;
                $name = str_replace('Å', 'A', $display_name);
                $option .= '
                <div class="col-lg-12">
                <ul class="list-unstyled list-inline filter-wrapper filter-'.$name.'">
                    <h2>'.$display_name.'</h2>';
                    $categories = get_categories('parent='.$new_id.'', 'type=post');
                    foreach ($categories as $category) {
                        $new_name = $category->cat_name;
                        $option .= '
                        <li class="button-checkbox">
                        <button type="button" class="btn" data-color="primary">'.$new_name.'</button>
                            <input type="checkbox" name="filter-'.$name.'" value="'.$new_name.'" id="'.$new_name.'" class="hidden" >
                            <!--<label for="'.$new_name.'">'.$new_name.'</label>-->
                        </li>';
                        }
                    $option .= '
                </ul><!--End .filter-wrapper-->
                </div><!--End .col-* -->';
            }
            $option .= '
            </div><!--End .row-->
            </div><!--End col-lg-10-->';
     $option .= '<script>
        var Kategori = [], Aldersgrupp = [], Plats = [], Veckodag = [];
        
        $("input[name=filter-Kategori]").on( "change", function() {
            if (this.checked) Kategori.push("[data-category~=\'" + $(this).attr("value") + "\']");
            else removeA(Kategori, "[data-category~=\'" + $(this).attr("value") + "\']");
        });
            
        $("input[name=filter-Aldersgrupp]").on( "change", function() {
            if (this.checked) Aldersgrupp.push("[data-category~=\'" + $(this).attr("value") + "\']");
            else removeA(Aldersgrupp, "[data-category~=\'" + $(this).attr("value") + "\']");
        });
        
        $("input[name=filter-Plats]").on( "change", function() {
            if (this.checked) Plats.push("[data-category~=\'" + $(this).attr("value") + "\']");
            else removeA(Plats, "[data-category~=\'" + $(this).attr("value") + "\']");
        });
        
        $("input[name=filter-Veckodag]").on( "change", function() {
            if (this.checked) Veckodag.push("[data-category~=\'" + $(this).attr("value") + "\']");
            else removeA(Veckodag, "[data-category~=\'" + $(this).attr("value") + "\']");
        });
        
        $("input").on( "change", function() {
            var str = "Include items \n";
            var selector = \'\', cselector = \'\', nselector = \'\', lselector = \'\';
                    
            var $lis = $(\'.program > article\'),
                $checked = $(\'input:checked\');    
                
            if ($checked.length) {  
            
                if (Kategori.length) {      
                    if (str == "Include items \n") {
                        str += "    " + "with (" +  Kategori.join(\',\') + ")\n";               
                        $($(\'input[name=filter-Kategori]:checked\')).each(function(index, Kategori){
                            if(selector === \'\') {
                                selector += "[data-category~=\'" + Kategori.id + "\']";                     
                            } else {
                                selector += ",[data-category~=\'" + Kategori.id + "\']";    
                            }                
                        });                 
                    } else {
                        str += "    AND " + "with (" +  Kategori.join(\' OR \') + ")\n";                
                        $($(\'input[name=filter-Kategori]:checked\')).each(function(index, Kategori){
                            selector += "[data-category~=\'" + Kategori.id + "\']";
                        });
                    }                           
                }
                
                if (Aldersgrupp.length) {                     
                    if (str == "Include items \n") {
                        str += "    " + "with (" +  Aldersgrupp.join(\' OR \') + ")\n";                   
                        $($(\'input[name=filter-Aldersgrupp]:checked\')).each(function(index, Aldersgrupp){
                            if(selector === \'\') {
                                selector += "[data-category~=\'" + Aldersgrupp.id + "\']";                    
                            } else {
                                selector += ",[data-category~=\'" + Aldersgrupp.id + "\']";   
                            }                
                        });                 
                    } else {
                        str += "    AND " + "with (" +  Aldersgrupp.join(\' OR \') + ")\n";               
                        $($(\'input[name=filter-Aldersgrupp]:checked\')).each(function(index, Aldersgrupp){
                            if(cselector === \'\') {
                                cselector += "[data-category~=\'" + Aldersgrupp.id + "\']";                   
                            } else {
                                cselector += ",[data-category~=\'" + Aldersgrupp.id + "\']";  
                            }                   
                        });
                    }           
                }
                
                if (Plats.length) {           
                    if (str == "Include items \n") {
                        str += "    " + "with (" +  Plats.join(\' OR \') + ")\n";             
                        $($(\'input[name=filter-Plats]:checked\')).each(function(index, Plats){
                            if(selector === \'\') {
                                selector += "[data-category~=\'" + Plats.id + "\']";                      
                            } else {
                                selector += ",[data-category~=\'" + Plats.id + "\']"; 
                            }                
                        });             
                    } else {
                        str += "    AND " + "with (" +  Plats.join(\' OR \') + ")\n";             
                        $($(\'input[name=filter-Plats]:checked\')).each(function(index, Plats){
                            if(nselector === \'\') {
                                nselector += "[data-category~=\'" + Plats.id + "\']";                     
                            } else {
                                nselector += ",[data-category~=\'" + Plats.id + "\']";    
                            }   
                        });
                    }            
                }
                if (Veckodag.length) {         
                    if (str == "Include items \n") {
                        str += "    " + "with (" +  Veckodag.join(\' OR \') + ")\n";               
                        $($(\'input[name=filter-Veckodag]:checked\')).each(function(index, Veckodag){
                            if(selector === \'\') {
                                selector += "[data-category~=\'" + Veckodag.id + "\']";                    
                            } else {
                                selector += ",[data-category~=\'" + Veckodag.id + "\']";   
                            }                
                        });             
                    } else {
                        str += "    AND " + "with (" +  Veckodag.join(\' OR \') + ")\n";               
                        $($(\'input[name=filter-Veckodag]:checked\')).each(function(index, Veckodag){
                            if(lselector === \'\') {
                                lselector += "[data-category~=\'" + Veckodag.id + "\']";                   
                            } else {
                                lselector += ",[data-category~=\'" + Veckodag.id + "\']";  
                            }   
                        });
                    }            
                }
                
                $lis.hide(); 
                console.log(selector);
                console.log(cselector);
                console.log(nselector);
                console.log(lselector);
                
                if(cselector === \'\' && nselector === \'\' && lselector === \'\') {            
                    $(\'.program > article\').filter(selector).show("slow");
                } else if (cselector === \'\' && nselector === \'\') {
                    $(\'.program > article\').filter(selector).filter(lselector).show("slow");
                } else if (nselector === \'\' && lselector === \'\') {
                    $(\'.program > article\').filter(selector).filter(cselector).show("slow");
                } else if (cselector === \'\' && lselector === \'\') {
                    $(\'.program > article\').filter(selector).filter(nselector).show("slow"); 
                } else if (cselector === \'\') {
                    $(\'.program > article\').filter(selector).filter(nselector).filter(lselector).show("slow");
                } else if (nselector === \'\') {
                    $(\'.program > article\').filter(selector).filter(cselector).filter(lselector).show("slow");
                } else if (lselector === \'\') {
                    $(\'.program > article\').filter(selector).filter(nselector).filter(cselector).show("slow");
                } else {
                    $(\'.program > article\').filter(selector).filter(cselector).filter(nselector).filter(lselector).show();
                }
                
            } else {
                $lis.show("slow");
            }   
                                  
            $("#result").html(str); 
    
        });
        
        function removeA(arr) {
            var what, a = arguments, L = a.length, ax;
            while (L > 1 && arr.length) {
                what = a[--L];
                while ((ax= arr.indexOf(what)) !== -1) {
                    arr.splice(ax, 1);
                }
            }
            return arr;
        }
        $(\'#clear\').click(function() {
            $(\'.program > article\').show("slow");
            Kategori = []; 
            Aldersgrupp = []; 
            Plats = [];
            Veckodag = [];
            selector = \'\';
            cselector = \'\'; 
            nselector = \'\'; 
            lselector = \'\';
            $(\'input:checkbox\').removeAttr(\'checked\');
        });
        </script>';;
    $option .= '<div class="row program">';
    
    if(have_posts()):
        while(have_posts()):
            the_post();
                ?>
                <?php foreach((get_the_category()) as $category) { 
                    $cat_string .= $category->cat_name . " ";
                }
                
                //format of day field
                $days = get_field('dag');
                if(count($days)>=4){
                    $day_list='Alla Veckodag';
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

                $url = get_permalink();
                $description = get_field('beskrivning');

                if(strlen($description) >= 115) {
                    $description = substr($description, 0, 115);
                    $description .= '... <span class="link">LÄS MER</span>';
                }

                 $option .= '
                     <article class="col-xs-12 col-sm-3 col-md-3 post-content '. $cat_string .'" data-category="'.$cat_string.'">
                        <a href="'.$url.'">
                        <div class="inner" style="background-image:url('.get_field('bild').')">
                        </div>
                        <div class="inner-bottom">
                            <div class="wave">
                                <div class="inner-content">
                                    <h2>'. get_the_title(). '</h2>
                                    <p class="content-meta">'.$day_list.$time.'<p>

                                    <p class="description">'.$description.'</p>
                                    <span class="place"><p>'.get_field('plats_pa_kartan').'</p><i class="fa fa-map-marker"></i><p>'.get_field('plats').'</p></span>
                                </div><!--.inner-content-->

                            </div><!--.wave-->
                        </div><!--.inner-bottom-->
                        </a><!--End .inner-->
                    </article><!--End . col-*-* -->';
                ?><?php $cat_string = "";

                //variable reset
                $time = '';
                $day_list = '';
        endwhile;
    endif;
    $option .= '</div><!--End .row-->';
    
    
    return $option;
}
add_shortcode("posts", "posts_callback");

// Add Your Menu Locations
function register_my_menus() {
  register_nav_menus(
    array(  
        'primary' => __( 'Main one page navigation' ),
        'secondary' => __( 'Post and Page navigation' ),
    )
  );
} 
add_action( 'init', 'register_my_menus' );

/*
* Returns a boostrap classified menu
* primary: #-linked to slug
* secondary: url-linked
*/
function get_primary_menu($the_menu) {
    if ($the_menu == 'secondary') {
        $menu_name = $the_menu;

        if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
            $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

            $menu_items = wp_get_nav_menu_items($menu->term_id);
            $menu_list = '<ul id="one-page-nav" class="nav" >';

            foreach ( (array) $menu_items as $key => $menu_item ) {
                $title = $menu_item->title;
                $id = $menu_item->object_id;
                $url = $menu_item->url;
                $slug = strtolower($title);
                $slug = str_replace(' ', '-', $slug);
                $slug = str_replace('å', 'a', $slug);
                $slug = str_replace('ä', 'a', $slug);
                $slug = str_replace('ö', 'o', $slug);
                $menu_list .= '<li><a href="'. $url . '" class="page-scroll">' . $title . '</a></li>';
            }
            $menu_list .= '</ul>';
        } 
        else {
            $menu_list = '<ul><li>Menu "' . $menu_name . '" not defined.</li></ul>';
        }
        return $menu_list;
    }
    else {
        $menu_name = $the_menu;

        if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
            $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

            $menu_items = wp_get_nav_menu_items($menu->term_id);

            $menu_list = '<ul id="one-page-nav" class="nav navbar-nav" >';

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
        } 
        else {
            $menu_list = '<ul><li>Menu "' . $menu_name . '" not defined.</li></ul>';
        }
        return $menu_list;
    }
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

/*CODE FOR CUSTOM SLIDESHOW IN WORDPRESS*/
add_theme_support( 'post-thumbnails' );
add_filter('manage_posts_columns', 'posts_columns', 5);
add_action('manage_posts_custom_column', 'posts_custom_columns', 5, 2);
function posts_columns($defaults){
    $defaults['riv_post_thumbs'] = __('Thumbs');
    return $defaults;
}
function posts_custom_columns($column_name, $id){
        if($column_name === 'riv_post_thumbs'){
         
        echo the_post_thumbnail( 'thumbnail' );
    }
}
// 1. customize ACF path
add_filter('/acf/settings/path', 'my_acf_settings_path');
 
function my_acf_settings_path( $path ) {
 
    // update path
    $path = get_stylesheet_directory() . '/acf/';
    
    // return
    return $path;
    
}
 
// 2. customize ACF dir
add_filter('/acf/settings/dir', 'my_acf_settings_dir');
 
function my_acf_settings_dir( $dir ) {
 
    // update path
    $dir = get_stylesheet_directory_uri() . '/acf/';
    
    // return
    return $dir;
    
}
 
// 3. Hide ACF field group menu item
add_filter('/acf/settings/show_admin', '__return_false');
// 4. Include ACF
include_once( get_stylesheet_directory() . '/acf/acf.php' );

/*
* Add custom placed social sharing buttons
*
*/
function jptweak_remove_share() {
    remove_filter( 'the_content', 'sharing_display',19 );
    remove_filter( 'the_excerpt', 'sharing_display',19 );
    if ( class_exists( 'Jetpack_Likes' ) ) {
        remove_filter( 'the_content', array( Jetpack_Likes::init(), 'post_likes' ), 30, 1 );
    }
}
add_action( 'loop_start', 'jptweak_remove_share' );


function jeherve_custom_sharing_title() {
        $post = get_post();
        if ( empty( $post ) ) {
                return;
        } else {
                // Create sharing title
                $sharing_title = get_the_title( $post->ID );
 
                // Get the tags
                $post_tags = get_the_tags( $post->ID );
                if ( ! empty( $post_tags ) ) {
                        // Create list of tags with hashtags in front of them
                        $hash_tags = '';
                        foreach( $post_tags as $tag ) {
                                $hash_tags .= ' #' . $tag->name;
                        }
                        // Add tags to the title
                        $sharing_title .= $hash_tags;
                }
                $sharing_title .= ' #pohamnfestivalen';
                return $sharing_title;
        }
}
add_filter( 'sharing_title', 'jeherve_custom_sharing_title', 10, 3 );

remove_filter('the_content', 'wpautop');


if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'acf_programpunkts-info',
        'title' => 'Programpunkts info',
        'fields' => array (
            array (
                'key' => 'field_5541fbdec9c88',
                'label' => 'Beskrivning',
                'name' => 'beskrivning',
                'type' => 'textarea',
                'instructions' => 'En kort beskrivning av programpunkten.',
                'required' => 1,
                'default_value' => '',
                'placeholder' => '',
                'rows' => 3,
                'formatting' => 'br',
            ),
            array (
                'key' => 'field_5541fda7cd1f5',
                'label' => 'Bild',
                'name' => 'bild',
                'type' => 'image',
                'instructions' => 'Ladda upp bild för programpunkten',
                'save_format' => 'url',
                'preview_size' => 'medium',
                'library' => 'all',
            ),
            array (
                'key' => 'field_5541fc03a6416',
                'label' => 'Plats',
                'name' => 'plats',
                'type' => 'radio',
                'instructions' => 'Ange plats för programpunkten',
                'required' => 1,
                'choices' => array (
                    'Småbåtshamnen' => 'Småbåtshamnen',
                    'Fiskehamnen' => 'Fiskehamnen',
                ),
                'other_choice' => 1,
                'save_other_choice' => 1,
                'default_value' => '',
                'layout' => 'vertical',
            ),
            array (
                'key' => 'field_5541fc28e198d',
                'label' => 'Dag',
                'name' => 'dag',
                'type' => 'checkbox',
                'instructions' => 'Ange dag/dagar då programpunkten äger rum',
                'required' => 1,
                'choices' => array (
                    'Tors' => 'Tors',
                    'Fre' => 'Fre',
                    'Lör' => 'Lör',
                    'Sön' => 'Sön',
                    'Alla dagar' => 'Alla dagar',
                ),
                'default_value' => 'Alla dagar',
                'layout' => 'vertical',
            ),
            array (
                'key' => 'field_5541fc8ac957d',
                'label' => 'Tid',
                'name' => 'tid',
                'type' => 'text',
                'instructions' => 'Ange eventuell tid då programpunkten äger rum efter formen 00.00-00.00',
                'default_value' => '',
                'placeholder' => '00.00-00.00',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_5541fcfae69bf',
                'label' => 'Plats på kartan',
                'name' => 'plats_pa_kartan',
                'type' => 'number',
                'instructions' => 'Ange plats på kartan',
                'required' => 1,
                'default_value' => '',
                'placeholder' => 0,
                'prepend' => '',
                'append' => '',
                'min' => '',
                'max' => '',
                'step' => '',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
                0 => 'the_content',
                1 => 'custom_fields',
                2 => 'discussion',
                3 => 'comments',
            ),
        ),
        'menu_order' => 0,
    ));
}