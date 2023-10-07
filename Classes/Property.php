<?php
class Verify1
{
    public $ids;
    public $pass;
    public function verify($a1, $b1)
    {
        $this->ids = $a1;
        $this->pass = $b1;
        if ($this->ids === 101 && $this->pass === "Dhara23") {
            echo "User Verified";
        } elseif ($this->pass === null) {
            echo "Enter Ur PassWord";
        } else {
            echo "User Not Found";
        }
    }
}
class User extends Verify1
{
    //type Declaration
    public int $id;
    public ?string $password; //Can be null also
    public function get($a, $b)
    {
        $this->id = $a;
        $this->password = $b;
        parent::verify($this->id, $this->password);
    }
}

//Calling Function
class Property
{
    public $name;
    public $noOfSides;
    public function setProperty($name, $sides)
    {
        $this->name = $name;
        $this->noOfSides = $sides;
    }
    public function getProperty()
    {
        return "Shape :" . $this->name . " Sides :" . $this->noOfSides . "<br>";
    }
}
