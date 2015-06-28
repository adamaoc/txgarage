<?php 

/***** Advertising *****/

function txGad($atts, $content = null) {
  $start = $atts['start'];
  $end = $atts['end'];
  $type = $atts['type'];
  $tag = $atts['tag'];
  $today = date('n/d/Y');
  $classList = ['txGad', 'ad-item', $type];

  $showAd = true;
  if($today < $start) {
    echo "not time to show the ad";
    if(is_user_logged_in()) {
      array_push($classList, 'admin');
    }else{
      $showAd = false;
    }
  }

  $build = '';
  $build .= '<li id="'.$tag.'" class="'.implode(' ', $classList).'">';
  $build .= do_shortcode($content);
  $build .= '</li>';
  
  if($showAd) {
    return $build;  
  }
  
  return false;
}
add_shortcode('txGad', 'txGad');






////// ---------------

// <li>
// <a href="http://mediatemple.net/webhosting/wordpress/#a_aid=512fd1cf8a22a&amp;a_bid=1be9d02f" target="_top" rel="nofollow"><img src="https://affiliate.mediatemple.net/accounts/default1/banners/Wordpress-Hosting-300x250.png" alt="" width="300" height="250"></a><img style="border:0" src="https://affiliate.mediatemple.net/scripts/imp.php?a_aid=512fd1cf8a22a&amp;a_bid=1be9d02f" width="1" height="1" alt="">
// </li>