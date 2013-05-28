<html>
<body bgcolor='honeydew'>
<?
session_start();
$uid=$_SESSION["usrname"];
$name=$_POST["text"];
$jobid=$_POST["jobid"];
$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");
$res=mysql_db_query("student","select name,datefrom,dateto,reason from lms,studinfo where studinfo.uid=lms.uid and jobid='$jobid'") or die("cannot query");
  

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
<form method="get" action="/mysite/services/internal/employees/class3/manager_class3_jobq_leave.php">
<input type="submit" value="CLICK HERE TO GO BACK">
</form>
</body>
</html>
