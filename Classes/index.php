<?php
include_once __DIR__;

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


$user = new User();
// $user->get(101,"Dhara23");
// $user->get(100,"Dharan21");
// $user->get(101,null);
$shape = new Property();
$shape->setProperty("Square", 4);
// echo $shape->getProperty();


$school = new School();
// $school->studentInfo();
// var_dump($school::Subject);

//$obj = new MyClass();
//$obj->greeting();

$verify = new Verification("Dharan", "Don@123");
$verify->verify();
$acc = new BankAccount(100, null);
$accbalance = new AccountBalance();
$accbalance->getBalance();

//$math = new AdvanceMathUtility(10,11,"Sub");

$obj = new Expand();
//$obj->add(10,15);

$vehicle = new Cars();
//$vehicle->setInfo("Ford",2010);

$vehicle1 = new CoachVan();
//$vehicle1->setInfo("Tata 407",2015,2023);

$int = new LoadData();
// $int->setData("Dharan",23,"Anthiyur");
// $int->getData();

$int1 = new VerifyData();
// $int1->setData("King",21,"Anthiyur");
// $int1->verify();
// $int1->setData("Don",23,"ERode");
// $int1->verify();

$int2 = new MultiTransport();
// $int2->startDriving();
// $int2->stopSail();

$obj = new Users();
$obj->log();
$obj1 = new Product();
$obj1->log();

$obj2 = new ContentCreator();
echo "Content Creator : <br>";
$obj2->editContent();
echo "<br> <br>";

$obj3 = new ReviewContent();
echo "Review Content : <br>";
$obj3->reviewStart();

$obj4 = new Buyer();
$obj4->mobile();
$obj4->laptop();

$obj5=new DatabaseLogger();
$obj5->log("Dharan");


