<html>
<body bgcolor='honeydew'>
<?
session_start();
$uid=$_SESSION["usrname"];
$name=$_POST["text"];

$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");
$res=mysql_db_query("student","select * from approval where jobid='$name'") or die("cannot query");
  

while($arr=mysql_fetch_row($res))
{

  echo "Event Date        : $arr[0]";

  echo "<br>";
  echo "Subject		 : $arr[1]"; 
  echo "<br>";
  
  echo "Details         : $arr[2]";
  echo "<br>";
    echo "<br>";
}


$res=mysql_db_query("student","select class from employees where uid='$uid'") or die("cannot query");
 $arr=mysql_fetch_row($res);
foreach($arr as $f)
{
$class=$f;
}


if($class=="Class 3")
{

echo "<form method=\"POST\" action=\"/mysite/services/internal/employees/class3/manager_class3_jobq_approvals.php\">";
echo "<input type=\"submit\" class=\"style4\" value=\"CLICK HERE TO GO BACK\">";
echo "</form>";

}
else if($class=="Class 2")
{

echo "<form method=\"POST\" action=\"/mysite/services/internal/employees/class2/manager_class2_jobq_approvals.php\">";
echo "<input type=\"submit\" class=\"style4\" value=\"CLICK HERE TO GO BACK\">";
echo "</form>";

}
else if($class=="Class 1")
{
echo "<form method=\"POST\" action=\"/mysite/services/internal/employees/class1/manager_class1_jobq_approvals.php\">";
echo "<input type=\"submit\" value=\"CLICK HERE TO GO BACK\">";
echo "</FORM>";
}
?>
</body>
</html>
