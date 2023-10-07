<?php
require_once 'Car.php';
include_once 'Basic.php';
include_once 'Property.php';

$car1 = new Car("BMW", "2023", "Red");
$car2 = new Car("Ford", "2019");
$car1->carInfo();
$car2->carInfo();
$car1->setBrand("Honda");
//echo "Car1_Brand: ". $car1->getBrand();
$car2->setModel(2023);
//echo "<br>Car2_Model: ". $car2->getModel();
//echo "<br><br>";
//echo $car1->carInfo();
//echo $car2->carInfo();

$math= new Circle(5);
//echo $math->area();
//$math->radius=10; => Throws an error
$obj=new GetMessage();
$obj->displ1("Hello Everyone!!!");
// echo $obj::class;
$vehicle= new Van();
//$vehicle->get("Tata 407",2009);
$vehicle= new Truck();
//$vehicle->get("Ashok Leyland",2009);

$user =new User();
// $user->get(101,"Dhara23");
// $user->get(100,"Dharan21");
// $user->get(101,null);
$shape = new Property();
$shape->setProperty("Square",4);
// echo $shape->getProperty();

?>