<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<title>Login Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../mm_health_nutr.css" type="text/css" />
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
 var str= document.reg.name1.value;

 if(IsBlank(str))
 {
  alert("The Name field can't be blank !");

    return false;
  } 
 return true;
}


function validate_key()
{
 var str= document.reg.sk.value;

 if(IsBlank(str))
 {
  alert("The Secret Key field can't be blank !");

    return false;
  } 
 return true;
}

function validate_psswd()
{
 var str= document.reg.psswd.value;

 if(IsBlank(str))
 {
  alert("The Password field can't be blank !");

    return false;
  } 
 return true;
}



function validate_branch()
{
 var str= document.reg.branch.value;

 if(IsBlank(str))
 {
  alert("The Branch field can't be blank !");

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

if(!validate_key())
{
 return false;
}

if(!validate_psswd())
{
 return false;
}

if(!validate_branch())
{
 return false;
}


}  










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
          <td width="163"><a href="login.php" title="Login">LOGIN</a></td>
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

<p> <?
session_start(); 
$flag=$_SESSION['flag'];
if($flag=="no")
{
 echo "<font color='red'>You were unable to be registered with A H M S..!!</font>";
 echo "<br><br>";
 echo "<font color='red'>Your 'Name' or 'Secret Registration Key' is INVALID..!!</font>";
}
else if($flag=="yes")
{
 echo "<font color='brown'>You have been Successfully registered with A H M S..!!</font>";
}

?> </p>

          <p>Registration</p></td>
		</tr>

 

		<tr>
          <td class="bodyText">
<form method="post" name="reg" action="/php/reg_student.php">
            <fieldset name="Group1">
       
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <br />
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style2"> Name<font color='brown'>&nbsp;*</font>   		&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
            <input name="name1" type="text"  /><br/>

<br><br>
<span class="style2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Secret Key<font color='brown'>&nbsp;*</font>   		&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
            <input name="sk" type="text"  /><br/>
<br><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style2">&nbsp;  		Date-of-Birth&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  	<span class="style2">	yyyy </span>
  <select name="yyyy" tabindex="3">
    <option>1972</option>
    <option>1973</option>
    <option>1974</option>
    <option>1975</option>
    <option>1976</option>
    <option>1977</option>
    <option>1978</option>
    <option>1979</option>
    <option>1980</option>
    <option>1981</option>
    <option>1982</option>
    <option>1983</option>
    <option>1984</option>
    <option>1985</option>
    <option>1986</option>
    <option>1987</option>
  </select>
  &nbsp;<span class="style2"> mm </span>
  <select name="mm">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
    <option>9</option>
    <option>10</option>
    <option>11</option>
    <option>12</option>
  </select>
           <span class="style2"> dd </span>
            <select name="dd">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
              <option>11</option>
              <option>12</option>
              <option>13</option>
              <option>14</option>
              <option>15</option>
              <option>16</option>
              <option>17</option>
              <option>18</option>
              <option>19</option>
              <option>20</option>
              <option>21</option>
              <option>22</option>
              <option>23</option>
              <option>24</option>
              <option>25</option>
              <option>26</option>
              <option>27</option>
              <option>28</option>
              <option>29</option>
              <option>30</option>
              <option>31</option>
            </select><br/>
<br><br>

<span class="style2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sex<font color='brown'>&nbsp;*</font> <span class="style2">&nbsp;   		Sex&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;    		Male
  <input name="gender" type="radio" value="m" checked="checked"/>
  &nbsp;&nbsp;&nbsp;   		Female
  <input name="gender" type="radio" value="f" />

<br><br>


<span class="style2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Password<font color='brown'>&nbsp;*</font>   		&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input name="psswd" type="password" /><br/>

<br><br>

<span class="style2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Branch<font color='brown'>&nbsp;*</font>   		&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
            <input name="branch" type="text" /><br/>

<br><br>

<span class="style2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Semester<font color='brown'>&nbsp;*</font>   		&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input name="sem" type="text" /><br/>

<br><br>

<span class="style2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Section<font color='brown'>&nbsp;*</font>   		&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
            <input name="section" type="text" /><br/>

<br><br>

<span class="style2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; E-mail<font color='brown'>&nbsp;*</font>   		&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
            <input name="email" type="text"  /><br/>


<br><br>
<span class="style2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Phone<font color='brown'>&nbsp;*</font>   		&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
            <input name="phone" type="text" /><br />
		<br />
&nbsp;&nbsp;<br />
<span class="style2">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;Address<font color='brown'>&nbsp;*</font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <textarea name="addr" id="textarea" cols="20" style="height: 83px; width: 174px;" class="style8" rows="4"  />
</textarea><br>
		<br />
		<br />
		<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input name="Submit1" type="submit" value="Update" onclick="return processform()"/><br />
		<br />
		<br />
		<br />
		<br />
		</li>




            </fieldset>
          </form>              <p class="style2">&nbsp;</p>	      </td>
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
  <div class='copyright'> <div align="center">  <b><a href="home.php">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="aboutus/aboutus.php"> About Us</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../contactus/feedback.php">Send Feedback</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="contactus/contactus.php">Contact Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../contactus/help.php"> Help </a> </b></div></div></div>
   
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
