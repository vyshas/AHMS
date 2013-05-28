<?
session_start();
$usrname=$_SESSION['usrname'];
$uid=$_POST["text"]; 
$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");


$res=mysql_db_query("student","select jobid,role from bonafide,employees where bonafide.uid='$uid' and employees.uid='$usrname'") or die("cannot query");
while($arr=mysql_fetch_row($res))
{
  $jobid=$arr[0];
  $role=$arr[1];
}

$res=mysql_db_query("student","insert into ackn values('$jobid','$uid','$usrname')") or die("cannot query");
$res=mysql_db_query("student","update bonafide set status='Waiting for ACKN' where jobid='$jobid'") or die("cannot query");

if($role=='BONAFIDE CERTIFICATE ISSUER BACKUP')
{
 $res=mysql_db_query("student","update bonafide set bstatus='Waiting for ACKN' where jobid='$jobid'") or die("cannot query");  
}

$res=mysql_db_query("student","update history set status='Waiting for ACKN' where jobid='$jobid'") or die("cannot query");  

$res=mysql_db_query("student","select * from history where jobid='$jobid'") or die("Cannot Query");

while($array=mysql_fetch_row($res))
{
 $reqt=$array[1];
 $date=$array[2];
 $time=$array[3];
 $jobid=$array[4];
 $status=$array[5];
}


$res=mysql_db_query("student","insert into history_emp values('$usrname','$reqt','$date','$time','$jobid','$status')") or die("Cannot Query");


header("location:/mysite/services/internal/employees/jobq_bonafide.php");


?>
