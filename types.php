<?php

echo "<h1>TYPES</h1>";
$name = "10 Dharan";
settype($name, "integer");
echo $name, "<br>";

$name1 = true;
settype($name1, "integer");
echo $name1;
var_dump($name1);
echo "<br>";
echo gettype($name1), "  ";
echo get_debug_type($name1);

//NULL
echo "<br>";
unset($name1); //echo $name1; => Shows an error that the variable is undefined

//Booleans
if ($name == "Dharan") {
    echo "Itz correct one...";
} else {
    echo "Itz  False...";
}
//Booleans - Casting
echo "<br>";
// var_dump((bool)); => Shows an error which is unexpected tocken
var_dump((bool) 101); //True
var_dump((bool) 0.0); //False

echo "<br>";
//Int-Casting
function intCast($value): int
{
    return $value;
}

var_dump(intCast(8.12));
var_dump(intCast(9.9));
var_dump((int) 9.9);
var_dump(intval(7.5));
var_dump((int) NAN);
var_dump((int) "Dharan");
var_dump((int) "10");
var_dump((int) null);
echo "<br>";

$check = 10;
var_dump((float) "44");
$check = (float) $check;
echo $check;
echo "<br>";

//Strings
echo "Hi!!! I'm Dharanesh";
echo "<br>";
echo "Check this file path C:\ windows";
echo "<br>";
echo "\"Check this file path C:\\ windows\"";
echo "<br>";
$name = "Dharanesh T K";
$company = "Aspire System";
$period = 3;
$description = <<<START
I am $name.
I had completed $period internship at $company.
START;
echo $description;
echo "<br>";
echo <<<End
A       A
    B
B       C
End;
echo "<br>";
$count = [<<<VALUE
A
    B
        C
VALUE,
    'D E F'
];
var_dump($count);
echo "<br>";

echo <<<"EOD"
Hi,\n
I am Dharanesh.
EOD;
echo "<br>";
//Nowdoc
$name = "Dharan";
echo <<<'EOT'
Hi,\n
I am $name.
EOT;
echo "<br>";

//Negative numeric indices
$string = 'string';
$string[-3] = 'o';
echo "Changing the character at index -3 to o gives $string.";
echo "<br>";
//String Casting
$num = 132;
var_dump(strval($num));
$num = 123.4;
var_dump(strval($num));
/* $arr=array('Apple','Orange','Graphes');
var_dump( strval($arr)); // It throws an PHP Warning while converting...*/
$bool = false;
var_dump(strval($bool));
echo "<br>";

//Array
$arr = array(
    1 => "Apple",
    2 => "Orange",
    3 => "Graphes",
);
$arr = [
    1 => "Apple",
    2 => "Orange",
    4 => "Graphes",
];
echo "<br>";
var_dump($arr);
$arr = [
    1 => "val1",
    2 => "val2",
    1.5 => "val3",
    true => "val4",
    "1" => "val5"
];
echo "<br>";
var_dump($arr);

$arr = [
    "val0",
    "val1",
    5 => "val5",
    "val6"
];
echo "<br>";
var_dump($arr);
echo "<br>";

function getArray()
{
    return array(1, 2, 3);
}
$get = getArray()[1];
var_dump($get);
echo "<br>";

unset($arr[1]);
var_dump($arr);
echo "<br>";

//Array Re-index----
$arr = [4 => 45, 5 => 33, 6 => 44];
var_dump($arr);
echo "<br>";
$arr = array_values($arr);
var_dump($arr);
echo "<br>";
//Converting to array---
$num = true;
$num1 = (int) $num;
$num2 = (array) $num1;
var_dump($num2);
echo "<br>";

class Account
{
    public $name;
    private $username;
    protected $password;
}
var_dump((array) new Account);
echo "<br>";

//Array Comparing---
$basket1 = ["blue", "red", "green"];
$basket2 = ["blue", "red", "Green"];
print_r(array_diff($basket2, $basket1));
echo "<br>";

foreach ($basket1 as &$basket) {
    $basket = strtoupper($basket);
}
unset($basket);
print_r($basket1);
echo "<br>";

//Object:
class Company
{
    function employee()
    {
        echo "I am in employee function";
    }
}
$obj = new Company;
$obj->employee();
echo "<br>";
//Array to object;
$array = array('name' => 'Dharanesh', 'age' => 21);
echo "array=>", $array["name"];
echo "<br>";
$obj = (object) $array;
echo "object=>", $obj->name;
echo "<br>";

//Callbacks
$double = function ($a) {
    return $a * 2;
};
$number = range(1, 5);
$new_num = array_map($double, $number);
print implode($new_num);
echo "<br>";
function name()
{
    echo "Simple Call";
}
call_user_func("name");

class Myclass
{
    static function name()
    {
        echo "<br>";
        echo "Calling Static Method Class";
    }
}
call_user_func(array('Myclass', 'name'));
echo "<br>";
echo "Call by object;";
$obj = new Myclass();
call_user_func(array($obj, "name"));
echo "<br>";

// Realtive class type
class Check
{
    public static $message = "welcome";
    public static function find()
    {
        echo "Self->", self::$message;
        echo "<br>";

    }
}
class Check1 extends Check
{
    public static function find1()   
    {
        echo "Parent->", parent::$message;
        echo static::class;
    }
}
$obj = new Check();
$obj::find();
$obj1 = new Check1();
$obj1::find1();
?>