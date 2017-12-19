<?php
/**
 * Plugin Name:     Single Instance Widget
 * Plugin URI:      https://github.com/atachibana/single-instance-widget
 * Description:     Example plugin demonstrates 'single wigget' instance in the Widget pallet of Administration Screen
 * Author:          Akira Tachibana
 * Author URI:      http://unofficialtokyo.com
 * Text Domain:     single-instance-widget
 * Domain Path:     /languages
 * Version:         1.0.0
 *
 * @package         Single_Instance_Widget
 */

foreach ( scandir( __DIR__ . '/includes' ) as $file ) {
	if ( preg_match( '#^[^._].*\.php$#u', $file ) ) {
		require __DIR__ . '/includes/' . $file;
	}
}
