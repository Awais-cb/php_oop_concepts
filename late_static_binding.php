<?php
class Customer{
	protected static $name = 'Awais';
	
	public static function getName(){
		// using "self" would mean return parent's propety
		echo self::$name;
		// using "static" would mean return child's propety which defines late static binding
		return static::$name;
	}
}
 
class User extends Customer{
 	protected static $name = 'Awais Fiaz'; 
}
 
echo User::getName(); // User