<? session_start();
if(!isset($_SESSION['employee_usrname']) && ($_SESSION['employee_usrname']==''))
{
header("location:/mysite/login/login.php");
}
?>

<?
$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");

$total=mysql_db_query("student","select count(*) from feedback") or die("cannot select1");
$count=mysql_fetch_row($total);

$q1yes=mysql_db_query("student","select count(q1) from feedback where q1='Yes'") or die("cannot query1");
$q1s=mysql_fetch_row($q1yes);    
$cal1s=($q1s[0]/$count[0])*100;
$q1no=mysql_db_query("student","select count(q1) from feedback where q1='No'") or die("cannot query2");
$q1n=mysql_fetch_row($q1no);    
$cal1n=($q1n[0]/$count[0])*100;



$q2yes=mysql_db_query("student","select count(q2) from feedback where q2='Yes'") or die("cannot query1");
$q2s=mysql_fetch_row($q2yes);    
$cal2s=($q2s[0]/$count[0])*100;
$q2no=mysql_db_query("student","select count(q2) from feedback where q2='No'") or die("cannot query2");
$q2n=mysql_fetch_row($q2no);    
$cal2n=($q2n[0]/$count[0])*100;



$q3f=mysql_db_query("student","select count(q3) from feedback where q3='Friend'") or die("cannot query1");
$q3fr=mysql_fetch_row($q3f);    
$cal3f=($q3fr[0]/$count[0])*100;
$q3s=mysql_db_query("student","select count(q3) from feedback where q3='Search Engine'") or die("cannot query2");
$q3se=mysql_fetch_row($q3s);    
$cal3s=($q3se[0]/$count[0])*100;
$q3n=mysql_db_query("student","select count(q3) from feedback where q3='News Media'") or die("cannot query1");
$q3nm=mysql_fetch_row($q3n);    
$cal3n=($q3nm[0]/$count[0])*100;
$q3i=mysql_db_query("student","select count(q3) from feedback where q3='Institution Brochure'") or die("cannot query2");
$q3ib=mysql_fetch_row($q3i);    
$cal3i=($q3ib[0]/$count[0])*100;




$q4f=mysql_db_query("student","select count(q4) from feedback where q4='Excellent'") or die("cannot query1");
$q4fr=mysql_fetch_row($q4f);    
$cal4f=($q4fr[0]/$count[0])*100;
$q4s=mysql_db_query("student","select count(q4) from feedback where q4='Good'") or die("cannot query2");
$q4se=mysql_fetch_row($q4s);    
$cal4s=($q4se[0]/$count[0])*100;
$q4n=mysql_db_query("student","select count(q4) from feedback where q4='Average'") or die("cannot query1");
$q4nm=mysql_fetch_row($q4n);    
$cal4n=($q4nm[0]/$count[0])*100;
$q4i=mysql_db_query("student","select count(q4) from feedback where q4='Poor'") or die("cannot query2");
$q4ib=mysql_fetch_row($q4i);    
$cal4i=($q4ib[0]/$count[0])*100;



$q5f=mysql_db_query("student","select count(q5) from feedback where q5='Excellent'") or die("cannot query1");
$q5fr=mysql_fetch_row($q5f);    
$cal5f=($q5fr[0]/$count[0])*100;
$q5s=mysql_db_query("student","select count(q5) from feedback where q5='Good'") or die("cannot query2");
$q5se=mysql_fetch_row($q5s);    
$cal5s=($q5se[0]/$count[0])*100;
$q5n=mysql_db_query("student","select count(q5) from feedback where q5='Average'") or die("cannot query1");
$q5nm=mysql_fetch_row($q5n);    
$cal5n=($q5nm[0]/$count[0])*100;
$q5i=mysql_db_query("student","select count(q5) from feedback where q5='Poor'") or die("cannot query2");
$q5ib=mysql_fetch_row($q5i);    
$cal5i=($q5ib[0]/$count[0])*100;





$q6f=mysql_db_query("student","select count(q6) from feedback where q6='Excellent'") or die("cannot query1");
$q6fr=mysql_fetch_row($q6f);    
$cal6f=($q6fr[0]/$count[0])*100;
$q6s=mysql_db_query("student","select count(q6) from feedback where q6='Good'") or die("cannot query2");
$q6se=mysql_fetch_row($q6s);    
$cal6s=($q6se[0]/$count[0])*100;
$q6n=mysql_db_query("student","select count(q6) from feedback where q6='Average'") or die("cannot query1");
$q6nm=mysql_fetch_row($q6n);    
$cal6n=($q6nm[0]/$count[0])*100;
$q6i=mysql_db_query("student","select count(q6) from feedback where q6='Poor'") or die("cannot query2");
$q6ib=mysql_fetch_row($q6i);    
$cal6i=($q6ib[0]/$count[0])*100;



