<?php 


//Making jQuery to load from Google Library
function replace_jquery() {
	if (!is_admin()) {
		// comment out the next two lines to load the local copy of jQuery
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', false, '1.11.3');
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'replace_jquery');



//stylesheets

function custom_style_sheet() {
wp_enqueue_style( 'normalize', get_stylesheet_directory_uri() . '/css-vendors/normalize.css' );
wp_enqueue_style( 'skeleton', get_stylesheet_directory_uri() . '/css-vendors/skeleton.css' );
wp_enqueue_style( 'media-queries', get_stylesheet_directory_uri() . '/css/queries.css' );
wp_enqueue_style( 'responsive header', get_stylesheet_directory_uri() . '/css-vendors/responsive-header.css' );
}
add_action('wp_enqueue_scripts', 'custom_style_sheet');


//Custom javascript
function responsive_header() {
	wp_register_script( 'header', get_stylesheet_directory_uri() . '/js-vendors/responsive-header.js' );
	wp_enqueue_script( 'header' );
}

function site_scripts()
{
	wp_register_script( 'scripts', get_stylesheet_directory_uri() . '/js/scripts.js' );
	wp_enqueue_script( 'scripts' );
}

add_action( 'wp_enqueue_scripts', 'responsive_header' );
add_action( 'wp_enqueue_scripts', 'site_scripts' );



//Adds post thumbnails (ability to set feature image)
add_theme_support('post-thumbnails'); 



//adds post exceprt function
add_theme_support('post-excerpt'); 



//adds post exceprt function
add_theme_support('menus'); 


//register the different menus for the website
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );




@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

?>







