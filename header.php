<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="description" value="<?php bloginfo('description'); ?>">
 
<?php wp_head(); ?>
 
</head>
  
<body>
     
    <div id="wrapper">
     
    <header>
        <nav>               
            <?php 
            //get all pages and create navigation
            $pagemenu = get_pages( array( 'sort_column' => 'menu_order', 'sort_order' => 'asc', 'parent'=> '0') ); 

            echo"<ul id='nav' class='nav menu'>";
                foreach ($pagemenu as $pagemenu_data) {
                    $caption = $pagemenu_data->post_title;
                    $pageslug = $pagemenu_data->post_name;
            //Start Page Menu
            echo "<li class='$pageslug'><a href='#$pageslug'>$caption</a></li>\n";
            }
            echo"</ul>";
        ?>
        </nav>
    </header>