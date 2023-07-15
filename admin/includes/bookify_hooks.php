<?php
//gets the object
global $bookify;
//if the main class was initialized
if ( ! $bookify->is_initialized() ) {
	die;
}

function bookify_styles_hook(): void {
	wp_enqueue_style( handle: 'bookify-css', src: BOOKIFY_URL . "admin/css/style.css", deps: array(), ver: '0.1', media: 'all' );
}

add_action( hook_name: 'wp_enqueue_scripts', callback: 'bookify_styles_hook' );
