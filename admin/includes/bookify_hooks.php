<?php
//gets the object
global $BOOKIFY;
//if the main class was initialized
if ( ! $BOOKIFY->is_initialized() ) {
	die;
}
function bookify_activation(): void {
	add_role(
		'provider',           // Role slug
		'Provider',           // Role display name
		array(
			// Capabilities of the new role (customize this as needed)
			'read'                        => true,
			'edit_posts'                  => true,
			'delete_posts'                => true,//change if needed
			'edit_reservation'            => true,
			'delete_reservation'          => true,
			'publish_reservation'         => true,
			'manage_own_schedule'         => true,
			'view_customer_details'       => true,
			'manage_reservation_settings' => true,
		)
	);
}

function bookify_deactivation(): void {
	// Clear the permalinks after the post type has been registered.
	flush_rewrite_rules();
}

function bookify_uninstall(): void {
	//for security
	if ( ! defined( constant_name: 'WP_UNINSTALL_PLUGIN' ) ) {
		die;
	}
	remove_role( 'provider' );
	delete_option( option: 'bookify_configs' );//deletes a row in wp-options
}

function bookify_styles_hook(): void {
	wp_register_style( handle: 'bookify-css', src: plugins_url( 'bookify/admin/css/style.css' ), deps: array(), ver: '0.1', media: 'all' );
	wp_enqueue_style( handle: 'bookify-css' );
}

add_action( hook_name: 'admin_print_styles', callback: 'bookify_styles_hook' );
