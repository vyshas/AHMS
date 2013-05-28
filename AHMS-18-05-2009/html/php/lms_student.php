<?
session_start();
  $uid=$_SESSION['usrname'];
$time=date("H:i A");
$date= date("Y-m-d");

$from=$_POST["from"];
$to=$_POST["to"];
$reason=$_POST["reason"];
$status='Pending';
$code='LV';

$mysql=mysql_connect("localhost","apache","ahms") or die("cannot connect");

$res=mysql_db_query("student","select max(numb) from lms")or die("cannot query");
$result=mysql_fetch_row($res);
foreach($result as $f)
{
 $numb=$f;
}

$numb++;

$res=mysql_db_query("student","update lms set numb='$numb' where uid='dummy'") or die("cannot query");
$jobid=$code.'_'.$numb;
$_SESSION['jobid']=$jobid;

$res=mysql_db_query("student","insert into lms values('$from','$to','$reason','$uid','$numb','$jobid','$status')") or die("Cannot query");


$res=mysql_db_query("student","insert into history values('$uid','Request for Leave','$date','$time','$jobid','$status')") or die("cannot query");
header("location:/mysite/login/internal_ackn.php");
//header("location:/mysite/services/internal/lms.php");

?>
