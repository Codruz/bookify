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
if (!defined(constant_name: 'ABSPATH')) exit;

define( 'BOOKIFY_URL', plugin_dir_url( file: __FILE__ ) );
define( 'BOOKIFY_DIR', plugin_dir_path( file:__FILE__ ) );
const BOOKIFY_VER = "0.1";

//callback functions
function bookify_activation(): void
{
	require_once BOOKIFY_DIR . "admin/classes/class-bookify.php";
	$bookify = new Bookify(version: BOOKIFY_VER);

	if(!get_option(option: 'bookify_configs'))
		add_option( option: 'bookify_configs', value: $bookify );
	update_option( option: 'bookify_configs', value:  $bookify );
}
function bookify_deactivation(): void
{
	// Clear the permalinks after the post type has been registered.
	flush_rewrite_rules();
}
function bookify_uninstall():void
{
	//for security
	if ( ! defined( constant_name: 'WP_UNINSTALL_PLUGIN' ) ) die;
	delete_option(option: 'bookify_configs');
}

//register needed hooks
register_activation_hook( file: __FILE__, callback: 'bookify_activation' );
register_deactivation_hook(file: __FILE__,callback: 'bookify_deactivation' );
register_uninstall_hook(file: __FILE__,callback: 'bookify_uninstall');

//including hooks
include (plugin_dir_path(file: __FILE__) . 'admin/includes/bookify_hooks.php');
include (plugin_dir_path(file:__FILE__) . 'admin/includes/bookify_menu.php');