<?php
//main class
class Bookify
{
	private string $version;
	private bool $is_initialized = false;
	public function __construct(string $version)
	{
		$this->is_initialized = true;
		$this->version = $version;
	}
	public function is_initialized() : bool
	{
		return $this->is_initialized;
	}
	public function get_version() : string
	{
		return $this->version;
	}
}