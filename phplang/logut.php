<?php
session_start();
require_once("admin/connection.php");
if($_SESSION['name']!='')
{
	mysql_query("delete from onlie_users where username='".$_SESSION['name']."'");
	session_unset($_SESSION['name']);
	header("location: user_login.php");
	exit();
	
	
	


}else
{
	header("location: user_login.php");
	exit();
}


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
