<?session_start();
$uid=$_SESSION['usrname'];
$purpose=$_POST['purpose'];
$date= date("Y-m-d");
$time=date("H:i A");

$code='BC';
$status='Pending';

$bstatus='';
$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");


$res=mysql_db_query("student","select * from bonafide where uid='$uid'")or die("cannot query");
$rows=mysql_num_rows($res);

if($rows)
{
header("location:/mysite/login/bonafide_nopermit.php");
exit;
}




$res=mysql_db_query("student","select max(numb) from bonafide")or die("cannot query");

//request id generation
$result=mysql_fetch_row($res);
foreach($result as $f)
{
 $numb=$f;
}

$numb++;
$res=mysql_db_query("student","update bonafide set numb='$numb' where uid='dummy'") or die("cannot query");
$jobid=$code.'_'.$numb;
$_SESSION['jobid'] = $jobid;
$dday=8;

$res=mysql_db_query("student","insert into bonafide values('$uid','$date','$purpose','$numb','$status','$jobid','$dday','$bstatus')") or die("cannot query1");




$res=mysql_db_query("student","insert into history values('$uid','Request for Bonafide Certificate','$date','$time','$jobid','$status')") or die("cannot query");

header("location:/mysite/login/internal_ackn.php");

?>

