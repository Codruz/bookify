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
		'manage_options',
		'Codruz_Reservation_Plugin',
		'easy_reservation_settings_page_markup',
		'dashicons-screenoptions',
		100
	);

}
add_action( 'admin_menu', 'easy_reservation_settings_pages' );