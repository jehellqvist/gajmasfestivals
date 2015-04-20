<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="description" value="<?php bloginfo('description'); ?>">

<?php wp_head(); ?>
 
</head>
  
<body>
     
    <div id="wrapper">
     
    <header role="banner">

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <?php 
            //get all pages and create navigation
            $pagemenu = get_pages( array( 'sort_column' => 'menu_order', 'sort_order' => 'asc', 'parent'=> '0') ); 

            echo"<ul id='nav' class='nav navbar-nav'>";
                foreach ($pagemenu as $pagemenu_data) {
                    $caption = $pagemenu_data->post_title;
                    $pageslug = $pagemenu_data->post_name;
            //Start Page Menu
            echo "<li class='$pageslug'><a href='#$pageslug'>$caption</a></li>\n";
            }
            echo"</ul>";
        ?>
        </div><!--/.nav-collapse -->
      </div><!--End .container-->
    </nav>

    </header>