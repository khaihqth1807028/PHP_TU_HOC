<?php
function checkInput($value, $type){
    switch ($type){
        case 'username':
            $parten='#[a-z_]$#';
        break;
        case 'password':
            $parten='#[a-z_]$#';
            break;
    }
    $flag =preg_match($parten ,$value);
    return $flag;
}
echo checkInput('khaihieu','username');