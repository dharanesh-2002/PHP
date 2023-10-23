<?php

class School
{
    const Subject =["Tamil", "English", "Maths"];
    public $names = ["Dharanesh", "Dharan"];
    protected $proc= 123;
    public function studentInfo()
    {
        foreach ($this->names as $name) {
            echo "$name's subject are ";
            foreach (self::Subject as $sub) {
                echo $sub . " ";
            }
            echo "<br>";
        }
    }
}

class MyClass extends School
{
    public function __construct()
    {
        echo "Constructor Called",__CLASS__,"<br>";
    }
    public static function greeting()
    {
        echo " Hello, Gm!!!!";

    }
    public function __destruct()
    {
        echo "Destructring" . __CLASS__. "<br>";
    }
}