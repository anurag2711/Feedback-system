<?php
$localhost='localhost';
$username='root';
$password='';
$db='mydb';
mysql_connect("$localhost","$username","$password");
mysql_select_db($db);
echo"connected";

?>