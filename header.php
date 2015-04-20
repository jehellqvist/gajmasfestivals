<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />
 
<?php wp_head(); ?>
 
</head>
  
<body>
 
<div id="wrapper">
 
    <header>
         
    <p class="description"><?php bloginfo('description'); ?></p>

    <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>

    <nav>               
        <ul id="nav">
        <?php wp_list_pages('sort_column=menu_order&title_li='); ?> 
        </ul>
    </nav>
         
    </header>