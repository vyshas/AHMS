<?
session_start();
$uid=$_SESSION['usrname'];
$jobid=$_POST["text"]; 


$mysql=mysql_connect("localhost","apache","ahms") or die("cannot connect");

$res=mysql_db_query("student","delete from helpdesk_ans where jobid='$jobid'") or die("cannot query");

$res1=mysql_db_query("student","select class from employees where uid='$uid'") or die("cannot q1");


$r=mysql_fetch_row($res1);

foreach($r as $w)
{
$class=$w;
}

if($class=='Class 3')
{
header("location:/mysite/services/internal/employees/emp_myhome.php");
}

else if($class=='Class 1')
{
header("location:/mysite/services/internal/employees/class1/emp_class1_myhome.php");
}

else if($class=='Class 2')
{
header("location:/mysite/services/internal/employees/class2/emp_class2_myhome.php");
}

else
{
header("location:/mysite/services/internal/myhome.php");
}

?>
