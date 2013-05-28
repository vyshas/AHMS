<?
$name=$_POST["name1"];
$inst=$_POST["inst"];
$specs=$_POST["qualification"];
$mail=$_POST["email"];
$phone=$_POST["phone"];
$addr=$_POST["address"];


$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");
$res=mysql_db_query("student","insert into internship values('$name','$inst','$specs','$mail','$phone','$addr')") or die("cannot query");

header("location:/mysite/login/ackn.php");
?>

