<?
session_start();
$uid=$_SESSION['usrname'];
$euid=$_POST["text1"]; 
$jobid=$_POST["text"]; 
$status='Rejected';

$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");



$res=mysql_db_query("student","update approval set status='$status' where jobid='$jobid'") or die("cannot query");  

$res=mysql_db_query("student","select * from employees where uid='$euid'") or die("Cannot Query");
$count=mysql_num_rows($res);
if($count)
{
  $res=mysql_db_query("student","update history_emp set status='$status' where jobid='$jobid'") or die("cannot query");  
  $res=mysql_db_query("student","select * from history_emp where jobid='$jobid'") or die("Cannot Query");

while($array=mysql_fetch_row($res))
{
 $reqt=$array[1];
 $date=$array[2];
 $time=$array[3];
 $jobid=$array[4];
 $status=$array[5];
}

}
else 
{
$res=mysql_db_query("student","update history set status='$status' where jobid='$jobid'") or die("cannot query");  

$res=mysql_db_query("student","select * from history where jobid='$jobid'") or die("Cannot Query");

while($array=mysql_fetch_row($res))
{
 $reqt=$array[1];
 $date=$array[2];
 $time=$array[3];
 $jobid=$array[4];
 $status=$array[5];
}

}

$res=mysql_db_query("student","insert into history_emp  values('$uid','$reqt','$date','$time','$jobid','$status')") or die("Cannot Query");
$res=mysql_db_query("student","delete from approval where jobid='$jobid'")or die("Cannot Query");

if($count)
{
header("location:/mysite/services/internal/employees/class2/manager_class2_jobq_approvals.php");
}
else
{
header("location:/mysite/services/internal/employees/class3/manager_class3_jobq_approvals.php");
}
?>
