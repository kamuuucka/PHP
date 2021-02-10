<?php

$oneLine = "Warszawa, Berlin, Praga, Londyn, Paryż\n";
$fewLines = "Warszawa\nBerlin\nPraga\nLondyn\nParyż";

echo "Stolice zostały wypisane!";

$plik = fopen("dane4.txt","w+");
fputs($plik,$oneLine.$fewLines);
fclose($plik);