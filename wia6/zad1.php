<?php
$file = fopen("imiona.txt", "r");
$fileRead = fread($file, filesize("imiona.txt"));
$lines = explode("\n", $fileRead);
$fileToWrite = fopen("imiona_czyste.txt", "w");

$linesString = "";

foreach ($lines as $item){
    $item = preg_replace('/\PL/u', '', $item);
    echo $item.'<br>';
    fwrite($fileToWrite, $item."\n");
}

fclose($file);
fclose($fileToWrite);