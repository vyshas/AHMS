<? session_start();
if(!isset($_SESSION['employee_usrname']) && ($_SESSION['employee_usrname']==''))
{
header("location:/mysite/login/login.php");
}

$role='PRINCIPAL';
$usrname=$_SESSION['usrname'];

$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");
$res=mysql_db_query("student","select role from employees where uid='$usrname'") or die("cannot query");

$r=mysql_fetch_row($res);

foreach($r as $f)
{
$orole=$f;
}

if($orole!=$role)
{
header("location:/mysite/login/login.php");
}
 
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<title>Home Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../../../../mm_health_nutr.css" />

<script language="JavaScript" type="text/javascript">

//--------------- LOCALIZEABLE GLOBALS ---------------
var d=new Date();
var monthname=new Array("January","February","March","April","May","June","July","August","September","October","November","December");
//Ensure correct for language. English is "January 1, 2004"
var TODAY = monthname[d.getMonth()] + " " + d.getDate() + ", " + d.getFullYear();
//---------------   END LOCALIZEABLE   ---------------




function IsBlank(s)
{
 if(s.charAt(0)=="") 
  return true;
 else 
  return false;
}


function validate_name()
{
 var str=document.student.name1.value;
 if(IsBlank(str))
  { 
    alert("The Name field cannot be empty !");

    return false;
  } 
     return true;
}

function validate_usn()
{
 var str=document.student.usn.value;
 if(IsBlank(str))
  { 
    alert("The USN field cannot be empty !");

    return false;
  } 
     return true;
}

function validate_uid()
{
 var str=document.student.uid.value;
 if(IsBlank(str))
  { 
    alert("The User ID field cannot be empty !");

    return false;
  } 
     return true;
}


 
function processform()
{

if(!validate_name())
{
 return false;
}

if(!validate_usn())
{
 return false;
}


if(!validate_uid())
{
 return false;
}


}













</script>

