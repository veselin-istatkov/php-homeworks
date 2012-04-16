<?php

require_once 'Car.php';

class CarAdapter {
    private $car;
    
    function __construct($car) {
        $this->car = $car;
    }
    
    function getYearAndBrand() {
        return $this->car->getYear().' manufactured by '.$this->car->getBrand();
    }
}