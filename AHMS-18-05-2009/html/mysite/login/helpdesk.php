<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<title>Home Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../mm_health_nutr.css" />

<script language="JavaScript" type="text/javascript">



function IsBlank(s)
{
 if(s.charAt(0)=="") 
  return true;
 else 
  return false;
}


function validate_subject()
{
 var str=document.help.subject.value;
 if(IsBlank(str))
  { 
    alert("The subject field cannot be empty !");

    return false;
  } 
 return true;
}

function validate_comment()
{
 var str=document.help.textarea.value;
 if(IsBlank(str))
  { 
    alert("The comment field cannot be empty !");

    return false;
  } 
 return true;
}



function processform()
{

if(!validate_subject())
{
 return false;
}

if(!validate_comment())
{
 return false;
}

//alert("Our Helpdesk will get back to you as early as possible");
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
.style5 {
	font-size: 12px;
	font-weight: bold;
}
-->
</style>
</head>
<body bgcolor="#F4FFE4">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#D5EDB3">
    <td colspan="3" rowspan="2"><img src="../logo3.jpg" alt="Header image" width="92" height="100" border="0" /></td>
    <td height="50" colspan="1" id="logo" valign="bottom" align="left" nowrap="nowrap"> ADICHUNCHANAGIRI INSTITUTE OF TECHNOLOGY</td>
    <td width="14">&nbsp;</td> <td width="14">&nbsp;</td> <td width="14">&nbsp;</td>
  </tr>

  <tr bgcolor="#D5EDB3">
    <td height="51" colspan="3" id="tagline" valign="top" align="center">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; AUTOMATED HIERARCHICAL MANAGEMENT SYSTEM </td>
	<td width="14">&nbsp;</td>
  </tr>

  <tr>
    <td colspan="7" bgcolor="#5C743D"><img src="../mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>

  <tr>
    <td colspan="7" bgcolor="#99CC66" background="../mm_dashed_line.gif"><img src="../mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
  </tr>

  <tr bgcolor="#99CC66">
  	<td colspan="7" id="dateformat" height="20">&nbsp;&nbsp;<script language="JavaScript" type="text/javascript">
      document.write(TODAY);	</script>	</td>
  </tr>
  <tr>
    <td colspan="7" bgcolor="#99CC66" background="../mm_dashed_line.gif"><img src="../mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
  </tr>

  <tr>
    <td colspan="7" bgcolor="#5C743D"><img src="../mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>

 <tr>
    <td width="165" valign="top" bgcolor="#5C743D">
	<table border="0" cellspacing="0" cellpadding="0" width="165" id="navigation">
        <tr>
          <td width="165">&nbsp;<br /></td>
        </tr>
        <tr>
          <td width="165"><a href="../services/internal/myhome.php" title="myhome">MY HOME</a></td>
        </tr>
        <tr>
          <td width="165"><a href="../services/internal/myhistory.php" title="myhistory">MY HISTORY</a></td>
        </tr>
        <tr>
          <td width="165"><a href="../services/internal/mymail.php" title="My Mail">MY MAIL</a></td>
        </tr>   
        <tr>
          <td width="165"><a href="../services/internal/services_internal.php" title="services">SERVICES</a></td>
        </tr>
        <tr>
          <td width="165"><a href="helpdesk.php" title="help">HELP</a></td>
        </tr>
        <tr>
          <td width="165"><a href="logout.php" title="logout">LOGOUT</a></td>
        </tr>
      </table>
 	 <br />
  	&nbsp;<br />
  	&nbsp;<br />
  	&nbsp;<br /> 	</td>
    <td width="57"><img src="../mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
    <td colspan="2" valign="top"><img src="../mm_spacer.gif" alt="" width="305" height="1" border="0" /><br />
	&nbsp;&nbsp;<br />
	<table width="472" border="0" cellpadding="0" cellspacing="0" bordercolor="#000000">
        <tr>
          <td width="472" height="71" class="pageName"><p>Help Desk</p>
          </td>
		</tr>

		<tr>
          <td height="443" class="bodyText"><p class="style3">Welcome to the Help Desk, </p>
            <p class="style3">We are here to help you with your queries.</p>
            <p class="style3">Please fill in the form below with your subject matter. </p>
            <p class="style3">Our Help Desk will get back to you as early as possible.</p>
            <p class="style3">&nbsp;</p>
            <form id="form1" name="help" method="post" action="/php/help.php">
              <label><span class="style5">Subject<font color='brown'>&nbsp;*</font> &nbsp;&nbsp;</span>
                 <input type="text" name="subject" id="textfield" />
              </label>
              <p class="style5">Comment<font color='brown'>&nbsp;*</font></p>
              <p class="style5">
                <label>
                <textarea name="textarea" id="textarea" cols="45" rows="5"></textarea>
                </label>
              </p>
              <p> 
                <label> 
  <input type="submit" name="button" id="button" value="Submit" ONCLICK="return processform()">
                </label>
              </p>
            </form>
            <p class="style3">&nbsp;</p>
          </td>
		</tr>
		<tr>
		  <td height="20" class="bodyText"><p>&nbsp;</p>	      </td>
	    </tr>
      </table>
	 
	&nbsp;<br />	</td>
    <td width="50"><img src="../mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
        <td width="238" valign="top"><br />
		&nbsp;<br /></td>
        <td width="14">&nbsp;</td>
  </tr>
  <tr>
     <tr>
    <td colspan="7" bgcolor="#5C743D"><img src="../mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
  </tr>

  <tr>
    <td height="3" colspan="7" background="../mm_dashed_line.gif" bgcolor="#99CC66"><img src="../mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
  </tr>

  <tr bgcolor="#99CC66">
  	<td colspan="7"  height="10">
      <div id="footer"><div class='copyright'>
            <div align="center">  Copyright © 2009 AHMS India Pvt Ltd. All rights reserved. </div>
        </div>
      </div>
  	  <div class='bestview'> <div align="center">Best viewed in Mozilla 5.0 or IE 7.0 and above - Recommended screen resolution 1024 X 768   </div>
   </div> 
          
   	</td>
       
  </tr>
      
  
  <tr>
    <td colspan="7" bgcolor="#99CC66" background="../mm_dashed_line.gif"><img src="../mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
  </tr>
  
   <tr>
    <td colspan="7" bgcolor="#5C743D"><img src="../mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
  </tr>
</table>

</body>
</html>
