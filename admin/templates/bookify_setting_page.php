<?php
function display_admin_notice() {
	$screen = get_current_screen();

	// Check if the current screen is the desired plugin page
	if ( $screen && $screen->id === 'your-plugin-page' ) {
		?>
        <div class="notice notice-info">
            <p>Your admin notice message here.</p>
        </div>
		<?php
	}
}
add_action( 'admin_notices', 'display_admin_notice' );