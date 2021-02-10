<?php
$kon=mysqli_connect("localhost","root","","2020_10");
mysqli_query($kon,"SET names UTF8");
$kw1="SELECT * FROM osoby";
$wynik1=mysqli_query($kon,$kw1);
echo "<table border='1'>";
while($p1=mysqli_fetch_row($wynik1))
{
	echo "<tr><td>".$p1[0]."</td><td>".$p1[1]."</td><td>".$p1[2]."</td><td>".$p1[3]."</td><td>".$p1[4]."</td></tr>";
	
}
echo "</table>";

mysqli_close($kon);




?>

