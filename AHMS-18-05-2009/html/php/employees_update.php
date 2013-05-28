<?
$name=$_POST["name1"];
$year=$_POST["yyyy"];
$month=$_POST["mm"];
$day=$_POST["dd"];
$phone=$_POST["Text3"];
$addr=$_POST["TextArea1"];
$roles=$_POST["role"];
$uid=$_POST["uid"];
$email=$_POST["email"];

$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");
$res=mysql_db_query("student","update employees set name='$name',dob='$year-$month-$day',phone='$phone',address='$addr',uid='$uid',email='$email' where role='$roles'") or die("cannot query");

header("location:/mysite/services/internal/employees/class1/update_employees.php");
?>

