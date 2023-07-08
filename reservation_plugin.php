<?php
/**
 * Plugin Name:       Reservation plugin
 * Plugin URI:        https://github.com/Codruz/Codruz_Reservation_Plugin
 * Description:       something
 * Version:           0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Codruz Group(MehdiREXON on this branch)
 * Author URI:        https://github.com/orgs/Codruz/
 * Text Domain:       reservation_plugin
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://github.com/Codruz/Codruz_Reservation_Plugin
 */

if (!defined('ABSPATH')) exit;

define( 'RESERVATION_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'RESERVATION_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
function my_plugin_activate(): void
{
	update_option( 'reservation_plugin_init', 'true' );
}
register_activation_hook( __FILE__, 'my_plugin_activate' );

//including hooks
#echo plugin_dir_path(__FILE__) . 'admin/includes/easy_reservation_hooks.php';
include (plugin_dir_path(__FILE__) . 'admin/includes/reservation_plugin_hooks.php');
#include (plugin_dir_path(__FILE__) . 'admin/includes/reservation_plugin_menu.php');