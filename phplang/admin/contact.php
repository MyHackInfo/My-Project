<?php
require_once("connection.php"); 
session_start();
if($_SESSION['n']=="")
{
	header("location: index.php");
	exit();
}
$q=mysql_query("select * from personal");
$c=mysql_num_rows($q);
if($c<1)
{
	header("location: personal_info.php");
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
    <td width="647">RamBagh Jaipur
	<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d56962.711478296966!2d75.7707424137414!3d26.834561689153205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sroad+ahead+technology+jaipur!5e0!3m2!1sen!2sin!4v1556514250053!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	&nbsp;</td>
  </tr>
  <?php include("footer.php")?>
</table>

</body>
</html>
