<?
$dept=$_POST["Select1"];
$amt=$_POST["Text1"];


$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");


$res=mysql_db_query("student","update nodues_branch set amnt='$amt' where branch='$dept'") or die("Cannot update deptartment");

$res=mysql_db_query("student","update nodues set status='n'") or die("cannot query");
  
header("location:/mysite/services/internal/employees/nodues/nodue_update.php");

?>
