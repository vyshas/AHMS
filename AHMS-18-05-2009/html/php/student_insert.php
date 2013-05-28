<?
session_start();
$uid=$_POST['uid'];
$regcode=time();
$name=$_POST["name1"];
$usn=$_POST['usn'];


$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");

$res=mysql_db_query("student","insert into studinfo values('$name','$usn','','','','','$uid','','','','','','','$regcode')") or die("cannot query1");

$_SESSION['rcode']=$regcode;
$_SESSION['flag']=$flag;

header("location:/mysite/services/internal/employees/class1/insert_students.php");
?>
