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

	// Submenu Settings Page
	add_submenu_page(
		'bookify',
		__( 'Settings', 'bookify' ),
		__( 'Settings', 'bookify' ),
		'manage_options',
		'bookify_settings',
		'bookify_settings_subpage_markup',
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

	// Submenu Inbox Page
	add_submenu_page(
		'bookify',
		__( 'Inbox', 'bookify' ),
		__( 'Inbox', 'bookify' ),
		'manage_options',
		'bookify_inbox',
		'bookify_inbox_subpage_markup',
	);

	// Submenu Templates Page
	add_submenu_page(
		'bookify',
		__( 'Templates', 'bookify' ),
		__( 'Templates', 'bookify' ),
		'manage_options',
		'bookify_templates',
		'bookify_templates_subpage_markup',
	);

}
add_action( 'admin_menu', 'bookify_settings_pages' );


// Bookify Menu Pages function
function bookify_settings_page_markup(): void
{
	// Double check user capabilities
	if ( !current_user_can('manage_options') ) {
		return;
	}
	?>
	<div class="wrap">

	  <h1><?php esc_html_e( get_admin_page_title() ); ?></h1>
	  <p><?php esc_html_e( 'Some content.', 'bookify' ); ?></p>
  
	</div>
	<?php
}

// Submenu Function Settings Page
function bookify_settings_subpage_markup(): void
{
	// Double check user capabilities
	if ( !current_user_can('manage_options') ) {
		return;
	}
	?>
	<div class="wrap">
		
	  <h1><?php esc_html_e( get_admin_page_title() ); ?></h1>
	  <p><?php esc_html_e( 'Setting fields', 'bookify' ); ?></p>
  
	</div>
	<?php
}

// Submenu Function New Page
function bookify_new_subpage_markup(): void
{
	// Double check user capabilities
	if ( !current_user_can('manage_options') ) {
		return;
	}
	?>
	<div class="wrap">

	  <h1><?php esc_html_e( get_admin_page_title() ); ?></h1>
	  <p><?php esc_html_e( 'New fields', 'bookify' ); ?></p>
  
	</div>
	<?php
}

// Submenu Function Inbox Page
function bookify_inbox_subpage_markup(): void
{
	// Double check user capabilities
	if ( !current_user_can('manage_options') ) {
		return;
	}
	?>
	<div class="wrap">

	  <h1><?php esc_html_e( get_admin_page_title() ); ?></h1>
	  <p><?php esc_html_e( 'Inbox fields', 'bookify' ); ?></p>

	</div>
	<?php
}

// Submenu Function Templates Page
function bookify_templates_subpage_markup(): void
{
	// Double check user capabilities
	if ( !current_user_can('manage_options') ) {
		return;
	}
	?>
	<div class="wrap">

	  <h1><?php esc_html_e( get_admin_page_title() ); ?></h1>
	  <p><?php esc_html_e( 'Template fields', 'bookify' ); ?></p>

	</div>
	<?php
}

// Remove bookify from its own sub-menu
function remove_bookify_submenu_page() {
    remove_submenu_page( 'bookify', 'bookify' );
}
add_action( 'admin_menu', 'remove_bookify_submenu_page', 999 );
