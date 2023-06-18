<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');?> <?php wp_title() ?> 
    <?php if (is_front_page()) { echo "|" ; bloginfo('description');}?></title>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet' >
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.js"></script>
 
    <link rel="stylesheet"
        href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.css"
        type="text/css">
    <?php wp_head();?>
</head>
<body>
  <?php include( get_stylesheet_directory() .  '/includes/custom-header.php' ); ?>
<header style="display:none">

    <div class="container">
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'top-menu',
            'menu_class' => 'top-bar'

        )
        );
    ?>
    

    </div>
</header>
