<?php

// Bookify Menu Pages
function bookify_settings_pages(): void
{
	add_menu_page(
		__( 'Bookify', 'bookify' ),
		__( 'Bookify', 'bookify' ),
		capability: 'manage_options',
		menu_slug: 'bookify',
		callback: 'bookify_settings_page_markup',
		icon_url: 'dashicons-screenoptions',
		position: 10
	);

	// Submenu Inbox Page
	add_submenu_page(
		'bookify',
		__( 'Inbox', 'bookify' ),
		__( 'Inbox', 'bookify' ),
		'manage_options',
		'bookify_inbox',
		'bookify_inbox_subpage_markup',
	);

	// Submenu New Page
	add_submenu_page(
		'bookify',
		__( 'New', 'bookify' ),
		__( 'New', 'bookify' ),
		'manage_options',
		'bookify_new',
		'bookify_new_subpage_markup',
	);

	// Submenu Templates Page
	add_submenu_page(
		'bookify',
		__( 'Templates', 'bookify' ),
		__( 'Templates', 'bookify' ),
		'manage_options',
		'bookify_templates',
		'bookify_templates_subpage_markup',
		__( 'Inbox', 'bookify' ),
	);

	// Submenu Settings Page
	add_submenu_page(
		'bookify',
		__( 'Settings', 'bookify' ),
		__( 'Settings', 'bookify' ),
		'manage_options',
		'bookify_settings',
		'bookify_settings_subpage_markup',
		__( 'Templates', 'bookify' ),
	);

}
add_action( 'admin_menu', 'bookify_settings_pages' );


// Bookify Menu Pages function
function bookify_settings_page_markup(): void
{
	// Double check user capabilities
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}
	require_once BOOKIFY_DIR . "admin/templates/bookify_setting.php";
}

// Submenu Function Settings Page
function bookify_settings_subpage_markup(): void
{
	// Double check user capabilities
	if ( ! current_user_can( 'manage_options' ) )
		return;
	require_once BOOKIFY_DIR . "admin/templates/bookify_setting.php";
}

// Submenu Function New Page
function bookify_new_subpage_markup(): void
{
	// Double check user capabilities
	##################has to be changed######################
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}
	require_once BOOKIFY_DIR . "admin/templates/bookify_new.php";
}

// Submenu Function Inbox Page
function bookify_inbox_subpage_markup(): void {
	// Double check user capabilities
	##################has to be changed######################
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}
	require_once BOOKIFY_DIR . "admin/templates/bookify_inbox.php";
}

// Submenu Function Templates Page
function bookify_templates_subpage_markup(): void
{
	// Double check user capabilities
	if ( ! current_user_can( 'manage_options' ) )
		return;
	require_once BOOKIFY_DIR . "admin/templates/bookify_templates.php";
}

// Remove bookify from its own sub-menu
function remove_bookify_submenu_page(): void {
	remove_submenu_page( 'bookify', 'bookify' );
}
add_action( 'admin_menu', 'remove_bookify_submenu_page', 999 );