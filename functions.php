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


//Adds custom fields in Wordpress Anpassa
function themeslug_theme_customizer( $wp_customize ) {
    //Adds logo field
    $wp_customize->add_section( 'themeslug_logo_section' , array(
        'title'       => __( 'Logo', 'themeslug' ),
        'priority'    => 40,
        'description' => 'Lägg till en bild för att byta logga i headern',
        ) 
    );

    $wp_customize->add_setting( 'themeslug_logo' );

        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
        'label'    => __( 'Logo', 'themeslug' ),
        'section'  => 'themeslug_logo_section',
        'settings' => 'themeslug_logo',
        )) 
    );


    //Map
    $wp_customize->add_section( 'themeslug_map_section' , array(
        'title'       => __( 'Karta', 'themeslug' ),
        'priority'    => 40,
        'description' => 'Lägg till karta över festivalområdet, visas på startsidan och programpunkts-sidor',
        ) 
    );

    $wp_customize->add_setting( 'themeslug_map' );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_map', array(
        'label'    => __( 'Karta', 'themeslug' ),
        'section'  => 'themeslug_map_section',
        'settings' => 'themeslug_map',
        )) 
    );

    //Adds footer fields
    $wp_customize->add_section( 'themeslug_footer_section' , array(
        'title'       => __( 'Sidfot', 'theme' ),
        'priority'    => 40,
        'description' => 'Lägg till/ändra information i sidfoten'
        ) 
    );

    $wp_customize->add_setting( 'themeslug_footer_mail' );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'themeslug_footer_mail', array(
        'label'    => __( 'E-post', 'themeslug' ),
        'section'  => 'themeslug_footer_section',
        'settings' => 'themeslug_footer_mail',
        'type'     => 'text',
        )) 
    );

    $wp_customize->add_setting( 'themeslug_footer_street' );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'themeslug_footer_street', array(
        'label'    => __( 'Gatuadress', 'themeslug' ),
        'section'  => 'themeslug_footer_section',
        'settings' => 'themeslug_footer_street',
        )) 
    );

    $wp_customize->add_setting( 'themeslug_footer_address' );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'themeslug_footer_address', array(
        'label'    => __( 'Postnummer & Postort', 'themeslug' ),
        'section'  => 'themeslug_footer_section',
        'settings' => 'themeslug_footer_address',
        'type'     => 'text',
        )) 
    );

    $wp_customize->add_setting( 'themeslug_footer_address' );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'themeslug_footer_address', array(
        'label'    => __( 'Postnummer & Postort', 'themeslug' ),
        'section'  => 'themeslug_footer_section',
        'settings' => 'themeslug_footer_address',
        'type'     => 'text',
        )) 
    );

    $wp_customize->add_setting( 'themeslug_footer_phone' );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'themeslug_footer_phone', array(
        'label'    => __( 'Telefonnummer', 'themeslug' ),
        'section'  => 'themeslug_footer_section',
        'settings' => 'themeslug_footer_phone',
        )) 
    );

    $wp_customize->add_setting( 'themeslug_footer_webpage' );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'themeslug_footer_webpage', array(
        'label'    => __( 'Arrangör webbsida', 'themeslug' ),
        'section'  => 'themeslug_footer_section',
        'settings' => 'themeslug_footer_webpage',
        ))
    );

}
add_action( 'customize_register', 'themeslug_theme_customizer' );

function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Program';
    $submenu['edit.php'][5][0] = 'Alla Programpunkter';
    $submenu['edit.php'][10][0] = 'Ny Programpunkt';
    echo '';
}

//Change name of Inlägg till Program
function change_post_object_label() {
        global $wp_post_types;
        $labels = &$wp_post_types['post']->labels;
        $labels->name = 'Programpunkter';
        $labels->singular_name = 'Programpunkt';
        $labels->add_new = 'Lägg till Programpunkt';
        $labels->add_new_item = 'Lägg till Programpunkt';
        $labels->edit_item = 'Ändra Programpunkt';
        $labels->new_item = 'Programpunkt';
        $labels->view_item = 'Visa Programpunkt';
        $labels->search_items = 'Sök Programpunkt';
        $labels->not_found = 'Inga Programpunkter funna';
        $labels->not_found_in_trash = 'Inga Programpunkter funna i papperskorgen';
    }
