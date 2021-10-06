<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://nasifshuvo.com
 * @since      1.0.0
 *
 * @package    Guest_Post_Author_Profile
 * @subpackage Guest_Post_Author_Profile/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Guest_Post_Author_Profile
 * @subpackage Guest_Post_Author_Profile/includes
 * @author     Nasif Shuvo <shuvo.nasif@gmail.com>
 */
class Guest_Post_Author_Profile_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'guest-post-author-profile',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
