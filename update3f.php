<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sirsyed University of Engineering and technology, Student and Faculty Information Panel</title>
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
<script language="JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v3.0
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
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
<p>&nbsp;</p>
<p align="left">&nbsp;</p>
<p align="left">&nbsp;</p>

          
<div align="center">
<table width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td>
        <div align="center">
          <h2>&nbsp;</h2>
          <h2>&nbsp;</h2>
          <h2><font color="#FFFFFF"><u><font face="Arial, Helvetica, sans-serif"><font size="5"><a href="frame2.htm"><font color="#333333"><b><font color="#FFFFFF">Faculty 
            Information</font></b></font></a></font></font></u><font face="Arial, Helvetica, sans-serif" color="#000000"><font size="5"> 
            <font color="#333333"><b>=&gt;</b> </font></font></font><font color="#333333"><u><font face="Arial, Helvetica, sans-serif"><font size="5"><a href="Insert.htm"><font color="#003333"><b>Update</b></font></a></font></font></u></font></font></h2>
        </div>
      </td>
    </tr>
  </table>
  
</div>
  <tr>
    <td>
  <p align="center"><font size="4"><font color="#FFFFFF"><br>
    <?php 
	 $id=$_REQUEST['id'];
	 
	 	 $sname=$_REQUEST['name']; 
	 $desig=$_REQUEST['desig'];
	 $qual=$_REQUEST['qual'];
	 $contact=$_REQUEST['contact'];
	 $addr=$_REQUEST['addr'];
	 
	 
	 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
	 mysql_select_db("department",$link) or die ("Cannot select the database!");
	 //$query="INSERT INTO students (sname,rollno, regno, dname,fname,sec,contact,addr) values('".$sname."','".$roll."', '".$reg."', '".$dept."','".$fname."','".$sec."','".$contact."','".$addr."')";
	$query="UPDATE faculty SET sname='".$sname."', designation='".$desig."', qualification='".$qual."',contact='".$contact."',addr='".$addr."' WHERE id='".$id."'";
		  if(!mysql_query($query,$link))
		  {die ("An unexpected error occured while saving the record, Please try again!");}
		  else
		 {
		 echo $name;
		  echo "New record Updated successfully!";}
	 ?>

   </font></font></p>
    <p align="left">&nbsp;</p></td>
  </tr>
</table>
<h1 align="center" class="heading">&nbsp;</h1>
</body>
</html>