<? session_start();
if(!isset($_SESSION['student_usrname']) && ($_SESSION['student_usrname']==''))
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
<link rel="stylesheet" type="text/css" href="../../mm_health_nutr.css" />

<script language="JavaScript" type="text/javascript">

//--------------- LOCALIZEABLE GLOBALS ---------------
var d=new Date();
var monthname=new Array("January","February","March","April","May","June","July","August","September","October","November","December");
//Ensure correct for language. English is "January 1, 2004"
var TODAY = monthname[d.getMonth()] + " " + d.getDate() + ", " + d.getFullYear();
//---------------   END LOCALIZEABLE   ---------------



function Date_Compare()
{
 var array_date_from=document.approve.edate.value.split("-");
 

//approval Date Validation 

  $day=d.getDate(); 
  
$month=d.getMonth();
$month++;

  if($month<10 )
  {
    $month="0"+$month;
  }
  
  if($day<10)
 {
   $day="0"+$day;
  }


  
if(array_date_from[0]<d.getFullYear())
  {
   alert("The 'EVENT' date 'yyyy' should always be greater then TODAY");
   return false;
   }
else if((array_date_from[1]<$month) && (array_date_from[0]==d.getFullYear()))
      {
       alert("The 'EVENT' date 'mm' should always be greater then TODAY");
      return false; 
       }
else if((array_date_from[1]==$month) && (array_date_from[0]==d.getFullYear()))
{

      if(array_date_from[2]<=$day)
       {
       
       alert("The 'EVENT' date 'dd' should always be greater then TODAY");
      return false; 
       }
      else 
     {
      return true;
     }
}
else 
{
  return true;
}

}













function IsBlank(s)
{
 if(s.charAt(0)=="") 
  return true;
 else 
  return false;
}


function validate_edate()
{
 var str=document.approve.edate.value;
 if(IsBlank(str))
  { 
    alert("The date field cannot be empty !");

    return false;
  } 
     return true;
}

function validate_subject()
{
 var str=document.approve.subject.value;
 if(IsBlank(str))
  { 
    alert("The Subject field cannot be empty !");

    return false;
  } 
 return true;
}



function processform()
{

if(!validate_edate(document.approve.edate.value))
{
 return false;
}

if(!validate_subject(document.approve.subject.value))
{
 return false;
}

if(!Date_Compare())
{
 return false;
}

//if(IsValid())
// return true;

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
.style5 {font-size: 12px}
.style6 {	font-size: 12px;
	font-weight: bold;
}
-->
</style>
</head>
<body bgcolor="#F4FFE4">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#D5EDB3">
    <td colspan="3" rowspan="2"><img src="../../logo3.jpg" alt="Header image" width="92" height="100" border="0" /></td>
    <td height="50" colspan="1" id="logo" valign="bottom" align="left" nowrap="nowrap"> ADICHUNCHANAGIRI INSTITUTE OF TECHNOLOGY</td>
    <td width="19">&nbsp;</td><td width="19">&nbsp;</td><td width="19">&nbsp;</td>
  </tr>

  <tr bgcolor="#D5EDB3">
    <td height="51" colspan="3" id="tagline" valign="top" align="center"> AUTOMATED HIERARCHICAL MANAGEMENT SYSTEM </td>
	<td width="19">&nbsp;</td>
  </tr>

  <tr>
    <td colspan="7" bgcolor="#5C743D"><img src="../../mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>

  <tr>
    <td colspan="7" bgcolor="#99CC66" background="../../mm_dashed_line.gif"><img src="../../mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
  </tr>

  <tr bgcolor="#99CC66">
  	<td colspan="7" id="dateformat" height="20">&nbsp;&nbsp;<script language="JavaScript" type="text/javascript">
      document.write(TODAY);	</script>	</td>
  </tr>
  <tr>
    <td colspan="7" bgcolor="#99CC66" background="../../mm_dashed_line.gif"><img src="../../mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
  </tr>

  <tr>
    <td colspan="7" bgcolor="#5C743D"><img src="../../mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>

 <tr>
    <td width="165" valign="top" bgcolor="#5C743D">
	<table border="0" cellspacing="0" cellpadding="0" width="165" id="navigation">
        <tr>
          <td width="165">&nbsp;<br /></td>
        </tr>
        <tr>
          <td width="165"><a href="myhome.php" title="My Home">MY HOME</a></td>
        </tr>
        <tr>
          <td width="165"><a href="myhistory.php" title="My History">MY HISTORY</a></td>
        </tr>
 <tr>
          <td style="width: 165px"><a href="mymail.php" title="My Mail">MY MAIL</a></td>
        </tr>
 
        <tr>
          <td width="165"><a href="services_internal.php" title="Services">SERVICES</a></td>
        </tr>
        <tr>
          <td width="165"><a href="../../login/helpdesk.php" title="Help">HELP</a></td>
        </tr>
        <tr>
          <td width="165"><a href="../../login/logout.php" title="Logout">LOGOUT</a></td>
        </tr>
      </table>
 	 <br />
  	&nbsp;
  	&nbsp;<br />
  	&nbsp;<br /> 	</td>
    <td width="55"><img src="../../mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
    <td colspan="2" valign="top"><img src="../../mm_spacer.gif" alt="" width="305" height="1" border="0" /><br />
	&nbsp;&nbsp;<br />
	<table width="453" border="0" cellpadding="0" cellspacing="0" bordercolor="#000000">
        <tr>
          <td width="453" height="56" class="pageName"><p>Miscellaneous Requests</p>
          </td>
		</tr>

		<tr>
          <td height="195" class="bodyText"><p class="style3">Please fill-in the below form for which you need an Approval. </p>
            <p class="style3">&nbsp;</p>
            
      <form name="approve" method="post" action="/php/appr.php">
              <span class="style6">Event
                <label>Date</label>
              </span><span class="style5">
              <label>(yyyy-mm-dd)<font color='brown'>&nbsp;*</font></label>
              </span><span class="style6">
              <label> </label>
              </span> <strong>
              <label></label>
              </strong>
              <label>
              <input type="text" name="edate" id="textfield" />
              </label>
              <p>&nbsp;</p>
              <p>
                <label><span class="style6">Subject<font color='brown'>&nbsp;*</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <input type="text" name="subject" id="textfield2" />
                </label>
              </p>
              <p>&nbsp;</p>
              <p class="style6">Details </p>
              <p>
                <label>
                <textarea name="textarea" id="textarea" cols="45" rows="5"></textarea>
                </label>
              </p>
            
              <label>
              <input type="submit" name="submit" value="Submit" ONCLICK="return processform()" />
              </label>
            </form>
            <p class="style3"></p>
            <p class="style3">&nbsp;</p>
          </td>
		</tr>
		<tr>
		  <td height="20" class="bodyText"><p>&nbsp;</p>
	      </td>
	    </tr>
      </table>
	 <br />
	&nbsp;<br />	</td>
    <td width="50"><img src="../../mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
        <td width="236" valign="top"><br />
		&nbsp;<br /></td>
        <td width="19">&nbsp;</td>
  </tr>
     <tr>
    <td colspan="7" bgcolor="#5C743D"><img src="../../mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
  </tr>

  <tr>
    <td height="3" colspan="7" background="../../mm_dashed_line.gif" bgcolor="#99CC66"><img src="../../mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
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
    <td colspan="7" bgcolor="#99CC66" background="../../mm_dashed_line.gif"><img src="../../mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
  </tr>
  
   <tr>
    <td colspan="7" bgcolor="#5C743D"><img src="../../mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
  
  </tr>
</table>

</body>
</html>
