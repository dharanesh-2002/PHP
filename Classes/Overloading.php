<?php
class Overloading{
    public $data;
    public function __set($name,$value){
        $this->data[$name]=$value;
    }
    public function __get($name){
        return $this->data[$name];
    }
    public function __isset($name){
        return isset($this->data[$name]);
    }
    public function __unset($name){
        unset($this->data[$name]);
    }
}

//Object Creation
$obj=new Overloading();
$obj->someMethod=["Dharanesh","Don"];
print_r($obj->someMethod);
echo isset( $obj->someMethod );
unset($obj->someMethod);
echo isset($obj->someMethod);
//print_r($obj->someMethod);  =>Undefined array 
echo "<br> <br> <br>";
 
class Overloading1{
    public $method;
    public $args=[];
    public function __call($method, $args){
        $this->method = $method;
        $this->args=$args;
        echo "$this->method having arguments like $this->args HI <br>";
    }
    public static function __callStatic( $method, $args){
        echo $method . " having an arguments like ". implode(", ", $args) ."<br>";
    }
}
$obj1=new Overloading1();
$obj1->someUndefinedMethod (1,2,3,4,5);
Overloading1::someUndefinedStaticMethod(1,2,3);


