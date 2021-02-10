<?php
$kon=mysqli_connect("localhost","root","","dbnowa");
mysqli_query($kon,"SET names UTF8");

$kw1 = "CREATE USER 'wdbnowa'@'localhost' IDENTIFIED BY 'wdbnowa123';";
$kw2 = "GRANT ALL ON dbnowa.* TO 'wdbnowa'@'localhost'";


mysqli_query($kon,$kw1);
mysqli_query($kon, $kw2);

mysqli_close($kon);

echo "Użytkownik został utworzony.";