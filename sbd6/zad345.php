<?php
//ZADANIE 3
$kon=mysqli_connect("localhost","wdbnowa","wdbnowa123","dbnowa");
mysqli_query($kon,"SET names UTF8");

//ZADANIE 4
$kw1 = "CREATE TABLE `dbnowa`.`dane` ( `pesel` VARCHAR(11) NOT NULL , `imie` VARCHAR(20) , `nazwisko` VARCHAR(50) , PRIMARY KEY (`pesel`)) ENGINE = InnoDB;";
mysqli_query($kon, $kw1);

//ZADANIE 5
$kw2 = "INSERT INTO `dane`(`pesel`, `imie`, `nazwisko`) VALUES ('89030312345','Andrzej','Biały'),
('72102176543','Małgorzata','Wiśniewska'),('02321204567', 'Błażej','Prążkowski')";
mysqli_query($kon, $kw2);

mysqli_close($kon);

echo "Połączono z bazą danych. <br> Utworzono tabelę dbnowa. <br> Dane wprowadzone do tabeli.";