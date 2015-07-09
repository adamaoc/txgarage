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
  foreach ($catArr as $category) {
    if($category->name == "News") {
      return "news";
    }elseif($category->name == "Car Reviews") {
      return "car-reviews";
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
    'preferred-menu' => 'Menu for Preferred Section',
    'footer_menu' => 'Footer Menu',
) );

// adding to Timber context
add_filter('timber_context', 'add_to_context');
function add_to_context($data){
  $context['notes'] = 'These values are available everytime you call Timber::get_context();';
  $data['preferred'] = new TimberMenu('preferred-menu'); // This is where you can also send a Wordpress menu slug or ID
  return $data;
}

// Register Widget Areas / Sidebars //

if (!function_exists('txG_widgets_init')) {
  function txG_widgets_init() {
    global $options;
    register_sidebar(array('name' => __('ads', 'txG'), 'id' => 'ads', 'description' => __('Sidebar of advertising', 'txG'), 'before_widget' => '<div class="ads-widget">', 'after_widget' => '</div>', 'before_title' => '', 'after_title' => ''));
  }
}
add_action('widgets_init', 'txG_widgets_init');

function register_txG_widgets() {
  register_widget('txG_advertising_widget');
}
add_action('widgets_init', 'register_txG_widgets');

require_once('includes/ads-widget.php');

require_once('includes/shortcodes.php');
