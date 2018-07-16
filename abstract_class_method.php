<?php

//  we can't create object of abstract class its always inherited
abstract class Customer
{
	// its a good practice to have private properties and public methods
	private $id;
	private $name;
	// making email protected to be accessed by child 
	protected $email;
	private $balance;
	
	function __construct($id,$name,$email,$balance)
	{
		$this->id = $id;
		$this->name = $name;	
		$this->email = $email;	
		$this->balance = $balance;
	}

	// abstract function cannot contain body 
	abstract function getEmail();
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
	public function getEmail()
	{
		return $this->email;
	}
}

$subscriber = new Subscriber(1,'Awais','awaisfiazit@gmail.com','$78','monthly');

echo $subscriber->getEmail();