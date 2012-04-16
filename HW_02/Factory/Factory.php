<?php

include 'Lion.php';
include 'Cat.php';
include 'Dog.php';

class Factory {
    private function __construct() {
        
    }
    
    public function select($animal) {
        $a = strtolower($animal);
        if ($a == 'lion') {
            $obj = new Lion;
        } elseif ($a == 'cat') {
            $obj = new Cat;
        } elseif ($a == 'dog') {
            $obj = new Dog;
        } else {
            echo 'Unknown sound!';
        }
        return $obj;
    }
}