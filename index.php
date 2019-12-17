<?php

$firtname = "Hồ ";
$lastname = "Khải";

$fullname = $firtname . $lastname;

echo $fullname;


var_dump($firtname);


echo gettype($fullname);

$number = 12.45;
echo (int)$number;



echo is_numeric($number);


define("PI" ,3.14);
echo PI;
echo "<br>";

$x = 2;
$y = $x+4;
echo $y;


echo "<br>";

$z= 2;
$z*=5;

echo $z;



echo "<br>";

$varilabel =0;
$resul = ($varilabel>0)?"là số dương":"là số âm";
echo $resul;

echo "<br>";
if ($varilabel >0){
    echo "số dương";
}

if($varilabel ==0){
    echo "0";
}
if ($varilabel<0){
    echo "số âm ";
}
echo "<br>";

$return = "biến var có giá trị bằng :" . $varilabel;
echo $return;

require_once ("Html/FormPhp.html");

$a=1;

for ($a ; $a<=10; $a++)
{
    echo $a*2;
}

echo "<br>";

$number = -111;
if ($number %2 ==0){
    echo "số chẵn";
}
else{
    echo "số này ko phải số chẵn";
}
$numberc=($number %2 ==0)?"số chẵn":"số lẻ";
echo $numberc;

if ($number >=0 && $number %2 ==0){
    echo "số dương";
}
if ($number >0 && $number %2 ==1){
    echo "số lẻ";
}
else{
    echo "số âm";
}


$n=1;

for ($n ; $n <=10; $n++ )
    echo $n*2-1;
?>