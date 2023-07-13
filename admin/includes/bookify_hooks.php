<?php

if(get_option('bookify_configs')->is_initialized()) bookify_activation_hook();
function bookify_activation_hook(): void
{
	//welcome message for activating the plugin
	add_action('admin_notices', 'welcome_message_hook');
}

function bookify_styles_hook()
{

}
add_action(hook_name: 'wp_enqueue_scripts',callback: 'bookify_styles_hook');
function welcome_message_hook(): void
{
	$screen = get_current_screen();

    if ("bookify_page_bookify_settings" === $screen->id && $screen)
    {
	    ?>
        <div class="notice notice-success is-dismissible">
            <p><?php echo esc_html__('The Reservation plugin has been successfully loaded. Thank you for using this plugin! For more information, please refer to the documentation.', 'reservation_plugin'); ?></p>    </div>
	    <?php
    }

}