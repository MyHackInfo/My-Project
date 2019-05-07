<?php
session_start();
$n=rand(111111,999999);
$_SESSION['c']=$n;
//echo $n;
$x=100;
$y=30;
$f=14;
header("content-type: image/jpeg");
$img=imagecreate($x,$y);
imagecolorallocate($img,0,0,0);
$wh=imagecolorallocate($img,255,255,255);
imagestring($img,$f,10,5,$n,$wh);
imagejpeg($img,null,25);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
