<?php
session_start();
//require_once("admin/connection.php");
extract($_REQUEST);
if(isset($Submit))
{
	if($_SESSION['capd']==$cap)
	{
	$_SESSION['n']=$name;
	$_SESSION['e']=$email;
	$_SESSION['m']=$mobile;
	//mysql_query("insert into feedback set name='".$name."',email='".$email."',mobile='".$mobile."',feedback='".$feedback."'");
	header("location: welcome.php");
	exit();
	}else
	{
		echo "invaid text";
	}

}



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script  type="text/javascript">
window.onload=function()
{
	document.getElementById("name").focus();
}
function valid()
{
	var c=/^[a-z A-Z]+$/;
	var n=/^[0-9]+$/;
	var e=/^\w*\@\w*\.\w*$/;
	if(document.frm1.name.value.search(c)==-1)
	{
		alert("please enter chars in name");
		document.frm1.name.focus();
		return false;
	}else
		{if(document.frm1.name.value.length!=5)
	{
		alert("please enter min 5 chars in name");
		document.frm1.name.focus();
		return false;
	}
	}
	if(document.frm1.email.value.search(e)==-1)
	{
		alert("please enter valid email id");
		document.frm1.email.focus();
		return false;
	
	}

}
</script>
</head>

<body>
<form action="" method="post" name="frm1" onsubmit="return valid()">
  <table width="500" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center"><strong>Feedback Form </strong></div></td>
    </tr>
    <tr>
      <td>Name</td>
      <td><label>
        <input type="text" name="name" id="name" />
      </label></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label>
      <input type="text" name="email" />
      </label></td>
    </tr>
    <tr>
      <td>Mobile</td>
      <td><label>
      <input type="text" name="mobile" />
      </label></td>
    </tr>
    <tr>
      <td>Feedback</td>
      <td><label>
        <textarea name="feedback"></textarea>
      </label></td>
    </tr>
    <tr>
      <td><p>Enter Here</p>
      <p><img src="line_cap.php" />&nbsp; </p></td>
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
  </table>

</form>
</body>
</html>
