<?session_start();                      

$status='Pending';

$bstatus='';
$uid=$_SESSION['usrname'];
$date=date("Y-m-d");
$time=date("H:i A");
$code='SC';

$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");

$res=mysql_db_query("student","select * from study_certificate where uid='$uid'")or die("cannot query");
$rows=mysql_num_rows($res);

if($rows)
{
header("location:/mysite/login/study_nopermit.php");
exit;
}

$res=mysql_db_query("student","select max(numb) from study_certificate")or die("cannot query");
$result=mysql_fetch_row($res);
foreach($result as $f)
{
 $numb=$f;
}

$numb++;

$res=mysql_db_query("student","update study_certificate set numb='$numb' where uid='dummy'") or die("cannot query");

$jobid=$code.'_'.$numb;
$_SESSION['jobid']=$jobid;

$dday=8;

$res=mysql_db_query("student","insert into study_certificate values('$uid','$date','$numb','$status','$jobid','$dday','$bstatus')") or die("cannot query");

	
$res=mysql_db_query("student","insert into history values('$uid','Request for Study Certificate','$date','$time','$jobid','$status')") or die("cannot query");



header("location:/mysite/login/internal_ackn.php");

?>


