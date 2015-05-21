<?php 

/***** Columns *****/

function row($atts, $content = null) {
  return '<div class="row clearfix">' . do_shortcode($content) . '</div>';
}
add_shortcode('row', 'row');

function half($atts, $content = null) {
  return '<div class="col-1-2">' . do_shortcode($content) . '</div>';
}
add_shortcode('half', 'half');

function two_third($atts, $content = null) {
  return '<div class="col-2-3">' . do_shortcode($content) . '</div>';
}
add_shortcode('two_third', 'two_third');

function third($atts, $content = null) {
  return '<div class="col-1-3">' . do_shortcode($content) . '</div>';
}
add_shortcode('third', 'third');

function fourth($atts, $content = null) {
  return '<div class="col-1-4">' . do_shortcode($content) . '</div>';
}
add_shortcode('fourth', 'fourth');

function three_fourth($atts, $content = null) {
    return '<div class="col-3-4">' . do_shortcode($content) . '</div>';
}
add_shortcode('three_fourth', 'three_fourth');

function fifth($atts, $content = null) {
  return '<div class="col-1-5">' . do_shortcode($content) . '</div>';
}
add_shortcode('fifth', 'fifth');

/***** Dropcap *****/

function dropcap($atts, $content = null) {
  return '<span class="dropcap">' . do_shortcode($content) . '</span>';
}
add_shortcode('dropcap', 'dropcap');

/***** Gallery *****/

remove_shortcode('gallery', 'gallery_shortcode');
add_shortcode('gallery-old', 'gallery_shortcode');

add_shortcode('gallery', 'gallery_shortcode_custom');

function gallery_shortcode_custom($attr) {
  global $post, $wp_locale;
  static $instance = 0;
  $instance++;
  
  if ( ! empty( $attr['ids'] ) ) {
    if ( empty( $attr['orderby'] ) )
      $attr['orderby'] = 'post__in';
    $attr['include'] = $attr['ids'];
  }

  if ( isset( $attr['orderby'] ) ) {
    $attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
    if ( !$attr['orderby'] )
            unset( $attr['orderby'] );
  }

  extract(shortcode_atts(array(
    'order'      => 'ASC',
    'orderby'    => 'menu_order ID',
    'id'         => $post->ID,
    'itemtag'    => 'div',
    'icontag'    => 'span',
    'captiontag' => 'div',
    'columns'    => 5,
    'size'       => 'thumbnail',
    'include'    => '',
    'exclude'    => ''
  ), $attr));

  $id = intval($id);
  if ( 'RAND' == $order )
    $orderby = 'none';

  if ( !empty($include) ) {
    $_attachments = get_posts( array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );

    $attachments = array();
    foreach ( $_attachments as $key => $val ) {
      $attachments[$val->ID] = $_attachments[$key];
    }
  } elseif ( !empty($exclude) ) {
    $attachments = get_children( array('post_parent' => $id, 'exclude' => $exclude, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
  } else {
    $attachments = get_children( array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
  }

  if ( empty($attachments) )
    return '';

  if ( is_feed() ) {
    $output = "\n";
    foreach ( $attachments as $att_id => $attachment )
      $output .= wp_get_attachment_link($att_id, $size, true) . "\n";
    return $output;
  }
  
  $urlList = array();

  foreach ( $attachments as $id => $attachment ) {
    array_push($urlList, $attachment->guid);
  }

  $urlList = json_encode($urlList);
  echo "<script> var galleryList = ".$urlList."</script>";

  return $output;
}