add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );


function custom_menu_order($menu_ord) {
    if (!$menu_ord) return true;
     
    return array(
        'index.php', // Dashboard
        'separator1', // First separator
        'edit.php?post_type=page', // Pages
        'edit.php', // Posts
        'edit.php?post_type=custom_slide',
        'themes.php', // Appearance
        'separator2', // Second separator
        'upload.php', // Media
        'link-manager.php', // Links
        'edit-comments.php', // Comments
        'plugins.php', // Plugins
        'users.php', // Users
        'tools.php', // Tools
        'options-general.php', // Settings
        'separator-last', // Last separator
    );
}
add_filter('custom_menu_order', 'custom_menu_order'); // Activate custom_menu_order
add_filter('menu_order', 'custom_menu_order');


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
            $option .='
            <div class="container-fluid">
                <div class="row filter-toggling">
                    <button type="button" class="open-nav navbar-toggle btn collapsed in" data-toggle="collapse" role="button" data-target="#filter-toggle" aria-expanded="false">
                        Visa alla eller filtrera <i class="fa fa-angle-down"></i>
                    </button>
                </div><!--.fiter-toggling . row-->
            </div><!--container-fluid-->
            
            <div class="navbar-collapse collapse" id="filter-toggle" role="region" aria-expanded="true">
                <p class="filter-text">Visa alla eller välj kategori</p>
                <ul class="list-unstyled list-inline filter-wrapper filter-clear">
                    <li>
                        <button type="button" id="clear-btn" class="btn btn-primary" data-color="primary">
                        <i class="state-icon glyphicon glyphicon-check"></i>Visa alla</button>
                        <input type="checkbox" name="clear" id="clear" data-catid="clear" class="hidden">
                    </li>
                </ul>
            ';
                $catID = get_categories(array('parent' => '0','type' => 'post' , 'orderby' => 'slug', 'order' => 'ASC'));
                foreach ($catID as $id) {
                    $display_name = $id->cat_name;
                    $new_id = $id->cat_ID;

                    if($display_name == 'Veckodag'){
                         $d_id = $id->cat_ID;
                    }


                    $name = str_replace('Å', 'A', $display_name);
                    if($name == "Aldersgrupp") {
                        $filter_info ="<br>";
                    }
                    else {
                        $filter_info ="";
                    }
                    $option .= $filter_info.'
                    <div class="filter-'.$name.'">
                    <h2 class="screen-reader-text">'.$display_name.':</h2>
                        <ul class="filter-handlers list-unstyled list-inline filter-wrapper filter-'.$name.'">
                            ';
                            $categories = get_categories(array('parent' => ''.$new_id.'','type' => 'post' , 'orderby' => 'slug', 'order' => 'ASC'));
                            foreach ($categories as $category) {
                                $new_name = $category->cat_name;
                                $new_id = $category->cat_ID;
                                $display_name = $category->cat_name;
                                if($display_name == 'Veckodag'){
                                     $d_id = $category->cat_ID;
                                }

                                $option .= '
                                <li class="button-checkbox">
                                <button type="button" class="btn" data-value="'.$new_id.'" data-color="primary">'.$new_name.'</button>
                                    <input type="checkbox" name="filter-'.$name.'" value="'.$new_id.'" data-catid="'.$new_id.'" id="'.$new_id.'" class="filter-checkbox hidden" >
                                </li>';
                                }
                            $option .= '
                        </ul><!--End .filter-wrapper-->
                        </div>';
                }
                $option .= '
                </div><!--End .filter-toggle-->
            </div><!--End col-sm-12-->
         </div><!--End .row .filter-function-->';
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
            var key = $(this).attr("data-catid");
            localStorage.setItem(key, $(this).prop("checked"));
            var str = "Include items \n";
            var selector = \'\', cselector = \'\', nselector = \'\', lselector = \'\';
                    
            var $lis = $(\'.program > article\'),
                $checked = $(\'.filter-checkbox:checked\');    
                
            if ($checked.length) {  
                $(\'#clear\').attr(\'checked\', false);
                $(\'#clear-btn i\').removeClass(\'glyphicon-check\').addClass(\'glyphicon-unchecked\');
                $(\'#clear-btn\').removeClass(\'active\');
            
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
                
                $lis.removeClass("active-post").addClass("unactive-post"); //alla göms //ta bort klasser
                
                //valda kategorier visas
                if(cselector === \'\' && nselector === \'\' && lselector === \'\') {            
                    $(\'.program > article\').filter(selector).addClass("active-post"); //lägga till klasser
                } else if (cselector === \'\' && nselector === \'\') {
                    $(\'.program > article\').filter(selector).filter(lselector).removeClass("unactive-post").addClass("active-post"); //lägga till klasser
                } else if (nselector === \'\' && lselector === \'\') {
                    $(\'.program > article\').filter(selector).filter(cselector).removeClass("unactive-post").addClass("active-post");  //lägga till klasser
                } else if (cselector === \'\' && lselector === \'\') {
                    $(\'.program > article\').filter(selector).filter(nselector).removeClass("unactive-post").addClass("active-post");  //lägga till klasser
                } else if (cselector === \'\') {
                    $(\'.program > article\').filter(selector).filter(nselector).filter(lselector).removeClass("unactive-post").addClass("active-post"); //lägga till klasser
                } else if (nselector === \'\') {
                    $(\'.program > article\').filter(selector).filter(cselector).filter(lselector).removeClass("unactive-post").addClass("active-post"); //lägga till klasser
                } else if (lselector === \'\') {
                    $(\'.program > article\').filter(selector).filter(nselector).filter(cselector).removeClass("unactive-post").addClass("active-post"); //lägga till klasser
                } else {
                    $(\'.program > article\').filter(selector).filter(cselector).filter(nselector).filter(lselector).removeClass("unactive-post").addClass("active-post"); //lägga till klasser
                }
                
                //alla visas
            } else {
                $lis.removeClass("unactive-post").addClass("active-post");
                $(\'#clear\').attr(\'checked\', true);
                $(\'#clear-btn i\').removeClass(\'glyphicon-unchecked\').addClass(\'glyphicon-check\');
                $(\'#clear-btn\').addClass(\'active\');
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
        
        $(\'#clear-btn\').click(function() {
            if ($(\'#clear\').prop(\'checked\')) {
            }
            else {
                $(\'.program > article\').removeClass("unactive-post").addClass("active-post");
                Kategori = []; 
                Aldersgrupp = []; 
                Plats = [];
                Veckodag = [];
                selector = \'\';
                cselector = \'\'; 
                nselector = \'\'; 
                lselector = \'\';
                $(\'#clear-btn\').addClass(\'active\');
                $(\'#clear\').attr(\'checked\', true);
                $(\'#clear-btn i\').removeClass(\'glyphicon-unchecked\').addClass(\'glyphicon-check\');
                $(\'.filter-handlers .btn\').removeClass(\'active\');
                $(\'.filter-handlers input:checkbox\').removeAttr(\'checked\');
                $(\'.filter-handlers i\').removeClass(\'glyphicon-check\').addClass(\'glyphicon-unchecked\');
            }
        });
        </script>';;
    $option .= '<div class="row program">';
    
    if(have_posts()):
        while(have_posts()):
            the_post();
                ?>
                <?php 
                foreach((get_the_category()) as $category) { 
                    $cat_string .= $category->cat_ID . " ";
                    if($category->category_parent == '5') { //add kategori ID
                        if($category->cat_name == 'Musik och sång vid havet') {
                            $content_cat = 'Musik & Sång';
                        }
                        else if($category->cat_name == 'Konsthantverk och Försäljning') {
                            $content_cat = 'Konsthantverk & försäljning';
                        }
                        else {
                            $content_cat = $category->cat_name;
                        }
                    }
                    if($category->category_parent == $d_id) {
                        if ($category->cat_name == "Torsdag"){
                            $day_string .= substr($category->cat_name,0,-3). ' ';
                        }
                    }   
                }

                foreach((get_the_category()) as $category) { 
                    if($category->category_parent == $d_id) {
                        if ($category->cat_name != "Torsdag"){
                            $day_string .= substr($category->cat_name,0,-3). ' ';
               
                            if(substr_count($day_string, " ") > 3){
                                    $day_string = "Alla dagar";
                            }

                        }
                    }
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

                if(strlen($description) >= 90) {
                    $description = substr($description, 0, 90);
                    $description .= '... <span class="link">LÄS MER</span>';
                }

                 $option .= '
                     <article class="active-post col-xs-12 col-sm-3 col-md-3 post-content '. $cat_string .'" data-category="'.$cat_string.'">
                        <a href="'.$url.'">
                        <div class="inner" style="background-image:url('.get_field('bild').')">
                        </div>
                        <div class="inner-bottom">
                            <div class="wave">
                                <div class="inner-content">
                                    <h2>'. get_the_title(). '</h2>
                                    <p class="content-meta">'.$day_string.$time.'<p>

                                    <p class="description">'.$description.'</p>
                                    <div class="content-category">
                                        <p>'. $content_cat .'</p>
                                    </div>
                                    <div class="place notranslate">
                                        <p>'.get_field('plats_pa_kartan').'</p>
                                        <i class="fa fa-map-marker"></i><p class="p-name">'.get_field('plats').'</p>
                                    </div>
                                </div><!--.inner-content-->

                            </div><!--.wave-->
                        </div><!--.inner-bottom-->
                        </a><!--End .inner-->
                    </article><!--End . col-*-* -->';
                ?><?php $cat_string = "";
                $day_string="";

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
                if ($menu_item->title =="Om") {
                    $title = $menu_item->title;
                    $id = $menu_item->object_id;
                    $url = $menu_item->url;
                    $slug = get_the_slug( $menu_item->object_id );
                    $menu_list .= '<li><a href="#' . $slug . '" class="page-scroll">' . $title . ' <span class="notranslate">Hamnfestivalen</span></a></li>';

                }
                else {
                    $title = $menu_item->title;
                    $id = $menu_item->object_id;
                    $url = $menu_item->url;
                    $slug = get_the_slug( $menu_item->object_id );
                    $menu_list .= '<li><a href="#' . $slug . '" class="page-scroll">' . $title . '</a></li>';
                }
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
        foreach ($menu_items as $key => $menu_item ) {
            
            $page_id = $menu_item->object_id;
            $title = $menu_item->title;
            $url = $menu_item->url;
            $slug = get_the_slug( $menu_item->object_id );
            
            //$content_list .= get_template_part('content', 'program');

            //$content = get_post_field( 'post_content', $page_id);

                $args = array( 'p' => $page_id, 'post_type' => 'page' );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <?php $content_list .= get_template_part( 'content', $slug ); ?>
                <?php
                    endwhile;
                wp_reset_postdata();
        }
        return $content_list;
    }
}


function get_the_slug( $id=null ){
    if( empty($id) ):
        global $post;
        if( empty($post) )
            return ''; // No global $post var available.
        $id = $post->ID;
    endif;

    $slug = basename( get_permalink($id) );
    return $slug;
}




/*CODE FOR CUSTOM BILDSPEL IN WORDPRESS*/
add_theme_support( 'post-thumbnails' );
add_filter('manage_posts_columns', 'posts_columns', 3);
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
                    'Längs Strandgatan' => 'Längs Strandgatan',
                ),
                'other_choice' => 1,
                'save_other_choice' => 1,
                'default_value' => '',
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



include ('register_fields/field_om.php');
include ('register_fields/field_hitta.php');
include ('register_fields/field_omradet.php');
include ('register_fields/field_medverkande.php');
include ('register_fields/field_program.php');
include ('register_fields/field_festivalen.php');