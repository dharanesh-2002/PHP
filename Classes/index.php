<?php
require_once 'Car.php';

$car1 = new Car("BMW", "2023", "Red");
$car2 = new Car("Ford", "2019");
$car1->carInfo();
$car2->carInfo();
$car1->setBrand("Honda");
echo "Car1_Brand: ". $car1->getBrand();
$car2->setModel(2023);
echo "<br>Car2_Model: ". $car2->getModel();
echo "<br><br>";
echo $car1->carInfo();
echo $car2->carInfo();

?>