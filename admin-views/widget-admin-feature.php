<?php
/**
* Widget admin for the featured event widget.
*/

// Don't load directly
if ( !defined('ABSPATH') ) { die('-1'); }

?>
<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:',$this->pluginDomain); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr(strip_tags($instance['title'])); ?>" /></p>
<p>
	<label for="<?php echo $this->get_field_id( 'category' ); ?>"><?php _e('Category:',$this->pluginDomain);?>
	<?php 

		echo wp_dropdown_categories( array(
			'show_option_none' => __('All Events',$this->pluginDomain),
			'hide_empty' => 0,
			'echo' => 0,
			'name' => $this->get_field_name( 'category' ),
			'id' => $this->get_field_id( 'category' ),
			'taxonomy' => 'sp_events_cat',
			'selected' => $instance['category']
		));
	?>
</p>