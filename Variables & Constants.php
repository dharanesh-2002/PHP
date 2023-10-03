<?php

$name = "Dharan";
$f_name =& $name;
echo "Print first Name =>", $f_name, "<br>";

function test()
{
    return 233;
}
$val = test();
echo $val, "<br>";

//Difference between $GLOBALS and global.
function display()
{
    echo $GLOBALS['name'],"<br>";
    echo "Function Name: ",__FUNCTION__,"<br>";
}
display();
$a = 10;
$b = 110;
function sum()
{
    global $a, $b;
    return $a + $b;
}
echo "<br>", sum();
echo "<br>";
//Static
function increment()
{
    static $a = 1;
    echo $a, " ";
    $a++;
}
for ($i = 1; $i < 10; $i++) {
    increment();
}
echo "<br>^^^LOOP END^^^<br>";

//Variable Variables
$x = "Hello";
$$x = "World";
echo "$x {$$x}";
echo "<br>";
echo "$x $Hello"; //Both are Same
echo "<br>";

//Constant
define("AUTHOR", "DHARANESH");
echo AUTHOR, "- Author can't be change bcz it is constant <br>";

//2.Const Keyword:
const BOOK = array(
    "Author" => "Dharan",
"Published"=>2020,
"Republished"=>2023);
echo BOOK["Published"],"<br>";
define("Animals",array('dog','cat','bird'));
var_dump(Animals);
echo "<br>";
echo "Current line ",__LINE__,"<br>";
echo "File Path ",__FILE__,"<br>";
echo "Directory ",__DIR__,"<br>";
class Verify{
    function Display(){
        echo __METHOD__," Method in ",__CLASS__," Class";
        echo "<br>";
    }
}
$obj= new Verify();
$obj->Display();
?>
<html>
    <body>
        <form method="post" action="Variables & Constants.php">
            <label for="First">Author</label>
            <input type="text" name="Author" id="Author">
            <input type="submit">
        </form>
    </body>
</html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user input from the form
    $userInput = $_POST["Author"];

    // Process the user input or perform any desired actions
    echo "You entered: " . $userInput;
}
?>