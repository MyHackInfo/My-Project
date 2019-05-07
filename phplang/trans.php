<?php
$a=$_REQUEST['amt'];
$amt=10000;
if(isset($_REQUEST['Submit']))
{
if($a<=$amt)
{
	$b=$amt-$a;
	$op= "your remaining balance is $b";
}else
{
	$err= "insufficent fund";
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
	color: #003300;
	font-weight: bold;
}
.style2 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<form action="" method="post">
  <table width="680" height="232" border="1">
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><div align="center"><span class="style1"><?php echo $op?></span>&nbsp; <span class="style2"><?php echo $err?> </span></div></td>
    </tr>
    <tr>
      <td>Amount</td>
      <td><label>
        <input type="text" name="amt" />
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
