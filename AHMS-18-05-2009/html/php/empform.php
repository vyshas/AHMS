<?
$name=$_POST["name1"];
$year=$_POST["yyyy"];
$month=$_POST["mm"];
$day=$_POST["dd"];
$sex=$_POST["gender"];
$cat=$_POST["Select3"];
$mail=$_POST["Text2"];
$phone=$_POST["Text3"];
$addr=$_POST["TextArea1"];
$qual=$_POST["qualification"];

$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");
$res=mysql_db_query("student","insert into employment values('$name','$year-$month-$day','$sex','$cat','$mail','$phone','$addr','$qual')") or die("cannot query");

header("location:/mysite/login/ackn.php");
?>

