<? session_start();
if(!isset($_SESSION['employee_usrname']) && ($_SESSION['employee_usrname']==''))
{
header("location:/mysite/login/login.php");
}

$role='NO-DUE CERTIFICATE ISSUER';
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


function IsBlank(s)
{
 if(s.charAt(0)=="") 
  return true;
 else 
  return false;
}


function IsDigit(s)
{
 
len=s.length;
for(i=0;i<len;i++)
{
if(s.charAt(i)>='0'&& s.charAt(i)<='9') 
{
    continue;
 
}
 else
   return true;
}

}

function validate_usn()
{
 var str= document.misc.usn.value;

 if(IsBlank(str))
 {
  alert("The USN field can't be blank !");

    return false;
  } 
 return true;
}




function validate_num_admin()
{
 var str= document.nodue.admin.value;

 if(IsDigit(str))
 {
  alert("The Administration field should be a number !");

    return false;
  } 
 return true;
}

function validate_num_lib()
{
 var str= document.nodue.lib.value;

 if(IsDigit(str))
 {
  alert("The Library field should be a number !");

    return false;
  } 
 return true;
}

function validate_num_cv()
{
 var str= document.nodue.cv.value;

 if(IsDigit(str))
 {
  alert("The Civil field should be a number !");

    return false;
  } 
 return true;
}

function validate_num_cs()
{
 var str= document.nodue.cs.value;

 if(IsDigit(str))
 {
  alert("The Computer Science field should be a number !");

    return false;
  } 
 return true;
}

function validate_num_is()
{
 var str= document.nodue.is.value;

 if(IsDigit(str))
 {
  alert("The Information Science field should be a number !");

    return false;
  } 
 return true;
}

function validate_num_env()
{
 var str= document.nodue.env.value;

 if(IsDigit(str))
 {
  alert("The Environment field should be a number !");

    return false;
  } 
 return true;
}

function validate_num_ip()
{
 var str= document.nodue.ip.value;

 if(IsDigit(str))
 {
  alert("The Industrial Production field should be a number !");

    return false;
  } 
 return true;
}

function validate_num_ee()
{
 var str= document.nodue.ee.value;

 if(IsDigit(str))
 {
  alert("The Electrical field should be a number !");

    return false;
  } 
 return true;
}

function validate_num_ec()
{
 var str= document.nodue.ec.value;

 if(IsDigit(str))
 {
  alert("The Electronics field should be a number !");

    return false;
  } 
 return true;
}

function validate_num_me()
{
 var str= document.nodue.me.value;

 if(IsDigit(str))
 {
  alert("The Mechanical field should be a number !");

    return false;
  } 
 return true;
}


function processform()
{
if(!validate_num_ip())
{
 return false;
}


if(!validate_num_admin())
{
 return false;
}

if(!validate_num_lib())
{
 return false;
}

if(!validate_num_cs())
{
 return false;
}

if(!validate_num_is())
{
 return false;
}

if(!validate_num_ee())
{
 return false;
}

if(!validate_num_ec())
{
 return false;
}

if(!validate_num_me())
{
 return false;
}

if(!validate_num_env())
{
 return false;
}

if(!validate_num_cv())
{
 return false;
}



}

function processform1()
{

 if(!validate_usn())
 {
 return false;
 }


}  






//--------------- LOCALIZEABLE GLOBALS ---------------
var d=new Date();
var monthname=new Array("January","February","March","April","May","June","July","August","September","October","November","December");
//Ensure correct for language. English is "January 1, 2004"
var TODAY = monthname[d.getMonth()] + " " + d.getDate() + ", " + d.getFullYear();
//---------------   END LOCALIZEABLE   ---------------
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
.style7 {
	color: #CC0000;
	font-weight: bold;
}
-->
</style>
</head>
<body bgcolor="#F4FFE4">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#D5EDB3">
    <td colspan="3" rowspan="2"><img src="../../../../logo3.jpg" alt="Header image" width="92" height="100" border="0" /></td>
    <td height="50" colspan="1" id="logo" valign="bottom" align="left" nowrap="nowrap"> ADICHUNCHANAGIRI INSTITUTE OF TECHNOLOGY</td>
    <td width="9">&nbsp;</td> <td width="9">&nbsp;</td> <td width="9">&nbsp;</td>
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
    <td width="174" valign="top" bgcolor="#5C743D">
	<table border="0" cellspacing="0" cellpadding="0" id="navigation" style="width: 173px">
        <tr>
          <td width="165">&nbsp;<br /></td>
        </tr>
        <tr>
          <td width="165"><a href="../emp_myhome.php" title="My Home">MY HOME</a></td>
        </tr>
	<tr>
          <td width="165"><a href="../emp_history.php" title="services">MY HISTORY</a></td>
        </tr> 
