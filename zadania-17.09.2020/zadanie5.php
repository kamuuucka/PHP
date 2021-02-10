<?php

$array = file("dane4.txt");
foreach ($array as $key => $val) {
    //echo "Wartosc[" . $key . "] = " . $val . "\n";
    $znaki = strlen($val) - 1;
    echo "$znaki <br/>";
}

