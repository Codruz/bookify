<?php
//gets the object
global $bookify;
//if the main class was initialized
if ( ! $bookify->is_initialized() ) {
	die;
}

function bookify_styles_hook(): void {
	wp_register_style( handle: 'bookify-css', src: plugins_url( 'bookify/admin/css/style.css' , deps: array(), ver: '0.1', media: 'all' );
	wp_enqueue_style( handle: 'bookify-css' );
}

add_action( hook_name: 'admin_print_styles', callback: 'bookify_styles_hook' );
