<?php
$c=$_REQUEST['cno'];
$p=$_REQUEST['pin'];
$cardno=123456123456;
$pin=1234;
if(isset($_REQUEST['Submit']))
{
if($c==$cardno && $p==$pin)
{
	//echo "valid data";
	header("location: trans.php");
}else
{
	echo "invalid carno/pin";
}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script language="javascript" type="text/javascript">
function valid()
{
	var n=/^[0-9]+$/
	if(document.frm1.cno.value=="")
	{
		alert("please enter your card no");
		document.frm1.cno.focus();
		return false;
		
	}else 
	{
		if(document.frm1.cno.value.search(n)==-1)
		{
			alert("please enter no in card no");
			document.frm1.cno.focus();
			return false;
		}else
		{
			if(document.frm1.cno.value.length!=12)
			{
				alert("please enter your 12 digit card no");
				document.frm1.cno.focus();
				return false;
			}
		}
	}
	if(document.frm1.pin.value=="")
	{
		alert("please enter your pin no");
		document.frm1.pin.focus();
		return false;
		
	}else 
	{
		if(document.frm1.pin.value.search(n)==-1)
		{
			alert("please enter no in pin no");
			document.frm1.pin.focus();
			return false;
		}else
		{
			if(document.frm1.pin.value.length!=4)
			{
				alert("please enter 4 digit pin no");
				document.frm1.pin.focus();
				return false;
			}
		}
	}
		
}
</script>
</head>

<body>
<form action="" method="post" name="frm1" onsubmit="return valid()">
<table width="649" height="273" border="1">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Card No </td>
    <td><label>
      <input type="text" name="cno" />
    </label></td>
  </tr>
  <tr>
    <td>PIN</td>
    <td><label>
      <input type="text" name="pin" />
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
