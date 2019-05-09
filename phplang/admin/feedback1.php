<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="887" height="136" border="1">
  <tr>
    <td>Sr No.&nbsp;</td>
    <td>Name&nbsp;</td>
    <td>Email&nbsp;</td>
    <td>Mobile&nbsp;</td>
    <td>Feedback&nbsp;</td>
  </tr>
  <?php
  require_once("connection.php");
  $q=mysql_query("select * from feedback");
  	$n=1;
	while($a=mysql_fetch_array($q))
	{
	
	
  ?>
  <tr>
    <td><?php echo $n?>&nbsp;</td>
    <td><?php echo $a['name']?>&nbsp;</td>
    <td><?php echo $a['email']?>&nbsp;</td>
    <td><?php echo $a['mobile']?>&nbsp;</td>
    <td><?php echo $a['feedback']?>&nbsp;</td>
  </tr>
  <?php
  $n++;
  }
  ?>
</table>
</body>
</html>
