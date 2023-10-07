<?php
readonly class Circle
{
    public int $radius;
    public function __construct($rad)
    {
        $this->radius = $rad;
    }
    public function area()
    {
        return pi() * $this->radius * $this->radius;
    }
    public function circumferance()
    {
        return 2 * pi() * $this->radius;
    }
}

//Extend Class
class Display
{
    public $Message;
    public function displ($Message)
    {
        return $this->Message = $Message;
    }
}
class GetMessage extends Display
{
    public $greet;
    public function displ1($greet)
    {
        $this->greet = $greet;
        parent::displ($greet);
    }
}
class Vehicle
{
    public $vehicleType;
    public $model;
    public function display($vehicleType, $model)
    {
        echo "Type :". $this->vehicleType = $vehicleType ."<br> Model :".  $this->model = $model. "<br>";
    }
}
class Van extends Vehicle
{
    public $type;
    public $year;
    public function get($type, $year)
    {
        $this->type = $type;
        $this->year = $year;
        parent::display($type, $year);
    }
}
class Truck extends Vehicle
{
    protected $type;
    protected $year;
    public function get($type, $year)
    {
        $this->type = $type;
        $this->year = $year;
        parent::display($type, $year);
    }
}
