<?php
$button = $_POST['button'];

$kon=mysqli_connect("localhost","root","","2020_10");
mysqli_query($kon,"SET names UTF8");

$kw ="";

switch ($button){
    case 1:
        $kw = "SELECT * FROM osoby";
        printTable($kon, $kw);
        break;
    case 2:
        $kw = "SELECT `miejsca`.`miejsc_urodzenia` 
                FROM `miejsca` 
                JOIN `osoby` ON `miejsca`.`id_miejsce_urodzenia` = `osoby`.`id_miejsce_urodzenia` 
                GROUP BY `miejsc_urodzenia`";
        printTable($kon, $kw);
        break;
    case 3:
        $kw = "SELECT `miejsca`.`miejsc_urodzenia`
                FROM `miejsca`
                WHERE `miejsca`.`id_miejsce_urodzenia` NOT IN 
                (SELECT `osoby`.`id_miejsce_urodzenia` FROM `osoby`)";
        printTable($kon, $kw);
        break;
    case 4:
        $kw = "SELECT `osoby`.`imie`, `osoby`.`nazwisko`, `osoby`.`data_urodzenia`
                FROM `osoby`
                WHERE  `osoby`.`data_urodzenia` > '2000-01-01'";
        printTable($kon, $kw);
        break;
    case 5:
        $kw = "SELECT `osoby`.`imie`
                FROM `osoby`
                WHERE `osoby`.`imie` LIKE 'A%'";
        printTable($kon, $kw);
        break;
    case 6:
        $kw = "INSERT INTO `osoby`(`pesel`, `imie`, `nazwisko`, `data_urodzenia`, `id_miejsce_urodzenia`) VALUES ('$_POST[pesel]','$_POST[name]','$_POST[surname]','$_POST[date]','$_POST[city]')";
        mysqli_query($kon,$kw);
        break;
}

mysqli_close($kon);

function printTable($kon, $kw){
    $result = mysqli_query($kon,$kw);

    echo "<table border='1'>";
    while($p = mysqli_fetch_row($result)){
        echo "<tr>";
        foreach ($p as $value){
            echo "<td>".$value."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}