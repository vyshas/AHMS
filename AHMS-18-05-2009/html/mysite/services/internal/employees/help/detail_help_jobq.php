<? session_start();
if(!isset($_SESSION['employee_usrname']) && ($_SESSION['employee_usrname']==''))
{
header("location:/mysite/login/login.php");
}

$role='HELPDESK MANAGER';
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
-->
</style>
</head>
<body bgcolor="#F4FFE4">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#D5EDB3">
    <td colspan="3" rowspan="2"><img src="../../../../logo3.jpg" alt="Header image" width="92" height="100" border="0" /></td>
    <td height="50" colspan="1" id="logo" valign="bottom" align="left" nowrap="nowrap"> ADICHUNCHANAGIRI INSTITUTE OF TECHNOLOGY</td>
    <td width="15">&nbsp;</td> <td width="15">&nbsp;</td> <td width="15">&nbsp;</td>
  </tr>

  <tr bgcolor="#D5EDB3">
    <td height="51" colspan="3" id="tagline" valign="top" align="center"> AUTOMATED HIERARCHICAL MANAGEMENT SYSTEM </td>
	<td width="15">&nbsp;</td>
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
    <td width="165" valign="top" bgcolor="#5C743D">
	<table border="0" cellspacing="0" cellpadding="0" width="165" id="navigation">
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
          <td width="165"><a href="../emp_services.php" title="Sevices">SERVICES</a></td>
        </tr>
        <tr>
          <td width="165"><a href="emp_help.php" title="Help">HELP</a></td>
        </tr>
        <tr>
          <td width="165"><a href="../../../../login/logout.php" title="Logout">LOGOUT</a></td>
        </tr>
      </table>
 	 <br />
  	&nbsp;
  	&nbsp;<br />
  	&nbsp;<br /> 	</td>
    <td width="50"><img src="../../../..//mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
    <td colspan="2" valign="top"><img src="../../../..//mm_spacer.gif" alt="" width="305" height="1" border="0" /><br />
	&nbsp;<br />
	&nbsp;<br />
	<table width="356" border="0" cellpadding="0" cellspacing="0" bordercolor="#000000">
        <tr>
          <td width="356" height="95" class="pageName"><p>My Job Queue</p>
          </td>
	


	<tr>
          <td height="400" class="bodyText">

<?  
$uid=$_POST["text"];
$usrname=$_SESSION['usrname'];
$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");


$res=mysql_db_query("student","select name,subject,comment,uid from helpdesk where uid='$uid'") or die("cannot query");

?>
<?while($array=mysql_fetch_row($res)):?>
  
		

			<p><span class="subHeader">Name :  </span>
		 	 <?echo $array[0];?> </p> 

			<p><span class="subHeader">Subject : </span>
			<?echo $array[1];?>  </p>

			<p><span class="subHeader">Details : </span>
			<?echo $array[2];?>  </p>

       

<form action="/php/help_reply.php" method="post" name="" class="subHeader" id="form2">
  



			 <p class="subHeader">Comment</p>
              <p class="style5">
                <label>
                <textarea name="textarea" id="textarea" cols="45" rows="5"></textarea>
                </label>
              </p>            
<center>
  <input type="submit" name="button" id="button" value="R E P L Y"></center>

                
              
        <input name="text" type="hidden" value="<? echo $uid;?>"> 
         <input name="subj" type="hidden" value="<? echo $array[1];?>">    
            </form>





<?endwhile?>






	
          
         <p class="style3">&nbsp;</p>
            <p class="style3">&nbsp;</p>
          <p class="style3">&nbsp;</p>
          <p class="style3">&nbsp;</p>
          <p class="style3">&nbsp;</p></td>
		</tr>
		<tr>
		  <td height="195" class="bodyText"><p>&nbsp;</p>
	      







</td>
	    </tr>
      </table>
	 <br />
	&nbsp;<br />	</td>
    <td width="50"><img src="../../../../mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
        <td width="190" valign="top"><br />
		&nbsp;<br /></td>
        <td width="15">&nbsp;</td>
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

</body>
</html>
