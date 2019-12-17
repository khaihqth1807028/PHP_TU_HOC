<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ATM</title>
    <style>
        .content {
            width: 700px;
            height: 400px;
            border: 2px solid #9A9A9A;
            background: #E6E6E6;
            margin: 20px auto;
        }

        .content .info {
            height: 150px;
            padding: 0px;
        }
        .content .info img {
            margin: 10px;
            float: left;
            border-radius: 5px;
        }

        .content .info h1 {
            color: red;
            margin: 0px;
            padding-left: 275px;
        }

        .content .info p {
            font-size: 18px;
        }

        .content .info input {
            height: 30px;
        }

        .content .info input[type='text'] {
            width: 300px;
            font-size: 18px;
        }

        .content .info input[type='submit'] {
            width: 100px;
            font-size: 18px;
            border-radius: 5px;
            height: 34px;
        }

        .clr {
            clear:both;
        }

        .result div p {
            display: inline-table;
            font-size: 18px;
            font-weight: bold;
            margin-top: 0px;
            margin-bottom: 5px;
        }
        .result div p.col1{
            width: 200px;
            text-align: left;
        }
        .result div p.col2{
            width: 200px;
            text-align: center;
        }
        .result div p.col3{
            width: 200px;
            text-align: right;
        }
        .result {
            padding: 10px;
        }

        .result p.total {
            text-align: right;
            font-size: 20px;
            font-weight: bold;
            color: #3879D9;
        }
    </style>
</head>
<body>
<div class="content">
    <div class="info">
        <img src="images/atm.jpg" alt="atm">
        <h1>Mô phỏng máy ATM</h1>
        <?php
        $money = $_POST["money"];
        ?>
        <form action="#" method="post">
            <p>Vui lòng nhập vào số tiền mà quý khách muốn thực hiện giao dịch</p>
            <input type="number" name="money" value="<?php echo number_format($money)?>">
            <input type="submit" value="Rút tiền">
        </form>
    </div>
    <div class="clr"></div>

    <div class="result">
        <div class="normal">
            <p class="col1">Mệnh giá</p>
            <p class="col2">Số lượng</p>
            <p class="col3">Thành tiền</p>

        </div>
        <div class="clr"></div>
<?php

$FIVE=500000;

$five=0;
$two=0;
if (is_numeric($money) && $money >=0){
    while ($money >= $FIVE ){
        $five+=1;
       $money =$money - $five*$FIVE;
    }
//    while ( $money >= TWO ){
//         $two+=1;
//        $money = $money - $two*TWO;
//
}

?>
        <?php
        if ($five>0){
            echo "  <div class=\"normal\">
            <p class=\"col1\">".$FIVE."</p>
            <p class=\"col2\">$five</p>
            <p class=\"col3\">".$FIVE*$five."</p>
        </div>   ";
        }
        ?>
        <hr>
        <p class="total"><?php  echo $money ?></p>
    </div><!-- .result -->
</div>
</body>
</html>