$q7yes=mysql_db_query("student","select count(q7) from feedback where q7='Yes'") or die("cannot query1");
$q7s=mysql_fetch_row($q7yes);    
$cal7s=($q7s[0]/$count[0])*100;
$q7no=mysql_db_query("student","select count(q7) from feedback where q7='No'") or die("cannot query2");
$q7n=mysql_fetch_row($q7no);    
$cal7n=($q7n[0]/$count[0])*100;





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
.style5 {
	font-size: 12px;
	font-weight: bold;
}
-->
</style>
</head>
<body bgcolor="#F4FFE4">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#D5EDB3">
    <td colspan="3" rowspan="2"><img src="../../../../logo3.jpg" alt="Header image" width="92" height="100" border="0" /></td>
    <td height="50" colspan="1" id="logo" valign="bottom" align="left" nowrap="nowrap"> ADICHUNCHANAGIRI INSTITUTE OF TECHNOLOGY</td>
    <td width="19">&nbsp;</td><td width="19">&nbsp;</td><td width="19">&nbsp;</td>
  </tr>

  <tr bgcolor="#D5EDB3">
    <td height="51" colspan="3" id="tagline" valign="top" align="center"> AUTOMATED HIERARCHICAL MANAGEMENT SYSTEM </td>
	<td width="19">&nbsp;</td>
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
    <td width="166" valign="top" bgcolor="#5C743D">
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
  	&nbsp;<br />
  	&nbsp;<br />
  	&nbsp;<br /> 	</td>
    <td width="50"><img src="../../../../mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
    <td colspan="2" valign="top"><img src="../../../../mm_spacer.gif" alt="" width="305" height="1" border="0" /><br />
	&nbsp;&nbsp;<br />
	<table width="446" border="0" cellpadding="0" cellspacing="0" bordercolor="#000000">
        <tr>
          <td width="446" height="73" class="pageName"><p>Feedback Results</p>          </td>
		</tr>


		<tr>
          <td height="195" class="bodyText"><p class="style3">1. Was there anything unclear about the services available?</p>
            <p class="style3"><font color='brown'><?echo $cal1s;?></font>% of people said <font color='brown'>YES</font><br> </p>
<p class="style3"><font color='brown'><?echo $cal1n;?></font>% of people said <font color='brown'>NO</font><br> </p><br><br>
            <p class="style3">2. Did you have trouble locating any information needed? </p>
             <p class="style3"><font color='brown'><?echo $cal2s;?></font>% of people said <font color='brown'>YES</font><br> </p>
<p class="style3"><font color='brown'><?echo $cal2n;?></font>% of people said <font color='brown'>NO</font><br> </p><br><br>
            
            <p class="style3">3. How did you hear about our website? </p>
             <p class="style3"><font color='brown'><?echo $cal3f;?></font>% of people said from <font color='brown'>FRIEND</font><br> </p>
<p class="style3"><font color='brown'><?echo $cal3s;?></font>% of people said from <font color='brown'>SEARCH ENGINE</font><br> </p>
      <p class="style3"><font color='brown'><?echo $cal3n;?></font>% of people said from <font color='brown'>NEWS MEDIA</font><br> </p>
<p class="style3"><font color='brown'><?echo $cal3i;?></font>% of people said from <font color='brown'>INSTITUTION BROCHERE</font><br> </p><br><br>         


 <p class="style3">4. Please rate the overall content of our website. </p>
             <p class="style3"><font color='brown'><?echo $cal4f;?></font>% of people said <font color='brown'>EXCELLENT</font><br> </p>
<p class="style3"><font color='brown'><?echo $cal4s;?></font>% of people said <font color='brown'>GOOD</font><br> </p>
      <p class="style3"><font color='brown'><?echo $cal4n;?></font>% of people said <font color='brown'>AVERAGE</font><br> </p>
<p class="style3"><font color='brown'><?echo $cal4i;?></font>% of people said <font color='brown'>POOR</font><br> </p><br><br>         


 <p class="style3">5. Please rate the ease of navigation of our website. </p>
             <p class="style3"><font color='brown'><?echo $cal5f;?></font>% of people said <font color='brown'>EXCELLENT</font><br> </p>
<p class="style3"><font color='brown'><?echo $cal5s;?></font>% of people said <font color='brown'>GOOD</font><br> </p>
      <p class="style3"><font color='brown'><?echo $cal5n;?></font>% of people said <font color='brown'>AVERAGE</font><br> </p>
<p class="style3"><font color='brown'><?echo $cal5i;?></font>% of people said <font color='brown'>POOR</font><br> </p><br><br>         


 <p class="style3">6. Please rate the overall look of our website. </p>
             <p class="style3"><font color='brown'><?echo $cal6f;?></font>% of people said <font color='brown'>EXCELLENT</font><br> </p>
<p class="style3"><font color='brown'><?echo $cal6s;?></font>% of people said <font color='brown'>GOOD</font><br> </p>
      <p class="style3"><font color='brown'><?echo $cal6n;?></font>% of people said <font color='brown'>AVERAGE</font><br> </p>
<p class="style3"><font color='brown'><?echo $cal6i;?></font>% of people said <font color='brown'>POOR</font><br> </p><br><br>         

<p class="style3">7. Did you find the information you were looking for on our website? </p>
             <p class="style3"><font color='brown'><?echo $cal7s;?></font>% of people said <font color='brown'>YES</font><br> </p>
<p class="style3"><font color='brown'><?echo $cal7n;?></font>% of people said <font color='brown'>NO</font><br> </p><br><br>




            <p class="style3">&nbsp;</p>
            <p class="style3">&nbsp;</p>
            <p class="style3">&nbsp;</p>
          </td>
		</tr>
		<tr>
		  <td height="20" class="bodyText"><p>&nbsp;</p>	      </td>
	    </tr>
      </table>
	 <br />
	&nbsp;<br />	</td>
    <td width="50"><img src="../../../../mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
        <td width="248" valign="top"><br />
		&nbsp;<br /></td>
        <td width="19">&nbsp;</td>
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
