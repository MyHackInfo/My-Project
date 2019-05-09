<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<title>Calendar</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="mm_health_nutr.css" type="text/css" />
<script language="JavaScript" type="text/javascript">
//--------------- LOCALIZEABLE GLOBALS ---------------
var d=new Date();
var monthname=new Array("January","February","March","April","May","June","July","August","September","October","November","December");
//Ensure correct for language. English is "January 1, 2004"
var TODAY = monthname[d.getMonth()] + " " + d.getDate() + ", " + d.getFullYear();
//---------------   END LOCALIZEABLE   ---------------
</script>
</head>
<body bgcolor="#F4FFE4">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#D5EDB3">
    <td width="382" colspan="2" rowspan="2"><img src="mm_health_photo.jpg" alt="Header image" width="382" height="101" border="0" /></td>
    <td width="378" height="50" id="logo" valign="bottom" align="center" nowrap="nowrap">insert website name</td>
    <td width="100%">&nbsp;</td>
  </tr>

  <tr bgcolor="#D5EDB3">
    <td height="51" id="tagline" valign="top" align="center">OPTIONAL TAGLINE HERE</td>
	<td width="100%">&nbsp;</td>
  </tr>

  <tr>
    <td colspan="4" bgcolor="#5C743D"><img src="mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>

  <tr>
    <td colspan="4" bgcolor="#99CC66" background="mm_dashed_line.gif"><img src="mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
  </tr>

  <tr bgcolor="#99CC66">
  <td>&nbsp;</td>
  	<td colspan="3" id="dateformat" height="20"><a href="javascript:;">HOME</a>&nbsp;&nbsp;::&nbsp;&nbsp;
	<?php
	require_once("admin/connection.php");
	$q=mysql_query("select * from pages");
	while($a=mysql_fetch_array($q))
	{
	
	
	?>
	<a href="index.php?id=<?php echo $a['id']?>"><?php echo $a['tab_name']?></a>&nbsp;&nbsp;::&nbsp;&nbsp;
	<?php
	}
	$id1=$_GET['id'];
	$q1=mysql_query("select * from pages where id='".$id1."'");
	$a1=mysql_fetch_array($q1);
	?>
      <script language="JavaScript" type="text/javascript">document.write(TODAY);	</script>	</td>
  </tr>

  <tr>
    <td colspan="4" bgcolor="#99CC66" background="mm_dashed_line.gif"><img src="mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
  </tr>

  <tr>
    <td colspan="4" bgcolor="#5C743D"><img src="mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>
 <tr>
    <td width="40">&nbsp;</td>
    <td colspan="2" valign="top">&nbsp;<br />
    &nbsp;<br />
   <table border="0" cellspacing="0" cellpadding="2" width="504">
        <tr>
          <td class="pageName"><?php echo $a1['tab_name']?></td>
        </tr>
        <tr>
          <td class="bodyText"><p><?php echo $a1['content']?></p>		  </td>
        </tr>
      </table>
	   <br />
    &nbsp;<br />	</td>
    <td width="100%">&nbsp;</td>
  </tr>

 <tr>
    <td width="40">&nbsp;</td>
    <td width="342">&nbsp;</td>
    <td width="378">&nbsp;</td>
	<td width="100%">&nbsp;</td>
  </tr>
</table>
</body>
</html>
