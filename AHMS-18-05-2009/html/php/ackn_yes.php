<?
session_start();
$uid=$_SESSION['usrname'];
$jobid=$_POST["text"]; 
$euid=$_POST["text1"];
$array=split('_',$jobid);
$code=$array[0];
$numb=$array[1];

$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");

$res=mysql_db_query("student","update history set status='Done' where jobid='$jobid'") or die("cannot query");


if($code=='SC')
{
 $tbname='study_certificate';
}
else if($code=='BC')
{
 $tbname='bonafide';
}


$res=mysql_db_query("student","delete from $tbname where jobid='$jobid'") or die("cannot query");

$res=mysql_db_query("student","delete from ackn where jobid='$jobid'") or die("cannot query");



$res=mysql_db_query("student","update history_emp set status='Done' where jobid='$jobid' and uid='$euid'") or die("cannot query");

header("location:/mysite/services/internal/myhome.php");
?>
