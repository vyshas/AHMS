<?
session_start();
$uid=$_SESSION['usrname'];
$uuid=$_POST['uid'];
$name=$_POST["name"];
$phone=$_POST["phone"];
$addr=$_POST["addr"];
$email=$_POST["email"];
$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");

$res=mysql_db_query("student","update employees set uid='$uuid'  where uid='$uid'") or die("cannot query1");
$res=mysql_db_query("student","update employees set name='$name'  where uid='$uid'") or die("cannot query1");
$res=mysql_db_query("student","update employees set phone='$phone'  where uid='$uid'") or die("cannot query5");
$res=mysql_db_query("student","update employees set address='$addr'  where uid='$uid'") or die("cannot query6");
$res=mysql_db_query("student","update employees set email='$email'  where uid='$uid'") or die("cannot query7");

header("location:/mysite/login/editprofile_emp.php");
?>
