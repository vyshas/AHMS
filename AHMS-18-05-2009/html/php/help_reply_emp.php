<?
session_start();
$uid=$_SESSION['usrname'];
$uuid=$_POST["text"];
$subj=$_POST["subj"];
$comm=$_POST["textarea"];
$rt='Request for Help';
$date= date("Y-m-d");
$time=date("H:i A");
$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");
$jobid=$_SESSION['jobid'];

$res=mysql_db_query("student","insert into helpdesk_ans values('$uuid','$subj','$comm')") or die("cannot query1");

$res=mysql_db_query("student","insert into history_emp values('$uid','$rt','$date','$time','$jobid','Done')") or die("Cannot query2");


mysql_db_query("student","delete from helpdesk where uid='$uuid'") or die("Cannot query3");

header("location:/mysite/services/internal/employees/manager_help_jobq.php");
?>


                             
