<?
session_start();
$uid=$_SESSION['usrname'];
$jobid=$_POST["text"]; 
$time=date("H:i A");
$date= date("Y-m-d");
$status='Done';
$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");

$res=mysql_db_query("student","update report set mstatus='Done' where jobid='$jobid'") or die("cannot query");

$res4=mysql_db_query("student","insert into history_emp values('$uid','Report on Study Certificate Issuer','$date','$time','$jobid','Done')") or die("Cannot query d");

//$res=mysql_db_query("student","delete from report where mstatus='Done'") or die("cannot query");


header("location:/mysite/services/internal/employees/class2/docu manager/manager_class2_study_jobq.php");

?>
