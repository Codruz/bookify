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
	  <div class="border-with-text">
	  	<div class="text">Seller</div>

		<div class="fields">
			<label for="servicename"><?php esc_html_e( 'Service name', 'bookify' ); ?></label>
			<input type="text" id="servicename">
		</div>
		
		<div class="fields">
			<label for="hostname"><?php esc_html_e( 'Host name', 'bookify' ); ?></label>
			<select name="seller" id="hostname">
				<option value="select" selected="true" disabled="disable"><?php esc_html_e( 'Select', 'bookify' ); ?></option>
				<option value="test"><?php esc_html_e( 'test', 'bookify' ); ?></option>
			</select>
		</div>

	  </div>

	  <br><br><br>

	  <div class="border-with-text">
	  	<div class="text">Customer</div>
		
		<div class="fields">
			<label for="user"><?php esc_html_e( 'User', 'bookify' ); ?></label>
			<input type="search" id="user">
			<button><a href="#"><?php esc_html_e( 'add new', 'bookify' ); ?></a></button>
		</div>
		
		<div class="fields">
			<label for="fullname"><?php esc_html_e( 'Full name', 'bookify' ); ?></label>
			<input type="text" id="fullname">
		</div>

	  </div>

	  <br><br><br>

	  <div class="border-with-text">
	  	<div class="text">Service</div>

		<div class="fields">
			test content
		</div>

	  </div>

	  <br><br><br>

	  <div class="border-with-text">
	  	<div class="text">Details</div>
		
		<div class="fields">
			<label for="price"><?php esc_html_e( 'Price', 'bookify' ); ?></label>
			<input type="number" id="price">
		</div>
		
		<div class="fields">
			<label for="date&time"><?php esc_html_e( 'Date & Time', 'bookify' ); ?></label>
			<input type="date" id="date&time">
			<input type="time" id="date&time">
		</div>

		<div class="fields">
			<label for="paided"><?php esc_html_e( 'Was it paided before', 'bookify' ); ?></label>
			<select name="details" id="paided">
				<option value="select" selected="true" disabled="disable"><?php esc_html_e( 'Select', 'bookify' ); ?></option>
				<option value="yes"><?php esc_html_e( 'Yes', 'bookify' ); ?></option>
				<option value="no"><?php esc_html_e( 'No', 'bookify' ); ?></option>
			</select>
		</div>

		<div class="fields">
			<label for="location"><?php esc_html_e( 'Location', 'bookify' ); ?></label>
			<input type="text" id="location">
		</div>

	  </div>
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
