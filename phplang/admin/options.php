<?php
require_once("connection.php");
extract($_REQUEST);
$uc1=array("A","D","F","G","H","J","Y","T","R");
$uc2=array("V","B","M","N","H","Q","A","X","T");
$n1=rand(1,9);
$n2=rand(1,9);
$lc=array("a","d","f","g","h","m","n","b","t");
$sc=array("!","@","#","%","?","&");
$text=$uc1[rand(0,8)].$n1.$lc[rand(0,8)].$sc[rand(0,5)].$n2.$uc2[rand(0,8)];
if(isset($Submit))
{
	if($radiobutton=='show')
	{
		$msg1="your reseted password is $text";
	}else
	{
		if($radiobutton=='sms')
		{
			//echo "sms me";
			//your sms api
		}else
		{
			if($radiobutglobesmston=='email')
			{
				echo "email me";
			}
		}
	}
	mysql_query("update login set password='".md5($text)."'");
	echo "successfully updated";
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post">
<table width="484" height="239" border="1">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Show Here </td>
    <td><label>
      <input name="radiobutton" type="radio" value="show" />
    <?php echo $msg1?></label></td>
  </tr>
  <tr>
    <td>SMS</td>
	
	
	
	
	
	
	
    <td><label>
      <input name="radiobutton" type="radio" value="sms" />
    </label></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><label>
      <input name="radiobutton" type="radio" value="email" />
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
    <td><a href="index.php">login</a></td>
  </tr>
</table>



</form>
</body>
</html>
