<?
session_start();
$uid=$_SESSION['usrname'];
$jobid=$_POST["text"]; 
$euid=$_POST["text1"];
$array=split('_',$jobid);
$code=$array[0];
$numb=$array[1];

$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");

$res=mysql_db_query("student","update history set status='Failed' where jobid='$jobid'") or die("cannot query");

$res=mysql_db_query("student","update history_emp set status='Failed' where jobid='$jobid' and uid='$euid'") or die("cannot query");

if($code=='SC')
{
 $tbname='study_certificate';
 
}
else if($code=='BC')
{
 $tbname='bonafide';
}

$res=mysql_db_query("student","update $tbname set status='Failed' where jobid='$jobid'") or die("cannot query");

//$res=mysql_db_query("student","update $tbname set bstatus='Failed' where jobid='$jobid'") or die("cannot query");

$res=mysql_db_query("student","delete from ackn where jobid='$jobid'") or die("cannot query");

//$res=mysql_db_query("student","delete from history_emp where jobid='$jobid'") or die("Cannot Query");

header("location:/mysite/services/internal/myhome.php");
?>
