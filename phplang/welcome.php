<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<p>Name:<?php echo $_SESSION['n']?></p>
<p>Thanks for your feedback</p>
<p>We will contact you soon on your </p>
<p>Mailid:<?php echo $_SESSION['e']?></p>
<p>or</p>
<p>Mobile no:<?php echo $_SESSION['m']?>  </p>
</body>
</html>
