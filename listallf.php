<?php include("password_protect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Control Panel :: Student Information Panel:: Institute of Information Technology, BZU</title>
<style type="text/css">
<!--
.heading {
	color: #F90;
	font-family: "Comic Sans MS", cursive;
}
.options {
	font-family: "Comic Sans MS", cursive;
	font-size: 16px;
	font-style: oblique;
	color: #F93;
}
-->
</style>
</head>

<body bgcolor="#000000" text="#000000">
<br />
<div id="Layer1" style="position:absolute; width:1123px; height:199px; z-index:1; left: 10px; top: 23px"><img src="GHJ.gif" width="1129" height="182"></div>
<br />
<br />

<br><br><br><br><br><br><br><br><br><br><br><br>



<table align="center" cellpadding="0" bgcolor="#FFFFFF" width="800" border="0">
  <tr>
    <td> 
      <h1 align="center" class="heading"><font color="#CCCCCC"><a href="faculty.htm"><font face="Times New Roman, Times, serif" color="#000000">Faculty 
        Information</font></a><font color="#009933">=&gt;</font><a href="listall.php"><font face="Times New Roman, Times, serif" color="#009933">Listall</font></a></font></h1>
  <p align="center">
    <?php 
	 	 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
	 mysql_select_db("department",$link) or die ("Cannot select the database!");
	 $query="SELECT * FROM faculty";
		
		  $resource=mysql_query($query,$link);
		  echo "
		<table align=\"center\" border=\"3\" width=\"1000\" cellspacing=\"0\" cellpadding=\"3\" bgcolor=\"#FFFFFF\" bordercolorlight=\"#999999\" bordercolordark=\"#333333\">
		<tr>
		<td><b>Name</b></td><td><b>Designation.</b></td> <td><b>Qualification.</b></td><td><b>Contact</b></td><td><b>Address</b></td></tr> ";
while($result=mysql_fetch_array($resource))
	{ 
	echo "<tr><td>".$result[1]."</td><td>".$result[2]."</td><td>".$result[3]."</td><td>".$result[4]."</td><td>".$result[5]."</td>
	</tr>";
	} echo "</table>";
	 ?>

      </p>
  <p align="center">&nbsp;</p>
      <p align="center">&nbsp;</p>
      <p align="center">&nbsp;</p>
    <p align="left">&nbsp;</p></td>
  </tr>
</table>
<h1 align="center" class="heading">&nbsp;</h1>
</body>
</html>