<?
session_start();

$uid=$_SESSION['usrname'];
$subj=$_POST["sub"];
$msg=$_POST["TextArea1"];
$date=date("Y-m-d");

$from=$_SESSION['usrname'];
$category=$_POST["category"];
$to=$_POST["to"];
$role=$_POST["role"];


$time=date("H:i A");




$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");

$res1=mysql_db_query("student","select name from $category where $role='$to'") or die("cannot query1");
$r=mysql_fetch_row($res1);
foreach($r as $arr)
{
$to=$arr;
}



$res=mysql_db_query("student","select max(mid) from mail")or die("cannot query");
$result=mysql_fetch_row($res);
foreach($result as $f)
{
 $mid=$f;
}

$mid++;


$res7=mysql_db_query("student","select name from studinfo where uid='$uid'")or die("cannot query");
$count=mysql_num_rows($res7);


$res=mysql_db_query("student","update mail set mid='$mid' where sender='dummy'") or die("cannot query");


$res=mysql_db_query("student","insert into mail values('$from','$to','$subj','$msg','$date','$time','UNREAD','$mid')") or die("cannot query2");

$_SESSION['mflag']='done';

if($count==0)
{
header("location:/mysite/services/internal/employees/mymail_emp_compose.php");
}
else if($count)
{
header("location:/mysite/services/internal/mymail_compose.php");
}

?>
