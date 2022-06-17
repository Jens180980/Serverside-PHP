<?php
class User {
	public $firstname;
	public $lastname;
	public $address;
	public $zipcode;
	public $city;
	public $country;
	public $email;

	public function getFullName() {
		return "<p><b>$this->firstname $this->lastname</b></p>";
	}

	public function getFullAddress() {
		return "<p>$this->address<br />
				$this->zipcode $this->city<br />
				$this->country</p>";
	}

	public function getUserInfo() {
		return $this->getFullName() . 
				$this->getFullAddress();
	}

}