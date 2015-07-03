<?php

// Advertising Widget //

class txG_advertising_widget extends WP_Widget {
    function txG_advertising_widget() {
        $widget_ops = array('classname' => 'txG_advertising', 'description' => __('txGarage Advertising Widget to display ads in widget sidebar.', 'txG'));
        $this->WP_Widget('txG_advertising', __('txGarage Advertising Widget', 'txG'), $widget_ops);
    }
    function widget($args, $instance) {
        extract($args);
        $txG_ad1 = empty($instance['txG_ad1']) ? '' : $instance['txG_ad1'];
        echo $before_widget;
        if ($txG_ad1) {
            echo '<div class="ad-item">' . $txG_ad1 . '</div>'. "\n";
        }
        echo $after_widget;
    }
    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['txG_ad1'] = $new_instance['txG_ad1'];
        return $instance;
    }
    function form($instance) {
        $instance = wp_parse_args((array) $instance, array('txG_ad1' => '')); ?>
        <p>
            <label for="<?php echo $this->get_field_id('txG_ad1'); ?>"><?php _e('Ad Code', 'mh'); ?> 1:</label>
            <textarea cols="60" rows="3" style="width: 100%;" placeholder="Enter ad code or any HTML code" name="<?php echo $this->get_field_name('txG_ad1'); ?>" id="<?php echo $this->get_field_id('txG_ad1'); ?>"><?php echo esc_attr($instance['txG_ad1']); ?></textarea>
        </p>
      <?php
    }
}

?>