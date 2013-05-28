<?
session_start();
$uid=$_SESSION['usrname'];
$mstatus='';
$subj=$_POST["subject"];
$comm=$_POST["textarea"];
$time=date("H:i A");
$date=date("Y-m-d");
$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");

$res=mysql_db_query("student","select name from studinfo where uid='$uid'") or die("cannot query1");
$r=mysql_fetch_row($res);

foreach($r as $f)
{
 $name=$f;
}

//request id generation
$code='HP';

$res=mysql_db_query("student","select max(numb) from helpdesk")or die("cannot query11");
$result=mysql_fetch_row($res);
foreach($result as $f)
{
 $numb=$f;
}


$numb++;
$res=mysql_db_query("student","update helpdesk set numb='$numb' where uid='dummy'") or die("cannot query");

$jobid=$code.'_'.$numb;
$dday=5;
$_SESSION['jobid']=$jobid;
$reqtype='Request for Help';

$res=mysql_db_query("student","insert into helpdesk values('$subj','$comm','$uid','$name','Pending','$jobid','$numb','$date','$dday')") or die("Cannot query22");
$res=mysql_db_query("student","insert into history values('$uid','$reqtype','$date','$time','$jobid','Pending')") or die("Cannot query22");
header("location:/mysite/login/internal_ackn.php");
//header("location:/mysite/login/helpdesk.php");
?>


                             
