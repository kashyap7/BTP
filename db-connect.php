<?php
$mysql_hostname = "localhost";
$mysql_user = "root";/* please replace username with your username */
$mysql_password = "iiit123";/* please replace password with your password*/
$mysql_database = "screenreaders";
$conn = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) 
or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $conn) or die("Opps some thing went wrong");
?>
