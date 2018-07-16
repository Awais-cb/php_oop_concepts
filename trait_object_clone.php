<?php

trait Logger{
	public function logData($name)
	{
		echo date('Y/m/d H:i:s')." Initiated ".$name;
	}
}
/**
 * 
 */
class Customer
{
	//  using trait which does not need extending it
	Use Logger;
	public function initCustomer($name)
	{
		// use "this" with trait's function
		$this->logData($name);
	}
}

$customer = new Customer();
$customer->initCustomer('Awais');

// clonning an object
$customer1 = clone $customer;
$customer1->initCustomer('Aslam');