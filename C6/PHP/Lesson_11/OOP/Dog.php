<?php

class Dog {
    
    public $name;
    public $public = "Public";
    protected $protected = "Protected";
    private $private = "Private";

    public function __construct ($name='Dog') {

        $this->name = $name;
    }

    public function bark() {
        $str = $this->name." says Woof!";
        return $str;
    }

    public function get($prop) {
        if(isset($this->$prop)) {
            return $this->$prop;
        }
        else {
            return "Property not found!";
        }
    }

    public function set($prop, $val) {
        if(isset($this->$prop)) {
            $this->$prop = $val;
        }
        else {
            return "Property $prop not found!";
        }
    }
}
?>