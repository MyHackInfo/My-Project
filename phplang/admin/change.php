<?php 
session_start();
if($_SESSION['n']=="")
{
	header("location: index.php");
	exit();
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {color: #355470}
.style2 {
	color: #FF0000;
	font-size: 16px;
	font-weight: bold;
}
.style3 {font-size: 18px}
-->
</style>
</head>

<body>
<table width="849" height="546" border="1">
  <?php include("header.php")?>
  <tr>
    <?php include("left.php")?>
    <td width="647"><marquee>This is Change Password Page</marquee> </td>
  </tr>
  <?php include("footer.php")?>
</table>

</body>
</html>