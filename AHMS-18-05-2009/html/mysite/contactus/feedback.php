﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<title>Feed Back</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../mm_health_nutr.css" type="text/css" />
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

function validate_name_blank()
{
 var str= document.feed.Field0.value;

 if(IsBlank(str))
 {
  alert("The Name field can't be blank !");

    return false;
  } 
 return true;
}

function validate_email_blank()
{
 var str= document.feed.Field2.value;

 if(IsBlank(str))
 {
  alert("The E-mail field can't be blank !");

    return false;
  } 
 return true;
}


function validate_phone_num()
{
 var str= document.feed.Field3.value;

 if(IsDigit(str))
 {
  alert("The Phone field should be a number !");

    return false;
  } 
 return true;
}




function validate_phone_blank()
{
 var str= document.feed.Field3.value;

 if(IsBlank(str))
 {
  alert("The Phone field can't be blank !");

    return false;
  } 
 return true;
}


function processform()
{
if(!validate_name_blank())
{
 return false;
}

if(!validate_email_blank())
{
 return false;
}

if(!validate_phone_blank())
{
 return false;
}

if(!validate_phone_num())
{
 return false;
}
alert("Thank You For Your Valuable Suggestion..!!");

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
.style2 {font-size: 14px; font-weight: bold; }
.style3 {
	font-size: 12px;
	font-weight: bold;
}
-->
</style>
</head>
<body bgcolor="#F4FFE4">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#D5EDB3">
    <td colspan="2" rowspan="2"><img src="../logo3.jpg" alt="Header image" width="92" height="100" border="0" /></td>
    <td height="50" colspan="2" id="logo" valign="bottom" align="left" nowrap="nowrap"> ADICHUNCHANAGIRI INSTITUTE OF TECHNOLOGY</td>
    <td width="171">&nbsp;</td>
    <td width="43">&nbsp;</td>
  </tr>

  <tr bgcolor="#D5EDB3">
    <td height="51" colspan="3" id="tagline" valign="top" align="center"> AUTOMATED HIERARCHICAL MANAGEMENT SYSTEM </td>
	<td width="20">&nbsp;</td>
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
    <td width="167" height="512" valign="top" bgcolor="#5C743D">
	<table border="0" cellspacing="0" cellpadding="0" width="163" id="navigation">
        <tr>
          <td width="163">&nbsp;<br /></td>
        </tr>
        <tr>
          <td width="163"><a href="../home.php" title="Home">HOME</a></td>
        </tr>
        <tr>
          <td width="163"><a href="../login/login.php" title="Login">LOGIN</a></td>
        </tr>
        <tr>
          <td width="163"><a href="../services/services.php" title="Services">SERVICES</a></td>
        </tr>
        <tr>
          <td width="163"><a href="../aboutus/aboutus.php" title="About Us">ABOUT US</a></td>
        </tr>
        <tr>
          <td width="163"><a href="../contactus/contactus.php" title="Contact">CONTACT</a></td>
        </tr>
      </table>
 	 <br />
  	&nbsp;<br />
  	&nbsp;<br />
  	&nbsp;<br /></td>
    <td width="54"><img src="../mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
    <td colspan="2" valign="top"><img src="../mm_spacer.gif" alt="" width="305" height="1" border="0" /><br />
	&nbsp;&nbsp;<br />
	<table border="0" cellspacing="0" cellpadding="0" width="372">
        <tr>
          <td width="372" class="pageName"><p>&nbsp;</p>
<td width="476" height="95" class="pageName"><p></p>
          </td>
		</tr>
<FORM class="wufoo topLabel" name="feed" enctype="multipart/form-data" method="post" action="/php/feedback.php">
<DIV class="info">

<font color='brown'><H1>We Value Your Feedback</H1></font>
<h2>Thanks a lot for being with us..!!<br><br> Please take a few moments to fill out the following form so that we can get a feeling for how things went and follow up with you on any issues you might have had.</h2>
</DIV>
<br>


<SPAN><h3>
<LABEL class="desc" id="title0" for="Field0">
Name<font color='brown'>&nbsp;*</font>&nbsp;&nbsp;&nbsp;&nbsp;
</LABEL>
</SPAN>

<INPUT id="Field0" name="Field0" class="field text" size="20" tabindex="1" maxlength="45" value="">


<br>
<br>
<SPAN>
<LABEL class="desc" id="title2" for="Field2">
<b>Email<font color='brown'>&nbsp;*</font>&nbsp;&nbsp;&nbsp;&nbsp;</b>
</LABEL>
</SPAN>

<INPUT id="Field2" class="field text medium" name="Field2" tabindex="3" type="text" maxlength="45" value=""> 


<br>
<br>
<SPAN>
<LABEL class="desc" id="title3" for="Field3">
Phone<font color='brown'>&nbsp;*</font>&nbsp;&nbsp;&nbsp;
</LABEL>
</SPAN>

<INPUT id="Field3" name="Field3" class="field text" size="20" type="text" maxlength="15" tabindex="4" value="">
</h3>


<br>

<LABEL class="desc" id="title5">
<h3>1. Was there anything unclear about the services available?</h3>
</LABEL>


<DIV class="col">
<!--<INPUT id="radioDefault_5" name="Field5" type="hidden" value=""> -->

<SPAN><h3>
<INPUT id="Field5_1" name="Field5" class="field radio" type="radio" tabindex="8" value="Yes">
<LABEL class="choice" for="Field5_1">Yes</LABEL>
</SPAN>

<SPAN>
<INPUT id="Field5_0"  checked="checked" name="Field5" class="field radio" type="radio" tabindex="7" value="No">
<LABEL class="choice"  for="Field5_0">No</LABEL>
</SPAN></h3>


</DIV>


<br>
<LABEL class="desc" id="title7">
<h3>2. Did you have trouble locating any information needed?</h3>
</LABEL>

<DIV class="col">



<SPAN><h3>
<INPUT id="Field7_1" name="Field7" class="field radio" type="radio" tabindex="12" value="Yes">
<LABEL class="choice" for="Field7_1">Yes</LABEL>
</SPAN>

<SPAN>
<INPUT id="Field7_0" checked="checked" name="Field7" class="field radio" type="radio" tabindex="11" value="No">
<LABEL class="choice" for="Field7_0">No</LABEL>
</SPAN></h3>



</DIV>




<br>
<LABEL class="desc" id="title8">
<h3>3. How did you hear about our website?</h3>
</LABEL>

<DIV class="col">


<SPAN><h3>
<INPUT id="Field8_0" checked="checked" name="Field8" class="field radio" type="radio" tabindex="13" value="No">
<LABEL class="choice" for="Field8_0">Friend</LABEL>
</SPAN>

<SPAN>
<INPUT id="Field8_1" name="Field8" class="field radio" type="radio" tabindex="14" value="Yes">
<LABEL class="choice" for="Field8_1">Search Engine</LABEL>
</SPAN>

<SPAN>
<INPUT id="Field8_2" name="Field8" class="field radio" type="radio" tabindex="31" value="Yes">
<LABEL class="choice" for="Field8_2">News Media</LABEL>
</SPAN>

<SPAN>
<INPUT id="Field8_3" name="Field8" class="field radio" type="radio" tabindex="32" value="Yes">
<LABEL class="choice" for="Field8_3">Institution Brochure</LABEL>
</SPAN></h3>

</DIV>




<br>
<LABEL class="desc" id="title8">
<h3>4. Please rate the overall content of our website.</h3>
</LABEL>

<DIV class="col">


<SPAN><h3>
<INPUT id="Field9_0" checked="checked" name="Field9" class="field radio" type="radio" tabindex="33" value="No">
<LABEL class="choice" for="Field9_0">Excellent</LABEL>
</SPAN>

<SPAN>
<INPUT id="Field9_1" name="Field9" class="field radio" type="radio" tabindex="34" value="Yes">
<LABEL class="choice" for="Field9_1">Good</LABEL>
</SPAN>

<SPAN>
<INPUT id="Field9_2" name="Field9" class="field radio" type="radio" tabindex="35" value="Yes">
<LABEL class="choice" for="Field9_2">Average</LABEL>
</SPAN>

<SPAN>
<INPUT id="Field9_3" name="Field9" class="field radio" type="radio" tabindex="36" value="Yes">
<LABEL class="choice" for="Field9_3">Poor</LABEL>
</SPAN></h3>

</DIV>



<br>
<LABEL class="desc" id="title8">
<h3>5. Please rate the ease of navigation of our website.</h3>
</LABEL>

<DIV class="col">


<SPAN><h3>
<INPUT id="Field10_0" checked="checked" name="Field10" class="field radio" type="radio" tabindex="37" value="No">
<LABEL class="choice" for="Field10_0">Excellent</LABEL>
</SPAN>

<SPAN>
<INPUT id="Field10_1" name="Field10" class="field radio" type="radio" tabindex="38" value="Yes">
<LABEL class="choice" for="Field10_1">Good</LABEL>
</SPAN>

<SPAN>
<INPUT id="Field10_2" name="Field10" class="field radio" type="radio" tabindex="39" value="Yes">
<LABEL class="choice" for="Field10_2">Average</LABEL>
</SPAN>

<SPAN>
<INPUT id="Field10_3" name="Field10" class="field radio" type="radio" tabindex="40" value="Yes">
<LABEL class="choice" for="Field10_3">Poor</LABEL>
</SPAN></h3>

</DIV>



<br>
<LABEL class="desc" id="title8">
<h3>6. Please rate the overall look of our website.</h3>
</LABEL>

<DIV class="col">


<SPAN><h3>
<INPUT id="Field11_0" checked="checked" name="Field11" class="field radio" type="radio" tabindex="41" value="No">
<LABEL class="choice" for="Field11_0">Excellent</LABEL>
</SPAN>

<SPAN>
<INPUT id="Field11_1" name="Field11" class="field radio" type="radio" tabindex="42" value="Yes">
<LABEL class="choice" for="Field11_1">Good</LABEL>
</SPAN>

<SPAN>
<INPUT id="Field11_2" name="Field11" class="field radio" type="radio" tabindex="43" value="Yes">
<LABEL class="choice" for="Field11_2">Average</LABEL>
</SPAN>

<SPAN>
<INPUT id="Field11_3" name="Field11" class="field radio" type="radio" tabindex="44" value="Yes">
<LABEL class="choice" for="Field11_3">Poor</LABEL>
</SPAN>

</DIV>




<br>
<LABEL class="desc" id="title8">
<h3>7. Did you find the information you were looking for on our website?</h3>
</LABEL>

<DIV class="col">


<SPAN><h3>
<INPUT id="Field12_0" checked="checked" name="Field12" class="field radio" type="radio" tabindex="45" value="No">
<LABEL class="choice" for="Field12_0">Yes</LABEL>
</SPAN>

<SPAN>
<INPUT id="Field12_1" name="Field12" class="field radio" type="radio" tabindex="46" value="Yes">
<LABEL class="choice" for="Field12_1">No</LABEL>
</SPAN></h3>



</DIV>


<br>

<LABEL id="title9" class="desc" for="Field9">
<h3>8. Please share any additional feedback or suggestions you think may help us in improving our site.</h3> 
</LABEL>

<DIV>
<TEXTAREA id="Field13" class="field textarea medium" name="Field13" rows="10" cols="50" tabindex="16"></TEXTAREA>

</DIV>




<INPUT id="saveForm" class="btTxt" type="submit" tabindex="17" value="Submit" onclick="return processform()">


</FORM>
 <p class="style2">&nbsp;</p>	      </td>
        </tr>
      </table>
	 
	<p><br />
	  &nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p><br />	
    </p></td>
    <td width="171"><img src="../mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
<td width="43" valign="top"><br />
		&nbsp;<br />
		<table border="0" cellspacing="0" cellpadding="0" width="43" id="leftcol">

	   <tr>
       <td width="10"><img src="../mm_spacer.gif" alt="" width="10" height="1" border="0" /></td>
		<td width="30" class="smallText"><br />
			<p><br />
			&nbsp;<br />          
			</p>

			</td>
         <td width="10">&nbsp;</td>
        </tr>
      </table>	</td>
	<td width="3">&nbsp;</td>
  </tr>
  <tr>
   <td width="167"><img src="../mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>

  </tr>
      
      
  <tr>
    <td colspan="7" bgcolor="#5C743D"><img src="../mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>

  <tr>
    <td colspan="7" bgcolor="#99CC66" background="../mm_dashed_line.gif"><img src="../mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
  </tr>

  <tr bgcolor="#99CC66">
  	<td colspan="7" id="dateformat" height="20">
    
     <div id="footer">
  <div class='copyright'> <div align="center">  <b><a href="../home.php">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../aboutus/aboutus.php"> About Us</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="feedback.php">Send Feedback</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="contactus.php">Contact Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="help.php"> Help </a> </b></div></div></div>
   
    <div id="footer">
  <div class='copyright'> <div align="center">Copyright © 2009 AHMS India Pvt Ltd. All rights reserved. </div>
</div>
   <div class='bestview'> <div align="center"> <div align="center">Best viewed in Mozilla 5.0 or IE 7.0 and above - Recommended screen resolution 1024 X 768   </div>
   </div> 
          
   	</td>
       
  </tr>
      
  
  <tr>
    <td colspan="7" bgcolor="#99CC66" background="../mm_dashed_line.gif"><img src="../mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
  </tr>
  
   <tr>
    <td colspan="7" bgcolor="#5C743D"><img src="../mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>

</table>
</body>
</html>
