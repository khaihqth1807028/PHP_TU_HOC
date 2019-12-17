<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="post">
    <label>nhap so vao day</label>
    <input type="number" name="number" value="<?php echo $number  ?>">
    <button type="submit">Submit</button>
</form>


<?php
$number ="";
if (isset($_POST["number"])
){$number = $_POST["number"];
    if ($number%2==0){
        echo "so chan";
    }
    else{
        echo "so le";
    }}

function Sochansole($content="Hello PHP"){
$resul=$content;
 return $resul;
}
$a=Sochansole();
echo $a;

?>

<?php

function pow2(&$n1,&$n2){
    $n1 = $n1 * $n1;
    $n2 = $n2 * $n2;
    $resul = $n1 + $n2;
    return $resul;
}
$n1 = 2;
$n2 = 4;
$numberone=pow2($n1,$n2);
echo $numberone ."</br>";
echo $n1 ."</br>";
echo $n2 ."</br>";

?>


</body>
</html>
