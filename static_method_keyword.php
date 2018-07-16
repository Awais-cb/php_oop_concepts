<?php

class Customer
{
	private $id=123;
	private $name;
	// property has to be statis to be used in statis function
	private static $email = "awais@gmail.com";
	private $balance;
	
	// can't use "this" in static methods would have to use "self"
	public static function getEmail(){
		return self::$email;
	}

	public function getId()
	{
		return $this->id;
	}
}


// Your don't need an object to access static function or property
echo Customer::getEmail();

$customer = new Customer();
echo $customer->getId();