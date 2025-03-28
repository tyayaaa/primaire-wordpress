<?php
/**
 * Custom Social Icon Widgets
 */

//custom socila icons
class Advance_Ecommerce_Store_Social_Widget extends WP_Widget {
	function __construct() {
		parent::__construct(
		// Base ID of your widget
			'Advance_Ecommerce_Store_Social_Widget', 
			// Widget name will appear in UI
			__('Social Icon', 'advance-ecommerce-store'), 
			// Widget description
			array( 'description' => __( 'Widget for Social icons section', 'advance-ecommerce-store' ), ) 
		);
	}

	public function widget( $args, $instance ) {
		?>
		<div class="social_widget">
			<?php
			$facebook = isset($instance['facebook']) ? $instance['facebook'] : '';
			$twitter = isset($instance['twitter']) ? $instance['twitter'] : '';
			$linkedin = isset($instance['linkedin']) ? $instance['linkedin'] : '';
			$pinterest = isset($instance['pinterest']) ? $instance['pinterest'] : '';
			$tumblr = isset($instance['tumblr']) ? $instance['tumblr'] : '';
			$instagram = isset($instance['instagram']) ? $instance['instagram'] : '';
			$youtube = isset($instance['youtube']) ? $instance['youtube'] : '';

	        echo '<div class="custom-social-icons">';
	        if(!empty($facebook) ){ ?><a class="custom_facebook fff me-2" target="_blank" href=" <?php echo esc_url($instance['facebook']); ?>"><i class="fab fa-facebook-f me-2 p-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','advance-ecommerce-store' );?></span></a><?php } ?>

	        <?php if(!empty($twitter) ){ ?><a class="custom_twitter me-2" target="_blank" href="<?php echo esc_url($instance['twitter']); ?>"><i class="fab fa-twitter me-2 p-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','advance-ecommerce-store' );?></span></a><?php } ?>

	        <?php if(!empty($linkedin) ){ ?><a class="custom_linkedin me-2" target="_blank" href="<?php echo esc_url($instance['linkedin']); ?>"><i class="fab fa-linkedin-in me-2 p-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin','advance-ecommerce-store' );?></span></a><?php } ?>

	        <?php if(!empty($pinterest) ){ ?><a class="custom_pinterest me-2" target="_blank" href="<?php echo esc_url($instance['pinterest']); ?>"><i class="fab fa-pinterest-p me-2 p-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Pinterest','advance-ecommerce-store' );?></span></a><?php } ?>

	        <?php if(!empty($tumblr) ){ ?><a class="custom_tumblr me-2" target="_blank" href="<?php echo esc_url($instance['tumblr']); ?>"><i class="fab fa-tumblr me-2 p-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Tumblr','advance-ecommerce-store' );?></span></a><?php } ?>

	        <?php if(!empty($instagram) ){ ?><a class="custom_instagram me-2" target="_blank" href="<?php echo esc_url($instance['instagram']); ?>"><i class="fab fa-instagram me-2 p-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram','advance-ecommerce-store' );?></span></a><?php } ?>

	        <?php if(!empty($youtube) ){ ?><a class="custom_youtube me-2" target="_blank" href="<?php echo esc_url($instance['youtube']); ?>"><i class="fab fa-youtube me-2 p-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube','advance-ecommerce-store' );?></span></a><?php } ?>
	        <?php echo '</div>';
			?>
		</div>
		<?php

	}
		
	// Widget Backend 
	public function form( $instance ) {
		isset($instance['title']) ? $title = $instance['title'] : null;
		isset($instance['facebook']) ? $facebook = $instance['facebook'] : null;
		isset($instance['instagram']) ? $instagram = $instance['instagram'] : null;
        isset($instance['twitter']) ? $twitter = $instance['twitter'] : null;
        isset($instance['linkedin']) ? $linkedin = $instance['linkedin'] : null;
        isset($instance['pinterest']) ? $pinterest = $instance['pinterest'] : null;
        isset($instance['tumblr']) ? $tumblr = $instance['tumblr'] : null;
        isset($instance['youtube']) ? $youtube = $instance['youtube'] : null;
		?>	
			<p>
			<label for="<?php echo esc_attr($this->get_field_id('facebook')); ?>"><?php esc_html_e('Facebook:','advance-ecommerce-store'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('facebook')); ?>" name="<?php echo esc_attr($this->get_field_name('facebook')); ?>" type="text" value="<?php echo esc_attr($facebook); ?>">
			</p>
			<p>
			<label for="<?php echo esc_attr($this->get_field_id('twitter')); ?>"><?php esc_html_e('Twitter:','advance-ecommerce-store'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('twitter')); ?>" name="<?php echo esc_attr($this->get_field_name('twitter')); ?>" type="text" value="<?php echo esc_attr($twitter); ?>">
			</p>
			<p>
			<label for="<?php echo esc_attr($this->get_field_id('linkedin')); ?>"><?php esc_html_e('Linkedin:','advance-ecommerce-store'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkedin')); ?>" name="<?php echo esc_attr($this->get_field_name('linkedin')); ?>" type="text" value="<?php echo esc_attr($linkedin); ?>">
			</p>
			<p>
			<label for="<?php echo esc_attr($this->get_field_id('instagram')); ?>"><?php esc_html_e('Instagram:','advance-ecommerce-store'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('instagram')); ?>" name="<?php echo esc_attr($this->get_field_name('instagram')); ?>" type="text" value="<?php echo esc_attr($instagram); ?>">
			</p>
			<p>
			<label for="<?php echo esc_attr($this->get_field_id('pinterest')); ?>"><?php esc_html_e('Pinterest:','advance-ecommerce-store'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('pinterest')); ?>" name="<?php echo esc_attr($this->get_field_name('pinterest')); ?>" type="text" value="<?php echo esc_attr($pinterest); ?>">
			</p>
			<p>
			<label for="<?php echo esc_attr($this->get_field_id('tumblr')); ?>"><?php esc_html_e('Tumblr:','advance-ecommerce-store'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('tumblr')); ?>" name="<?php echo esc_attr($this->get_field_name('tumblr')); ?>" type="text" value="<?php echo esc_attr($tumblr); ?>">
			</p>
			<p>
			<label for="<?php echo esc_attr($this->get_field_id('youtube')); ?>"><?php esc_html_e('Youtube:','advance-ecommerce-store'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('youtube')); ?>" name="<?php echo esc_attr($this->get_field_name('youtube')); ?>" type="text" value="<?php echo esc_attr($youtube); ?>">
			</p>
		<?php 
	}
	
	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
		$instance = array();
        $instance['facebook'] = (!empty($new_instance['facebook']) ) ? strip_tags($new_instance['facebook']) : '';
        $instance['twitter'] = (!empty($new_instance['twitter']) ) ? strip_tags($new_instance['twitter']) : '';
        $instance['instagram'] = (!empty($new_instance['instagram']) ) ? strip_tags($new_instance['instagram']) : '';
        $instance['linkedin'] = (!empty($new_instance['linkedin']) ) ? strip_tags($new_instance['linkedin']) : '';
        $instance['pinterest'] = (!empty($new_instance['pinterest']) ) ? strip_tags($new_instance['pinterest']) : '';
        $instance['tumblr'] = (!empty($new_instance['tumblr']) ) ? strip_tags($new_instance['tumblr']) : '';
         $instance['youtube'] = (!empty($new_instance['youtube']) ) ? strip_tags($new_instance['youtube']) : '';
		 return $instance;
	}
} // Class Advance_Ecommerce_Store_Social_Widget ends here
// Register and load the widget
function advance_ecommerce_store_custom_load_widget() {
	register_widget( 'Advance_Ecommerce_Store_Social_Widget' );
}
add_action( 'widgets_init', 'advance_ecommerce_store_custom_load_widget' );