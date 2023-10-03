<?php
//Grade Based
function Grade($Score, $i)
{
    if ($Score > 100) {
        echo "Person $i entered an Wrong Score";
    } elseif ($Score >= 90) {
        echo "Person $i Scored A Grade <br>";
    } elseif ($Score < 90 && $Score >= 80) {
        echo "Person $i Scored B Grade <br>";
    } elseif ($Score < 80 && $Score >= 70) {
        echo "Person $i Scored C Grade <br>";
    } elseif ($Score < 70 && $Score >= 60) {
        echo "Person $i Scored D Grade <br>";
    } elseif ($Score < 60 && $Score >= 50) {
        echo "Person $i Scored E Grade <br>";
    } else {
        echo "Person $i Scored F Grade <br>";
    }

}
echo "<pre> ForEach Loop </pre>";
$Scores = array(98, 68, 55, 78, 40);
static $i;
$i = 0;
foreach ($Scores as $Score) {
    $a = $Score;
    Grade($a, ++$i);
}
echo "<pre> While Loop</pre>";
$Scores2 = array(90, 50, 20, 74, 66, 89, 102);
$len = count($Scores2);
global $n;
$n = 0;
while ($n < $len) {
    Grade($Scores2[$n], ++$i);
    $n++;
}
echo "<br>";
//Difference between For & Foreach:
$a = array(1, 2, 3, 4, 5, 6);
$b = array("Name" => "Dharanesh", "Roll No" => "191EE118", "Dept" => "EEE");
$len = count($a);
for ($i = 0; $i < $len; $i++) {
    echo $a[$i], "<br>";
}
foreach ($b as $key => $details) {
    echo "{$key} : {$details} <br>";
}
//Multidimentional Array
$arr = array();
$arr[0][0] = 1;
$arr[0][1] = 2;
$arr[1][0] = 3;
$arr[1][1] = 4;
function loop($val)
{
    foreach ($val as $in) {
        foreach ($in as $in1) {
            echo $in1;
        }
    }
}
loop($arr);
echo "<br>";
$a = [
    [1,2],
    [2,3]
];
loop($a);
echo "<br>";
foreach ($a as list($in1,$in2)){
    echo "A:$in1 B:$in2 <br>";
}
$i = 0;
switch ($i){
    case 0;
    echo "Found 0";
    break;
    
}
echo "<br>";
//Match Example:
$val=2;
$result= match($val){
    1=>"Found 1",
    2=>"Found 2",
    3=> "Found 3",
    default=>"Not Found",
};
echo $result,"<br>";
$age = 55;
$agecheck =  match(true){
    $age > 18 =>'Eligible For Voting',
    $age === 18=>'Eligible for Voting',
    default=>'Not Eligible',
};
echo $agecheck;
// echo "<br> Example for Include<br>";
// include 'types.php';
// echo "<br>";
// $values1= getArray();
// var_dump($values1);
    ?>