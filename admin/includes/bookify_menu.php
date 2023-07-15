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

	// Submenu Templates Page
	add_submenu_page(
		'bookify',

		__( 'Templates', 'bookify' ),
		__( 'Templates', 'bookify' ),
		'manage_options',
		'bookify_templates',
		'bookify_templates_subpage_markup',

		__( 'Inbox', 'bookify' ),
		__( 'Inbox', 'bookify' ),
		'manage_options',
		'bookify_inbox',
		'bookify_inbox_subpage_markup',
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

	  <h1><?php esc_html_e( 'New Reservation', 'bookify' ); ?></h1>
	  <h1><?php esc_html_e( get_admin_page_title() ); ?></h1>
	  <p><?php esc_html_e( 'New fields', 'bookify' ); ?></p>
  
	  <div class="border-with-text">
	  	<div class="text">Seller</div>

	  <br>

	  <div class="border-with-text">
		
		<form action="">
			<fieldset class="new-fieldset">
				
				<legend><?php esc_html_e( 'Seller', 'bookify' ); ?></legend>

				<label for="servicename"><?php esc_html_e( 'Service name', 'bookify' ); ?></label>
				<input type="text" id="servicename">

				<br><br>

				<label for="hostname"><?php esc_html_e( 'Host name', 'bookify' ); ?></label>
				<select name="seller" id="hostname">
					<option value="select" selected="true" disabled="disable"><?php esc_html_e( 'Select', 'bookify' ); ?></option>
					<option value="test"><?php esc_html_e( 'test', 'bookify' ); ?></option>
				</select>

			</fieldset>
			<fieldset class="new-fieldset">

				<legend><?php esc_html_e( 'Customer', 'bookify' ); ?></legend>

				<label for="user"><?php esc_html_e( 'User', 'bookify' ); ?></label>
				<input type="search" id="user">
				<a class="addnew-button" href="#"><?php esc_html_e( 'Add New', 'bookify' ); ?></a>

				<br><br>

				<label for="fullname"><?php esc_html_e( 'Full name', 'bookify' ); ?></label>
				<input type="text" id="fullname">

				<br><br>

				<label for="phonenumber"><?php esc_html_e( 'Phone number', 'bookify' ); ?></label>
				<input type="number" id="phonenumber">

			</fieldset>
			<fieldset class="new-fieldset">
				<legend><?php esc_html_e( 'Service', 'bookify' ); ?></legend>

				Nothing

			</fieldset>
			<fieldset class="new-fieldset">
				<legend><?php esc_html_e( 'Details', 'bookify' ); ?></legend>

				<label for="price"><?php esc_html_e( 'Price', 'bookify' ); ?></label>
				<input type="number" id="price">
				
				<br><br>

				<label for="date&time"><?php esc_html_e( 'Date & Time', 'bookify' ); ?></label>
				<input type="date" id="date&time">
				<input type="time" id="date&time">

				<br><br>
				
				<label for="paided"><?php esc_html_e( 'Was it paided before', 'bookify' ); ?></label>
				<select name="details" id="paided">
					<option value="select" selected="true" disabled="disable"><?php esc_html_e( 'Select', 'bookify' ); ?></option>
					<option value="yes"><?php esc_html_e( 'Yes', 'bookify' ); ?></option>
					<option value="no"><?php esc_html_e( 'No', 'bookify' ); ?></option>
				</select>

				<br><br>

				<label for="location"><?php esc_html_e( 'Location', 'bookify' ); ?></label>
				<input type="text" id="location">

			</fieldset>
			<input type="submit" name="submit" id="submit" class="button-submit" value="Reserve">
		</form>
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
