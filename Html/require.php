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
    <label>Nhập số vào đây</label>
<input type="number" name="number">
    <button type="submit">Submit</button>
<div style="border: red;solid;1px ; width: 100px">
    <?php
    $so= 0 ;
    if (isset($_POST["number"])){
$so=$_POST["number"];
        function number($so){
            $sum = 0;
            while ($so >0){
                $digit =$so %10 ;
                $sum +=$digit;
                $so = ($so-$digit)/10;
            }
            return $sum;
        }
        $resul = number($so);
        echo $resul;
    }

    ?>

</div>
</form>
</body>
</html>

