<?php
extract($_REQUEST);
require_once("connection.php");
$q=mysql_query("select * from login");
$a=mysql_fetch_array($q);
if(isset($Submit))
{
	if(md5($old)==$a['password'])
	{
		if($confirm==$new)
		{
			mysql_query("update login set password='".md5($new)."'");
			echo "successfully updated";	
		}else
		{
			echo "confirm and new password not matched";
		}
	}else
	{
		echo "old password is wrong";
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

  <table width="562" height="227" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center" class="style1">Change Password </div></td>
    </tr>
    <tr>
      <td>Old Password </td>
      <td><label>
        <input type="password" name="old" />
      </label></td>
    </tr>
    <tr>
      <td>New Password </td>
      <td><label>
      <input type="password" name="new" />
      </label></td>
    </tr>
    <tr>
      <td>Confirm Password </td>
      <td><label>
      <input type="password" name="confirm" />
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
