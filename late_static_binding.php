<?php
// A static property can be accessed from a method in the same class using the self keyword and double colon (::):
class Customer{
	protected static $name = 'Awais';
	public static function getName(){
		// using "self" would mean return parent's/current class's propety
		echo self::$name;
		// using "static" would mean return child's propety if defined otherwise current class's property would be returned (which defines late static binding)
		return static::$name;
	}
}
 
class User extends Customer{
 	protected static $name = 'Awais Fiaz';
	// Method overriding example (here using "self","static" would mean current class's property if exists otherwise parent's propety)
	/*
	public static function getName(){
		echo self::$name;
		return static::$name;
	}
	*/
}
 
echo User::getName(); // User
