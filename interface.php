<?php
/*
	1-interface defines the definition of all the necessary methods
	2-all the methods inside interface are going to abstract
	3-code will through fatal error if there is not any method which mention in interface but is not implemeted
*/
interface mustMethods{
	public function getName();
	public function getEmail();
	public function getId();
	public function getBalance();
}

class Customer implements mustMethods
{
	// its a good practice to have private properties and public methods
	private $id;
	private $name;
	private $email;
	private $balance;
	
	function __construct()
	{
		// $this means current class's property
		$this->id = 1;
		$this->name = "Awais";	
		$this->email = "Customer : awaisfiazit@gmail.com";	
		$this->balance = "$87";
		echo "This is constructor";
	}

	public function getEmail()
	{
		return $this->email;
	}
	public function getId()
	{
		return $this->id;
	}	
	public function getBalance()
	{
		return $this->balance;
	}	
	public function getName()
	{
		return $this->name;
	}

}


$customer = new Customer();
echo $customer->getName();