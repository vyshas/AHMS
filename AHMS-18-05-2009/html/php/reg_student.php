<?
session_start();
$name=$_POST["name1"];
$sk=$_POST["sk"];
$yyyy=$_POST["yyyy"];
$mm=$_POST["mm"];
$dd=$_POST["dd"];
$sex=$_POST["gender"];
$psswd=$_POST["psswd"];
$branch=$_POST["branch"];
$sem=$_POST["sem"];
$section=$_POST["section"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$addr=$_POST["addr"];


$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");
$res=mysql_db_query("student","select name from studinfo where name='$name' and secretkey='$sk'") or die("cannot query1");

$count=mysql_num_rows($res);
if($count)
{

$flag="yes";
$_SESSION['flag']=$flag;

$SD=mysql_db_query("student","select uid from employees where managerof='$section'") or die("cannot query1");
$ep=mysql_fetch_row($SD);
foreach($ep as $ar)
{
$managedby=$ar;
} 

$res=mysql_db_query("student","update studinfo set name='$name',dob='$yyyy-$mm-$dd',phone='$phone',addr='$addr',email='$email',sex='$sex',psswd='$psswd',branch='$branch',sem='$sem',section='$section',managedby='$managedby' where name='$name' and secretkey='$sk'") or die("cannot query");
header("location:/mysite/login/register.php");
}
else
{
$flag="no";
$_SESSION['flag']=$flag;
header("location:/mysite/login/register.php");
}
?>

