<?php

/**
 * @class : Bookify class
 */
class Bookify {
	private array $configs = array( 'is_initialized' => false, 'version' => null );

	public function __construct() {
		$this->configs['is_initialized'] = true;
		$this->configs['version']        = '0.1';

		if ( ! get_option( option: 'bookify_configs' ) ) {
			add_option( option: 'bookify_configs', value: $this->configs );
		}
		update_option( option: 'bookify_configs', value: $this->configs );

	}

	public function is_initialized(): bool {
		return get_option( option: 'bookify_configs' )['is_initialized'];
	}

	public function get_version(): string {
		return get_option( option: 'bookify_configs' )['version'];
	}
}