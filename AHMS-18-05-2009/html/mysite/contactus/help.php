﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
          <p>HELP</p></td>
		</tr>

 

		<tr>
          <td class="bodyText"><form method="post" action="">
            

<center><table  border="2">
<tr>
 <th><span class="subHeader"><h2>Employee Name</h2></span></th>
 <th><span class="subHeader"><h2>Role</h2></span></th>
 <th><span class="subHeader"><h2>Contact Details</h2></span></th>

</tr>



<?
$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");


$res=mysql_db_query("student","select name,role,email from employees") or die("cannot fetch");



while($array=mysql_fetch_row($res)):?>
<tr>

<td><h2> <center><? echo $array[0];?></center> </h2></td>
 <td><h2> <center> <?echo $array[1]; ?> </center> </h2></td> 
<td><h2> <center> <?echo $array[2]; ?> </center> </h2></td>


 


</tr>


<?endwhile; ?>
</table></center>








          </form>            <p class="style2">&nbsp;</p>	      </td>
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
