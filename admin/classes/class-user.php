<?php
/**
 * @class User
 * @abstract
 */

abstract class User {
	protected static int $count = 0;
	protected string $ID;
	protected string $name;
	protected string $last_name;
	protected string $gender;
	protected int $age;
	protected string $email;
	protected string $phone_number;
	protected string $birthdate;

	public function __construct() {
		User::$count ++;
	}

	/**
	 * Get the count of users.
	 *
	 * @return int The name of the user.
	 */
	public static function count(): int {
		return User::$count;
	}

	/**
	 * Get the name of the user.
	 *
	 * @return string The name of the user.
	 */
	public function get_name(): string {
		return $this->name;
	}

	/**
	 * Get the last name of the user.
	 *
	 * @return string The last name of the user.
	 */
	public function get_last_name(): string {
		return $this->last_name;
	}

	/**
	 * Get the email of the user.
	 *
	 * @return string The last name of the user.
	 */
	public function get_email(): string {
		return $this->email;
	}


	/**
	 * Set the email of the user.
	 */
	public function set_email( string $email ): void {
		$this->email = $email;
	}


	/**
	 * Get the gender of the user.
	 *
	 * @return string The gender of the user.
	 */
	public function get_gender(): string {
		return $this->gender;
	}

	/**
	 * Get the phone number of the user.
	 *
	 * @return string The name of the user.
	 */
	public function get_phone_number(): string {
		return $this->phone_number;
	}


	/**
	 * Set the phone number of the user.
	 */
	public function set_phone_number( string $phone_number ): void {
		$this->phone_number = $phone_number;
	}

	/**
	 * Get the age of the user.
	 *
	 * @return int The age of the user.
	 */
	public function get_age(): int {
		return $this->age;
	}

	/**
	 * Get the birthdate of the user.
	 *
	 * @return string The birthdate of the user.
	 */
	public function get_birthdate(): string {
		return $this->birthdate;
	}

}
