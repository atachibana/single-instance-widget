<?php
/**
 * Class SingleInstanceWidgetTest
 *
 * @package Single_Instance_Widget
 */

/**
 * SingleInstanceWidgetTest test cases.
 */
class SingleInstanceWidgetTest extends WP_UnitTestCase {

	/**
	 * Just invoke widget
	 */
	function test_widget() {
		$s = new Single_Instance_Widget();
		ob_start();
		$s->widget( null, null );
		$return_string = ob_get_contents();
		ob_end_clean();
		$this->assertEquals( $return_string, '<p>This is Single Instance Widget.</p>' );
	}

	/**
	 * Just invoke form
	 */
	function test_form() {
		$s = new Single_Instance_Widget();
		$s->form( null );
		$this->assertTrue( true );
	}

	/**
	 * Just invoke update
	 */
	function test_update() {
		$s = new Single_Instance_Widget();
		$new_instance = array();
		$new_instance['title'] = 'New Title';

		$return_instance = $s->update( $new_instance, null );
		$this->assertEquals( $new_instance, $return_instance );
	}
}
