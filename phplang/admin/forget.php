<?php
extract($_REQUEST);
require_once("connection.php");
$q=mysql_query("select * from personal");
$a=mysql_fetch_array($q);
if(isset($Submit))
{
	if($a['mobile']==$mobile && $a['question']==$question && $a['answer']==$answer)
	{
		header("location: options.php");
		exit();
	}else
	{
		echo "invalid info";
	}
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
<table width="512" height="252" border="1">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Mobile</td>
    <td><label>
      <input type="text" name="mobile" />
    </label></td>
  </tr>
  <tr>
    <td>Sec Question </td>
    <td><select name="question">
      <option>---Select Any One--</option>
      <option>Fav. City</option>
      <option>Fav. Food</option>
      <option>Nick Name</option>
      <option>Fav. Color</option>
    </select></td>
  </tr>
  <tr>
    <td>Answer</td>
    <td><label>
    <input type="text" name="answer" />
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
