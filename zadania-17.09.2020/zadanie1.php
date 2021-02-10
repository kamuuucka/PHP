<?php

	$l1=$_POST["liczba1"];
	$l2=$_POST["liczba2"];
	echo 'Pierwsza liczba='.$l1.'<br/>';
	echo 'Druga liczba='.$l2.'<br/>';
	echo '1: '.$l1.', 2: '.$l2.'<br/>';
	echo 'Wynik dodawania=';
	$wynik = ($l1+$l2);
	echo $wynik;

	$plik = fopen("dane.txt", "w+");
	fputs($plik,"$l1\n$l2\n$l1 $l2\n$wynik");
	fclose($plik);
	
	
?>