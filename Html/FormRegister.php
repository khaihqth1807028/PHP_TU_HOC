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
require_once "../funtion/funtionRegister.php";


if (!empty($_POST)){
    $erorr= array();

    $username = $_POST["username"];
    $password = $_POST["password"];
    if (checkInput($username ,'username')==false){
        $erorr['username'] = "viết thường thôi";
        $username=null;

    }
    if (checkInput($username,'username')==true){
        $erorr['username']=null;
    }
    if (checkInput($password ,'password')==false){
        $erorr['password']= "viết thường thôi";
        $password=null;
    }
    if (checkInput($password,'password')==true){
        $erorr['password']=null;

    }
}
else{
    $erorr=null;
    $username=null;
    $password=null;
}
echo $username . $password
?>

<form action="#" method="post">
    <div>
        <p>
            UserName
        </p>
        <input type="text" name="username">
        <p style="color: red"><?php echo $erorr['username']; ?></p>
    </div>
    <div>
        <p>
            PassWord
        </p>
        <input type="password" name="password">
        <p style="color: red"><?php echo $erorr['password']; ?></p>
    </div>
    <div>
        <button type="submit">Sumbmit</button>
    </div>
</form>
</body>
</html>