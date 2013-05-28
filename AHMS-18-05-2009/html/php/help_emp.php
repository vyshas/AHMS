<?

session_start();
$uid=$_SESSION['usrname'];

$subj=$_POST["subject"];
$comm=$_POST["textarea"];
$time=date("H:i A");
$date=date("Y-m-d");

$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");

$res=mysql_db_query("student","select name from employees where uid='$uid'") or die("cannot query1");
$r=mysql_fetch_row($res);

foreach($r as $f)
{
 $name=$f;
}

//request id generation
$code='HP';

$res=mysql_db_query("student","select max(numb) from helpdesk ")or die("cannot query11");
$result=mysql_fetch_row($res);
foreach($result as $f)
{
 $numb=$f;
}


$numb++;

$res=mysql_db_query("student","update helpdesk set numb='$numb' where uid='dummy'") or die("cannot query");
$jobid=$code.'_'.$numb;
$_SESSION['jobid']=$jobid;
$reqtype='Request for Help';
$dday=5;
$res=mysql_db_query("student","insert into helpdesk values('$subj','$comm','$uid','$name','Pending','$jobid','$numb','$date','$dday')") or die("Cannot query");
$res=mysql_db_query("student","insert into history_emp values('$uid','$reqtype','$date','$time','$jobid','Pending')") or die("Cannot query22");
header("location:/mysite/login/emp_ackn.php");

?>


                             
