<?
  $usn=$_POST["text"];
  
 $mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");
 mysql_db_query("student","update nodues set total='0' where usn='$usn'") or die("cannot query");
 mysql_db_query("student","update nodues set status='y' where usn='$usn'") or die("cannot query"); 
header("location:/mysite/services/internal/employees/nodues/nodue_pay.php");


?>
