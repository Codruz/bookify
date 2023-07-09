<?php
function easy_reservation_settings_page_markup(): void
{
	// Double check user capabilities
	if ( !current_user_can('manage_options') ) return;

	#include( EASY_RESERVATION_DIR . 'templates/admin/settings-page.php');
}

function easy_reservation_settings_pages(): void
{
	add_menu_page(
		__( 'Reservation Plugin', 'Codruz_Reservation_Plugin' ),
		__( 'Reservation', 'Codruz_Reservation_Plugin' ),
		capability: 'manage_options',
		menu_slug: 'Codruz_Reservation_Plugin',
		callback: 'easy_reservation_settings_page_markup',
		icon_url: 'dashicons-screenoptions',
		position: 100
	);

}
add_action( 'admin_menu', 'easy_reservation_settings_pages' );