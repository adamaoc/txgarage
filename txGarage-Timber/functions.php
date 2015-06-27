<?php 

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}

if ( function_exists( 'add_theme_support' ) ) { 
  add_theme_support( 'post-thumbnails' ); 
}

add_action( 'after_setup_theme', 'img_theme_setup' );
function img_theme_setup() {
  add_image_size( 'category-thumb', 400 ); 
  add_image_size( 'hero-thumb', 700, 525, true ); // (cropped)
}

function catClass($data) {
	$catArr = $data;
	foreach ($catArr as $catList) {
		foreach ($catList as $category) {
			if($category == "news") {
				return "news";
			} elseif($category == "car-reviews") {
				return "car-reviews";
			}
		}
	}
}


// limit excerpt //
	
function limit_words($string, $word_limit) {

	$words = explode(' ', $string);		
	return implode(' ', array_slice($words, 0, $word_limit));
}	


// register menu //
register_nav_menus( array(
    'main-nav' => 'Main navigation menu',
    'footer_menu' => 'My Custom Footer Menu',
) );


require_once('includes/shortcodes.php');