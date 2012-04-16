<?php

require_once 'MyDriver.php';
require_once 'ProxyCar.php';
require_once 'Car.php';

$driver1 = new MyDriver(17);
$car = new ProxyCar($driver1);
echo "Driver 1:<br>";
$car -> driveCar();

$driver2 = new MyDriver(27);
$car = new ProxyCar($driver2);
echo "Driver 2:<br>";
$car -> driveCar();