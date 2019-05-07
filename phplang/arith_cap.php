<?php
session_start();
$n1=rand(1,4);
$n2=rand(1,4);
$n=$n1."+".$n2;
$sum=$n1+$n2;
$_SESSION['s']=$sum;
//echo $n;
$x=100;
$y=30;
$f=14;
header("content-type: image/jpeg");
$img=imagecreate($x,$y);
imagecolorallocate($img,255,0,0);
$wh=imagecolorallocate($img,255,255,255);
imagestring($img,$f,10,5,$n,$wh);
imagejpeg($img,null,25);


?>