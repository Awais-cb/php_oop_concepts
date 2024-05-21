<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (!function_exists('dd')) {
    function dd($d)
    {
        die('<pre>' . print_r($d, 1));
    }
}

if (!function_exists('p')) {
    function p($d, $log=true)
    {
        if ($log) {
            error_log(print_r($d, 1));
        }
        echo '<pre>';
        print_r($d);
        echo '</pre>';
    }
}

trait sampleTrait {
    abstract function sampleTraitMethod();
    final function finalTraitMethod () {
        p("we in finalTraitMethod");
    }
}

// Traits can not be used in interface
interface sampleInterface {
    public function sampleInterfaceSignature();
}

abstract class parentClass implements sampleInterface {
    use sampleTrait;

    function __construct() {
        p("we in parent");
    }

    function sampleTraitMethod() {
        p("we implemented trait method");
    }

    function sampleInterfaceSignature() {
        p("we implemented interface method");
    }
}

class childClass extends parentClass {
    function __construct() {
        p("We in child");
    }
}

$childClass = new childClass();
$childClass->finalTraitMethod();