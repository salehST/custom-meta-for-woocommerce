<?php
/**
 * Plugin Name:       Custom Meta for WooCommerce
 * Description:       Add Additional information to WooCommerce Single product.
 * Version:           1.0.0
 * Author:            codersaleh
 * Author URI:		  https://github.com/coderembassy
 * Plugin URI: 		  https://coderembassy.com/
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       custom-meta-for-woocommerce
 * Requires at least: 6.4.2
 * Requires PHP:      7.0
 *
 * @package           custom-meta-for-woocommerce
 */
defined('ABSPATH') or die('Nice Try!');

if ( ! defined( 'FAQ_PRO_DIR_PATH' ) ) {
	define( 'FAQ_PRO_DIR_PATH', __DIR__ );
}

define( 'FAQ_PRO_FILE' , __FILE__ );
define( 'FAQ_PRO_URL' , plugins_url( '' , FAQ_PRO_FILE ) );
define( 'FAQ_PRO_BASENAME' , plugin_basename(__FILE__) );

require_once FAQ_PRO_DIR_PATH . '/inc/helpers/autoloader.php';

/**
 * If some task to perform during the plugin activation. Like create a new table
 * Do not write any in this class code that does not need to execute during the plugin activation 
 * @since 1.0.0
 * @author Fazle Bari <fazlebarisn@gmail.com>
 */
function activate_faq_pro(){
	\FAQ_PRO\Inc\Activate::get_instance();
}
register_activation_hook( __FILE__, 'activate_faq_pro');

/**
 * If some task to perform during the plugin deactivation. Like delete plugin table
 * Do not write any in this class code that does not need to execute during the plugin deactivation 
 * @since 1.0.0
 * @author Fazle Bari <fazlebarisn@gmail.com>
 */
function deactivate_faq_pro(){
	\FAQ_PRO\Inc\Deactivate::get_instance();
}
register_deactivation_hook( __FILE__, 'deactivate_faq_pro');

/**
 * This is the pluign main class, We will active or deactive all class from here
 * @since 1.0.0
 * @author Fazle Bari <fazlebarisn@gmail.com>
 */
function faq_pro_plugin_instance() {

	if ( in_array( 'woo-product-faq/woo-product-faq.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
		\FAQ_PRO\Inc\FAQ_PRO::get_instance();

		// Load extra functions file
		require_once FAQ_PRO_DIR_PATH . '/functions.php';
	}
}
add_action('plugins_loaded' , 'faq_pro_plugin_instance'); 
