<?

session_register();
session_start();


$usrname=$_POST["Text1"];
$pass=$_POST["Password1"];
$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");
$res=mysql_db_query("student","select * from studinfo where uid='$usrname' and psswd='$pass'");
$count= mysql_num_rows($res);

$_SESSION['usrname']=$usrname;

if($count)
{
 $_SESSION['student_usrname']=$usrname;
while($arr=mysql_fetch_row($res))
{
$f=$arr[0];
}
$res=mysql_db_query("student","insert into logged values('$f')");

  header("location:/mysite/services/internal/myhome.php");
}

else
{
$res=mysql_db_query("student","select * from employees where uid='$usrname' and psswd='$pass'");
$count= mysql_num_rows($res); 

 if($count)
 {
  $_SESSION['employee_usrname']=$usrname;
while($arr=mysql_fetch_row($res))
{
$f=$arr[0];
}
$res=mysql_db_query("student","insert into logged values('$f')");
 header("location:/mysite/services/internal/employees/emp_myhome.php");
 }

}

if($count==0)
{
 header("location:/mysite/login/loginerr.php ");
}

?>


