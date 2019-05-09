<?php
require_once("connection.php");
extract($_REQUEST);
$name=$_FILES['file']['name'];
$size=$_FILES['file']['size'];
$type=$_FILES['file']['type'];
//echo $type;
if(!is_dir("php_files") && !is_dir("php_images") && !is_dir("php_multimedia"))
{
	mkdir("php_files");
	mkdir("php_images");
	mkdir("php_multimedia");
}
if(isset($Submit))
{
	if($type=='application/pdf' || $type=='application/vnd.openxmlformats-officedocument.presentationml.presentation' || $type=='application/vnd.openxmlformats-officedocument.wordprocessingml.document' || $type=='text/plain')
	{
	$path="php_files/".$name;
	$path1="admin/php_files/".$name;
	mysql_query("insert into files set name='".$name."',type='".$type."',path='".$path1."'");
	move_uploaded_file($_FILES['file']['tmp_name'],$path);
	echo "successfully uploaded";
	
	}
	if($type=='image/png' || $type=='image/jpeg')
	{
	$path="php_images/".$name;
	$path1="admin/php_images/".$name;
	mysql_query("insert into images set name='".$name."',type='".$type."',path='".$path1."'");
	move_uploaded_file($_FILES['file']['tmp_name'],$path);
	echo "successfully uploaded";
	
	}
	if($type=='video/avi' || $type=='video/x-matroska' || $type=='audio/mpeg')
	{
	$path="php_multimedia/".$name;
	$path1="admin/php_multimedia/".$name;
	mysql_query("insert into multimedia set name='".$name."',type='".$type."',path='".$path1."'");
	move_uploaded_file($_FILES['file']['tmp_name'],$path);
	echo "successfully uploaded";
	
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
<form action="" method="post" enctype="multipart/form-data">
<table width="538" height="174" border="1">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Upload</td>
    <td><label>
      <input type="file" name="file" />
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
