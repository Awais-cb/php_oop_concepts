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

trait ParentTrait {
    protected $parentProperty;

    public function __construct() {
        p('Initialized ParentTrait');
        $this->parentProperty = 'Initialized by ParentTrait';
    }

    public function getParentProperty() {
        return $this->parentProperty;
    }
}

class ParentClass {
    use ParentTrait;

    public function __construct() {
        p("Constructor of ParentClass");
    }
}

trait CounterTrait {
    protected $count;

    public function __construct() {
        p('Initialized CounterTrait');
        $this->count = 0;
    }

    public function increment() {
        $this->count++;
    }

    public function getCount() {
        return $this->count;
    }
}

class Counter extends ParentClass {
    use CounterTrait;

    public function __construct() {
        parent::__construct();
        p("Constructor of Counter");
    }
}

$obj = new Counter();
p(var_dump($obj->getCount()));             // Output: 0
p(var_dump($obj->getParentProperty()));    // Output: Initialized by ParentTrait

