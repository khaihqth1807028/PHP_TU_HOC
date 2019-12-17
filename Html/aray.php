<?php

$couse= array();
$couse[]="PHP";
$couse[]="Love PHP";
$couse[2]="Hello";
$length  = count($couse);
echo $length;
if ($length >0){
    echo "có dữ liệu đó".$couse[1];
}
else{
    echo "ko có j";
}
echo "<pre>";
print_r($couse);
echo "</pre>";

for($i=0; $i< count($couse); $i++){
echo $couse[$i]."<br>";
}


foreach ($couse as $item =>$value){
    echo $item . $value . "<br>";
}


$students = array(

    "SV001"=> array(
        "name"=>"John",
        "sex"=>1,
    ),

    "SV002"=> array(
        "name"=>"Khải",
        "sex"=>1,
    ),
    "SV003"=> array(
        "name"=>"Hồ",
        "sex"=>1,
    )
);
echo $students["SV002"]["sex"]."<br>";
echo $students["SV002"]["name"]."<br>";
foreach ($students as $item =>$value){
$name= $value["name"];
$sex=$value["sex"];
echo "<br>";

if ($sex==1){
$sex="Nam";
}else{
   $sex= "Nữ";
}
echo "Name :".$name."-----"."Sex :".$sex;
}


















?>