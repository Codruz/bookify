<?php

// Bookify Menue Pages
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
		'manage-options',
		'bookify-settings',
		'bookify_settings_subpage_markup',
	);

}
add_action( 'admin_menu', 'bookify_settings_pages' );

// Bookify Menue Pages function
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

// Submenu Settings Page
function bookify_settings_subpage_markup(): void
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