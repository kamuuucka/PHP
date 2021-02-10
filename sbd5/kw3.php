<?php
$kon=mysqli_connect("localhost","root","","2020_10");
mysqli_query($kon,"SET names UTF8");

$kw = "CREATE TABLE `osoby` (
  `pesel` varchar(11) NOT NULL,
  `imie` varchar(20) NOT NULL,
  `nazwisko` varchar(20) NOT NULL,
  `data_urodzenia` date NOT NULL,
  `id_miejsce_urodzenia` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

mysqli_query($kon,$kw);
mysqli_close($kon);