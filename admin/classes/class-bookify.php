<?php
//main class
class Bookify
{
	private string $version;
	public function __construct(string $version)
	{
		$this->version = $version;
	}
	public function get_version() : string
	{
		return $this->version;
	}
}