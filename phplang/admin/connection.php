<?php
$hostname="localhost";
$dbname="phplang";
$username="root";
$password="";
mysql_connect($hostname,$username,$password) or die("server not found");
mysql_select_db($dbname) or die("database not found");
//$conn=mysqli_connect($hostname,$username,$password,$dbname);

?>