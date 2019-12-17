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


$height ="";
$weight ="";
$submit="";
$image="";
if (isset($_POST["height"])&& isset($_POST["weight"])){
    $height= $_POST["height"];
    $weight=$_POST["weight"];
    $submit=($weight*100)/($height*$height);
}
?>

<form method="post" action="" name="BMI-form">
    <h1>Bảng BMI</h1>
    <label>cân nặng(kilogam)</label>
    <input type="number" name="weight" value="<?php echo $weight?>">
    <label>chiều cao (centimet)</label>
    <input type="number" name="height" value="<?php echo $height ?>">
    <button type="submit" >Kết quả</button>
</form>
<div><h1><?php
        if ($submit == null){
            echo "hãy nhập dữ liệu";
        }
        if ($submit < 0.185 && $submit>0 ) {
            echo "bạn thấp gầy quá ";
        }
        if ($submit >= 0.185 && $submit < 0.249) {
            echo "bạn bình thường vc";
        }
        if ($submit >=0.249 && $submit < 0.299) {
            echo "bạn thừa cân rồi";
        }
        if (0.349 > $submit && $submit > 0.30) {
            echo "bạn tiền béo phì rồi";
        }
        if ($submit >= 0.35 && $submit < 0.399) {
            echo "bạn béo phì cấp độ II rồi";
        }
        if ($submit >= 0.40) {
            echo "bạn béo phì cấp độ III rồi";
        }    ?>
    </h1></div>

<?php
switch ($submit){
    case ($submit <0):break;
    case ($submit < 0.185 && $submit >0):
        $image= "lil";
        break;
    case ($submit >= 0.185 && $submit < 0.249):
            $image= "liltun";
            break;
    case ($submit >=0.249 && $submit < 0.299):
        $image= "lilwayne";
        break;
    case (0.349 > $submit && $submit > 0.30):
        $image= "rap";
        break;
    case ($submit >= 0.35 && $submit < 0.399):
        $image= "lilwayne";
        break;

    case ($submit > 0.40):
                $image="rap";
                break;
}
?>
<div>
    <img style="border-radius: 20%;width:40%;" src="../img/<?php echo $image; ?>.jpg" alt="<?php echo $image?>">
</div>
</body>
</html>