<?

session_start();
$uid=$_SESSION['usrname'];
$time=date("H:i A");
$date= date("Y-m-d");
$edate=$_POST["edate"];
$sub=$_POST["subject"];
$status='Pending';

$code='MR';
$details=$_POST["textarea"];


$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");

//request id generation

$res=mysql_db_query("student","select max(numb) from approval")or die("cannot query");
$result=mysql_fetch_row($res);
foreach($result as $f)
{
 $numb=$f;
}


$numb++;
$res=mysql_db_query("student","update approval set numb='$numb' where uid='dummy'") or die("cannot query");
$jobid=$code.'_'.$numb;
$_SESSION['jobid']=$jobid;

$res=mysql_db_query("student","insert into approval values('$edate','$sub','$details','$uid','$numb','$jobid','$status')") or die("cannot query");


$res=mysql_db_query("student","insert into history_emp values('$uid','Miscellaneous Request','$date','$time','$jobid','$status')") or die("cannot query");




header("location:/mysite/login/emp_ackn.php");
?>