<tr>
          <td width="165"><a href="../mymail_emp.php" title="My Mail">MY MAIL</a></td>
        </tr> 
        <tr>
          <td width="165"><a href="../jobq.php" title="My Job Queue">MY JOB QUEUE</a></td>
        </tr>
        <tr>
          <td width="165"><a href="../emp_services.php" title="Services">SERVICES</a></td>
        </tr>
        <tr>
          <td width="165"><a href="../help/emp_help.php" title="Help">HELP</a></td>
        </tr>
        <tr>
          <td width="165"><a href="../../../../login/logout.php" title="Logout">LOGOUT</a></td>
        </tr>
      </table>
 	 <br />
  	&nbsp;
  	&nbsp;<br />
  	&nbsp;<br /> 	</td>
    <td width="52"><img src="../../../../mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
    <td colspan="2" valign="top"><img src="../../../../mm_spacer.gif" alt="" width="305" height="1" border="0" /><br />
	&nbsp;<br />
	&nbsp;<br />
	



   <span class="style6">&nbsp;<span class="style7">The Miscellaneous field is 
	successfully Updated...!!</span><br />

	&nbsp;<br />
      



<table width="473" border="0" cellpadding="0" cellspacing="0" bordercolor="#000000">
        <tr>
          <td width="473" height="83" class="pageName"><p>No dues Amount Details</p>
          </td>
		</tr>
<form name="nodue" method="post" action="/php/nodues.php">
		<tr>
          <td height="195" class="bodyText">
            <p class="style3">Department&nbsp;&nbsp;&nbsp; &nbsp;<select name="Select1" style="width: 148px">
			<option>Administration</option>
			<option>Library</option>
			<option>Civil</option>
			<option>Computer Science</option>
			<option>Electrical</option>
			<option>Electronics</option>
			<option>Environmental</option>
			<option>Industrial Production</option>
			<option>Information Science</option>
			<option>Mechanical</option>
			</select>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<p class="style3">
			Amount&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; <label>
              &nbsp; <input name="Text1" type="text" style="width: 79px" /></label><br><br>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


<input type="submit" name="button0" id="button0" value="Submit" ONCLICK="return processform()" /></form>

            </p>
            
<br><hr><br><br>








<form name="misc" method="post" action="/php/misc.php">
		<p class="style3 style6">Miscellaneous:</p>
            <p class="style3">  <br> USN &nbsp;&nbsp;  &nbsp;
              <label>&nbsp; 
              <input type="text" name="usn" id="textfield11" style="height: 18px" />
              </label><br><br>
              
            Amount&nbsp; 
            <label>
            <input type="text" name="amt" id="textfield12" style="height: 18px" />
            </label>
            </p>
          <p class="style3">&nbsp;</p>
          <p class="style3">
             &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
             <input type="submit" name="button" id="button" value="Submit" ONCLICK="return processform1()"/>
          </p></td>
		</tr>
		<tr>
		  <td height="195" class="bodyText"><p>&nbsp;</p>
	      <p>&nbsp;</p></td>
	    </tr>
      </table>
	 <br />
	&nbsp;<br />	</span>	</td>
    <td width="50"><img src="../../../../mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
        <td width="243" valign="top"><br />
		&nbsp;<br /></td>
        <td width="9">&nbsp;</td>
  </tr>
  <tr>
       <tr>
    <td colspan="7" bgcolor="#5C743D"><img src="../../../../mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
  </tr>

  <tr>
    <td height="3" colspan="7" background="../../../../mm_dashed_line.gif" bgcolor="#99CC66"><img src="../../../../mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
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
