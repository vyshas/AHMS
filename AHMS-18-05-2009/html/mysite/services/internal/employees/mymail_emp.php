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
<link rel="stylesheet" type="text/css" href="../../../mm_health_nutr.css" />

<script language="JavaScript" type="text/javascript">
//--------------- LOCALIZEABLE GLOBALS ---------------
var d=new Date();
var monthname=new Array("January","February","March","April","May","June","July","August","September","October","November","December");
//Ensure correct for language. English is "January 1, 2004"
var TODAY = monthname[d.getMonth()] + " " + d.getDate() + ", " + d.getFullYear();
//---------------   END LOCALIZEABLE   ---------------
function check()
{
var f=document.getElementById('formid');
var s=document.getElementById('selectid');

if(s.selectedIndex==1)
{
f.setAttribute("method","POST");
f.setAttribute("action",s.options[1].value);
f.submit();
}
if(s.selectedIndex==2)
{

f.setAttribute("method","POST");
f.setAttribute("action",s.options[2].value);
f.submit();
}

if(s.selectedIndex==3)
{
f.setAttribute("method","POST");
f.setAttribute("action",s.options[3].value);
f.submit();
}
if(s.selectedIndex==4)
{

f.setAttribute("method","POST");
f.setAttribute("action",s.options[4].value);
f.submit();
}
}








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
.style8 {color: #99CC66}
-->
</style>
</head>
<body bgcolor="#F4FFE4">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#D5EDB3">
    <td colspan="3" rowspan="2"><img src="../../../logo3.jpg" alt="Header image" width="92" height="100" border="0" /></td>
    <td width="657" height="50" colspan="1" align="left" valign="bottom" nowrap="nowrap" id="logo"> ADICHUNCHANAGIRI INSTITUTE OF TECHNOLOGY</td>
    <td width="50">&nbsp;</td>
    <td width="3">&nbsp;</td>
    <td width="52">&nbsp;</td>
  </tr>

  <tr bgcolor="#D5EDB3">
    <td height="51" colspan="3" id="tagline" valign="top" align="center">     AUTOMATED HIERARCHICAL MANAGEMENT SYSTEM </td>
	<td width="52">&nbsp;</td>
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

 <tr>
    <td width="165" valign="top" bgcolor="#5C743D">
	<table border="0" cellspacing="0" cellpadding="0" width="165" id="navigation">
        <tr>
          <td width="165">&nbsp;<br /></td>
        </tr>
        <tr>
          <td width="165"><a href="emp_myhome.php" title="My Home">MY HOME</a></td>
        </tr>
	<tr>
          <td width="165"><a href="emp_history.php" title="services">MY HISTORY</a></td>
        </tr>
<tr>
          <td width="165"><a href="mymail_emp.php" title="My Mail">MY MAIL</a></td>
        </tr>         
	<tr>
          <td width="165"><a href="jobq.php" title="My Job Queue">MY JOB QUEUE</a></td>
        </tr>
        <tr>
          <td width="165"><a href="emp_services.php" title="services">SERVICES</a></td>
        </tr>
        <tr>
          <td width="165"><a href="help/emp_help.php" title="help">HELP</a></td>
        </tr>
        <tr>
          <td width="165"><a href="../../../login/logout.php" title="logout">LOGOUT</a></td>
        </tr>
      </table>
 	 <br />
  	&nbsp;
  	&nbsp;<br />
  	&nbsp;<br /> 	</td>
    <td width="50"><img src="../../../mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
    <td colspan="2" valign="top"><img src="../../../mm_spacer.gif" alt="" width="305" height="1" border="0" /><br />
      <table width="536" height="685" border="0" cellpadding="0" cellspacing="0" bordercolor="#000000">
        <tr>
          <td width="536" height="26" class="pageName"><p>My Mail Inbox</p>
          
<br>

<a href="/mysite/services/internal/employees/mymail_emp_compose.php"><p><font color='red'>Compose Mail</font></p></a>

</td>
		</tr>


<p> 
<img src="../../../pdf.jpeg" alt="Header image" width="20" height="20" border="0" />
<a href="http://localhost/html2pdf/index.php" target="_blank">GET PDF</a>

<?
$uid=$_SESSION['usrname'];

 $select=$_POST['Select1'];
$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");


$res=mysql_db_query("student","select name from employees where uid='$uid'") or die("cannot query1111");
$result=mysql_fetch_row($res);
foreach($result as $f)
{
 $usrname=$f;
}

/*if($select=='ALL' || $select=='')
{

$s1='selected="selected"';
$res=mysql_db_query("student","select sender,subject,date,time,mesg,mid,status from mail where receiver='$usrname' and sender='$uid' order by date") or die("Cannot query");
}*/


if($select=='RECEIVED' || $select=='')
{
$s2='selected="selected"';
$res=mysql_db_query("student","select sender,subject,date,time,mesg,mid,status from mail where receiver='$usrname' and sender!='dummy' order by date") or die("Cannot query");
} 

else if($select=='UNREAD')
{
$s3='selected="selected"';
$res=mysql_db_query("student","select sender,subject,date,time,mesg,mid,status from mail where receiver='$usrname' and sender!='dummy' and status='UNREAD' order by date") or die("Cannot query");
} 

else if($select=='SENT')
{
$s4='selected="selected"';
$res=mysql_db_query("student","select sender,subject,date,time,mesg,mid,status from mail where sender='$uid' and sender!='dummy' order by date") or die("Cannot query");
} 

else if($select=='READ')
{
$s5='selected="selected"';
$res=mysql_db_query("student","select sender,subject,date,time,mesg,mid,status from mail where receiver='$usrname' and sender!='dummy' and status='READ' order by date") or die("Cannot query");
} 
?>






<form id="formid" name="sort" method="POST" action="/mysite/services/internal/employees/mymail_emp.php">
		<tr>
          <td height="100" class="bodyText">
            <p class="style3">&nbsp;&nbsp; &nbsp;&nbsp;ORDER BY&nbsp;&nbsp;&nbsp; &nbsp;
<select id="selectid" name="Select1"  style="width: 178px" onchange="this.form.submit();">


<option "<?echo $s2?>">RECEIVED</option>
<option "<?echo $s3?>">UNREAD</option>

<option "<?echo $s5?>">READ</option>
<option "<?echo $s4?>">SENT</option>
		</select>



</form>
		<tr>
          <td height="100" class="bodyText">
          
<?ob_start(); ?>
<center><table border="2">
<tr>
 <th><span class="subHeader"><h2>FROM</h2></span></th>
 <th><span class="subHeader"><h2>SUBJECT</h2></span></th>
 <th><span class="subHeader"><h2>DATE</h2></span></th>
 <th><span class="subHeader"><h2>TIME</h2></span></th>
 <th><span class="subHeader"><h2>STATUS</h2></span></th>

<th><span class="subHeader"><h2></h2></span></th> 
</tr>



<?while($array=mysql_fetch_row($res)):?>
<tr>

<td><h2> <center> <? echo $array[0];?></center> </h2></td>
 <td><h2> <center> <?echo $array[1]; ?> </center> </h2></td> 
<td><h2> <center> <?echo $array[2]; ?> </center> </h2></td>
<td><h2> <center> <?echo $array[3]; ?> </center> </h2></td>



<td><h2>


 <center>  

<?
if($select=='SENT')
{
 echo " <font color='green'><b>SENT</b></font>  "; 
}
else
{

if($array[6]=='READ')
{
echo " <font color='green'><b>$array[6]</b></font>  "; 
}
else if($array[6]=='UNREAD')
{
 echo "<font color='red'><b>$array[6]</b></font> "; 
}
}
?>
</center> </h2></td>  






<form method="post" action="/mysite/services/internal/employees/mail_display_emp.php">

<td><h2> <center> <input type="submit" name="mread" value="READ"></center> </h2></td>
<input type="hidden" name="mid" value="<? echo $array[5];?>">

</form>
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
    <td width="50"><img src="../../../mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
        <td width="3" valign="top"></br>
    &nbsp;<br /></td>
    <td width="52">&nbsp;</td>
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
