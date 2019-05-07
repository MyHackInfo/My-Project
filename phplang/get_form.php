<?php
$n=$_GET['name'];

echo $n;

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
	font-size: 36px;
}
-->
</style>
</head>

<body>
<form action="" method="get">
<table width="634" height="215" border="0" align="center">
  <tr>
    <td colspan="2"><div align="center" class="style1">Login Page </div></td>
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
      <input type="password" name="password" />
    </label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><label>
      <input type="submit" name="Submit" value="Submit" />
    </label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>


</form>
</body>
</html>
