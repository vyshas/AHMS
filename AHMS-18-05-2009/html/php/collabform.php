<?
$noo=$_POST["noforg"];
$spec=$_POST["specs"];
$mail=$_POST["email"];
$phone=$_POST["phone"];
$addr=$_POST["address"];
$wsite=$_POST["website"];


$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");
$res=mysql_db_query("student","insert into collaboration values('$noo','$spec','$mail','$phone','$addr','$wsite')") or die("cannot query");
header("location:/mysite/login/ackn.php");

?>

