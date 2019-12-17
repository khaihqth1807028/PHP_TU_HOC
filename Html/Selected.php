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

<div class="input-group mb-3">
    <div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect01">Options</label>
    </div>

        <?php
        $group=array();
        $group["PHP"]="PHP";
        $group["LARAVEL"]="LARAVEL";
        $group["C#"]="C#";
        $html="";
        $html.="  <select class=\"custom-select\" name='group' id=\"inputGroupSelect01\">";
        foreach ($group as $value){

          $html .="  <option> $value</option>";

        }
        $html .="    </select>";
        echo $html;

        ?>




</div>


</body>
</html>