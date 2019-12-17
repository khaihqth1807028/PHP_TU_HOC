<?php

$name= $_POST["name"]."<br>";
$password = $_POST["password"];

echo $name;
echo $password;

$resul =($name == "admin")? "success" : "đăng nhập fail" ;
echo $resul;
?>