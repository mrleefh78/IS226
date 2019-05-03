<?php
$mysql_hostname = "brightcare-assist.com";
$mysql_user = "brigh_madjuslee";
$mysql_password = "@dm1nk3y";
$mysql_database = "brightc1_medicount";

$bd = @mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Error DB");
//$connection = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) or die("Error DB");
mysql_select_db ($mysql_database, $bd) or die ("DB not found");
?>