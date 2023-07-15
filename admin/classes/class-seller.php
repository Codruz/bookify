<?php

class Seller extends User {
	protected static int $seller_count = 0;
	private string $company_name;
	private string $service;
	private string $ratings;


	public function __construct( $ID, $name, $last_name, $gender, $age, $email, $phone_number, $birthdate, $company_name, $service, $ratings ) {
		Seller::$seller_count ++;
		//parent constructor
		parent::__construct();

		//initiating parent properties
		$this->ID           = $ID;
		$this->name         = $name;
		$this->last_name    = $last_name;
		$this->gender       = $gender;
		$this->age          = $age;
		$this->email        = $email;
		$this->phone_number = $phone_number;
		$this->birthdate    = $birthdate;

		//its own properties
		$this->company_name = $company_name;
		$this->service      = $service;
		$this->ratings      = $ratings;
	}

	/**
	 * Get the company name of the seller
	 *
	 * @return string The name of the company.
	 */
	public function get_company(): string {
		return $this->company_name;
	}

	/**
	 * set the company name of the seller
	 */
	public function set_company( string $company_name ): void {
		$this->company_name = $company_name;
	}

}