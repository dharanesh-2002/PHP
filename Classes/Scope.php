<?php
Class MathUtility {
    public static function calculateSum($value1, $value2) {
        echo "Your Total is " . $value1 + $value2 . PHP_EOL;
    }
    public static function calculateProduct($value1, $value2) {
        echo "Your Total is " . $value1 * $value2 . PHP_EOL;
    }
} 
Class AdvanceMathUtility extends MathUtility {
    public $value1;
    public $value2;
    public $value3;
    public function __construct($value1=null, $value2=null, $value3) {
        $this->value1 = $value1;
        $this->value2 = $value2;
        $this->value3 = $value3;
        if($this->value3 == "Add") parent::calculateSum($value1, $value2);
        else if($this->value3 == "Product") parent::calculateProduct($value1, $value2);
        else self::errorMsg();
    }
    public function errorMsg(){
        echo "Prefer Valid Input";
    }
}