<?php
extract($_REQUEST);
require_once("connection.php");
if(isset($Submit))
{
	mysql_query("update personal set name='".$name."',email='".$email."',mobile='".$mobile."',question='".$question."',answer='".$answer."'");
	echo "successfully updated";
}
$q=mysql_query("select * from personal");
$a=mysql_fetch_array($q);

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

<table width="671" height="330" border="1">
  <tr>
    <td colspan="2"><div align="center" class="style1">Personal Info Update </div></td>
    </tr>
  <tr>
    <td>Name</td>
    <td><label>
      <input type="text" name="name" value="<?php echo $a['name']?>" />
    </label></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><label>
    <input type="text" name="email" value="<?php echo $a['email']?>"/>
    </label></td>
  </tr>
  <tr>
    <td>Mobile</td>
    <td><label>
    <input type="text" name="mobile" value="<?php echo $a['mobile']?>"/>
    </label></td>
  </tr>
  <tr>
    <td>Sec Question </td>
    <td><select name="question">
		<?php 
		if($a['question']=='Fav. City')
		{
		$a1='<option selected="selected">Fav. City</option>';
		}else
		{
		$a1='<option>Fav. City</option>';
		}
		if($a['question']=='Fav. Food')
		{
		$a2='<option selected="selected">Fav. Food</option>';
		}else
		{
		$a2='<option>Fav. Food</option>';
		}
		if($a['question']=='Nick Name')
		{
		$a3='<option selected="selected">Nick Name</option>';
		}else
		{
		$a3='<option>Nick Name</option>';
		}
		if($a['question']=='Fav. Color')
		{
		$a4='<option selected="selected">Fav. Color</option>';
		}else
		{
		$a4='<option>Fav. Color</option>';
		}
		
		?>
      <option>---Select Any One--</option>
      <?php echo $a1?>
      <?php echo $a2?>
      <?php echo $a3?>
      <?php echo $a4?>
    </select></td>
  </tr>
  <tr>
    <td>Answer</td>
    <td><label>
    <input type="text" name="answer" value="<?php echo $a['answer']?>"/>
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
