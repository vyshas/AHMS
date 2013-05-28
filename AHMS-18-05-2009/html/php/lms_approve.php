<?
session_start();
$uid=$_SESSION['usrname'];
$euid=$_POST["text1"];
$jobid=$_POST["text"]; 
$status='Approved';

$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");
$res=mysql_db_query("student","select datefrom,dateto,avleaves from lms_emp,employees where lms_emp.uid='$euid' and employees.uid=lms_emp.uid") or die("Cannot Query1 that is selecting elements");

while($array=mysql_fetch_row($res))
{
 $datefrom=$array[0];
 $dateto=$array[1];
$leave=$array[2];
 }
$dfrom=strtotime($datefrom);
$dto=strtotime($dateto);
$resl=$dto-$dfrom;
$q=24*60*60;
$r=$resl/$q;

$final=$leave-$r;
$qur=mysql_db_query("student","update employees set avleaves='$final' where uid='$euid'") or die("cannot update");  





$res=mysql_db_query("student","update lms set status='$status' where jobid='$jobid'") or die("cannot query");  
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

if($count)
{
$res=mysql_db_query("student","delete from lms_emp where jobid='$jobid'")or die("Cannot Query");
header("location:/mysite/services/internal/employees/class2/manager_class2_jobq_leave.php");
}
else
{
$res=mysql_db_query("student","delete from lms where jobid='$jobid'")or die("Cannot Query");
header("location:/mysite/services/internal/employees/class3/manager_class3_jobq_leave.php");
}
?>
