<?
session_start();

$uid=$_POST["usrname"];
$old=$_POST["old"];
$new=$_POST["new"];
$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");

$res=mysql_db_query("student","select psswd from employees where uid='$usrname'");
$r=mysql_fetch_row($res);

foreach($r as $f)
{
 $oldpsswd=$f;
}

if($old!=$oldpsswd)
{
 header("location:/mysite/login/changepsswd_error_emp.php");
 exit;
}

$res=mysql_db_query("student","update employees set psswd='$new' where uid='$usrname'");

header("location:/mysite/login/changepsswd_ackn_emp.php");

?>


