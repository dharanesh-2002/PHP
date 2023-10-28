<?php
abstract class Abstraction
{
    public $result;
    abstract function add($value1, $value2);
    public function display($result)
    {
        $this->result = $result;
        echo "I am in" . __CLASS__ . "Class and Your result is " . $this->result . "<br>";
    }
}
class Expand extends Abstraction
{
    public $input1;
    public $input2;
    public function add($input1, $input2)
    {
        $this->input1 = $input1;
        $this->input2 = $input2;
        parent::display($this->input1 + $this->input2);
    }
}

abstract class Vehicles
{
    abstract function setInfo($maker, $model, $body = null);
    public $model, $body, $maker;
    public $vehicle;
    public function display($vehicle, $maker, $model, $body)
    {
        $this->vehicle = $vehicle;
        $this->maker = $maker;
        $this->model = $model;
        $this->body = $body;

        echo "VEHICLE : $this->vehicle <br>";
        echo "MAKER   : $this->maker <br>";
        echo "MODEL   : $this->model <br>";
        if ($this->body == null) {
            echo "BODY   : Not Applicable <br>";
        } else {
            echo "BODY   : $this->body <br>";
        }
    }
}
class Cars extends Vehicles
{
    public $model, $body, $maker;
    public $vehicle;
    public function setInfo($maker, $model, $body = null)
    {
        $this->vehicle = __CLASS__;
        $this->maker = $maker;
        $this->model = $model;
        $this->body = $body;
        parent::display($this->vehicle, $this->maker, $this->model, $this->body);
    }
    
}
class CoachVan extends Vehicles
{
    public $model, $body, $maker;
    public $vehicle;

    public function setInfo($maker, $model, $body = null)
    {
        $this->vehicle = __CLASS__;
        $this->maker = $maker;
        $this->model = $model;
        $this->body = $body;
        parent::display($this->vehicle, $this->maker, $this->model, $this->body);
    }
}