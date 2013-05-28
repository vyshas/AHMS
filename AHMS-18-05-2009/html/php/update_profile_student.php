<?
session_start();
$uid=$_SESSION['usrname'];
$name=$_POST["name"];

$uuid=$_POST["uid"];
$sem=$_POST["sem"];
$section=$_POST["section"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$addr=$_POST["addr"];

$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");

$res=mysql_db_query("student","update studinfo set uid='$uuid'  where uid='$uid'") or die("cannot query1");
$res=mysql_db_query("student","update studinfo set name='$name'  where uid='$uid'") or die("cannot query1");
$res=mysql_db_query("student","update studinfo set sem='$sem'  where uid='$uid'") or die("cannot query2");
$res=mysql_db_query("student","update studinfo set section='$section'  where uid='$uid'") or die("cannot query3");
$res=mysql_db_query("student","update studinfo set email='$email'  where uid='$uid'") or die("cannot query4");
$res=mysql_db_query("student","update studinfo set phone='$phone'  where uid='$uid'") or die("cannot query5");
$res=mysql_db_query("student","update studinfo set addr='$addr'  where uid='$uid'") or die("cannot query6");

header("location:/mysite/login/editprofile.php");
?>
