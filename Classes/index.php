<?php

require_once 'Car.php';
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

include_once 'Basic.php';
$math = new Circle(5);
//echo $math->area();
//$math->radius=10; => Throws an error
$obj = new GetMessage();
$obj->displ1("Hello Everyone!!!");
// echo $obj::class;
$vehicle = new Van();
//$vehicle->get("Tata 407",2009);
$vehicle = new Truck();
//$vehicle->get("Ashok Leyland",2009);

include_once 'Property.php';
$user = new User();
// $user->get(101,"Dhara23");
// $user->get(100,"Dharan21");
// $user->get(101,null);
$shape = new Property();
$shape->setProperty("Square", 4);
// echo $shape->getProperty();

include_once 'Const.php';
$school = new School();
// $school->studentInfo();
// var_dump($school::Subject);

//$obj = new MyClass();
//$obj->greeting();

include_once 'Visibility.php';
$verify = new Verification ("Dharan","Don@123");
$verify->verify();
$acc = new BankAccount(100,null);
$accbalance = new AccountBalance ();
$accbalance->getBalance();

include_once 'Scope.php';
$math = new AdvanceMathUtility(10,11,"Sub");

include_once 'Abstraction.php';
$obj= new Expand();
$obj->add(10,15);

$vehicle= new Cars();
$vehicle->setInfo("Ford",2010);

$vehicle1 = new CoachVan();
$vehicle1->setInfo("Tata 407",2015,2023);