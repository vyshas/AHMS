<? session_start();
if(!isset($_SESSION['student_usrname']) && ($_SESSION['student_usrname']==''))
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
.style5 {font-size: 12px}
-->
</style>
</head>
<body bgcolor="#F4FFE4">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#D5EDB3">
    <td colspan="3" rowspan="2"><img src="../../logo3.jpg" alt="Header image" width="92" height="100" border="0" /></td>
    <td height="50" colspan="1" id="logo" valign="bottom" align="left" nowrap="nowrap"> ADICHUNCHANAGIRI INSTITUTE OF TECHNOLOGY</td>
    <td width="20">&nbsp;</td><td width="20">&nbsp;</td><td width="20">&nbsp;</td>
  </tr>

  <tr bgcolor="#D5EDB3">
    <td height="51" colspan="3" id="tagline" valign="top" align="center"> AUTOMATED HIERARCHICAL MANAGEMENT SYSTEM </td>
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
      document.write(TODAY);	</script>	</td>
  </tr>
  <tr>
    <td colspan="7" bgcolor="#99CC66" background="../../mm_dashed_line.gif"><img src="../../mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
  </tr>

  <tr>
    <td colspan="7" bgcolor="#5C743D"><img src="../../mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>

 <tr>
    <td width="166" valign="top" bgcolor="#5C743D">
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
  	&nbsp;<br />
  	&nbsp;<br />
  	&nbsp;<br /> 	</td>
    <td width="50"><img src="../../mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
    <td colspan="2" valign="top"><img src="../../mm_spacer.gif" alt="" width="305" height="1" border="0" /><br />
	&nbsp;&nbsp;
	<table width="536" height="685" border="0" cellpadding="0" cellspacing="0" bordercolor="#000000">
        <tr>
          



<td width="536" height="26" class="pageName"><p>My History</p>
          </td>
		</tr>


<p>
<img src="../../pdf.jpeg" alt="Header image" width="20" height="20" border="0" />
 <a href="http://localhost/html2pdf/index.php" target="_blank">GET PDF</a>



<?$usrname=$_SESSION['usrname'];

 $select=$_POST['Select1'];
$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");

if($select=='ALL' || $select=='')
{

$s1='selected="selected"';
$res=mysql_db_query("student","select distinct(jobid),date,requesttype,time,status from history where uid='$usrname' group by jobid order by date") or die("Cannot query");
}
else if($select=='PENDING')
{
$s2='selected="selected"';
$res=mysql_db_query("student","select distinct(jobid),date,requesttype,time,status from history where uid='$usrname' and status='Pending' group by jobid order by date") or die("Cannot query");
} 

else if($select=='DONE')
{
$s3='selected="selected"';
$res=mysql_db_query("student","select distinct(jobid),date,requesttype,time,status from history where uid='$usrname' and status='Done' group by jobid order by date") or die("Cannot query");
} 

else if($select=='FAILED')
{
$s4='selected="selected"';
$res=mysql_db_query("student","select distinct(jobid),date,requesttype,time,status from history where uid='$usrname' and status='Failed' group by jobid order by date") or die("Cannot query");
} 

else if($select=='WAITING FOR ACKN')
{
$s5='selected="selected"';
$res=mysql_db_query("student","select distinct(jobid),date,requesttype,time,status from history where uid='$usrname' and status='Waiting for ACKN' group by jobid order by date") or die("Cannot query");
} 
?>






<form id="formid" name="sort" method="POST" action="/mysite/services/internal/myhistory.php">
		<tr>
          <td height="100" class="bodyText">
            <p class="style3">&nbsp;&nbsp; &nbsp;&nbsp;ORDER BY&nbsp;&nbsp;&nbsp; &nbsp;
<select id="selectid" name="Select1"  style="width: 178px" onchange="this.form.submit();">
<option "<?echo $s1?>">ALL</option>
<option "<?echo $s2?>">PENDING</option>
<option "<?echo $s5?>">WAITING FOR ACKN</option>
<option "<?echo $s3?>">DONE</option>
						
<option "<?echo $s4?>">FAILED</option>
			</select>



</form>
		<tr>
          <td height="100" class="bodyText">
        
<?ob_start(); ?>
<center>

<table border="2">
  
<tr>
 <th><span class="subHeader"><h2>Request ID</h2></span></th>
 <th><span class="subHeader"><h2>Date</h2></span></th>
 <th><span class="subHeader"><h2>Request Type</h2></span></th>
<th><span class="subHeader"><h2>Status</h2></span></th> 
</tr>



<?while($array=mysql_fetch_row($res)):?>
<tr>

<td><h2> <center> <? echo $array[0];?></center> </h2></td>
 <td><h2> <center> <?echo $array[1]; ?> </center> </h2></td> 
<td><h2> <center> <?echo $array[2]; ?> </center> </h2></td>



<td><h2> <center>  

<?
if($array[4]=='Pending')
{
echo " <font color='brown'><b>$array[4]</b></font>  "; 
}
else if($array[4]=='Waiting for ACKN')
{
 echo "<font color='orange'><b>$array[4]</b></font> "; 
}
else if($array[4]=='Done'||$array[4]=='Approved')
{
 echo "<font color='green'><b>$array[4]</b></font> "; 
}
else if($array[4]=='Failed' || $array[4]=='Rejected')
{
 echo "<font color='red'><b>$array[4]</b></font> "; 
}
?>
</center> </h2></td>  


</tr>

<?endwhile; ?>


</table></center>

<?
$htmlbody = ob_get_contents();

$_SESSION['content']=$htmlbody;
?>

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
    <td width="50"><img src="../../mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
        <td width="252" valign="top"><br />
		&nbsp;<br /></td>
        <td width="20">&nbsp;</td>
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
