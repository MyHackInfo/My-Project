<?php
$n=$_REQUEST['name'];
$h=$_REQUEST['hindi'];
$m=$_REQUEST['maths'];
$e=$_REQUEST['english'];
$t=$h+$m+$e;
$p=$t*100/300;
if($h>=33)
{
	$hr= "Pass";
}else
{
	$hr1="Fail";
}
if($e>=33)
{
	$er= "Pass";
}else
{
	$er1="Fail";
}
if($m>=33)
{
	$mr= "Pass";
}else
{
	$mr1="Fail";
}
if($h>33 && $e>33 && $m>33)
{
$or= "Pass";
}else
{
$or1="Fail";
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
	color: #00FF00;
	font-weight: bold;
}
.style2 {color: #FF0000}
.style3 {color: #00FF00}
-->
</style>
</head>

<body>
<table width="838" height="406" border="1" background="images/imageasdasds.jpg">
  <tr>
    <td colspan="2"><img src="images/Mono_20Create1_copy.png" width="263" height="178" />&nbsp;</td>
    <td colspan="2"><p>Name:<?php echo $n?></p>
    <p>Class:VA</p></td>
  </tr>
  <tr>
    <td width="172">Subject</td>
    <td width="183">Total Marks </td>
    <td width="215">Obt. Marks </td>
    <td width="240">Result</td>
  </tr>
  <tr>
    <td>Hindi</td>
    <td>100</td>
    <td><?php echo $h?>&nbsp;</td>
    <td><span class="style1"><?php echo $hr?> <span class="style2"><?php echo $hr1?></span> </span></td>
  </tr>
  <tr>
    <td>English</td>
    <td>100</td>
    <td><?php echo $e?>&nbsp;</td>
    <td><span class="style3"><?php echo $er?><span class="style2"> <?php echo $er1?> </span></span></td>
  </tr>
  <tr>
    <td>Maths</td>
    <td>100</td>
    <td><?php echo $m?>&nbsp;</td>
    <td><span class="style1"><?php echo $mr?> <span class="style2"><?php echo $mr1?></span> </span></td>
  </tr>
  <tr>
    <td>Total</td>
    <td>300</td>
    <td><?php echo $t?>&nbsp;</td>
    <td>%=<?php echo round($p,2)?></td>
  </tr>
  <tr>
    <td colspan="3"><div align="right">Over All Result </div></td>
    <td><span class="style2"><?php echo $or1?> <span class="style3"><?php echo $or?></span> </span></td>
  </tr>
</table>

</body>
</html>
