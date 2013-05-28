<html>
<body bgcolor='honeydew'>
<?
session_start();
$uid=$_SESSION["usrname"];
$jobid=$_POST["jobid"];

$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");
$res=mysql_db_query("student","select name,datefrom,dateto,reason from lms_emp,employees where employees.uid=lms_emp.uid and jobid='$jobid'") or die("cannot query");
  

while($arr=mysql_fetch_row($res))
{

  echo "Name        : $arr[0]";

  echo "<br>";
  echo "Date From   : $arr[1]"; 
  echo "<br>";
  
  echo "Date To     : $arr[2]";
  echo "<br>";
echo "Reason        : $arr[3]";
    echo "<br>";
echo "<br>";
}

?>
<form method="get" action="/mysite/services/internal/employees/class2/manager_class2_jobq_leave.php">
<input type="submit" value="CLICK HERE TO GO BACK">
</form>
</body>
</html>
