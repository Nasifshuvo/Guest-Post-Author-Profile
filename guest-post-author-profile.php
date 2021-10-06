<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://nasifshuvo.com
 * @since             1.0.0
 * @package           Guest_Post_Author_Profile
 *
 * @wordpress-plugin
 * Plugin Name:       Guest Post Author Profile
 * Plugin URI:        https://github.com/Nasifshuvo/Guest-Post-Author-Profile
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Nasif Shuvo
 * Author URI:        https://nasifshuvo.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       guest-post-author-profile
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'GUEST_POST_AUTHOR_PROFILE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-guest-post-author-profile-activator.php
 */
function activate_guest_post_author_profile() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-guest-post-author-profile-activator.php';
	Guest_Post_Author_Profile_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-guest-post-author-profile-deactivator.php
 */
function deactivate_guest_post_author_profile() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-guest-post-author-profile-deactivator.php';
	Guest_Post_Author_Profile_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_guest_post_author_profile' );
register_deactivation_hook( __FILE__, 'deactivate_guest_post_author_profile' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-guest-post-author-profile.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_guest_post_author_profile() {

	$plugin = new Guest_Post_Author_Profile();
	$plugin->run();

}
run_guest_post_author_profile();
