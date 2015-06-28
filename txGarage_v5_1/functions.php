<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
		function my_jquery_enqueue() {
		   wp_deregister_script('jquery');
		   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
		   wp_enqueue_script('jquery');
		}
	// if ( !is_admin() ) {
	//    wp_deregister_script('jquery');
	//    wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"), false);
	//    wp_enqueue_script('jquery');
	// }
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
    
    
    // my STUFF ------
    
    if ( function_exists( 'add_theme_support' ) ) { 
	  add_theme_support( 'post-thumbnails' ); 
	}

		// limit excerpt //
	
		function limit_words($string, $word_limit) {
 
			// creates an array of words from $string (this will be our excerpt)
			// explode divides the excerpt up by using a space character
 			
			$words = explode(' ', $string);
 			
			// this next bit chops the $words array and sticks it back together
			// starting at the first word '0' and ending at the $word_limit
			// the $word_limit which is passed in the function will be the number
			// of words we want to use
			// implode glues the chopped up array back together using a space character
 			
			return implode(' ', array_slice($words, 0, $word_limit));
 			
		}	
		
		// featured images size ---
		add_image_size( 'category-thumb', 400, 9999 ); //400 pixels wide (and unlimited height)


    require_once('_/ad-shortcode.php');

?>