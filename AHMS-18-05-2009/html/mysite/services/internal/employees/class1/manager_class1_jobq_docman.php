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
.style7 {font-size: 18px}
-->
</style>
</head>
<body bgcolor="#F4FFE4">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#D5EDB3">
    <td colspan="3" rowspan="2"><img src="../../../../logo3.jpg" alt="Header image" width="92" height="100" border="0" /></td>
    <td height="50" colspan="1" id="logo" valign="bottom" align="left" nowrap="nowrap"> ADICHUNCHANAGIRI INSTITUTE OF TECHNOLOGY</td>
    <td width="22">&nbsp;</td><td width="22">&nbsp;</td><td width="22">&nbsp;</td>
  </tr>

  <tr bgcolor="#D5EDB3">
    <td height="51" colspan="3" id="tagline" valign="top" align="center"> AUTOMATED HIERARCHICAL MANAGEMENT SYSTEM </td>
	<td width="22">&nbsp;</td>
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
    <td width="167" height="477" valign="top" bgcolor="#5C743D">
	<table border="0" cellspacing="0" cellpadding="0" width="165" id="navigation">
        <tr>
          <td width="165">&nbsp;<br /></td>
        </tr>
        <tr>
          <td width="165"><a href="emp_class1_myhome.php" title="My Home">MY HOME</a></td>
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
          <td width="165"><a href="../emp_services.php" title="Services">SERVICES</a></td>
        </tr>
        <tr>
          <td width="165"><a href="../help/emp_help.php" title="Help">HELP</a></td>
        </tr>
        <tr>
          <td width="165"><a href="../../../../login/logout.php" title="Logout">LOGOUT</a></td>
        </tr>
      </table>
 	 <br />
  	&nbsp;
  	&nbsp;<br />
  	&nbsp;<br /> 	</td>
    <td width="50">&nbsp;</td>
    <td colspan="2" valign="top"><img src="../../../../mm_spacer.gif" alt="" width="305" height="1" border="0" /><br />
      <table width="466" height="310" border="0" cellpadding="0" cellspacing="0" bordercolor="#000000">
        <tr>
          <td width="466" height="44" class="pageName"><p class="pageName">&nbsp;&nbsp;&nbsp;&nbsp;My Job Queue</p>          </td>
		</tr>

<p>
<img src="../../../../pdf.jpeg" alt="Header image" width="20" height="20" border="0" />
 <a href="http://localhost/html2pdf/index.php" target="_blank">GET PDF</a>

		<tr>
          <td height="246" class="bodyText">
	
<?$usrname=$_SESSION['usrname'];

$date= date("Y-m-d");
$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");
//list($cy,$cm,$cd)=split('-',$date);


$res=mysql_db_query("student","select date,mday,jobid from report where mstatus!='Done'") or die("Cannot query1");

while($array=mysql_fetch_row($res))
{

$appdate=$array[0];

$date1=$appdate;
$date2=$date;
$time1=strtotime($date1);
$time2=strtotime($date2);
$res=$time2-$time1;
$q=24*60*60;
$r=$res/$q;

//list($ay,$am,$ad)=split('-',$appdate);
$w1=3-$r;
mysql_db_query("student","update report set mday='$w1' where jobid='$array[2]'") or die("Cannot query2");
}

$res=mysql_db_query("student","select jobid,mstatus,mday from report where mday<3")or die("Cannot query3"); 

while($array=mysql_fetch_row($res))
{

  if($array[2]==2 || $array[2]==1)
{
 $res1=mysql_db_query("student","update report set mstatus='Warning' where jobid='$array[0]'") or die("Cannot query a");
}


else if($array[2]<=0)
{
 $res4=mysql_db_query("student","update report set mstatus='Failed' where jobid='$array[0]'") or die("Cannot query d");
}

}

?>

<?ob_start(); ?>
   <center><table border="2">
<tr>
 <th><span class="subHeader"><h2>Employee</h2></span></th>
 <th><span class="subHeader"><h2>Job Id</h2></span></th>
 <th><span class="subHeader"><h2>Status</h2></span></th>

</tr>

<? $res=mysql_db_query("student","select jobid,mstatus,name from report,employees where mday<3 and report.uid=employees.uid")or die("Cannot query3"); 
?>

<?while($array=mysql_fetch_row($res)):?>
<tr>

<td><h2> <center> <? echo $array[2];?></center> </h2></td>
 <td><h2> <center> <?echo $array[0]; ?> </center> </h2></td> 
<td><h2> <center> <?echo $array[1]; ?> </center> </h2></td>

</tr>


<?endwhile; ?>




</table></center>
<?
$htmlbody = ob_get_contents();

$_SESSION['content']=$htmlbody;
?>


      
            <p class="style3">&nbsp;</p>
          <p class="style3">&nbsp;</p></td>
		</tr>
		<tr>
		  <td height="20" class="bodyText"><p>&nbsp;</p>	      </td>
	    </tr>
      </table>
	</td>
    <td width="50"><img src="../../../../mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
        <td width="251" valign="top"><br />
		&nbsp;<br /></td>
        <td width="22">&nbsp;</td>
  </tr>
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
