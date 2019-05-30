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


<body bgcolor="#FFFFFF" background="ggggggggggggggggggggggggggg.gif" onLoad="MM_preloadImages('H2.gif','F2.gif','A2.gif','C2.gif','AB-2.gif','S2.gif')">
<div id="Layer2" style="position:absolute; left:5px; top:18px; width:1134px; height:183px; z-index:2"></div>
<div id="Layer1" style="position:absolute; left:38px; top:254px; width:213px; height:40px; z-index:3"><a href="newfront.htm" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('HOME','','H2.gif',1)"><img name="HOME" border="0" src="H-1.gif" width="215" height="41"></a></div>
<div id="Layer3" style="position:absolute; left:39px; top:305px; width:200px; height:41px; z-index:4"><a href="frame2.htm" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image7','','S2.gif',1)"><img name="Image7" border="0" src="S1.gif" width="215" height="41"></a></div>
<div id="Layer4" style="position:absolute; left:38px; top:357px; width:213px; height:41px; z-index:5"><a href="faculty.htm" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('FACULTY','','F2.gif',1)"><img name="FACULTY" border="0" src="F1.gif" width="215" height="41"></a></div>
<div id="Layer5" style="position:absolute; left:37px; top:408px; width:216px; height:36px; z-index:6"><a href="announcement.htm" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('ANNOUNCEMENT','','A2.gif',1)"><img name="ANNOUNCEMENT" border="0" src="A1.gif" width="215" height="41"></a></div>
<div id="Layer6" style="position:absolute; left:37px; top:460px; width:215px; height:41px; z-index:7"><a href="contact.htm" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('CONTACT','','C2.gif',1)"><img name="CONTACT" border="0" src="C1.gif" width="215" height="41"></a></div>
<div id="Layer7" style="position:absolute; left:38px; top:513px; width:215px; height:44px; z-index:8"><a href="abtus.htm" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('ABOUT','','AB-2.gif',1)"><img name="ABOUT" border="0" src="AB1.gif" width="215" height="41"></a></div>
<div id="Layer8" style="position:absolute; left:12px; top:735px; width:99px; height:18px; z-index:9"></div>
<table border="0" cellpadding="0" cellspacing="0" width="64" height="86">
  <tr> 
    <td>&nbsp;</td>
  </tr>
</table>
<p align="left"><img src="KALA.JPG" width="9" height="10"> </p>
<p align="left">&nbsp;</p>
<p align="left">&nbsp;</p>
<div align="center">
<table width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td>
        <div align="center">
          <h2>&nbsp;</h2>
          <h2><font color="#FFFFFF"><u><font face="Arial, Helvetica, sans-serif"><font size="5"><a href="frame2.htm"><font color="#333333"><b><font color="#FFFFFF">Student 
            Information</font></b></font></a></font></font></u><font face="Arial, Helvetica, sans-serif" color="#000000"><font size="5"> 
            <font color="#333333"><b>=&gt;</b> </font></font></font><font color="#333333"><u><font face="Arial, Helvetica, sans-serif"><font size="5"><a href="Insert.htm"><font color="#003333"><b>Delete</b></font></a></font></font></u></font></font></h2>
        </div>
      </td>
    </tr>
  </table>
  
</div>
   <p align="center"><font size="4"><font color="#FFFFFF"><br>
    <?php 
	 $rollno=$_REQUEST['rollno']; 
	 
	 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
	 mysql_select_db("department",$link) or die ("Cannot select the database!");
	 $query="DELETE FROM students WHERE rollno='$rollno'";
		$result=mysql_query($query);
		  if($result)
		  //if(!mysql_query($query,$link))
		  //{die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");}
		  //else
		 //{
		  //echo "Record ".$id." removed successfully!";}
	 {
	echo "You have successfully Deleted $newusername11 Account";
	}
	else
	{
	echo "Operation Failure please re-attempt";
	}

	 ?>

      </p>
      

    <p align="left">&nbsp;</p></td>
  </tr>
</table>
<h1 align="center" class="heading">&nbsp;</h1>
</body>
</html>