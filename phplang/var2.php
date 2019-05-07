<?php
	echo $x;
	$x=30; // global
	echo $x;
	echo "<br>";
	function xyz()
	{
		
		global $x;
		$x=40; //local
		echo $x;
		echo "<br>";
	}
	xyz();
	echo $x;

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
