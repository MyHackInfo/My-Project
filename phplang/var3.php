<?php
$x=10;
function xyz()
{
	static $x=20;
	echo $x;
	echo "<br>";
	$x++;

}
xyz();
xyz();
xyz();
xyz();
xyz();


?>