
<html>
<body bgcolor='honeydew'>

<?
$_SESSION['pageurl']= $_SERVER["REQUEST_URI"];
?>

<?

$name=$_POST["text"];

echo "<font color='brown'>COLLABORATION INFO</font>";

echo "<p> <a href=\"http://localhost/html2pdf/index.php\" target=\"_blank\">GET PDF</a>";
$mysql=mysql_connect("localhost","apache","ahms")or die("cannot connect");
$res=mysql_db_query("student","select * from collaboration where name='$name'") or die("cannot query");
  
ob_start();

while($arr=mysql_fetch_row($res))
{

  echo "Name          : $arr[0]";

  echo "<br>";
  echo "Specializatio : $arr[1]"; 
  echo "<br>";
  
  echo "E-mail         : $arr[4]";
  echo "<br>";
echo  "Phone          :	$arr[5]";
   echo "<br>";
echo  "Address        : $arr[6]";
echo "<br>";
echo "Website	      : $arr[2]";
    echo "<br>";
}

$htmlbody = ob_get_contents();

$_SESSION['content']=$htmlbody;


?>



<form method="POST" action="/mysite/services/internal/employees/class2/external manager/em_jobq_collaboration.php"><br>
<input type="submit" class="style4" value="CLICK HERE TO GO BACK">
</form>
</body>
</html>


