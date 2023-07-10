<?php
/**
 * Plugin Name:       bookify
 * Plugin URI:        https://github.com/Codruz/bookify
 * Description:       an easy way to reserve anything you might think
 * Version:           0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Codruz Group
 * Author URI:        https://github.com/orgs/Codruz/
 * Text Domain:       bookify
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://github.com/Codruz/bookify
 */

//for security
if (!defined('ABSPATH')) exit;

define( 'BOOKIFY_URL', plugin_dir_url( __FILE__ ) );
define( 'BOOKIFY_URL_DIR', plugin_dir_path( __FILE__ ) );
function bookify_activate(): void
{
	#update_option( 'bookify_configs', 'true' );
}
register_activation_hook( __FILE__, 'bookify_activate' );

//including hooks
include (plugin_dir_path(__FILE__) . 'admin/includes/bookify_hooks.php');
#include (plugin_dir_path(__FILE__) . 'admin/includes/bookify_menu.php');