<?php

echo 'Liczby zostały wygenerowane!';

$plik = fopen("dane2.txt", "w+");
$numbers = null;
for($i = 0; $i < 10; $i ++){
    $randomNumber = rand(0,100);
    $numbers .= "$randomNumber \n";
}
fputs($plik,$numbers);
fclose($plik);
