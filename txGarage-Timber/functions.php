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

// Add support for a variety of post formats
add_theme_support( 'post-formats', array( 'aside', 'link', 'gallery', 'status', 'quote', 'image', 'video' ) );

function catClass($data) {
	$catArr = $data;
  foreach ($catArr as $category) {
    if($category->name == "News") {
      return "news";
    }elseif($category->name == "Car Reviews") {
      return "car-reviews";
    }elseif($category->name == "Reviews") {
      return "car-reviews";
    }elseif($category->name == "Events") {
      return "events";
    }elseif($category->name == "Video") {
      return "video";
    }elseif($category->name == "Garage") {
      return "garage";
    }
  }
}
function pageCatClass($title) {
  if($title == "News") {
    return "news";
  }elseif($title == "Car Reviews") {
    return "car-reviews";
  }elseif($title == "Reviews") {
    return "car-reviews";
  }elseif($title == "Video") {
    return "videos";
  }elseif($title == "Events") {
    return "events";
  }else{
    return "default";
  }
}
function postCat($data) {
	$catArr = $data;
  foreach ($catArr as $category) {
    if($category->name == "News") {
      return "News";
    }elseif($category->name == "Car Reviews") {
      return "Review";
    }elseif($category->name == "Reviews") {
      return "Review";
    }elseif($category->name == "Events") {
      return "Event";
    }elseif($category->name == "Video") {
      return "Video";
    }elseif($category->name == "Garage") {
      return "Garage";
    }
  }
}

function showme($var) {
  echo "<pre>";
  print_r($var);
  echo "</pre>";
}
// limit excerpt //

function limit_words($string, $word_limit) {

	$words = explode(' ', $string);
	return implode(' ', array_slice($words, 0, $word_limit));
}

/* getting large thumbnail */
function get_large_thumb() {
  $heroThumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'hero-thumb' );
  return $heroThumb[0];
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
    register_sidebar(array('name' => __('homepage', 'txG'), 'id' => 'homepage', 'description' => __('homepage Sidebar', 'txG'), 'before_widget' => '<div class="sidebar-widget">', 'after_widget' => '</div>', 'before_title' => '<h3>', 'after_title' => '</h3>'));
    register_sidebar(array('name' => __('txgEvents', 'txG'), 'id' => 'txgEvetns', 'description' => __('txG Events Sidebar', 'txG'), 'before_widget' => '<div class="sidebar-widget">', 'after_widget' => '</div>', 'before_title' => '<h3>', 'after_title' => '</h3>'));
    register_sidebar(array('name' => __('global', 'txG'), 'id' => 'global-sidebar', 'description' => __('Global sidebar', 'txG'), 'before_widget' => '<div class="sidebar-widget">', 'after_widget' => '</div>', 'before_title' => '<h3>', 'after_title' => '</h3>'));
    register_sidebar(array('name' => __('social', 'txG'), 'id' => 'social', 'description' => __('Social sidebar', 'txG'), 'before_widget' => '<div class="social-widgets">', 'after_widget' => '</div>', 'before_title' => '<h3>', 'after_title' => '</h3>'));

  }
}
add_action('widgets_init', 'txG_widgets_init');


// changing the default tag cloud
add_filter( 'widget_tag_cloud_args', 'my_widget_tag_cloud_args' );
function my_widget_tag_cloud_args( $args ) {
	$args['number'] = 24;
	$args['largest'] = 1.5;
	$args['smallest'] = 0.7;
	$args['unit'] = 'em';
	return $args;
}

function register_txG_widgets() {
  register_widget('txG_advertising_widget');
}
add_action('widgets_init', 'register_txG_widgets');

require_once('includes/ads-widget.php');

require_once('includes/shortcodes.php');
require_once('includes/shortcodes/shortcode-ads.php');
