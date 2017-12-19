<?php
/**
 * Example of Single Instance widget
 *
 * @package Single_Instance_Widget
 */

/**
 * Register widget with WordPress.
 */
add_action(
	'widgets_init',
	function() {
		register_widget( 'Single_Instance_Widget' );
	}
);

/**
 * Core class used to implement the widget.
 */
class Single_Instance_Widget extends WP_Widget {

	/**
	 * Sets up the widget name etc
	 */
	function __construct() {
		$widget_ops  = array(
			'description' => 'Example of Single Instance Widget',
		);
		$control_ops = array(
			'width'  => 400,
			'height' => 350,
		);
		parent::__construct(
			false,
			'Single Instance Widget',
			$widget_ops,
			$control_ops
		);

		if ( is_admin() ) {
			wp_enqueue_script(
				'single-instance-widget-js',
				plugins_url( '/single-instance-widget.js', __FILE__ ),
				array(),
				false,
				true
			);
		}
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo '<p>This is Single Instance Widget.</p>';
	}

	/**
	 * Back-end widget form.
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		return;
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		return $new_instance;
	}
}
