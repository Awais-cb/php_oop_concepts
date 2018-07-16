<?php
// we don't need to call this function php will automaticaly call it up
try {
	function __autoload($className) {
	    if (file_exists('classes/'.$className . '.class.php')) {
	        include('classes/'.$className . '.class.php');
	    } else {
	        throw new Exception('Unable to load class named $class');
	    }
	}
} catch (Exception $e) {
	echo $e->getMessage();	
}