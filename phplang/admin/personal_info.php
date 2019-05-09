<?php
extract($_REQUEST);
require_once("connection.php");
if(isset($Submit))
{
	mysql_query("insert into personal set name='".$name."',email='".$email."',mobile='".$mobile."',question='".$question."',answer='".$answer."'");
	header("location: admin_panel.php");
	exit();
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
}
-->
</style>
</head>

<body>
<form action="" method="post">
  <table width="781" height="317" border="1">
    <tr>
      <td colspan="2"><div align="center" class="style1">Personal Info </div></td>
    </tr>
    <tr>
      <td>Name</td>
      <td><label>
        <input type="text" name="name" />
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
      <td>Sec. Question </td>
      <td><label>
        <select name="question">
          <option>---Select Any One--</option>
          <option>Fav. City</option>
          <option>Fav. Food</option>
          <option>Nick Name</option>
          <option>Fav. Color</option>
        </select>
      </label></td>
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