<style type="text/css">
<!--
.form-noindent {background-color: #ffffff; border: #C3D9FF 1px solid}
.gaia {font-family: Arial, Helvetica, sans-serif; font-size: smaller; }
.gaia {font-family: Arial, Helvetica, sans-serif; font-size: 70%; }
.gaia {font-family: Arial, Helvetica, sans-serif; font-size: 70%; }
.gaia {font-family: Arial, Helvetica, sans-serif; font-size: smaller; }
.gaia {font-family: Arial, Helvetica, sans-serif; font-size: smaller; }
.gaia {font-family: Arial, Helvetica, sans-serif; font-size: smaller; }
.gaia {font-family: arial, sans-serif; font-size: smaller; }
.gaia {font-family: arial, sans-serif; font-size: smaller; font-style: italic; }
.style3 {
	font-size: 14px;
	font-weight: bold;
}
.style6 {
	font-size: 16px;
	font-style: italic;
}
-->
</style>
</head>
<body bgcolor="#F4FFE4">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#D5EDB3">
    <td colspan="3" rowspan="2"><img src="../../../../logo3.jpg" alt="Header image" width="92" height="100" border="0" /></td>
    <td height="50" colspan="3" id="logo" valign="bottom" align="left" nowrap="nowrap"> ADICHUNCHANAGIRI INSTITUTE OF TECHNOLOGY</td>
    <td width="9">&nbsp;</td> 
  </tr>

  <tr bgcolor="#D5EDB3">
    <td height="51" colspan="3" id="tagline" valign="top" align="center"> AUTOMATED HIERARCHICAL MANAGEMENT SYSTEM </td>
	<td width="9">&nbsp;</td>
  </tr>

  <tr>
    <td colspan="7" bgcolor="#5C743D"><img src="../../../../mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>

  <tr>
    <td colspan="7" bgcolor="#99CC66" background="../../../../mm_dashed_line.gif"><img src="../../../../mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
  </tr>

  <tr bgcolor="#99CC66">
  	<td colspan="7" id="dateformat" height="20">&nbsp;&nbsp;<script language="JavaScript" type="text/javascript">
      document.write(TODAY);	</script>	</td>
  </tr>
  <tr>
    <td colspan="7" bgcolor="#99CC66" background="../../../../mm_dashed_line.gif"><img src="../../../../mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
  </tr>

  <tr>
    <td colspan="7" bgcolor="#5C743D"><img src="../../../../mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>

 <tr>
    
<td valign="top" bgcolor="#5C743D" style="width: 163px; height: 533px;">
	<table border="0" cellspacing="0" cellpadding="0" id="navigation">
        <tr>
          <td style="width: 165px">&nbsp;<br /></td>
        </tr>
        <tr>
          <td style="width: 165px"><a href="../emp_myhome.php" title="My Home">MY HOME</a></td>
        </tr>
	<tr>
          <td style="width: 165px"><a href="../emp_history.php" title="services">MY HISTORY</a></td>
        </tr> 
<tr>
          <td width="165"><a href="../mymail_emp.php" title="My Mail">MY MAIL</a></td>
        </tr> 
        <tr>
          <td style="width: 165px"><a href="../jobq.php" title="My Job Queue">MY JOB QUEUE</a></td>
        </tr>
        <tr>
          <td style="width: 165px"><a href="../emp_services.php" title="Services">SERVICES</a></td>
        </tr>
        <tr>
          <td style="width: 165px"><a href="../help/emp_help.php" title="Help">HELP</a></td>
        </tr>
        <tr>
          <td style="width: 165px"><a href="../../../../login/logout.php" title="Logout">LOGOUT</a></td>
        </tr>
      </table>
 	 <br />
  	&nbsp;
  	&nbsp;<br />
  	&nbsp;<br /> 	</td>
    <td style="width: 44px; height: 533px;"></td>
    <td colspan="2" valign="top" style="height: 533px"><img src="../../../../mm_spacer.gif" alt="" width="305" height="1" border="0" /><br />
	&nbsp;<br />
	&nbsp;<br />
	
    <table width="438" border="0" cellpadding="0" cellspacing="0" bordercolor="#000000">
        
<form name="student" method="post" action="/php/student_insert.php">
		
   
           </p>
          

	

<table width="502" border="0" cellpadding="0" cellspacing="0" bordercolor="#000000">
        <tr>
          <td width="502" height="108" class="pageName">
          <h3><strong>Insert Student</strong></h3>            </td>
        </tr>

<td>		

 <span class="style2"> <B>Name<font color='brown'> &nbsp;*</font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;           <input name="name1" type="text" /><br><br>
<span class="style2"> <B>USN<font color='brown'> &nbsp;*</font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input name="usn" type="text" /><br><br>
 <span class="style2"> <B>User ID<font color='brown'> &nbsp;*</font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input name="uid" type="text" />
  <br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input name="name2" value="submit" type="submit" onclick="return processform()"><BR><BR>
<?  
$regcode=$_SESSION['rcode'];

if($regcode!='')
{
 echo "<font color='brown'><h3>THE SECRET REGISTRATION KEY=</font>".$regcode."</h3>";
}

?>

</form>
<tr></td>
		  <td height="195" class="bodyText"><p>&nbsp;</p>
          </td>
	    </tr>
      </table>
	 <br />
	&nbsp;<br />	</td>
    <td width="50" style="height: 533px"><img src="../../../../mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
        <td width="243" valign="top" style="height: 533px"><br />
		&nbsp;<br /></td>
        <td width="9" style="height: 533px"></td>
  </tr>
  <tr>
    <td style="width: 163px"></td>
    <td style="width: 44px"></td>
    <td width="6"></td>
    <td style="width: 477px"></td>
    <td width="50"></td>
    
  </tr>
         <tr>
    <td colspan="7" bgcolor="#5C743D"><img src="../../../../mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
  </tr>

  <tr>
    <td colspan="7" background="../../../../mm_dashed_line.gif" bgcolor="#99CC66"><img src="../../../../mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
  </tr>

  <tr bgcolor="#99CC66">
  	<td colspan="7"  height="10">
      <div id="footer"><div class='copyright'>
            <div align="center">  Copyright © 2009 AHMS India Pvt Ltd. All rights reserved. </div>
        </div>
      </div>
  	  <div class='bestview'>    <div align="center">Best viewed in Mozilla 5.0 or IE 7.0 and above - Recommended screen resolution 1024 X 768   </div>
   </div> 
          
   	</td>
       
  </tr>
      
  
  <tr>
    <td colspan="7" bgcolor="#99CC66" background="../../../../mm_dashed_line.gif"><img src="../../../../mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
  </tr>
  
   <tr>
    <td colspan="7" bgcolor="#5C743D"><img src="../../../../mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
  
  </tr>
</table>
</form>
</body>
</html>
