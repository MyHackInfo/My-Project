<?php
$uc1=array("A","D","F","G","H","J","Y","T","R");
$uc2=array("V","B","M","N","H","Q","A","X","T");
$n1=rand(1,9);
$n2=rand(1,9);
$lc=array("a","d","f","g","h","m","n","b","t");
$sc=array("!","@","#","%","?","&");
$text=$uc1[rand(0,8)].$n1.$lc[rand(0,8)].$sc[rand(0,5)].$n2.$uc2[rand(0,8)];
//echo $text;
$x=100;
$y=30;
$f=14;
header("content-type: image/jpeg");
$img=imagecreate($x,$y);
imagecolorallocate($img,0,0,255);
$wh=imagecolorallocate($img,255,255,255);
imagestring($img,$f,10,5,$text,$wh);
imagejpeg($img,null,25);

?>