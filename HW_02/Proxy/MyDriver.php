<?php

class MyDriver {
    private $age;
    
    public function __construct($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }
}