<?php

//load css
function load_css()
{
    wp_register_style('bootstrap' , get_template_directory_uri() . '/css/bootstrap.min.css' , array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main' , get_template_directory_uri() . '/css/main.css' , array(), false, 'all');
    wp_enqueue_style('main');
}

add_action('wp_enqueue_scripts','load_css');

//load js
function my_theme_enqueue_scripts()
 {
    wp_enqueue_script( 'javascript', get_template_directory_uri() . '/js/javascript.js', array( 'jquery' ), false, true );
} 
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_scripts' );
function load_js()
{   
     wp_enqueue_script('jquery');
    wp_register_script('bootstrap' , get_template_directory_uri() . '/js/bootstrap.min.js' , 'jquery' , false, true);
    wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts','load_js');

//Theme options
add_theme_support('menus');
add_theme_support( 'custom-logo' );

//Menus
register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'footer Menu Location',
    )
);

function ti_custom_javascript() {
    ?>
        <script>
          //logo

          //maps
mapboxgl.accessToken =
  "pk.eyJ1Ijoic3Vwcml5YXMiLCJhIjoiY2xhcDVrbGQ5MDBidjNubnl0cG5icnk1diJ9.2Dv2Vbdre0qdKaWxnddeIQ";

navigator.geolocation.getCurrentPosition(successLocation, errorLocation, {
  enableHighAccuracy: true,
});

function successLocation(position) {
  setupMap([174.7677, -36.850109]);
}
function errorLocation() {
  setupMap([174.7677, -36.850109]);
}

function setupMap(center) {
  const map = new mapboxgl.Map({
    container: "map",
    style: "mapbox://styles/mapbox/streets-v11",
    center: center,
    zoom: 15,
  });

  const nav = new mapboxgl.NavigationControl();
  map.addControl(nav);

  const directions = new MapboxDirections({
    accessToken: mapboxgl.accessToken,
  });
  map.addControl(directions, "top-left");
}

        </script>
    <?php
}
add_action('wp_head', 'ti_custom_javascript');

add_filter( 'kdmfi_featured_images', function( $featured_images ) {
  $args = array(
    'id' => 'featured-image-2',
    'desc' => 'Your description here.',
    'label_name' => 'Featured Image 2',
    'label_set' => 'Set featured image 2',
    'label_remove' => 'Remove featured image 2',
    'label_use' => 'Set featured image 2',
    'post_type' => array( 'page' ),
  );

  $featured_images[] = $args;

  return $featured_images;
});
add_filter( 'kdmfi_featured_images', function( $featured_images ) {
  $args = array(
    'id' => 'featured-image-3',
    'desc' => 'Your description here.',
    'label_name' => 'Featured Image 3',
    'label_set' => 'Set featured image 3',
    'label_remove' => 'Remove featured image 3',
    'label_use' => 'Set featured image 3',
    'post_type' => array( 'page' ),
  );

  $featured_images[] = $args;

  return $featured_images;
});
add_filter( 'kdmfi_featured_images', function( $featured_images ) {
  $args = array(
    'id' => 'featured-image-4',
    'desc' => 'Your description here.',
    'label_name' => 'Featured Image 4',
    'label_set' => 'Set featured image 4',
    'label_remove' => 'Remove featured image 4',
    'label_use' => 'Set featured image 4',
    'post_type' => array( 'page' ),
  );

  $featured_images[] = $args;

  return $featured_images;
});

add_filter( 'kdmfi_featured_images', function( $featured_images ) {
  $args = array(
    'id' => 'featured-image-5',
    'desc' => 'Your description here.',
    'label_name' => 'Featured Image 5',
    'label_set' => 'Set featured image 5',
    'label_remove' => 'Remove featured image 5',
    'label_use' => 'Set featured image 5',
    'post_type' => array( 'page' ),
  );

  $featured_images[] = $args;

  return $featured_images;
});

add_filter( 'kdmfi_featured_images', function( $featured_images ) {
  $args = array(
    'id' => 'featured-image-6',
    'desc' => 'Your description here.',
    'label_name' => 'Featured Image 6',
    'label_set' => 'Set featured image 6',
    'label_remove' => 'Remove featured image 6',
    'label_use' => 'Set featured image 6',
    'post_type' => array( 'page' ),
  );

  $featured_images[] = $args;

  return $featured_images;
});

add_filter( 'kdmfi_featured_images', function( $featured_images ) {
  $args = array(
    'id' => 'featured-image-7',
    'desc' => 'Your description here.',
    'label_name' => 'Featured Image 7',
    'label_set' => 'Set featured image 7',
    'label_remove' => 'Remove featured image 7',
    'label_use' => 'Set featured image 7',
    'post_type' => array( 'page' ),
  );

  $featured_images[] = $args;

  return $featured_images;
});

add_filter( 'kdmfi_featured_images', function( $featured_images ) {
  $args = array(
    'id' => 'featured-image-8',
    'desc' => 'Your description here.',
    'label_name' => 'Featured Image 8',
    'label_set' => 'Set featured image 8',
    'label_remove' => 'Remove featured image 8',
    'label_use' => 'Set featured image 8',
    'post_type' => array( 'page' ),
  );

  $featured_images[] = $args;

  return $featured_images;
});
