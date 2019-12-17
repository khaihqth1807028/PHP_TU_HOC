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
<?php

$n1 ="";
$n2 ="";
$cal ="";
$resul="";


if (isset($_POST["number1"])&&isset($_POST["number2"])&&isset($_POST["caculator"])){
    $n1=$_POST["number1"];
    $cal=$_POST["caculator"];
    $n2=$_POST["number2"];

    $validate ="hãy chọn phép tính khác";
    switch ($cal){
        case "+":
            $resul=$n1 + $n2;
            break;
        case "-":
            $resul=$n1 - $n2;
            break;
        case "/":
            $resul=$n1/$n2;
            break;
        default :
            break;
    }
}
?>

<div class="title">Mô Phỏng </div>
<form action="" method="post" name="main-form">
    <div>
        <h1>Số thứ nhất</h1> <input type="number" name="number1" value="<?php echo $n1?>">
    </div>
    <div>
        <h1>phép toán</h1>
        <input type="text" name="caculator" value="<?php echo $cal?>">
    </div>
    <b style="color: red">
        <?php
        if ($cal != "-" && $cal !="+" && $cal !="/" && $cal!=""){
            echo $validate ;
        }
        ?>

    </b>

    </div>
    <div>
        <h1>Số thứ 2</h1> <input type="number" name="number2"value="<?php echo $n2?>">
    </div>
    <div>
        <button type="submit" name="submit">Submit</button>
    </div>
    <?php
    if ($cal !="+" && $cal != "-" && $cal !="" && $cal!="/"){
        echo "ko thể hiển thị đc kết quả";
    }
    if ($cal =="/" && $n2 ==0){
        echo "ko thể thực hiện đc";
    }
    else{
   echo "kết quả của" . $n1.$cal.$n2 ."=". $resul;
    }
    ?>

</form>


</body>
</html>