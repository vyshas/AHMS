<?
$usn=$_POST["usn"];
$amt=$_POST["amt"];


$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");

$res1=mysql_db_query("student","select * from nodues where usn='$usn'")or die("Cannot search for student");
$count=mysql_num_rows($res1);


if($count)
{
   $res=mysql_db_query("student","update nodues set misc='$amt' where usn='$usn'") or die("cannot query");
   $res=mysql_db_query("student","update nodues set status='n' where usn='$usn'") or die("cannot query");
  

  header("location:/mysite/services/internal/employees/nodues/nodue_jobq_misc_success.php");
}
else
{
  header("location:/mysite/services/internal/employees/nodues/nodue_jobq_misc_error.php"); 
}


?>

