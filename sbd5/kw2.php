<?php
$kon=mysqli_connect("localhost","root","","2020_10");
mysqli_query($kon,"SET names UTF8");

$kw2= "CREATE USER 'admin_10'@'%' IDENTIFIED VIA mysql_native_password USING '***';GRANT ALL PRIVILEGES ON *.* TO 'admin_10'@'%' REQUIRE NONE WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;GRANT ALL PRIVILEGES ON `2020_10`.* TO 'admin_10'@'%';";

mysqli_query($kon,$kw2);

mysqli_close($kon);
