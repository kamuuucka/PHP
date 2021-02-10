<?php
$button = (int)$_POST['button'];

function nwd($num1,$num2){
    if ($num1 % $num2 == 0) return $num2;
    else return nwd($num2, $num1 % $num2);
}

function nww($num1,$num2){
    return (($num1*$num2) / nwd($num1,$num2));
}


$num1 = (int)$_POST['num1'];
$num2 = (int)$_POST['num2'];

switch($button){
    case 1:
        echo nwd($num1,$num2);
        break;
    case 2:
        echo nww($num1, $num2);
        break;
    default:
        break;
}


