<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="790" height="122" border="1">
  <tr>
    <td width="108">Sr, No </td>
    <td width="282">Tab Name </td>
    <td width="378">Edit</td>
  </tr>
  <?php
  require_once("connection.php");
  $q=mysql_query("select * from pages");
  $n=1;
  while($a=mysql_fetch_array($q))
  {
  ?>
  <tr>
    <td><?php echo $n?>&nbsp;</td>
    <td><?php echo $a['tab_name']?>&nbsp;</td>
    <td><a href="edit.php?id=<?php echo $a['id']?>">EDIT</a>&nbsp;</td>
  </tr>
  <?php
  $n++;
  }
  ?>
</table>

</body>
</html>
