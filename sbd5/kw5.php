<?php

$kon = mysqli_connect("localhost", "root", "", "2020_10");
mysqli_query($kon, "SET names UTF8");

$kw1 = "CREATE TABLE `2020_10`.`miejsca` ( `id_miejsce_urodzenia` INT(10) NOT NULL , `miejsc_urodzenia` VARCHAR(20) NOT NULL , PRIMARY KEY (`id_miejsce_urodzenia`)) ENGINE = InnoDB;";

mysqli_query($kon, $kw1);

$kw2 = "INSERT INTO `miejsca` (`id_miejsce_urodzenia`, `miejsc_urodzenia`) VALUES ('1', 'Szczecin'), ('2', 'Warszawa'), ('3', 'Kraków'), ('4', 'Międzyzdroje'), ('5', 'Gorzów'), ('6', 'Krzyż'), ('7', 'Gościm'), ('8', 'Księżyc'), ('9', 'Mars'), ('10', 'Wenus');";

mysqli_query($kon, $kw2);
mysqli_close($kon);
