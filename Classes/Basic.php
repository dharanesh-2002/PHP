<?php
class Basic
{
    public $name = "Aspire System";
    public $location ="Chennai";
    public function display(){
        echo "$this->name is located in $this->location";
    }
}
$obj=new Basic();
$obj->display();