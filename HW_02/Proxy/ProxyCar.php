<?php

require_once 'MyDriver.php';
require_once 'Car.php';

class ProxyCar {
    private $driver;
    private $realCar;
    
    public function __construct($driver) {
        $this->driver = $driver;
        $this->realCar = new Car();
    }
    
    public function driveCar() {
        if (($this->driver -> getAge()) < 18) {
            echo "Sorry! The driver is too young!<br>";
        } else {
            $this->realCar -> driveCar();
        }
    }
    
}