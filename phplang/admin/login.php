<?php
session_start();
extract($_REQUEST);
$u="admin";
$p="admin123";

if(isset($_COOKIE["user"]) && isset($_COOKIE["password"]))
{
	$cu=$_COOKIE["user"];
	$cp=$_COOKIE["password"];
}
if(isset($Submit))
{
	if($_SESSION['cc']==$cap)
	{
	if($name==$u && $password==$p)
	{
		if(isset($checkbox))
		{
			setcookie("user",$name,time()+1*24*60*60);
			setcookie("password",$password,time()+1*24*60*60);
			
		}
		$_SESSION['n']=$name;
		header("location: admin_panel.php");
		exit();
	}else
	{
		echo "invalid username/password";
	}
	}else
	{
		echo "invaid text";
	}
}
if(!empty($_GET['logout']))
{
	session_unset();
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
	font-size: 36px;
}
-->
</style>
</head>

<body>
<form action="" method="post">
  <table width="684" height="249" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center" class="style1">Admin Login </div></td>
    </tr>
    <tr>
      <td>User Name </td>
      <td><label>
        <input type="text" name="name" value="<?php echo $cu?>" />
      </label></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label>
      <input type="password" name="password" value="<?php echo $cp
	  
	  
	  ?>" />
      </label></td>
    </tr>
    <tr>
      <td><p>Enter Here</p>
      <p><img src="alpha_num_array.php" />&nbsp; </p></td>
      <td><label>
        <input type="text" name="cap" />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="Submit" value="Submit" />
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <input type="checkbox" name="checkbox" value="checkbox" />
      Remember Me&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Forget Password?  </label></td>
    </tr>
  </table>
</form>
</body>
</html>
