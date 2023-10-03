<?php
$a = (true ? 0 : true) ? 1 : 2;
echo $a;
echo "<br>";
echo 5 ** 2, "<br>";

$Greeting = "Good";
$Greeting .= " Morning";
echo "Greeting Message => $Greeting <br>";

$format = '(%1$2d = %1$05b) = (%2$2d = %2$04b)'
    . ' %3$s (%4$2d = %4$04b)' . "\n";
$Input1 = array(0, 1, 2, 3);
$Input2 = 4;
echo "BitWise AND <br>";
foreach ($Input1 as $value) {
    $result = $value & $Input2;
    printf($format, $result, $value, '&', $Input2);
    echo "<br><BR>";
}
echo "BitWise OR <br>";
foreach ($Input1 as $value) {
    $result = $value | $Input2;
    printf($format, $result, $value, '|', $Input2);
    echo "<br><BR>";
}
echo "BitWise XOR <br>";
foreach ($Input1 as $value) {
    $result = $value ^  $Input2;
    printf($format, $result, $value, '^', $Input2);
    echo "<br><BR>";
}

echo "Left Shif <br>";
$format1 = '(%1$2d = %1$04b) =>  (%2$2d = %2$04b)'
    . ' %3$s' . "\n";
foreach ($Input1 as $input) {
$result=$input<< 2;
printf($format1,$result,$input,'<<2');
echo "<br>";
}
$a = 5;
$b = 10;

$result = $a <=> $b;

if ($result === -1) {
    echo "$a is less than $b <br>";
} elseif ($result === 0) {
    echo "$a is equal to $b  <br>";
} elseif ($result === 1) {
    echo "$a is greater than $b <br>";
}
echo [1,2]<=>[1,2,3];
echo "<br>";
//Null Coalescing Operator 
$val=null;
$default=34;
$revised=$val ?? $default;
echo $revised;
echo "<br>";
//Error Control operator
function fileopen(){
    $file=@fopen('Sample.php','r');
    return $file;
}
$fileCheck=fileopen();
if($fileCheck==false){
    echo "File Can't be open";
}
else {
    echo "File Opened Successfully";
}
echo "<br>";

?>