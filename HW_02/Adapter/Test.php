<?php

require_once 'Car.php';
require_once 'CarAdapter.php';

$car = new Car(1999, 'BMW');
$carAd = new CarAdapter($car);

echo "Year and Brand: ".$car->getYear()." manufactured by ".$car->getBrand()."<br>";
echo "Year and Brand: ".$carAd->getYearAndBrand();