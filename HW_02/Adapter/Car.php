<?php

class Car {
    private $year;
    private $brand;
    
    function __construct($year, $brand) {
        $this->year = $year;
        $this->brand = $brand;
    }
    
    function getYear() {
        return $this->year;
    }
    
    function getBrand() {
        return $this->brand;
    }
}
