<? session_start();
if(!isset($_SESSION['employee_usrname']) && ($_SESSION['employee_usrname']==''))
{
header("location:/mysite/login/login.php");
}
?>


<?
$_SESSION['pageurl']= $_SERVER["REQUEST_URI"];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<title>Home Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../mm_health_nutr.css" />
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
.style5 {
	font-size: 16px;
	font-weight: bold;
	color: #CC0000;
}
.style6 {font-size: 16px}
.style7 {
	color: #CC0000;
	font-weight: bold;
}
.style2 {font-size: 14px; font-weight: bold; }
.style8 {
	margin-top: 0px;
}
-->
</style>
</head>
<body bgcolor="#F4FFE4">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#D5EDB3">
    <td colspan="2" rowspan="2"><img src="../logo3.jpg" alt="Header image" width="92" height="100" border="0" /></td>
    <td height="50" colspan="2" id="logo" valign="bottom" align="left" nowrap="nowrap"> ADICHUNCHANAGIRI INSTITUTE OF TECHNOLOGY</td>
    <td width="10">&nbsp;</td>  <td width="10">&nbsp;</td>




  </tr>

  <tr bgcolor="#D5EDB3">
    <td height="51" colspan="3" id="tagline" valign="top" align="center"> AUTOMATED HIERARCHICAL MANAGEMENT SYSTEM </td>
	<td width="18">&nbsp;</td>
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
          <td width="165"><a href="../services/internal/employees/emp_myhome.php" title="My Home">MY HOME</a></td>
        </tr>
	<tr>
          <td width="165"><a href="../services/internal/employees/emp_history.php" title="services">MY HISTORY</a></td>
        </tr>  
        <tr>
          <td width="165"><a href="../services/internal/employees/mymail_emp.php" title="My Mail">MY MAIL</a></td>
        </tr>       
	<tr>
          <td width="165"><a href="../services/internal/employees/jobq.php" title="My Job Queue">MY JOB QUEUE</a></td>
        </tr>
        <tr>
          <td width="165"><a href="../services/internal/employees/emp_services.php" title="services">SERVICES</a></td>
        </tr>
        <tr>
          <td width="165"><a href="../services/internal/employees/help/emp_help.php" title="help">HELP</a></td>
        </tr>
        <tr>
          <td width="165"><a href="logout.php" title="logout">LOGOUT</a></td>
        </tr>
      </table>
 	 <br />
  	&nbsp;<br />
  	&nbsp;<br />
  	&nbsp;<br /> 	</td>
    <td width="50"><img src="../mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
    <td colspan="2" valign="top"><p><img src="../mm_spacer.gif" alt="" width="305" height="1" border="0" /><br />
        <span class="style6">&nbsp;<br />
      &nbsp;<span class="style7"></span></span></p>
<?
session_start();
$uid=$_SESSION["usrname"];
$name=$_POST["text"];

$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");
$res=mysql_db_query("student","select * from employees where uid='$uid'") or die("cannot query");
  

while($arr=mysql_fetch_row($res))
{

  $name=$arr[0];

  $dob=$arr[1]; 
  $addr=$arr[2];
  $phone=$arr[3]; 
  $uid=$arr[4];
$psswd=$arr[5]; 
  $role=$arr[6];
$class=$arr[7]; 
$email=$arr[12];
  }


?>

<p>
<img src="../pdf.jpeg" alt="Header image" width="20" height="20" border="0" />

 <a href="http://localhost/html2pdf/index.php" target="_blank">GET PDF</a>
      <p class="style5">Edit&nbsp; Your&nbsp; Profile.</p>
      <table border="0" cellspacing="0" cellpadding="0" style="width: 421px">
        <tr>
          <td width="423" class="pageName">&nbsp;</td>
		</tr>

		<tr>
          <td class="bodyText">
<form method="post" action="/php/update_profile_emp.php">

<?ob_start(); ?>
            <fieldset name="Group1" style="width: 443px">
       
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <br />
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style2"> Name<font color='brown'>&nbsp;*</font>   		&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;
            <input name="name" type="text" size="20" value="<? echo $name ?>"/><br/>


<br><br>

<span class="style2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date Of Birth<font color='brown'>&nbsp;*</font>   		&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input name="dob" type="text" size="20" value="<? echo $dob ?>"readonly/><br/>
<br><br>
<span class="style2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; User ID<font color='brown'>&nbsp;*</font>   		&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
            <input name="uid" type="text" size="20" value="<? echo $uid ?>"/><br/>

&nbsp;<br><br>

<span class="style2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Password<font color='brown'>&nbsp;*</font>   		&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input name="psswd" type="password" size="20" value="<? echo $psswd ?>"readonly/><br/>

<br><br>

<span class="style2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Role<font color='brown'>&nbsp;*</font>   		&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
            <input name="role" type="text" size="30" value="<? echo $role ?>"readonly/><br/>

<br><br>
<span class="style2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Class<font color='brown'>&nbsp;*</font>   		&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
            <input name="class" type="text" size="20" value="<? echo $class ?>"readonly/><br/>
<br><br>
<span class="style2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; E-mail<font color='brown'>&nbsp;*</font>   		&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
            <input name="email" type="text" value="<? echo $email ?>"/><br />
		<br />
&nbsp;&nbsp;<br />

<br><br>
<span class="style2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Phone<font color='brown'>&nbsp;*</font>   		&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
            <input name="phone" type="text" value="<? echo $phone ?>"/><br />
		<br />
&nbsp;&nbsp;<br />
<br><br>
<span class="style2">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address<font color='brown'>&nbsp;*</font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <textarea name="addr" id="textarea" cols="20" style="height: 83px; width: 174px;" class="style8" rows="1" />

<? echo $addr; ?>

</textarea><br>
		<br />
		<br />
		<br />


<?
$htmlbody = ob_get_contents();

$_SESSION['content']=$htmlbody;
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input name="Submit1" type="submit" value="Update" /><br />
		<br />
		<br />
		<br />
		<br />
		</li>

</form>




            </fieldset></td>
        </tr>
      </table>
	 
	<p><br />
	  &nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p><br />	
    </p></td>
    <td width="656"><img src="../mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
<td width="10" valign="top"><br />
		&nbsp;<br />
		<table border="0" cellspacing="0" cellpadding="0" width="10" id="leftcol">

	   <tr>
       <td width="10">&nbsp;</td>
        </tr>
    </table>	</td>
	<td width="18">&nbsp;</td>
  </tr>
  <tr>
    
    <td width="165"><img src="../mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>

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
  <div class='copyright'> <div align="center">  <b><a href="home.php">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="aboutus/aboutus.php"> About Us</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="contactus/feedback.txt">Send Feedback</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="contactus/contactus.php">Contact Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="contactus/help.txt"> Help </a> </b></div></div></div>
   
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
