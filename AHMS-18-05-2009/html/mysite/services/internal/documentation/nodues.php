<? session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<title>Home Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../../../mm_health_nutr.css" />

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
-->
</style>
</head>
<body bgcolor="#F4FFE4">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#D5EDB3">
    <td colspan="3" rowspan="2"><img src="../../../logo3.jpg" alt="Header image" width="92" height="100" border="0" /></td>
    <td height="50" colspan="1" id="logo" valign="bottom" align="left" nowrap="nowrap"> ADICHUNCHANAGIRI INSTITUTE OF TECHNOLOGY</td>
    <td width="20">&nbsp;</td><td width="20">&nbsp;</td><td width="20">&nbsp;</td>
  </tr>

  <tr bgcolor="#D5EDB3">
    <td height="51" colspan="3" id="tagline" valign="top" align="center"> AUTOMATED HIERARCHICAL MANAGEMENT SYSTEM </td>
	<td width="20">&nbsp;</td>
  </tr>

  <tr>
    <td colspan="7" bgcolor="#5C743D"><img src="../../../mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>

  <tr>
    <td colspan="7" bgcolor="#99CC66" background="../../../mm_dashed_line.gif"><img src="../../../mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
  </tr>

  <tr bgcolor="#99CC66">
  	<td colspan="7" id="dateformat" height="20">&nbsp;&nbsp;<script language="JavaScript" type="text/javascript">
      document.write(TODAY);	</script>	</td>
  </tr>
  <tr>
    <td colspan="7" bgcolor="#99CC66" background="../../../mm_dashed_line.gif"><img src="../../../mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
  </tr>

  <tr>
    <td colspan="7" bgcolor="#5C743D"><img src="../../../mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>



<?
   $usrname=$_SESSION['usrname'];

 
$mysql=mysql_connect("localhost","apache","ahms") or die("Cannot connect");
$res=mysql_db_query("student","select usn from studinfo where uid='$usrname'") or die("Cannot query");

$r=mysql_fetch_row($res);

foreach($r as $f)
{
 $usn=$f;  
}



$res=mysql_db_query("student","select status from nodues where usn='$usn'");
$r=mysql_fetch_row($res);

foreach($r as $f)
{
  $status=$f;
}


if($status=='y')
{
 header("location:/mysite/services/internal/documentation/nodues_status.php");
}


?>



 <tr>
    <td width="165" valign="top" bgcolor="#5C743D">
	<table border="0" cellspacing="0" cellpadding="0" width="165" id="navigation">
        <tr>
          <td width="165">&nbsp;<br /></td>
        </tr>
        <tr>
          <td width="165"><a href="../myhome.php" title="My Home">MY HOME</a></td>
        </tr>
        <tr>
          <td width="165"><a href="../myhistory.php" title="My History">MY HISTORY</a></td>
        </tr>
 <tr>
          <td style="width: 165px"><a href="../mymail.php" title="My Mail">MY MAIL</a></td>
        </tr>

        <tr>
          <td width="165"><a href="../services_internal.php" title="Services">SERVICES</a></td>
        </tr>
        <tr>
          <td width="165"><a href="../../../login/helpdesk.php" title="Help">HELP</a></td>
        </tr>
        <tr>
          <td width="165"><a href="../../../login/logout.php" title="Logout">LOGOUT</a></td>
        </tr>
      </table>
 	 <br />
  	&nbsp;
  	&nbsp;<br />
  	&nbsp;<br /> 	</td>
    <td width="50"><img src="../../../mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
    <td colspan="2" valign="top"><img src="../../../mm_spacer.gif" alt="" width="305" height="1" border="0" /><br />
    &nbsp;
	<table width="445" border="0" cellpadding="0" cellspacing="0" bordercolor="#000000">
        <tr>
          <td width="445" height="33" class="pageName"><p>No-Dues Certificate</p>
          </td>
		</tr>

		<tr>
          <td height="195" class="bodyText">

<?

$mysql=mysql_connect("localhost","apache","ahms") or die("Cannot connect");
$res=mysql_db_query("student","select amnt,misc from nodues,nodues_branch,studinfo where uid='$usrname' and studinfo.branch=nodues_branch.branch and studinfo.usn=nodues.usn;") or die("Cannot query");

$res1=mysql_db_query("student","select amnt from nodues_branch where branch='Administration'");
$r=mysql_fetch_row($res1);

foreach($r as $f)
{
  $admin=$f;
}

$res2=mysql_db_query("student","select amnt from nodues_branch where branch='Library'");
$r=mysql_fetch_row($res2);

foreach($r as $f)
{
  $lib=$f;
}

 
?>
<br> <br>



<center><table border="2">

<tr>
 
 <th> <span class="subHeader"><h1>Branch</h1></span></th>
 <th><span class="subHeader"><h1>Miscellaneous</h1></span></th>
 <th><span class="subHeader"><h1>Administration</h1></span></th>
 <th><span class="subHeader"><h1>Library</h1></span></th>

</tr>

<?while($array=mysql_fetch_row($res)): ?>
<tr>
  <td><h1> <center> <?echo $array[0];?> </center> </h1></td>
  <td><h1> <center> <?echo $array[1]; ?> </center> </h1></td> 
  <td><h1> <center> <?echo $admin; ?>   </center> </h1></td>
  <td><h1> <center> <?echo $lib; ?>   </center> </h1></td> 
<?$result=$array[0]+$array[1]+$admin+$lib;?>

</tr>

<?endwhile; ?>


</table></center>
<br><br><br>
<center><table border="2">
<b>
<tr>
 <th><span class="subHeader"><h1>Total</h1></span></th>
<th><h1><?   echo $result; ?> <h1></th>

</tr>
</table></center> 



          <p class="style3">&nbsp;</p>
            <p class="style3">&nbsp;</p>
          <p class="style3">&nbsp;</p>
          <p class="style3">&nbsp;</p>
          <p class="style3">&nbsp;</p></td>
		</tr>
		<tr>
		  <td height="51" class="bodyText"><p>&nbsp;</p>
	      </td>
	    </tr>
      </table>
	 <br />
	&nbsp;<br />	</td>
    <td width="50"><img src="../../../mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
        <td width="252" valign="top"><br />
		&nbsp;<br /></td>
        <td width="20">&nbsp;</td>
  </tr>
  <tr>
      <tr>
    <td colspan="7" bgcolor="#5C743D"><img src="../../../mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
  </tr>

  <tr>
    <td height="3" colspan="7" background="../../../mm_dashed_line.gif" bgcolor="#99CC66"><img src="../../../mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
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
    <td colspan="7" bgcolor="#99CC66" background="../../../mm_dashed_line.gif"><img src="../../../mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
  </tr>
  
   <tr>
    <td colspan="7" bgcolor="#5C743D"><img src="../../../mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
  
 
  </tr>
</table>

</body>
</html>
