<?php

class Car
{
    //Properties
    private $brand;
    private $model;
    private $color;
    public function __construct($brand, $model, $color = "none")
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
    }
    public function carInfo()
    {
        return "Brand : $this->brand <br> Model : $this->model <br> Color = $this->color <br>";
    }
    //Getter & Setter Method
    public function setBrand($brand){
        $available=[
            "BMW",
            "Ford",
            "Honda",
        ];
        if(in_array($brand,$available))
        $this->brand=$brand;
    }
    public function getBrand(){
        return $this->brand;
    }
    public function setModel($model){
        $this->model=$model;
    }
    public function getModel(){
        return $this->model;
    }
}