<?php

/**
 * Fired during plugin activation
 *
 * @link       https://romerobaez.com
 * @since      1.0.0
 *
 * @package    Arb_Customizations
 * @subpackage Arb_Customizations/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Arb_Customizations
 * @subpackage Arb_Customizations/includes
 * @author     Angel Romero Baez <angel@romerobaez.com>
 */
class Arb_Customizations_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		// Removing Jetpack CSS
		add_filter( 'jetpack_sharing_counts', '__return_false', 99 );
		add_filter( 'jetpack_implode_frontend_css', '__return_false', 99 );
		

	}

}
