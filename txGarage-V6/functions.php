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

// featured images size ---
add_image_size( 'category-thumb', 400, 9999 ); //400 pixels wide (and unlimited height)


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