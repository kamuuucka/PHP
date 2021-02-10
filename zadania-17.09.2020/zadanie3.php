<?php

$plik = fopen("dane2.txt", "r");

$wypisanie = fread($plik, filesize("dane2.txt"));
echo "$wypisanie<br/>";

$array = file("dane2.txt");

/*
foreach ($array as $key => $val) {
    echo "Wartosc[" . $key . "] = " . $val . "\n";
}
*/
$max = max($array);
echo "Biggest value: $max <br/>";
$mean = array_sum($array)/count($array);
echo "Arithmetic mean: $mean";

$plik2 = fopen("dane3.txt", "w+");
fputs($plik2,"Biggest value: $max"."Arithmetic mean: $mean");
fclose($plik2);