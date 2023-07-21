<?php

/**
 * @class Template
 */
class Template {
	private string $template_name;
	private mixed $provider;
	private string $service;
	private string $description;
	private array $timeline;

	public function __construct( $template_name, $provider, $service, $description, $timeline ) {
		$this->template_name = $template_name;
		$this->provider      = $provider;
		$this->service       = $service;
		$this->description   = $description;
		$this->timeline      = $timeline;
	}

	/**
	 * Get the template name.
	 *
	 * @return string The name of the template.
	 */
	public function get_template_name(): string {
		return $this->template_name;
	}

	/**
	 * Set the template name.
	 */
	public function set_template_name( string $template_name ): void {
		$this->template_name = $template_name;
	}

	/**
	 * Get the provider.
	 *
	 * @return mixed The provider of the template.
	 */
	public function get_provider(): mixed {
		return $this->provider;
	}

	/**
	 * Set the provider.
	 */
	public function set_provider( mixed $provider ): void {
		$this->provider = $provider;
	}

	/**
	 * Get the service.
	 *
	 * @return string The service of the template.
	 */
	public function get_service(): string {
		return $this->service;
	}

	/**
	 * Set the service.
	 */
	public function set_service( string $service ): void {
		$this->service = $service;
	}

	/**
	 * Get the description.
	 *
	 * @return string The description of the template.
	 */
	public function get_description(): string {
		return $this->description;
	}

	/**
	 * Set the description.
	 */
	public function set_description( string $description ): void {
		$this->description = $description;
	}

	/**
	 * Get the timeline.
	 *
	 * @return array The timeline of the template.
	 */
	public function get_timeline(): array {
		return $this->timeline;
	}

	/**
	 * Set the timeline.
	 */
	public function set_timeline( array $timeline ): void {
		$this->timeline = $timeline;
	}
}
