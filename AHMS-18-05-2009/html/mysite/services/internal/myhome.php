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
.style4 {
	font-size: 16px;
	font-weight: bold;
	color: #99CC66;
}
.style6 {
	color: #993300;
	font-weight: bold;
	font-size: 14px;
}
-->
</style>
</head>
<body bgcolor="#F4FFE4">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#D5EDB3">
    <td colspan="3" rowspan="2"><img src="../../logo3.jpg" alt="Header image" width="92" height="100" border="0" /></td>
    <td height="50" colspan="3" id="logo" valign="bottom" align="left" nowrap="nowrap"> ADICHUNCHANAGIRI INSTITUTE OF TECHNOLOGY</td>
    <td width="20">&nbsp;</td>
  </tr>

  <tr bgcolor="#D5EDB3">
    <td height="51" colspan="3" id="tagline" valign="top" align="left"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; AUTOMATED HIERARCHICAL MANAGEMENT SYSTEM </td>
	<td width="20">&nbsp;</td>
  </tr>

  <tr>
    <td colspan="7" bgcolor="#5C743D"><img src="../../mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>

  <tr>
    <td colspan="7" bgcolor="#99CC66" background="../../mm_dashed_line.gif"><img src="../../mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
  </tr>

  <tr bgcolor="#99CC66">
  	<td colspan="7" id="dateformat" height="20">&nbsp;&nbsp;<script language="JavaScript" type="text/javascript">
      document.write(TODAY);	</script>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../../login/editprofile.php" title="">EDIT MY PROFILE</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../../login/changepsswd_emp.php" title="">CHANGE MY PASSWORD</a>

	</td>
  </tr>
  <tr>
    <td colspan="7" bgcolor="#99CC66" background="../../mm_dashed_line.gif"><img src="../../mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
  </tr>

  <tr>
    <td colspan="7" bgcolor="#5C743D"><img src="../../mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>

 <tr>
    <td width="167" valign="top" bgcolor="#5C743D">
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
          <td width="165"><a href="../../login/logout.php" title="logout">LOGOUT</a></td>
        </tr>
      </table>
 	 <br />
  	&nbsp;
  	&nbsp;<br />
  	&nbsp;<br /> 	</td>
    <td width="50"><img src="../../mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
    <td colspan="2" valign="top"><img src="../../mm_spacer.gif" alt="" width="5" height="1" border="0" /><br />
      <table width="241" border="0" cellpadding="0" cellspacing="0" bordercolor="#000000">
        
<tr>
<td width="252" height="26" class="pageName"><p>
 
        <? 
  
  $usrname=$_SESSION['usrname'];

  
$mysql=mysql_connect("localhost","apache","ahms");
$res=mysql_db_query("student","select name from studinfo where uid='$usrname'");

$r=mysql_fetch_row($res);

foreach($r as $f)
{
 
echo "<font color='brown'><b>  $f's </b></font>";

}
?>
  Home  </p>
          </td>
		</tr>

		<tr>
          <td height="341" class="bodyText">
         

<br><br>             
<?
 
$res=mysql_db_query("student","select jobid,subject,comment from helpdesk_ans where uid='$usrname'");
?>


<?while($array=mysql_fetch_row($res)):?>
<center><table border="2" width="600">

<tr>
<td>
<h2><center>This reply is regarding your request for Help bearing Jobid:<font color='brown'><b> <?echo $array[0];?> </b></font></center><br><br>Subject:<?echo $array[1];?><br>Answer:<br><?echo $array[2];?><br><br><br><center>Press OK to add this message to your Message Box.!!</center><br><h2>

<center>
<form method="post" action="/php/help_ok.php">
<label>
<input type="submit" name="submit" class="style7" value="        O K        ">
</label>

<input name="text" type="hidden" value="<? echo $array[0];?>"> 

</form>
</center> 
</td>
</tr>


</table>
<br>
       
<?endwhile; ?>


          <p class="style3">

<?
 
$res=mysql_db_query("student","select jobid,euid from ackn where uid='$usrname' group by jobid");
?>


<?while($array=mysql_fetch_row($res)):?>
<center><table border="2" width="600">
<tr>
<td>
<h2>Please Acknowledge...<br>Did you receive Complete Assistance on Job ID:<font color='brown'><b> <?echo $array[0];?> ??</b></font><h2>
</td>

<td>
<form action="/php/ackn_yes.php" method="post" name="" class="subHeader" id="form2">
<label>
<input name="button1" type="submit" class="style7" id="button1" value="Yes" /> 
<input name="text" type="hidden" value="<? echo $array[0];?>"> 
<input name="text1" type="hidden" value="<? echo $array[1];?>">
</label>
</td>

<td>
</form><form action="/php/ackn_no.php" method="post" name="" class="subHeader" id="form2">
<label>
<input name="button1" type="submit" class="style7" id="button1" value="No" /> 
<input name="text" type="hidden" value="<? echo $array[0];?>"> 
<input name="text1" type="hidden" value="<? echo $array[1];?>">
</label>
</form>
</td>

</tr>
</table>
<br>
<?endwhile; ?>


         


          <p class="style3">&nbsp;</p>
           <p class="style3">&nbsp;</p>
          <p class="style3">&nbsp;</p>
          <p class="style3">&nbsp;</p>
          <p class="style3">&nbsp;</p>
</td>
		</tr>
		<tr>
		  <td height="195" class="bodyText"><p>&nbsp;</p>
	      </td>
	    </tr>
      </table>

	 <br />
	&nbsp;<br />	</td>
    <td width="50"><img src="../../mm_spacer.gif" alt="" width="310" height="1" border="0" /></td>
        <td width="252" valign="top"><span class="style4"><br>ROLE</span>
          : <span class="style6">

&nbsp;&nbsp;STUDENT
            </span>
          <table border="0" cellspacing="0" cellpadding="0" width="290" id="leftcol">

	   <tr>
       <td width="10"><img src="../../mm_spacer.gif" alt="" width="10" height="1" border="0" /></td>
		<td width="170" class="smallText"><br />
			<p><span class="style4"><br>ONLINE USERS</span> 
<span class="style6">

<?	

$res=mysql_db_query("student","select name from logged group by name");
while($arr=mysql_fetch_row($res))
{
echo "<h3>&nbsp;&nbsp;&nbsp;".$arr[0];
echo "<br></h3>";

}
?>
</span>

		
			
 </p>
			 <br />
			&nbsp;<br />          </td>
         <td width="10">&nbsp;</td>
        </tr>
      </table>	</td>
	<td width="20">&nbsp;</td>
  </tr>
  <tr>
    <td width="167">&nbsp;</td>
    <td width="50">&nbsp;</td>
    <td>&nbsp;</td>
    <td width="435">
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
    
   </td>
    
  </tr>
</table>

</body>
</html>
