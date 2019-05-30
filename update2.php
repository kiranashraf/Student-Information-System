<html>
<head>
<title>Sirsyed University of Engineering and technology, Student and Faculty Information 
Panel</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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

function MM_validateForm() { //v3.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (val!=''+num) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
<style type="text/css">
<!--
.unnamed1 {  }
-->
</style>
</head>

<body bgcolor="#FFFFFF" background="ggggggggggggggggggggggggggg.gif" onLoad="MM_preloadImages('H2.gif','F2.gif','A2.gif','C2.gif','AB-2.gif','S2.gif')">
<div id="Layer2" style="position:absolute; left:5px; top:18px; width:1134px; height:183px; z-index:2"></div>
<div id="Layer1" style="position:absolute; left:38px; top:254px; width:213px; height:40px; z-index:3"><a href="newfront.htm" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('HOME','','H2.gif',1)"><img name="HOME" border="0" src="H-1.gif" width="215" height="41"></a></div>
<div id="Layer3" style="position:absolute; left:39px; top:305px; width:200px; height:41px; z-index:4"><a href="frame2.htm" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image8','','S2.gif',1)"><img name="Image8" border="0" src="S1.gif" width="215" height="41"></a></div>
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

 <p align="center">
    <?php 
	 $uproll=$_REQUEST['update']; 
	 
	 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
	 mysql_select_db("department",$link) or die ("Cannot select the database!");
	 $query="SELECT * FROM students WHERE `rollno` LIKE CONVERT( _utf8 '$uproll' USING latin1 )";
		
		 $resource=mysql_query($query,$link) or die ("An unexpected error occured while <b>Updating</b> the record, Please try again!");
		  $result=mysql_fetch_array($resource);
		?>

<table width="100%" border="0" cellspacing="0" cellpadding="10">
    <tr>
      <td>
        <div align="center">
          <h2>&nbsp;</h2>
          
        <h2>&nbsp;</h2>
        <h2><font color="#FFFFFF"><u><font face="Arial, Helvetica, sans-serif"><font size="5"><a href="frame2.htm"><font color="#333333"><b><font color="#FFFFFF">Student 
          Information</font></b></font></a></font></font></u><font face="Arial, Helvetica, sans-serif" color="#000000"><font size="5"> 
          <font color="#333333"><b>=&gt;</b> </font></font></font><font color="#333333"><u><font face="Arial, Helvetica, sans-serif"><font size="5"><a href="Insert.htm"><font color="#003333">Update</font></a></font></font></u></font></font></h2>
        </div>
      </td>
    </tr>
  </table>
  
<form id="form1" name="form1" method="get" action="update3.php">
  <table align="center" width="291" border="0">
    <tr> 
      <td width="129" height="32"><font color="#FFFFFF"><strong>Name of Student:</strong></font></td>
      <input type="hidden" name="id" value="<?php echo $result[0] ?>"  />
	  <td width="152" height="32"><label> 
        <input type="text" name="name" id="textfield" value="<?php echo $result[1] ?>"  />

        </label></td>
    </tr>
    <td><font color="#FFFFFF"><strong>Father name</strong>:</font></td>
    <td> 
        <input type="text" name="fname" id="textfield2" value="<?php echo $result[5] ?>" onBlur="MM_validateForm('textfield','','R','textfield2','','R','textfield3','','R','textfield4','','R','textfield5','','R','textfield6','','R','textfield7','','R','textfield8','','R');return document.MM_returnValue" />
    </td>
    </tr>
    <tr> 
      <td><font color="#FFFFFF"><strong>Roll #:</strong></font></td>
      <td> 
        <input type="text" name="rollno" id="textfield3" value="<?php echo $result[2] ?>"  />
      </td>
    </tr>
    <tr> 
      <td><font color="#FFFFFF"><strong>Registration #:</strong></font></td>
      <td> 
        <input type="text" name="reg" id="textfield4" value="<?php echo $result[3] ?>"   onBlur="MM_validateForm('textfield','','R');return document.MM_returnValue" />
      </td>
    </tr>
    <tr> 
      <td><font color="#FFFFFF"><strong>Department Name</strong>:</font></td>
      <td> 
        <input type="text" name="dept" id="textfield5" value="<?php echo $result[4] ?>" />
      </td>
    </tr>
    <td><font color="#FFFFFF"><strong>Section</strong>:</font></td>
    <td> 
      <input type="text" name="sec" id="textfield6" value="<?php echo $result[6] ?>" />
    </td>
    </tr>
    <tr> 
      <td><font color="#FFFFFF"><b>Contact:</b></font></td>
      <td> 
        <input type="text" name="contact" id="textfield7" value="<?php echo $result[7] ?>"/>
      </td>
    </tr>
    <tr> 
      <td><font color="#FFFFFF"><b>Address:</b></font></td>
      <td> 
        <input type="text" name="addr" id="textfield8" value="<?php echo $result[8] ?>" />
      </td>
    </tr>
      </table>
        
  <p align="center"> <label> 
    <input type="submit" name="button" id="button" value="Submit" />
    </label> </p>
</form>
</body>
</html>
