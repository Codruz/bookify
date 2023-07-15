<?php

class Customer extends User {
	protected static int $customer_count = 0;
	private array $reservation_history;

	public function __construct( $ID, $name, $last_name, $gender, $age, $email, $phone_number, $birthdate ) {
		Customer::$customer_count ++;
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
		$this->reservation_history = [];

	}

	/**
	 * Get the count of customers.
	 *
	 * @return int The name of the customers.
	 */
	public static function customer_count(): int {
		return Customer::$count;
	}

	/**
	 * add a reservation to the customer reservation history.
	 *
	 * @return bool the result of adding a reservation.
	 */
	public function add_reservation( mixed $reservation ): bool {
		//fix this later
		return true;
	}

	/**
	 * get all the reservation history.
	 *
	 * @return array array of reservations.
	 */
	public function get_reservations(): array {
		return $this->reservation_history;
	}
}