<html>
<body bgcolor='honeydew'>
<?
session_start();
$usrname=$_SESSION['usrname'];

$uid=$_POST["text"]; 

$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");


$res=mysql_db_query("student","select name,usn,sem,branch,dob,addr from studinfo where uid='$uid'") or die("cannot query");


/*foreach($r as $f)
{
  echo $f;
  echo "<br>";
}
  */

while($array=mysql_fetch_row($res))
{
 echo "NAME= ".$array[0]."<br>";
 echo "USN= ".$array[1]."<br>";
 echo "SEM= ".$array[2]."<br>";
 echo "BRANCH= ".$array[3]."<br>";
 echo "DOB= ".$array[4]."<br>";
 echo "ADDRESS= ".$array[5]."<br><br><br><br>";
}





?>
<form method="post" action="/mysite/services/internal/employees/jobq.php">
<input type="submit" value="CLICK HERE TO GO BACK">
</form>
</body>
</html>


