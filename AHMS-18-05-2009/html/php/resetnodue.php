<? 
$mysql=mysql_connect("localhost","apache","ahms") or die("cannot connect");

$res=mysql_db_query("student","select usn from studinfo") or die("cannot query1");
while($r=mysql_fetch_row($res))
{
$usn=$r[0];

$aq=mysql_db_query("student","select usn from nodues where usn='$usn'") or die("cannot query1");
$q=mysql_num_rows($aq);
if(!$q)
{
$res1=mysql_db_query("student","insert into nodues values('$usn','','','n')") or die("cannot query2");
}
}

header("location:/mysite/services/internal/employees/nodues/nodue_update.php");
?>
