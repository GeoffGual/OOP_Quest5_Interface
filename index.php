
<?php
require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Bike.php';


$car = new Car('green', 4, 'electric');
$bike = new Bike('rouge pétant', 2);


$car->switchOn();
var_dump($car->isLight());
$car->switchOff();
var_dump($car->isLight());


$bike->switchOn();
var_dump($bike->isLight());
$bike->forward();
$bike->switchOn();
var_dump($bike->isLight());
$bike->switchOff();
var_dump($bike->isLight());