<?php

$data=file("require.txt") or die("ko thể đọc file");

print_r($data);
array_shift($data);
echo "<br>";

foreach ($data as $key => $value){

    $tmx= explode("|",$value);
echo "<pre>";
    print_r($tmx);
    echo "</pre>";
}



$string = "Hồ Quang Khải";
$length= mb_strlen($string);

var_dump($string);
echo $length;