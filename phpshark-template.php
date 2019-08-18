<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://thenorthernrhino.in/author/admin/
 * @since             1.0.0
 * @package           Phpshark_Template
 *
 * @wordpress-plugin
 * Plugin Name:       PHPShark-Template
 * Plugin URI:        http://www.contemplativeradicals.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Ankit Kumar
 * Author URI:        https://thenorthernrhino.in/author/admin/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       phpshark-template
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Require once the Composer Autoload
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PHPSHARK_TEMPLATE_VERSION', '1.0.0' );
defined("DS") || define('DS', DIRECTORY_SEPARATOR);
defined("PHPST_PLUGBASE") || define('PHPST_PLUGBASE', plugin_dir_path(__FILE__ ));
defined("PHPST_TEMPLATES") || define('PHPST_TEMPLATES', 'templates'.DS);
defined("PHPST_INCLUDES") || define('PHPST_INCLUDES', 'includes'.DS);
defined("PHPST_PARTIALS") || define('PHPST_PARTIALS', 'partials'.DS);
defined("PHPST_COMPONENTS") || define('PHPST_COMPONENTS', PHPST_PARTIALS.'components'.DS);
defined("PHPST_PARTS") || define('PHPST_PARTS', 'parts'.DS);
defined("PHPST_THEME") || define('PHPST_THEME', 'theme'.DS);
defined("PHPST_ADMIN") || define('PHPST_ADMIN', 'admin'.DS);
defined("PHPST_APP") || define('PHPST_APP', 'app'.DS);

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-phpshark-template-activator.php
 */
function activate_phpshark_template() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-phpshark-template-activator.php';
	Phpshark_Template_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-phpshark-template-deactivator.php
 */
function deactivate_phpshark_template() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-phpshark-template-deactivator.php';
	Phpshark_Template_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_phpshark_template' );
register_deactivation_hook( __FILE__, 'deactivate_phpshark_template' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-phpshark-template.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_phpshark_template() {

	$plugin = new Phpshark_Template();
	$plugin->run();

}
run_phpshark_template();
