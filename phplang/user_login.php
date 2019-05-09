<?php
session_start();
require_once("admin/connection.php");
extract($_REQUEST);
$q=mysql_query("select * from multi_user where username='".$name."' and password='".$password."'");
$c=mysql_num_rows($q);

if(isset($Submit))
{
	if($c>0)
	{
		$_SESSION['name']=$name;
		$s=session_id();
		mysql_query("insert into onlie_users set username='".$name."',session_id='".$s."'");
		header("location: user_inner.php");
		exit();
	}else
	{
		echo "invalid username/password";
	}
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #0000FF;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<form action="" method="post">
  <table width="542" height="225" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center" class="style1">User Login </div></td>
    </tr>
    <tr>
      <td>User Name </td>
      <td><label>
        <input type="text" name="name" />
      </label></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label>
      <input type="text" name="password" />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="Submit" value="Submit" />
      </label></td>
    </tr>
  </table>

</form>
</body>
</html>
