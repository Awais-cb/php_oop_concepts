<?php

class Customer
{
	// its a good practice to have private properties and public methods
	private $id;
	private $name;
	private $email;
	private $balance;
	
	function __construct($id,$name,$email,$balance)
	{
		$this->id = $id;
		$this->name = $name;	
		$this->email = $email;	
		$this->balance = $balance;
	}

	public function getEmail()
	{
		return $this->email;
	}
}


class Subscriber extends Customer
{
	// Instantianting parent class from child class 
	function __construct($id,$name,$email,$balance,$plan)
	{
		//  parent is equivalent to super keyword
		parent::__construct($id,$name,$email,$balance);
		$this->plan = $plan;
	}
}

$subscriber = new Subscriber(1,'Awais','awaisfiazit@gmail.com','$78','monthly');

echo $subscriber->getEmail();