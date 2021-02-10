<?php

$kon=mysqli_connect("localhost","root","","2020_10");
mysqli_query($kon,"SET names UTF8");

$kw ="INSERT INTO `osoby`(`pesel`, `imie`, `nazwisko`, `data_urodzenia`, `id_miejsce_urodzenia`) VALUES ('90010112345','Ela','Marna','2018-10-11','3'),
('92010112345','Olek','Ranny','2016-09-09','7'),('01907812345', 'Dawid','5G','2001-02-10','3'),('01678712345','Kacper','Andruszko','2010-08-12','5'), ('01349212345','Kama','Matuszak','2020-01-01','1')";

mysqli_query($kon,$kw);
mysqli_close($kon);
