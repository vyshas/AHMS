<?
session_start();
$uid=$_SESSION['usrname'];

$name=$_POST["Field0"];
$email=$_POST["Field2"];
$phone=$_POST["Field3"];


$a=$_POST["Field5"];
$b=$_POST["Field7"];
$c=$_POST["Field8"];

$d=$_POST["Field9"];
$e=$_POST["Field10"];
$f=$_POST["Field11"];

$g=$_POST["Field12"];
$h=$_POST["Field13"];

$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");

$res=mysql_db_query("student","insert into feedback values('$name','$email','$phone','$a','$b','$c','$d','$e','$f','$g','$h')") or die("cannot query1");

header("location:/mysite/home.php");
?>
